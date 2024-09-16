@extends('layouts.frontend')

@section('content')

<!-- Container for items -->
<div class="item-container">
    <div class="item-card">
        <!-- Background image div -->
        <div class="item-content">
            <div class="item-name">{{ $event->name }}</div>
            <div class="item-image">
                <img src="{{ asset('backend/product/' . $event->image) }}" alt="{{ $event->name }}">
            </div>
            <div class="item-description">{{ $event->description }}</div>
        </div>
    </div>
</div>

@endsection
