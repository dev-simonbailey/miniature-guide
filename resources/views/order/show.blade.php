@extends('layouts.app')

@section('page_title')
    {{ "Order Details" }}
@endsection

@section('content')
    <h1>Show Order ID {{ $order->id }} Details </h1>
    <p>{{ $order->post }}</p>
    <p>Created by user {{ $order->user->name }}</p>
    <a class="btn btn-primary" href="{{ route('order.edit', ['id' => $order->id ]) }}">Edit</a>
@endsection
