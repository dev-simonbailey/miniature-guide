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
            @for ($i = 0; $i <= 5; $i++)
                <tr>
                    <td>{{'{SA_TYPE}'}}</td>
                    <td>{{'{SA_REFERENCE}'}}</td>
                    <td>{{'{SA_PART}'}}</td>
                    <td>{{'{SA_STORE}'}}</td>
                    <td>{{'{SA_BIN}'}}</td>
                    <td>{{'{SA_QTY}'}}</td>
                    <td>{{'{SA_CREATED}'}}</td>
                    <td>{{'{SA_UPDATED}'}}</td>
                    <td>{{'{SA_BY_USER}'}}</td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>
