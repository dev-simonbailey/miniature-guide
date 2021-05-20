<p class="h2 text-left">Events</p>
<div class="row bg-light border my-auto">
    <div class="col border-bottom text-left mx-5 my-2">
        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row h2">
                    <div class="col">
                        <span class="font-weight-bold">Despatch</span>
                    </div>
                    <div class="col">
                        {{ '{EV_STATUS}' }}
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
                        <span class="font-weight-bold">Load Note:</span>
                    </div>
                    <div class="col">
                        {{ '{EV_LOAD_NOTE}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Carrier:</span>
                    </div>
                    <div class="col">
                        {{ '{EV_CARRIER}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Address:</span>
                    </div>
                    <div class="col">
                        {{ '{EV_ADDR}' }}
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
                        {{ '{EV_DATE_DESPATCHED}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Service:</span>
                    </div>
                    <div class="col">
                        {{ '{EV_SERVICE}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">City:</span>
                    </div>
                    <div class="col">
                        {{ '{EV_CITY}' }}
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
                        {{ '{EV_LAST_UPDATED}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Tracking:</span>
                    </div>
                    <div class="col">
                        {{ '{EV_TRACKING}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">County:</span>
                    </div>
                    <div class="col">
                        {{ '{EV_COUNTY}' }}
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
                        {{ '{EV_UPDATED_BY}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Weight:</span>
                    </div>
                    <div class="col">
                        {{ '{EV_WEIGHT}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Postcode:</span>
                    </div>
                    <div class="col">
                        {{ '{EV_POSTCODE}' }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                &nbsp;
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Boxes:</span>
                    </div>
                    <div class="col">
                        {{ '{EV_BOXES}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Country:</span>
                    </div>
                    <div class="col">
                        {{ '{EV_COUNTRY}' }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <table class="table-striped w-100 mt-5 mb-3 table-bordered">
                    <thead>
                    <tr  class="bg-dark text-white">
                        <th>Line</th>
                        <th>SKU</th>
                        <th>Item</th>
                        <th>QTY Shipped</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for ($i = 0; $i <= 5; $i++)
                        <tr>
                            <td>{{'{EV_TABLE_LINE}'}}</td>
                            <td>{{'{EV_TABLE_SKU}'}}</td>
                            <td>{{'{EV_TABLE_ITEM}'}}</td>
                            <td>{{'{EV_TABLE_SHIPPEd}'}}</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
