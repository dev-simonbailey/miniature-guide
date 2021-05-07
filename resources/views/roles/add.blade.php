@extends('layouts.app')

@section('page_title')
    {{ "Registered Users" }}
@endsection

@section('content')
    <div class="content">
        <form action="/roles/store" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-2 offset-5">
                    <div class="row">
                        <h1>Create Role</h1>
                    </div>
                    <div class="form-group row">
                        <label for="role-name" class="col-form-label">{{ __('Role Name') }}</label>
                            <input
                                id="role-name"
                                type="text"
                                class="form-control @error('role-name') is-invalid @enderror"
                                name="role-name" value=""
                                autocomplete="role-name"
                                autofocus>
                            @error('role-name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group row">
                        <label for="role-label" class="col-form-label">{{ __('Role Label') }}</label>
                        <input
                            id="role-label"
                            type="text"
                            class="form-control @error('role-label') is-invalid @enderror"
                            name="role-label" value=""
                            autocomplete="role-label"
                            autofocus>
                        @error('role-label')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="view" class="col-form-label">{{ __('View') }}</label>
                        <select name="view" id="view" class='form-control'>
                            <option value="0">Not Allowed</option>
                            <option value="1" selected>Allowed</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="create" class="col-form-label">{{ __('Create') }}</label>
                        <select name="create" id="create" class='form-control'>
                            <option value="0" selected>Not Allowed</option>
                            <option value="1">Allowed</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="edit" class="col-form-label">{{ __('Edit') }}</label>
                        <select name="edit" id="edit" class='form-control'>
                            <option value="0" selected>Not Allowed</option>
                            <option value="1">Allowed</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="delete" class="col-form-label">{{ __('Delete') }}</label>
                        <select name="delete" id="delete" class='form-control'>
                            <option value="0" selected>Not Allowed</option>
                            <option value="1">Allowed</option>
                        </select>
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-success">Add Role</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
