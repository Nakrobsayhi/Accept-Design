@extends('layouts.master_backend')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <!-- ใช่ชื่อตารางของตัวเอง -->
    <h1 class="h3 mb-2 text-gray-800">Employee</h1>

    <a href="{{ route('admin.employee.add') }}" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
        </span>
        <span class="text">เพิ่มข้อมูล</span>
    </a>
    <p></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Employee</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>



                        <tr>
                            <!-- ใส่ชื่อแต่ละคอลัมของตัวเอง -->
                            <th>ID</th>
                            <th>ชื่อ</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th>อีเมล</th>
                            <th>ที่อยู่</th>
                            <th>ตำแหน่ง</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>
                    <tfoot>

                    </tfoot>
                    <tbody>
                        @foreach ($employee as $user)
                        <tr>
                            <!-- ส่วนของข้อมูลของแต่ล่ะตาราง -->
                            <td>{{ $user->id}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone}}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->address}}</td>
                            <td>
                                @if($user->IsAdmin == 1)
                                Admin
                                @else
                                User
                                @endif
                            </td>

                            <td>
                                <a href="{{ url('admin/employee/edit/' . $user->id) }}">
                                    <button type="button" class="btn btn-warning">แก้ไข</button>
                            </td>
                            <td>
                                <a href="{{ url('admin/employee/delete/' . $user->id) }}">
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
