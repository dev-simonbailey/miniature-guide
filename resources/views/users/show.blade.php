@extends('layouts.app')

@section('page_title')
    {{ "Registered Users" }}
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Registered Users.
        </div>
        <table class="table-striped table-bordered w-100">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col">Role(s)</th>
                    <th scope="col">Home</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
            </thead>
            <tbody>
                @foreach ($usersdata as $userdetails)
                <tr>
                    <td>{{ $userdetails->name }}</td>
                    <td>{{ $userdetails->username }}</td>
                    <td>{{ $userdetails->email }}</td>
                    <td>{{ $userdetails->department }}</td>
                    @php
                        $usersroles = App\User::find($userdetails->id)->roles;
                        $assigned_roles = '';
                        foreach ($usersroles as $roles) {
                            $assigned_roles .= ucwords(str_replace('_'," ",$roles->name)).", ";
                        }
                        $assigned_roles = rtrim($assigned_roles,", ");
                    @endphp
                    <td>{{$assigned_roles}}</td>
                    <td>{{ $userdetails->home }}</td>
                    <td>{{ $userdetails->created_at }}</td>
                    <td>{{ $userdetails->updated_at }}</td>
                    <td><a href='/users/edit/{{ $userdetails->id }}' class="btn btn-success">Edit</a></td>
                    @if( $userdetails->id != Auth::User()->id)
                        <td><a href='/users/delete/{{ $userdetails->id }}' class="btn btn-danger">Delete</a></td>
                    @else
                    <td><a href='#' class="btn btn-dark" disabled>Delete</a></td>
                    @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
