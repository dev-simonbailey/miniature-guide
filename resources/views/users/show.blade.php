@extends('layouts.app')

@section('page_title')
    {{ "Registered Users" }}
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Users
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
                    <td>{{ $userdetails->roleNames() }}</td>
                    <td>{{ $userdetails->home }}</td>
                    <td>{{ $userdetails->created_at }}</td>
                    <td>{{ $userdetails->updated_at }}</td>

                    @if(empty($userdetails->roleNames()))
                        <td style="width:150px;"><a href='/users/edit/{{ $userdetails->id }}' class="btn btn-warning" style="min-width:120px;">Assign Role(s)</a></td>
                    @else
                        <td style="width:150px;"><a href='/users/edit/{{ $userdetails->id }}' class="btn btn-success" style="min-width:120px;">Edit</a></td>
                    @endif

                    @if( $userdetails->id != Auth::User()->id)
                        @if($userdetails->deleted_at == null)

                            <td style="width:150px;"><a href='/users/delete/{{ $userdetails->id }}' class="btn btn-danger" style="min-width:120px;">Delete</a></td>
                        @else
                            <td style="width:150px;"><a href='/users/restore/{{ $userdetails->id }}' class="btn btn-warning" style="min-width:120px;">Restore</a></td>
                        @endif
                    @else
                    <td style="width:150px;">&nbsp;</td>
                    @endif

            @endforeach
            </tbody>
        </table>
    </div>
@endsection
