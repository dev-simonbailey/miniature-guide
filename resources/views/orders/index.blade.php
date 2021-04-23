@extends('layouts.app')

@section('page_title')
    {{ "Orders" }}
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <form name='ordersform' method='POST' action = '/orders/search/'>
                {{csrf_field()}}
                <input type='text' name='ordernumber' id='ordernumber' class="@error('ordernumber') is-invalid @enderror"/>
                @error('ordernumber')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="submit" value="Search" class='btn btn-primary'>
                <a href="{{ route('orders.index') }}" class='btn btn-primary'>Show All</a>
            </form>
            <br />
            <center>
            <table class="table">
            @php
            if(!empty($orders)){
                foreach($orders as $order)
                {
                echo "<tr>";
                echo "<td>".$order->id."</td>";
                echo "<td>".$order->ordernumber."</td>";
                echo "<td>".$order->parts."</td>";
                echo "<td>".$order->created_at."</td>";
                echo "</tr>";
                }
            }
            @endphp
            </table>
            </center>
        </div>
    </div>
@endsection
