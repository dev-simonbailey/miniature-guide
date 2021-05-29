<p class="h2 text-left">Stock Allocations</p>
<div class="row bg-light border my-auto">
    <div class="col">
        <table class="table-striped w-100 mt-5 table-bordered">
            <thead>
            <tr class="bg-dark text-white">
                <th>Type</th>
                <th>Reference</th>
                <th>Part</th>
                <th>Store</th>
                <th>Bin</th>
                <th>QTY</th>
                <th>Date Created</th>
                <th>Last Updated</th>
                <th>Updated By</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stockAllocations as $allocation)
                <tr>
                    <td>{{ $allocation['type'] }}</td>
                    <td>{{ $allocation['reference'] }}</td>
                    <td>{{ $allocation['part'] }}</td>
                    <td>{{ $allocation['store'] }}</td>
                    <td>{{ $allocation['bin'] }}</td>
                    <td>{{ $allocation['qty'] }}</td>
                    <td>{{ $allocation['dt_created'] }}</td>
                    <td>{{ $allocation['last_updated'] }}</td>
                    <td>{{ $allocation['last_upd_user'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
