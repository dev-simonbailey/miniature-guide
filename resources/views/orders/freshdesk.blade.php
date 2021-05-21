<p class="h2 text-left">Freshdesk</p>
@for ($i = 0; $i <= 5; $i++)
    <div class="row bg-light border mx-auto mt-3" style="border-left: 5px solid green!important">
        <div class="col">
            <div class="row">
                <div class="col text-left">
                    <span class="font-weight-bold">{{'subject'}}  - #{{'id'}}</span>
                </div>
            </div>
            <div class="row text-left">
                <div class="col text-left">
                    Status: <span class="font-weight-bold"> {{"freshdesk_convert_status('status')"}}</span> -
                    Priority: <span class="font-weight-bold"> {{"freshdesk_convert_priority('priority')"}}</span> -
                    Group: <span class="font-weight-bold"> {{"freshdesk_convert_group('group_id')"}}</span> -
                    Assigned Agent: <span class="font-weight-bold"> {{"freshdesk_convert_responder_id('responder_id'"}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col text-left">
                    Created: <span class="font-weight-bold">{{'created_at'}}</span>
                    Last Updated: <span class="font-weight-bold">{{'updated_at'}}</span>
                </div>
            </div>
        </div>
    </div>
@endfor
