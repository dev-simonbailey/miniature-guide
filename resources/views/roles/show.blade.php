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
                    <th scope="col">View</th>
                    <th scope="col">Create</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col" style="border: 1px solid Transparent!important;"></th>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->label }}</td>
                    @can($role->name.'_view')
                        <td class="bg-success text-white">Allowed</td>
                    @else
                        <td class="bg-danger text-white">Not Allowed</td>
                    @endcan
                    @can($role->name.'_create')
                        <td class="bg-success text-white">Allowed</td>
                    @else
                        <td class="bg-danger text-white">Not Allowed</td>
                    @endcan
                    @can($role->name.'_edit')
                        <td class="bg-success text-white">Allowed</td>
                    @else
                        <td class="bg-danger text-white">Not Allowed</td>
                    @endcan
                    @can($role->name.'_delete')
                        <td class="bg-success text-white">Allowed</td>
                    @else
                        <td class="bg-danger text-white">Not Allowed</td>
                    @endcan
                    <td style="width:150px;border: 1px solid Transparent!important;background-color: #ffffff"><a href='/roles/edit/{{ $role->id }}' class="btn btn-success" style="min-width:120px;">Edit</a></td>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
