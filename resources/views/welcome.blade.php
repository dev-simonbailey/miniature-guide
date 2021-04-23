@extends('layouts.app')

@section('page_title')
    {{ "Welcome" }}
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Welcome to Bluesky
            <br />
            {{ auth()->user()->name }}
        </div>
    </div>
@endsection
