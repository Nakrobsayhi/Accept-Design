@extends('layouts.master_backend')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">เพิ่มข่าวสารบริษัท</h1>
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
                    <form action="{{ url('admin/news/insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">ชื่อข่าวสารบริษัท</label><input class="form-control" name="name" type="text" placeholder="กรอกชื่อข่าวสารบริษัท">
                        </div>

                        <div class="mb-0">
                            <label for="exampleFormControlTextarea1">รายละเอียดข่าวสารบริษัท</label>
                            <textarea class="form-control" name="detail" rows="3"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>รูปภาพข่าวสารบริษัท </label>
                            <br>
                            <input type="file" name="image">
                        </div>

                        <br>
                        <button type="submit" value="save" class="btn btn-success">เพิ่มข้อมูล</button>
                        <a href="{{ url('admin/news/index') }}">
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
