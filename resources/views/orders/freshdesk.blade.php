@inject('freshDeskFunctions', 'App\FreshDesk')
<p class="h2 text-left">Freshdesk</p>
@foreach ($freshDeskData as $data)
    <div class="row bg-light mx-auto mt-3 border-top-dark {{ $freshDeskFunctions::freshdeskTicketStatusColour($data['status']) }}">
        <div class="col">
            <div class="row">
                <div class="col text-left">
                    <span class="font-weight-bold">{{ $data['subject'] }}  - #{{ $data['id'] }}</span>
                </div>
            </div>
            <div class="row text-left">
                <div class="col text-left">
                    Status: <span class="font-weight-bold"> {{ $freshDeskFunctions::freshdeskConvertStatus($data['status']) }}</span> -
                    Priority: <span class="font-weight-bold"> {{ $freshDeskFunctions::freshdeskConvertPriority($data['priority']) }}</span> -
                    @if(!empty($data['group_id']))
                        Group: <span class="font-weight-bold"> {{ $freshDeskFunctions::freshdeskConvertGroup($data['group_id']) }}</span> -
                    @else
                        Group: <span class="font-weight-bold"> {{ 'NONE' }}</span> -
                    @endif
                    @if(!empty($data['responder_id']))
                        Assigned Agent: <span class="font-weight-bold"> {{ $freshDeskFunctions::freshdeskConvertResponderId( $data['responder_id']) }}</span>
                    @else
                        Assigned Agent: <span class="font-weight-bold"> {{ 'NONE' }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col text-left">
                    Created: <span class="font-weight-bold">{{ $freshDeskFunctions::freshdeskDateFormatter($data['created_at']) }}</span>
                    Last Updated: <span class="font-weight-bold">{{ $freshDeskFunctions::freshdeskDateFormatter($data['updated_at'])}}</span>
                </div>
            </div>
        </div>
    </div>
@endforeach
