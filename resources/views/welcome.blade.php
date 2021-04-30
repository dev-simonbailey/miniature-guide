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
            <br />
            <span>{{ $role }}</span>
            <br />
            @can('pdi_edit')
                <a href="#">PDI edit</a>
                <br />
            @endcan
            @can('pdi_view')
                <a href="#">PDI view</a>
                <br />
            @endcan
            @can('admin')
                <a href="#">Add Admin User</a>
                <br />
            @endcan
            @can('dkfndgkndgin')
                <a href="#">Doesn't exist</a>
            @endcan
        </div>
    </div>
@endsection
