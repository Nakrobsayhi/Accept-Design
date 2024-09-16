@extends('layouts.master_backend')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">เพิ่มอัลบัมการจัดงาน</h1>
        <a></a>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-">
                    <form action="{{ url('admin/event/insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">ชื่ออัลบัมการจัดงาน</label><input class="form-control" name="name" type="text" placeholder="กรอกชื่ออัลบัมการจัดงาน">
                        </div>

                        <br>
                        <div class="form-group">
                            <label>รูปภาพอัลบัมการจัดงาน </label>
                            <br>
                            <input type="file" name="image">
                        </div>

                        <br>
                        <button type="submit" value="save" class="btn btn-success">เพิ่มข้อมูล</button>
                        <a href="{{ url('admin/event/index') }}">
                        <button type="button" class="btn btn-danger">ยกเลิก</button>
                    </form>
                </div>
                <!-- Card Body -->

            </div>
        </div>


    </div>

    <!-- Content Row -->


</div>
@endsection
