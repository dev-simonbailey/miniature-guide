@section('page_title')
    {{ "Bluesky - WIP Fast Track Orders" }}
@endsection
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("global.head")
    <body>
        <div class="flex-center position-ref full-height">
            <div>
                @include("global.mega_menu")
            </div>
            <br />
            <div class="content">
                <div class="title m-b-md">
                   WIP Fast Track Orders
                </div>
            </div>
        </div>
    </body>
</html>