@extends('layouts.app')

@section('page_title')
    {{ "Order Edit" }}
@endsection

@section('content')
    <h1>Edit Order ID {{ $order->id }} Details </h1>
    <form method="POST" action="{{ route('order.update', ['id' => $order->id ]) }}">
        @method('PUT')
        {{ csrf_field() }}
        <label for="post">Post</label>
        <input id="post" name="post" value="{{ $order->post }}" class="@error('post') is-invalid @enderror"  />
        @error('post')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <p>Created by user {{ $order->user->name }}</p>
        <input type="submit" value="Update" />
    </form>
@endsection
