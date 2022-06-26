<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div class="antialiased">
            <div id="app">
                <div class="container">
                    <nav class="navbar navbar-dark bg-dark d-flex">
                        <h1 class="navbar-brand m-auto">URL SHORTENER</h1>
                    </nav>
                    <div class="card card-body">
                        {{-- Showing Existing URL --}}
                        <show-url-component></show-url-component>
                        <span class="msg"></span>
                        {{-- Generating new URL --}}
                        <url-short-component></url-short-component>
                    </div>

            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>
