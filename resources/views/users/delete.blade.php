@extends('layouts.app')

@section('page_title')
    {{ "Registered Users" }}
@endsection

@section('content')
    <div class="content">
        @foreach ($details as $detail)
        <form action="/users/destroy/{{ $detail->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('DELETE')
            <div class="row">
                <div class="col-2 offset-5">
                    <div class="row">
                        <h1>Delete User</h1>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-form-label">{{ __('Name') }}</label>
                            <input
                                id="name"
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') ?? $detail->name}}"
                                autocomplete="name"
                                autofocus
                                readonly>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-form-label">{{ __('Username') }}</label>
                            <input
                                id="username"
                                type="text"
                                class="form-control @error('username') is-invalid @enderror"
                                name="username" value="{{ old('username') ?? $detail->username}}"
                                autocomplete="username"
                                autofocus
                                readonly>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-form-label">{{ __('Email') }}</label>
                            <input
                                id="email"
                                type="text"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') ?? $detail->email}}"
                                autocomplete="email"
                                autofocus
                                readonly>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group row">
                        <label for="department" class="col-form-label">{{ __('Department') }}</label>
                            <input
                                id="department"
                                type="text"
                                class="form-control @error('department') is-invalid @enderror"
                                name="department" value="{{ old('department') ?? $detail->department}}"
                                autocomplete="department"
                                autofocus
                                readonly>
                            @error('department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-form-label">{{ __('Role') }}</label>
                            <input
                                id="role"
                                type="text"
                                class="form-control @error('role') is-invalid @enderror"
                                name="role" value="{{ old('role') ?? $detail->role}}"
                                autocomplete="role"
                                autofocus
                                readonly>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group row">
                        <label for="home" class="col-form-label">{{ __('Home') }}</label>
                            <input
                                id="home"
                                type="text"
                                class="form-control @error('home') is-invalid @enderror"
                                name="home" value="{{ old('home') ?? $detail->home}}"
                                autocomplete="role"
                                autofocus
                                readonly>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="row pt-4">
                        <a href="/users" class='btn btn-primary mr-3'>Cancel</a>
                        <button class="btn btn-danger">Delete User</button>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>
@endsection
