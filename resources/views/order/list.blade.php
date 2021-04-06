@extends('layouts.app')

@section('page_title')
    {{ "All Orders" }}
@endsection

@section('content')
    <h1>All Orders</h1>
    <div>
        <a class="btn btn-primary" href="{{ route('order.create') }}">Create Order</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Post</th>
                <th>User</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($scratchData as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->post }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                    <td><a href="{{ route('order.show', ['id' => $order->id]) }}">edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
