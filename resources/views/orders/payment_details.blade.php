<p class="h2 text-left mt-5">Payments</p>
<div class="row bg-light border my-auto">
    <div class="col">
        <table class="table-striped w-100 mt-5 table-bordered">
            <thead>
            <tr  class="bg-dark text-white">
                <th>Pay Method</th>
                <th>Value</th>
                <th>Status</th>
                <th>Last Updated</th>
                <th>By</th>
            </tr>
            </thead>
            <tbody>
            @for ($i = 0; $i <= 5; $i++)
                <tr>
                    <td>{{'{PAYMENT_METHOD}'}}</td>
                    <td>{{'{PAYMENT_VALUE}'}}</td>
                    <td>{{'{PAYMENT_STATUS}'}}</td>
                    <td>{{'{PAYMENT_LAST_UPDATED}'}}</td>
                    <td>{{'{PAYMENT_BY_USER}'}}</td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>
