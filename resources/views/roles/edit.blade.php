@extends('layouts.app')

@section('page_title')
    {{ "Registered Users" }}
@endsection

@section('content')
    <div class="content">
        <form action="/roles/update/{{ $role_details->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-2 offset-5">
                    <div class="row">
                        <h1>Edit Permissions</h1>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-form-label">{{ __('Role') }}</label>
                            <input
                                id="role"
                                type="text"
                                class="form-control @error('role') is-invalid @enderror"
                                name="role" value="{{ old('role') ?? $role_details->name}}"
                                autocomplete="role"
                                autofocus
                                readonly>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>1
                                </span>
                            @enderror
                    </div>

                    <div class="form-group row">
                        <label for="view" class="col-form-label">{{ __('View') }}</label>
                        <select name="view" id="view" class='form-control'>
                            @can($role_details->name."_view")
                                <option value="0">Not Allowed</option>
                                <option value="1" selected>Allowed</option>
                            @else
                                <option value="0" selected>Not Allowed</option>
                                <option value="1">Allowed</option>
                            @endcan
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="create" class="col-form-label">{{ __('Create') }}</label>
                        <select name="create" id="create" class='form-control'>
                            @can($role_details->name."_create")
                                <option value="0">Not Allowed</option>
                                <option value="1" selected>Allowed</option>
                            @else
                                <option value="0" selected>Not Allowed</option>
                                <option value="1">Allowed</option>
                            @endcan
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="edit" class="col-form-label">{{ __('Edit') }}</label>
                        <select name="edit" id="edit" class='form-control'>
                            @can($role_details->name."_edit")
                                <option value="0">Not Allowed</option>
                                <option value="1" selected>Allowed</option>
                            @else
                                <option value="0" selected>Not Allowed</option>
                                <option value="1">Allowed</option>
                            @endcan
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="show" class="col-form-label">{{ __('Delete') }}</label>
                        <select name="show" id="show" class='form-control'>
                            @can($role_details->name."_delete")
                                <option value="0">Not Allowed</option>
                                <option value="1" selected>Allowed</option>
                            @else
                                <option value="0" selected>Not Allowed</option>
                                <option value="1">Allowed</option>
                            @endcan
                        </select>
                    </div>
                    <div class="row pt-4">
                        <a href="/roles/show" class='btn btn-primary mr-3'>Cancel</a>
                        <button class="btn btn-success">Update Role</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
