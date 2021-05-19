@extends('layouts.app')

@section('page_title')
    {{ "Orders" }}
@endsection

@section('content')
    <div class="content">
        <div class="h2 m-b-md">
            Search for Order
        </div>
        <div class="w-50 border border-dark bg-light mx-auto p-5">
        <form name='ordersform' method='post' action = '/orders/details'>
            {{csrf_field()}}
            <label for="ordernumber" class="h5 mr-2">Order Number:</label>
            <input type='text' name='ordernumber' id='ordernumber' class="@error('ordernumber') is-invalid @enderror w-25"/>
            <br />
            <input type="submit" value="Next" class='btn btn-primary mt-3 w-50'>

            @error('ordernumber')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </form>
        </div>
        {{--
        <br />
        <table class="table-striped table-bordered w-100">
            <thead>
            <tr>
                <th scope="col">Ref No</th>
                <th scope="col">Customer</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Project</th>
                <th scope="col">bike Number</th>
                <th scope="col">Bike Count</th>
                <th scope="col">Bike</th>
                <th scope="col">Status</th>
                <th scope="col">Date Created</th>
                <th scope="col">Last Updated</th>
            </tr>
            </thead>
            <tbody>
            @if(!empty($orders))
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order['ref_no'] }}</td>
                        <td>{{ $order['customer'] }}</td>
                        <td>{{ $order['email'] }}</td>
                        <td>{{ $order['phone_number'] }}</td>
                        <td>{{ $order['project'] }}</td>
                        <td>{{ $order['bike_number'] }}</td>
                        <td>{{ $order['bike_count'] }}</td>
                        <td>{{ $order['bike'] }}</td>
                        <td>{{ $order['status'] }}</td>
                        <td>{{ $order['dt_created'] }}</td>
                        <td>{{ $order['last_updated'] }}</td>
                        <td>
                            <form name='ordersform' method='post' action = '/orders/details'>
                                {{csrf_field()}}
                                <input type='hidden' value='{{ $order['ref_no'] }}' name='ordernumber' id='ordernumber'/>
                                <input type='hidden' value='{{ $currentpage }}' name='currentpage' id='currentpage'/>
                                <input type="submit" value="View" class='btn btn-primary'>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <br />
        <div class="row">
            <div class="col-12 d-flex justify-content-center text-center">
                {{ $orders->links() }}
            </div>
        </div>
    --}}
    </div>
@endsection
