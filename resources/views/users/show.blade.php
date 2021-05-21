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
            @foreach ($usersData as $userDetails)
                <tr>
                    <td>{{ $userDetails->name }}</td>
                    <td>{{ $userDetails->username }}</td>
                    <td>{{ $userDetails->email }}</td>
                    <td>{{ $userDetails->department }}</td>
                    <td>{{ $userDetails->roleNames() }}</td>
                    <td>{{ $userDetails->home }}</td>
                    <td>{{ $userDetails->created_at }}</td>
                    <td>{{ $userDetails->updated_at }}</td>

                    @if(empty($userDetails->roleNames()))
                        <td style="width:150px;"><a href='/users/edit/{{ $userDetails->id }}' class="btn btn-warning"
                                                    style="min-width:120px;">Assign Role(s)</a></td>
                    @else
                        <td style="width:150px;"><a href='/users/edit/{{ $userDetails->id }}' class="btn btn-success"
                                                    style="min-width:120px;">Edit</a></td>
                    @endif

                    @if( $userDetails->id != Auth::User()->id)
                        @if($userDetails->deleted_at == null)

                            <td style="width:150px;"><a href='/users/delete/{{ $userDetails->id }}'
                                                        class="btn btn-danger" style="min-width:120px;">Delete</a></td>
                        @else
                            <td style="width:150px;"><a href='/users/restore/{{ $userDetails->id }}'
                                                        class="btn btn-warning" style="min-width:120px;">Restore</a>
                            </td>
                        @endif
                    @else
                        <td style="width:150px;">&nbsp;</td>
                @endif

            @endforeach
            </tbody>
        </table>
    </div>
@endsection
