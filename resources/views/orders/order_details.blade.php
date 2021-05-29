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
                        @foreach ($tracking as $item)
                            {{ $item['carrier_ref'] }}
                        @endforeach
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
                        {{ $invoiceAddress['name']  }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Name</span>
                    </div>
                    <div class="col">
                        {{ $deliveryAddress['name'] }}
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
                        {{ $invoiceAddress['address']  }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Address</span>
                    </div>
                    <div class="col">
                        {{ $deliveryAddress['address'] }}
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
                        {{ $invoiceAddress['city']  }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">City</span>
                    </div>
                    <div class="col">
                        {{ $deliveryAddress['city'] }}
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
                        {{ $invoiceAddress['county']  }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">County</span>
                    </div>
                    <div class="col">
                        {{ $deliveryAddress['county'] }}
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
                        {{ $invoiceAddress['postcode']  }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Postcode</span>
                    </div>
                    <div class="col">
                        {{ $deliveryAddress['postcode'] }}
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
                        <span class="font-weight-bold">Country:</span>
                    </div>
                    <div class="col">
                        {{ $invoiceAddress['country']  }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Country</span>
                    </div>
                    <div class="col">
                        {{ $deliveryAddress['country'] }}
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

