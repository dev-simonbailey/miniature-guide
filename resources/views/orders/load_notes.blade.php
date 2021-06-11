<p class="h2 text-left">Load Notes</p>
@foreach($loadNoteHeader as $loadNoteData)
<div class="row bg-light mx-auto mb-5 {{ $loadNoteData['color'] }}">
    <div class="col text-left mx-5 my-2">
        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row h2">
                    <div class="col">
                        <span class="font-weight-bold">{{ $loadNoteData['load_note'] }}</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['status'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                &nbsp;
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Print Run ID:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['run_id'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Invoice Address Ref:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['inv_addr_ref'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Date Due:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['date_due'] }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Load Note Type:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['load_type'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Delivery Address Ref:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['del_addr_ref'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Date Printed:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['date_printed'] }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Deliver Complete:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['date_delivered'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Carrier:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['carrier'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Last Printed:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['date_last_printed'] }}
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
                        {{ $loadNoteData['dt_created'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Delivery Method:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['del_method'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
            </div>
        </div>
        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Last Updated By:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['last_upd_user'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Boxes:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['boxes'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Tracking Codes:</span>
                    </div>
                    <div class="col">
                        {{ $loadNoteData['carrier_ref'] }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center w-100">
                <table class="table-striped w-100 mt-5 mb-3 table-bordered" style="display: none" id="{{ $loadNoteData['load_note'] }}_load_note_table">
                    <thead>
                    <tr class="bg-dark text-white">
                        <th>Type</th>
                        <th>Line</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>SKU</th>
                        <th>QTY</th>
                        <th>QTY Issued</th>
                        <th>QTY Shipped</th>
                        <th>QTY Discarded</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loadNoteData['lines'] as $loadNoteLine)
                        <tr>
                            <td>{{ $loadNoteLine['type'] }}</td>
                            <td>{{ $loadNoteLine['line'] }}</td>
                            <td>{{ $loadNoteLine['status'] }}</td>
                            <td>{{ $loadNoteLine['line_descr'] }}</td>
                            <td>{{ $loadNoteLine['part'] }}</td>
                            <td>{{ $loadNoteLine['qty'] }}</td>
                            <td>{{ $loadNoteLine['qty_iss'] }}</td>
                            <td>{{ $loadNoteLine['qty_shipped'] }}</td>
                            <td>{{ $loadNoteLine['qty_discard'] }}</td>
                        </tr>
                        @foreach($loadNoteLine['items'] as $loadNoteItem)
                            <tr>
                                <td>&nbsp;</td>
                                <td>{{ $loadNoteItem['line'] }}</td>
                                <td>{{ $loadNoteItem['status'] }}</td>
                                <td>{{ $loadNoteItem['component_descr'] }}</td>
                                <td>{{ $loadNoteItem['part'] }}</td>
                                <td>{{ $loadNoteItem['qty'] }}</td>
                                <td>{{ $loadNoteItem['qty_iss'] }}</td>
                                <td>{{ $loadNoteItem['qty_shipped'] }}</td>
                                <td>{{ $loadNoteItem['qty_discard'] }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
                <br />
                <a id="{{ $loadNoteData['load_note'] }}_load_note_button" href="javascript:showHide('{{ $loadNoteData['load_note'] }}_load_note')" class="btn btn-primary mb-2 w-25 mx-auto">Show Details</a>
            </div>
        </div>
    </div>
</div>
@endforeach
