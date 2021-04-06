@extends('layouts.app')

@section('page_title')
    {{ "Search Orders" }}
@endsection

@section('content')
<div class="title m-b-md">
    <form name='orders-form' method='POST' action='{{ route('search.orders') }}'>
        {{csrf_field()}}
        <input type='number' name='order_number'>
        <input type="submit" value="Submit">
    </form>
    <br />
    <table>
        @foreach($scratchdata as $scratch)
            <tr>
            <td>{{ $scratch->scratch_id }}</td>
            <td>{{ $scratch->post }}</td>
            <td>{{ $scratch->user_id }}</td>
            <td>{{ $scratch->created_at }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
