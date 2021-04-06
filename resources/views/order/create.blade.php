@extends('layouts.app')

@section('page_title')
    {{ "Create Order" }}
@endsection

@section('content')
    <h1>Create Orders</h1>
    <form name='orders-create' method='POST' action='{{ route('order.store') }}'>
        {{csrf_field()}}
        <label for="post">Post</label>
        <input type='text' name='post' class="@error('post') is-invalid @enderror" />
        @error('post')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" value="Submit">
    </form>
@endsection
