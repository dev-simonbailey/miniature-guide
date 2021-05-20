<p class="h2 text-left">Load Notes</p>
<div class="row bg-light border my-auto">
    <div class="col border-bottom text-left mx-5 my-2">
        <div class="row">
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row h2">
                    <div class="col">
                        <span class="font-weight-bold">RLN123456</span>
                    </div>
                    <div class="col">
                        {{ '{LN_STATUS}' }}
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
                        {{ '{LN_PRINT_RUN_ID}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Invoice Address Ref:</span>
                    </div>
                    <div class="col">
                        {{ '{LN_INV_ADDR_REF}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Date Due:</span>
                    </div>
                    <div class="col">
                        {{ '{LN_DATE_DUE}' }}
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
                        {{ '{LN_TYPE}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Delivery Address Ref:</span>
                    </div>
                    <div class="col">
                        {{ '{LN_DEL_ADDR_REF}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Date Printed:</span>
                    </div>
                    <div class="col">
                        {{ '{LN_DATE_PRINTED}' }}
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
                        {{ '{LN_DEL_COMPLETE}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Carrier:</span>
                    </div>
                    <div class="col">
                        {{ '{LN_CARRIER}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Last Printed:</span>
                    </div>
                    <div class="col">
                        {{ '{LN_LAST_PRINTED}' }}
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
                        {{ '{LN_DATE_CREATED}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Delivery Method:</span>
                    </div>
                    <div class="col">
                        {{ '{LN_DEL_METHOD}' }}
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
                        {{ '{LN_LAST_UPDATED_BY}' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Boxes:</span>
                    </div>
                    <div class="col">
                        {{ '[LN_BOXES]' }}
                    </div>
                </div>
            </div>
            <div class="col border-bottom text-left mx-5 my-2">
                <div class="row">
                    <div class="col">
                        <span class="font-weight-bold">Tracking Codes:</span>
                    </div>
                    <div class="col">
                        {{ '{LN_TRACKING_CODE}' }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <table class="table-striped w-100 mt-5 mb-3 table-bordered">
                    <thead>
                    <tr  class="bg-dark text-white">
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
                    @for ($i = 0; $i <= 5; $i++)
                        <tr>
                            <td>{{'{LN_TABLE_TYPE}'}}</td>
                            <td>{{'{LN_TABLE_LINE}'}}</td>
                            <td>{{'{LN_TABLE_STATUS}'}}</td>
                            <td>{{'{LN_TABLE_DESCRIPTION}'}}</td>
                            <td>{{'{LN_TABLE_SKU}'}}</td>
                            <td>{{'{LN_TABLE_QTY}'}}</td>
                            <td>{{'{LN_TABLE_QTY_ISSUED}'}}</td>
                            <td>{{'{LN_TABLE_QTY_SHIPPED}'}}</td>
                            <td>{{'{LN_TABLE_QTY_DISCARDED}'}}</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
                <a href="#" class="btn btn-primary mb-2 w-25 mx-auto">Show Details</a>
            </div>
        </div>
    </div>
</div>
