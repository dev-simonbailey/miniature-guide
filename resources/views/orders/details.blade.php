@extends('layouts.app')

@section('page_title')
    {{ 'Orders Search' }}
@endsection

@section('content')
    <div class="content">
        {{-- USE IF WE DECIDE TO LIST VIEW INITIAL ORDERS VIEW
        <a href="/orders/?page={{ $currentPage}}" class='btn btn-primary ml-1' style="float:left;">
        --}}
        <a href="/orders" class='btn btn-primary ml-1' style="float:left;">
            < Back
        </a>

        <div class="title m-b-md my-auto">
            @if(empty($error))
                Order No.: {{ $order['ref_no'] }}
            @else
                ERROR
            @endif
        </div>
        <br/>
        @if(!empty($error))
            <div class="alert alert-danger">
                <div class="row">
                    <div class="col">ERROR: {{ $error['message']}}: {{ $error['data']['ID'] }}</div>
                </div>
            </div>
        @else
            <div class="w-100">
                <ul class="nav nav-pills ml-4">
                    <li class="nav-item">
                        <a href="#order-details" class="nav-link active" data-toggle="tab">Order Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="#stock-allocations" class="nav-link" data-toggle="tab">Stock Allocations <span
                                class="badge badge-primary">34</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#load-notes" class="nav-link" data-toggle="tab">Load Notes <span
                                class="badge badge-primary">4</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#events" class="nav-link" data-toggle="tab">Events <span
                                class="badge badge-primary">12</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#comment-history" class="nav-link" data-toggle="tab">Comment History <span
                                class="badge badge-primary">3</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#freshdesk" class="nav-link" data-toggle="tab">Freshdesk <span
                                class="badge badge-primary">{{ count($freshDeskData) }}</span></a>
                    </li>
                </ul>
                <div class="tab-content p-5">
                    <div class="tab-pane fade show active" id="order-details">
                        @include('orders.order_details')
                        @include('orders.payment_details')
                        @include('orders.order_line_details')
                    </div>

                    <div class="tab-pane fade" id="stock-allocations">
                        @include('orders.stock_allocations')
                    </div>
                    <div class="tab-pane fade" id="load-notes">
                        @include('orders.load_notes')
                    </div>
                    <div class="tab-pane fade" id="events">
                        @include('orders.events')
                    </div>
                    <div class="tab-pane fade" id="comment-history">
                        @include('orders.comment_history')
                    </div>
                    <div class="tab-pane fade" id="freshdesk">
                        @include('orders.freshdesk')
                    </div>
                </div>


                {{--

                <table class="table-striped table-bordered w-50 my-auto" style="margin: 0 auto;">
                    <tbody>
                    <tr>
                        <td class="text-left">Ref No</td>
                        <td class="text-left">{{ $order['ref_no'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Customer</td>
                        <td class="text-left">{{ $order['customer'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Email</td>
                        <td class="text-left">{{ $order['email'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Phone Number</td>
                        <td class="text-left">{{ $order['phone_number'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Project</td>
                        <td class="text-left">{{ $order['project'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">bike Number</td>
                        <td class="text-left">{{ $order['bike_number'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Bike Count</td>
                        <td class="text-left">{{ $order['bike_count'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Bike</td>
                        <td class="text-left">{{ $order['bike'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Status</td>
                        <td class="text-left">{{ $order['status'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Date Created</td>
                        <td class="text-left">{{ $order['dt_created'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Last Updated</td>
                        <td class="text-left">{{ $order['last_updated'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Color</td>
                        <td class="text-left">{{ $order['color'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Carrier</td>
                        <td class="text-left">{{ $order['carrier'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Del Method</td>
                        <td class="text-left">{{ $order['del_method'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Load Note</td>
                        <td class="text-left">{{ $order['load_note'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">In Del Method</td>
                        <td class="text-left">{{ $order['in_del_method'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Inv Addr Ref</td>
                        <td class="text-left">{{ $order['inv_addr_ref'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Del Addr Ref</td>
                        <td class="text-left">{{ $order['del_addr_ref'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">In Carrier</td>
                        <td class="text-left">{{ $order['in_carrier'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">In Tracking</td>
                        <td class="text-left">{{ $order['in_tracking'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Sales Rep</td>
                        <td class="text-left">{{ $order['sales_rep'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Site</td>
                        <td class="text-left">{{ $order['site'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Currency</td>
                        <td class="text-left">{{ $order['currency'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Del Complete</td>
                        <td class="text-left">{{ $order['del_complete'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Source</td>
                        <td class="text-left">{{ $order['source'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Method</td>
                        <td class="text-left">{{ $order['method'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Total Line Value</td>
                        <td class="text-left">{{$currencysymbol}}{{ $order['total_line_value'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Total Charges</td>
                        <td class="text-left">{{$currencysymbol}}{{ $order['total_charges'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Total Tax</td>
                        <td class="text-left">{{$currencysymbol}}{{ $order['total_tax'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Total Discount</td>
                        <td class="text-left">{{$currencysymbol}}{{ $order['total_discount'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Total Due</td>
                        <td class="text-left">{{$currencysymbol}}{{ $order['total_due'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Total Paid</td>
                        <td class="text-left">{{$currencysymbol}}{{ $order['total_paid'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Total Order</td>
                        <td class="text-left">{{$currencysymbol}}{{ $order['total_order'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Home Total Line Value</td>
                        <td class="text-left">£{{ $order['total_line_value'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Home Total Charges</td>
                        <td class="text-left">£{{ $order['home_total_charges'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Home Total Tax</td>
                        <td class="text-left">£{{ $order['home_total_tax'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Home Total Discount</td>
                        <td class="text-left">£{{ $order['home_total_discount'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Home Total Due</td>
                        <td class="text-left">£{{ $order['home_total_due'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Home Total Paid</td>
                        <td class="text-left">£{{ $order['home_total_paid'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Home Total Order</td>
                        <td class="text-left">£{{ $order['home_total_order'] }}</td>
                    </tr>
                    <tr>
                        <td class="text-left">Total Weight</td>
                        <td class="text-left">{{ $order['total_weight'] }}KG</td>
                    </tr>
                    </tbody>
                </table>
                --}}
                @endif
            </div>
@endsection
