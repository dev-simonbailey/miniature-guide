@extends('layouts.app')

@section('page_title')
    {{ config('app.name')}} - {{ "Welcome" }}
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Welcome to Bluesky
        </div>
    </div>
@endsection
