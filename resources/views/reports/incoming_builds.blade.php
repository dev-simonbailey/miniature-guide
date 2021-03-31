@extends('layouts.app')

@section('page_title')
    {{ config('app.name')}} - {{ "Incoming Builds" }}
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Incoming Builds
        </div>
    </div>
@endsection