<p class="h2 text-left mt-5">Order Lines</p>
<div class="row bg-light border my-auto">
    <div class="col">
        <table class="table-striped w-100 mt-5 table-bordered">
            <thead>
            <tr class="bg-dark text-white">
                <th>Type</th>
                <th>Line</th>
                <th>Item #</th>
                <th>Status</th>
                <th>Sku</th>
                <th>Item</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Component Type</th>
                <th>Allocation Availability</th>
                <th>Date Available</th>
                <th>Est Build Date</th>
                <th>Load Note</th>
                <th>Qty Issued</th>
            </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i <= 5; $i++)
                <tr>
                    <td>{{'{LINE_TYPE}'}}</td>
                    <td>{{'{LINE_NUMBER}'}}</td>
                    <td>{{'{ITEM_NUMBER}'}}</td>
                    <td>{{'{LINE_STATUS}'}}</td>
                    <td>{{'{LINE_SKU}'}}</td>
                    <td>{{'{LINE_ITEM}'}}</td>
                    <td>{{'{LINE_PRICE}'}}</td>
                    <td>{{'{LINE_QTY}'}}</td>
                    <td>{{'{LINE_COMPONENT_TYPE}'}}</td>
                    <td>{{'{LINE_ALLOCATION_AVAILABILITY}'}}</td>
                    <td>{{'{LINE_DATE_AVAILABLE}'}}</td>
                    <td>{{'{LINE_EST_BUILD_DATE}'}}</td>
                    <td>{{'{LINE_LOAD_NOTE}'}}</td>
                    <td>{{'{LINE_QTY)_ISSUED}'}}</td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>
