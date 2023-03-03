<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="@yield('icon', asset('images/egg-logo.png'))" type="image/png">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    @yield('cdns')
    @vite('resources/js/app.js')






</head>

<body>

    <header>
        @include('includes.header')
    </header>


    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>






    <footer></footer>






    @yield('scripts')
</body>

</html>
