@extends('layouts.app')

@section('page_title')
    {{ "Registered Users" }}
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Roles
        </div>
        <table class="table-striped table-bordered w-100">
            <thead>
                <tr>
                    <th scope="col">Role</th>
                    <th scope="col">Index</th>
                    <th scope="col">Create</th>
                    <th scope="col">Store</th>
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Update</th>
                    <th scope="col">Destroy</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col"></th>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->role }}</td>
                    <td>
                        @if($role->index == 1)
                            Allowed
                        @else
                            Not Allowed
                        @endif
                    </td>
                    <td>
                        @if($role->create == 1)
                            Allowed
                        @else
                            Not Allowed
                        @endif
                    </td>
                    <td>
                        @if($role->store == 1)
                            Allowed
                        @else
                            Not Allowed
                        @endif
                    </td>
                    <td>
                        @if($role->show == 1)
                            Allowed
                        @else
                            Not Allowed
                        @endif
                    </td>
                    <td>
                        @if($role->edit == 1)
                            Allowed
                        @else
                            Not Allowed
                        @endif
                    </td>
                    <td>
                        @if($role->update == 1)
                            Allowed
                        @else
                            Not Allowed
                        @endif
                    </td>
                    <td>
                        @if($role->destroy == 1)
                            Allowed
                        @else
                            Not Allowed
                        @endif
                    </td>
                    <td>{{ $role->created_at }}</td>
                    <td>{{ $role->updated_at }}</td>
                    <td><a href='/roles/edit/{{ $role->id }}' class="btn btn-success">Edit</a></td>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
