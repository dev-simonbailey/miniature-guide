
@foreach($pdiEvents as $pdiEvent)
<div class="row bg-light my-auto leftGreen">
    <div class="col">
        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <p class="h2 text-left">Pre Delivery Inspection</p>
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
                        <span class="font-weight-bold">Order Number:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['ref_no'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Date PDI'd:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['pdi_date'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Mechanic:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['mechanic'] }}
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
                        {{ $pdiEvent['load_note'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Days Since Ordered:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['days_taken'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Returned to Mechanic:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['returned'] }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Load Note Line:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['line'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Fast Track:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['fast_track'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Return Notes:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['returned_notes'] }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">SKU:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['line'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Processed as Fast Track:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['fast_track'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">PDI Notes:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['pdi_notes'] }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Bike:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['bike'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Last Updated:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['last_updated'] }}
                    </div>
                </div>
            </div>
            <div class="col text-left mx-5 my-2">
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
                        <span class="font-weight-bold">Customer Name:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['name'] }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Updated By:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['last_updated_by'] }}
                    </div>
                </div>
            </div>
            <div class="col text-left mx-5 my-2">
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
                        <span class="font-weight-bold">Serial Number:</span>
                    </div>
                    <div class="col">
                        {{ $pdiEvent['serial_number'] }}
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
            <div class="col text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

