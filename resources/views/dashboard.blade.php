@extends('layouts.master_backend')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
 <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Employee</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $employee->count() }} คน</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Earnings (Monthly) Card Example -->
 <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Event Gallery</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $event->count() }} ภาพ</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-image fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


 <!-- Earnings (Monthly) Card Example -->
 <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Company News</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $news->count() }} รายการ</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>






            </div>
        </div>

    </div>
@endsection
