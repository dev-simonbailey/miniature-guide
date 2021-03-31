@section('page_title')
    {{ "Bluesky - WIP Custom Colour Orders" }}
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
                    WIP Custom Colour Orders
                </div>
            </div>
        </div>
    </body>
</html>