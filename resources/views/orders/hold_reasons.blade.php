<p class="h2 text-left">Hold Information</p>
@foreach ($holdReasons as $reason)
    <div class="row bg-light mx-auto mt-3 mb-5 leftRed">
        <div class="col">
            <div class="row">
                <div class="col text-left">
                    <span class="font-weight-bold">Last Updated By:</span> {{ $reason['last_upd_user'] }}
                    <br />
                    <span class="font-weight-bold">Previous Status:</span> {{ $reason['last_status'] }}
                </div>
                <div class="col text-left">
                    <span class="font-weight-bold">Date on Hold:</span> {{ $reason['dt_created'] }}
                    <br />
                    <span class="font-weight-bold">Last Updated:</span> {{ $reason['last_updated'] }}
                </div>
                <div class="col text-left">
                    <span class="font-weight-bold">Hold Reason:</span> {{ $reason['reason'] }}
                    <br />
                    <span class="font-weight-bold">Hold Note:</span> {{ $reason['note'] }}
                </div>
            </div>
        </div>
    </div>

@endforeach
