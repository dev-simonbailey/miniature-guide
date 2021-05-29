<p class="h2 text-left">Comment History</p>
@foreach ($comments as $comment)
<div class="row bg-light mx-auto mt-3 leftGreen">
    <div class="col w-25">
            <div class="row">
                <div class="col text-left">
                    <span class="font-weight-bold">Source:</span> {{ $comment['type'] }}
                </div>
            </div>
        <div class="row text-left">
            <div class="col text-left">
                <span class="font-weight-bold">Last Updated:</span> {{ $comment['last_updated'] }}
            </div>
        </div>
        <div class="row">
            <div class="col text-left">
                <span class="font-weight-bold">By:</span> {{ $comment['last_upd_user'] }}
            </div>
        </div>
    </div>
    <div class="col w-75">
        <div class="row">
            <div class="col text-left">
                <span class="font-weight-bold">Comment:</span> {{ $comment['comment'] }}
            </div>
        </div>
    </div>
</div>
@endforeach

