@extends('layouts.app')

@section('page_title')
    {{ "Orders Search" }}
@endsection

@section('content')
    <div class="content">
        <a href="/orders/?page={{ $currentpage}}" class='btn btn-primary ml-1' style="float:left;">
            < Back
        </a>
        <div class="title m-b-md my-auto">
            @if(empty($error))
                Order No.: {{ $order['ref_no'] }}
            @else
                ERROR
            @endif
        </div>
        <br />
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
                        <a href="#stock-allocations" class="nav-link" data-toggle="tab">Stock Allocations</a>
                    </li>
                    <li class="nav-item">
                        <a href="#load-notes" class="nav-link" data-toggle="tab">Load Notes</a>
                    </li>
                    <li class="nav-item">
                        <a href="#events" class="nav-link" data-toggle="tab">Events</a>
                    </li>
                    <li class="nav-item">
                        <a href="#comment-history" class="nav-link" data-toggle="tab">Comment History</a>
                    </li>
                    <li class="nav-item">
                        <a href="#freshdesk" class="nav-link" data-toggle="tab">Freshdesk</a>
                    </li>
                </ul>
                <div class="tab-content p-5">
                    <div class="tab-pane fade show active" id="order-details">
                        <p class="h2 text-left">Order Details</p>
                        <div class="row bg-light border my-auto">
                            <div class="col">
                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Order Status:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['status'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Customer:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['customer'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Deliver Complete:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['del_complete'] }}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Sales Rep:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['sales_rep'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Customer Email:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['email'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Order Weight:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['total_weight'] }}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Despatch Site:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['site'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Contact Number:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['phone_number'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Shipping Method:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['method'] }}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Date Created:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['dt_created'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Order Source:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['source'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Delivery Method:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['del_method'] }}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Last Updated:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['dt_created'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Enquiry Method:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['method'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Tracking Codes:</span>
                                            </div>
                                            <div class="col">
                                                {{ $order['in_tracking'] }}
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col border-bottom text-left ml-5 my-2">
                                        &nbsp;
                                    </div>
                                    <div class="col border-bottom text-left my-2">
                                        &nbsp;
                                    </div>
                                    <div class="col border-bottom text-left mr-5 my-2">
                                        &nbsp;
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <span class="h4">Order Totals (GBP):</span>
                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <span class="h4">Invoice Address:</span>
                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <span class="h4">Delivery Address:</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Total Line Value</span>
                                            </div>
                                            <div class="col">
                                                &pound;{{ $order['home_total_order'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Name:</span>
                                            </div>
                                            <div class="col">
                                                {{ '{INVOICE_NAME}'  }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Name</span>
                                            </div>
                                            <div class="col">
                                                {{ 'DELIVERY_NAME' }}
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Total Charges</span>
                                            </div>
                                            <div class="col">
                                                &pound;{{ $order['home_total_charges'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Address:</span>
                                            </div>
                                            <div class="col">
                                                {{ '{INVOICE_ADDR}'  }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Address</span>
                                            </div>
                                            <div class="col">
                                                {{ 'DELIVERY_ADDR' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Total Tax</span>
                                            </div>
                                            <div class="col">
                                                &pound;{{ $order['home_total_tax'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">City:</span>
                                            </div>
                                            <div class="col">
                                                {{ '{INVOICE_CITY}'  }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">City</span>
                                            </div>
                                            <div class="col">
                                                {{ 'DELIVERY_CITY' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Total Discount</span>
                                            </div>
                                            <div class="col">
                                                &pound;{{ $order['home_total_discount'] }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">County:</span>
                                            </div>
                                            <div class="col">
                                                {{ '{INVOICE_COUNTY}'  }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">County</span>
                                            </div>
                                            <div class="col">
                                                {{ 'DELIVERY_COUNTY' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Total Due</span>
                                            </div>
                                            <div class="col">
                                                &pound;{{ $order['home_total_due'] }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Postcode:</span>
                                            </div>
                                            <div class="col">
                                                {{ '{INVOICE_POSTCODE}'  }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Postcode</span>
                                            </div>
                                            <div class="col">
                                                {{ 'DELIVERY_POSTCODE' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Total Order</span>
                                            </div>
                                            <div class="col">
                                                &pound;{{ $order['home_total_order'] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Country:
                                            </div>
                                            <div class="col">
                                                </span> {{ '{INVOICE_COUNTRY}'  }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Country</span>
                                            </div>
                                            <div class="col">
                                                {{ 'DELIVERY_COUNTRY' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col border-bottom text-left mx-5 my-2">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold">Total Paid</span>
                                            </div>
                                            <div class="col">
                                                &pound;{{ $order['home_total_order'] }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-left mx-5 my-2">
                                        &nbsp;
                                    </div>
                                    <div class="col text-left mx-5 my-2">
                                        &nbsp;
                                    </div>
                                </div>

                            </div>
                        </div>
                        <p class="h2 text-left mt-5">Payments</p>
                        <div class="row bg-light border my-auto">
                            <div class="row">
                                <div class="col my-3 mx-2">
                                    Pay Method: {{'{PAYMENT_METHOD}'}} - Value: {{'{PAYMENT_VALUE}'}} - Status: {{'{PAYMENT_STATUS'}} - Last Updated: {{'{PAYMENT_LAST_UPDATED'}} - By: {{'{UPDATED BY}'}}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="stock-allocations">
                        <p>Profile tab content ...</p>
                    </div>
                    <div class="tab-pane fade" id="load-notes">
                        <p>Messages tab content ...</p>
                    </div>
                    <div class="tab-pane fade" id="events">
                        <p>Messages tab content ...</p>
                    </div>
                    <div class="tab-pane fade" id="comment-history">
                        <p>Messages tab content ...</p>
                    </div>
                    <div class="tab-pane fade" id="freshdesk">
                        <p>Messages tab content ...</p>
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
