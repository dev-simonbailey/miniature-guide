@extends('layouts.app')

@section('page_title')
    {{ "Orders" }}
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Authors
        </div>
        <form name='ordersform' method='post' action = '/orders/show'>
            {{csrf_field()}}
            <input type='text' name='ordernumber' id='ordernumber' class="@error('ordernumber') is-invalid @enderror"/>
            @error('ordernumber')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="submit" value="Search" class='btn btn-primary'>
            <a href="{{ route('orders.index') }}" class='btn btn-primary'>Show All</a>
        </form>
        <br />
        @if(!empty($error))
            <div class="alert alert-danger">
                <div class="row">
                    <div class="col">ERROR: {{ $error['message']}}: {{ $error['data']['ID'] }}</div>
                </div>
            </div>
        @else
        <table class="table-striped table-bordered w-100">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Github</th>
                <th scope="col">Twitter</th>
                <th scope="col">Location</th>
                <th scope="col">Latest Article Published</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $author['name']}}</td>
                    <td>{{ $author['email']}}</td>
                    <td>{{ $author['github'] }}</td>
                    <td>{{ $author['twitter'] }}</td>
                    <td>{{ $author['location'] }}</td>
                    <td>{{ $author['latest_article_published'] }}</td>
                </tr>
            </tbody>
        </table>
        @endif
    </div>
@endsection
