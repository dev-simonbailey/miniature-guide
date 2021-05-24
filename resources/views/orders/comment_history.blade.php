<p class="h2 text-left">Comment History</p>
@for ($i = 0; $i <= 5; $i++)
<div class="row bg-light mx-auto mt-3 leftGreen">
    <div class="col w-25">
            <div class="row">
                <div class="col text-left">
                    <span class="font-weight-bold">Source:</span>{{'{SOURCE}'}}
                </div>
            </div>
        <div class="row text-left">
            <div class="col text-left">
                <span class="font-weight-bold">Last Updated:</span>{{'{LAST_UPDATED}'}}
            </div>
        </div>
        <div class="row">
            <div class="col text-left">
                <span class="font-weight-bold">By:</span>{{'{UPDATED_BY_USER}'}}
            </div>
        </div>
    </div>
    <div class="col w-75">
        <div class="row">
            <div class="col text-left">
                <span class="font-weight-bold">Comment:</span>{{'{COMMENT}'}}
            </div>
        </div>
    </div>
</div>
@endfor

