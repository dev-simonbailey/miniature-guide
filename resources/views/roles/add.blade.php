@extends('layouts.app')

@section('page_title')
    {{ "Registered Users" }}
@endsection

@section('content')
    <div class="content">
        <form action="/roles/create" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-2 offset-5">
                    <div class="row">
                        <h1>Create Role</h1>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-form-label">{{ __('Role') }}</label>
                            <input
                                id="role"
                                type="text"
                                class="form-control @error('role') is-invalid @enderror"
                                name="role" value=""
                                autocomplete="role"
                                autofocus>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group row">
                        <label for="index" class="col-form-label">{{ __('Index') }}</label>
                        <select name="index" id="index" class='form-control'>
                            <option value="0" selected>Not Allowed</option>
                            <option value="1">Allowed</option>
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
                        <label for="store" class="col-form-label">{{ __('Store') }}</label>
                        <select name="store" id="store" class='form-control'>
                            <option value="0" selected>Not Allowed</option>
                            <option value="1">Allowed</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="show" class="col-form-label">{{ __('Show') }}</label>
                        <select name="show" id="show" class='form-control'>
                            <option value="0" selected>Not Allowed</option>
                            <option value="1">Allowed</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="edit" class="col-form-label">{{ __('Edit') }}</label>
                        <select name="edit" id="index" class='form-control'>
                            <option value="0" selected>Not Allowed</option>
                            <option value="1">Allowed</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="update" class="col-form-label">{{ __('Update') }}</label>
                        <select name="update" id="index" class='form-control'>
                            <option value="0" selected>Not Allowed</option>
                            <option value="1">Allowed</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="destroy" class="col-form-label">{{ __('Destroy') }}</label>
                        <select name="destroy" id="index" class='form-control'>
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
