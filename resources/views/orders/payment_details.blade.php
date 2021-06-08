<p class="h2 text-left mt-5">Payments</p>
<div class="row bg-light border my-auto">
    <div class="col">
        <table class="table-striped w-100 mt-5 mb-5 table-bordered">
            <thead>
            <tr class="bg-dark text-white" style="border: 8px solid #343a40!important;">
                <th scope="col" style="border-bottom-width:2px;">Pay Method</th>
                <th scope="col" style="border-bottom-width:2px;">Value</th>
                <th scope="col" style="border-bottom-width:2px;">Status</th>
                <th scope="col" style="border-bottom-width:2px;">Last Updated</th>
                <th scope="col" style="border-bottom-width:2px;">By</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($paymentData as $data)
                <tr scope="row" class="{{ $data['colour'] }}">
                    <td>{{ $data['pay_method'] }}</td>
                    <td>{{ $data['value'] }}</td>
                    <td>{{ $data['status'] }}</td>
                    <td>{{ $data['last_updated'] }}</td>
                    <td>{{ $data['last_upd_user'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
