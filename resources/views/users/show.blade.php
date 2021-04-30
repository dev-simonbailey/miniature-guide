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
                    <th scope="col">Role</th>
                    <th scope="col">Home</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->department }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->home }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td><a href='/users/edit/{{ $user->id }}' class="btn btn-success">Edit</a></td>
                    @if( $user->role != "admin")
                        <td><a href='/users/delete/{{ $user->id }}' class="btn btn-danger">Delete</a></td>
                    @else
                    <td><a href='#' class="btn btn-dark" disabled>Delete</a></td>
                    @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
