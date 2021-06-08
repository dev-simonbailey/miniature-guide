@extends('layouts.app')

@section('page_title')
    {{ "Welcome" }}
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Welcome to Bluesky
            <br/>
            {{ auth()->user()->name }}
            <br/>
            {{--
            @if(Auth::User()->hasRole('admin'))
                <a href="#">Add Admin User</a>
                <br />
            @endif
            @if(Auth::User()->hasRole('sales'))
                <a href="#">Add Sales User</a>
                <br />
            @endif
            @if(Auth::User()->hasRole('mechanic'))
                <a href="#">Add Mechanic User</a>
                <br />
            @endif
            @if(Auth::User()->hasRole('pdi'))
                <a href="#">Add Admin User</a>
                <br />
            @endif
            @if(Auth::User()->hasRole('mechanic_manager'))
                <a href="#">Add Mechanic Manager User</a>
                <br />
            @endif
            @if(Auth::User()->hasRole(''))
                <a href="#">This user has no role!!!</a>
                <br />
            @endif
            --}}
        </div>
    </div>
@endsection
