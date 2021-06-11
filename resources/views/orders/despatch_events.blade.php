
@foreach($despatchEvents as $despatchEvent)
<div class="row bg-light my-auto leftGreen">
    <div class="col">
        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <p class="h2 text-left">Despatch Completed</p>
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                       &nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Load Note:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['load_note'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Carrier:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['carrier_descr'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Address:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['address'] }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Date Despatched:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['date_delivered'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Service:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['del_method'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">City:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['city'] }}
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
                        {{ $despatchEvent['last_updated'] }}
                    </div>
                </div>
            </div>
            {{-- TODO: create loop to stack all the tracking codes as links --}}
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Tracking:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['carrier_ref'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">County:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['county'] }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Updated By:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['last_upd_user'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Weight:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['weight'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Postcode:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['postcode'] }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">&nbsp;</span>
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Boxes:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['boxes'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Country:</span>
                    </div>
                    <div class="col">
                        {{ $despatchEvent['country'] }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-center w-100">
                <table class="table-striped w-100 mt-5 mb-3 table-bordered" style="display: none" id="{{ $despatchEvent['load_note'] }}_despatch_event_table">
                    <thead>
                    <tr class="bg-dark text-white">
                        <th>Line</th>
                        <th>SKU</th>
                        <th>Item</th>
                        <th>QTY Shipped</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($despatchEvent['lines'] as $despatchLine)
                        <tr>
                            <td>{{ $despatchLine['line'] }}</td>
                            <td>{{ $despatchLine['part'] }}</td>
                            <td>{{ $despatchLine['item'] }}</td>
                            <td>{{ $despatchLine['qty_shipped'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br />
                <a id="{{ $despatchEvent['load_note'] }}_despatch_event_button" href="javascript:showHide('{{ $despatchEvent['load_note'] }}_despatch_event')" class="btn btn-primary mb-2 w-25 mx-auto">Show Details</a>
            </div>
        </div>

    </div>
</div>
@endforeach

