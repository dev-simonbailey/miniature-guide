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
                                class="badge badge-primary">{{ count($stockAllocations) }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#load-notes" class="nav-link" data-toggle="tab">Load Notes <span
                                class="badge badge-primary">{{ count($loadNoteHeader) }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#events" class="nav-link" data-toggle="tab">Events <span
                                class="badge badge-primary">{{ $eventsCount }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#comment-history" class="nav-link" data-toggle="tab">Comment History <span
                                class="badge badge-primary">{{ count($comments) }}</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#freshdesk" class="nav-link" data-toggle="tab">Freshdesk <span
                                class="badge badge-primary">{{ count($freshDeskData) }}</span></a>
                    </li>
                </ul>
                <div class="tab-content p-5">
                    <div class="tab-pane fade show active" id="order-details">
                        @if(!empty($holdReasons))
                            @include('orders.hold_reasons')
                        @endif
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
                @endif
            </div>
@endsection
