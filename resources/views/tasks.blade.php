<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel To Do List</title>

        <!-- Fonts -->

        <!-- Styles -->
    </head>
    <body>
        <div id="list" items="">
            <!-- Default rendering. This will be overwritten once Vue fetches server info -->
            <ol>
                @foreach(App\Item::all() as $item)
                <li>
                    {{ $item->task }}
                </li>
                @endforeach
            </ol>
        </div>
        <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
