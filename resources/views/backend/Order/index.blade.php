@extends('layouts.master_backend')
@section('con')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Order Table</h4>
                    <a href="{{ route('admin.order.createform') }}"><button type="submit" class="btn">Add
                            Order</button></a>
                            {{ $order->links('pagination::bootstrap-5') }}
                </div>
            </div>
            <div class="card-body">
                <div class="order-container">

                    @foreach ($order as $o)

                        <div class="order-card">
                            <!-- Left Side -->
                            <div class="order-details">
                                <h3 class="order-id">Order #{{ $order->firstItem() + $loop->index }}</h3>
                                <p><strong>Name:</strong> {{ $o->name }}</p>
                                <p><strong>Phone:</strong> {{ $o->phone }}</p>
                                <p><strong>Address:</strong> {{ $o->address }}</p>
                                <p><strong>Product:</strong>
                                    @if($o->pro)
                                        {{ $o->pro->name }} <strong>×1</strong>
                                    @else
                                        Product Not Available
                                    @endif
                                </p>
                                <p class="status {{ ($o->status) }}"><strong>Status:</strong> {{ $o->status }}</p>
                                <div class="interact-order">
                                    <a href="{{ url('admin/order/edit/' . $o->orders_id) }}">
                                        <button class="btn btn-success btn-icon btn-sm" data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-edit" aria-hidden="true"></i></button></a>
                                    <a href="{{ url('admin/order/delete/' . $o->orders_id) }}">
                                        <button class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" title="Trash">
                                            <i class="fa fa-times" aria-hidden="true"></i></button></a>
                                </div>
                            </div>
                            <!-- Right Side -->
                            <div class="product-image">
                                @if($o->pro && $o->pro->image)
                                    <img src="{{ asset('backend/product/' . $o->pro->image) }}" alt="{{ $o->pro->name }}">
                                @else
                                    Image Not Available
                                @endif
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
