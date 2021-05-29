<p class="h2 text-left mt-5">Order Lines</p>
<div class="row bg-light border my-auto">
    <div class="col">
        <table class="table-striped w-100 mt-5 mb-5 table-bordered">
            <thead>
            <tr class="bg-dark text-white border-correction">
                <th scope="col" style="border-bottom-width:2px;">Type</th>
                <th scope="col" style="border-bottom-width:2px;">Line</th>
                <th scope="col" style="border-bottom-width:2px;">Item #</th>
                <th scope="col" style="border-bottom-width:2px;">Status</th>
                <th scope="col" style="border-bottom-width:2px;">Sku</th>
                <th scope="col" style="border-bottom-width:2px;">Item</th>
                <th scope="col" style="border-bottom-width:2px;">Price</th>
                <th scope="col" style="border-bottom-width:2px;">Qty</th>
                <th scope="col" style="border-bottom-width:2px;">Component Type</th>
                <th scope="col" style="border-bottom-width:2px;">Allocation Availability</th>
                <th scope="col" style="border-bottom-width:2px;">Date Available</th>
                <th scope="col" style="border-bottom-width:2px;">Est Build Date</th>
                <th scope="col" style="border-bottom-width:2px;">Load Note</th>
                <th scope="col" style="border-bottom-width:2px;">Qty Issued</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orderLines as $line)
                <tr scope="row" class="{{ $line['row_colour']}}">
                    <td>{{ $line['line_type'] }}</td>
                    <td>{{ $line['line'] }}</td>
                    <td>{{ $line['item_no'] }}</td>
                    <td>{{ $line['line_status'] }}</td>
                    <td>{{ $line['part'] }}</td>
                    <td>{{ $line['item'] }}</td>
                    <td>{{ $line['total_value'] }}</td>
                    <td>{{ $line['qty'] }}</td>
                    <td>{{ $line['component_type'] }}</td>
                    <td>{{ $line['allocation_availability'] }}</td>
                    <td>{{ $line['date_available'] }}</td>
                    <td>{{ $line['estimated_build_date'] }}</td>
                    <td>{{ $line['load_note'] }}</td>
                    <td>{{ $line['qty_issued'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
