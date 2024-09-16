@extends('layouts.master_backend')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Company News</h1>

    <a href="{{ route('admin.news.add') }}" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
        </span>
        <span class="text">เพิ่มข้อมูล</span>
    </a>
<p></p>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Company News</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!-- ใส่ชื่อแต่ละคอลัมของตัวเอง -->
                        <th>ID</th>
                        <th>ชื่อ</th>
                        <th>รายละเอียด</th>
                        <th>รูปภาพข่าวสาร</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                    @foreach ($news as $item)
                        <!-- ส่วนของข้อมูลของแต่ล่ะตาราง -->
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->detail }}</td>
                        <td>
                        <img src="{{ asset('backend/product/'.$item->image) }}" alt="Image" width="300px" height="auto">
                        </td>
                        <td>
                        <a href="{{ url('admin/news/edit/' . $item->id) }}">
                            <button type="button" class="btn btn-warning">แก้ไข</button></a>
                        </td>
                        <td>
                        <a href="{{ url('admin/news/delete/' . $item->id) }}">
                            <button type="button" class="btn btn-danger">ลบ</button>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection
