@extends('layouts.app')

@section('page_title')
    {{ "Search Orders" }}
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <form name='orders-form' method='POST' action = '/search/orders/'>
                {{csrf_field()}}
                <input type='text' name='order_number'>
                <input type="submit" value="Submit">
            </form>
            <br />
            <center>
            <table border='1' cellpadding='5' cellspacing='5'>
            @php
            if(!empty($scratchdata)){
                foreach($scratchdata as $data)
                {
                echo "<tr>";
                echo "<td>".$data->id."</td>";
                echo "<td>".$data->post."</td>";
                echo "<td>".$data->user."</td>";
                echo "<td>".$data->created_at."</td>";
                echo "</tr>";
                }
            }
            @endphp
            </table>
            </center>
        </div>
    </div>
@endsection