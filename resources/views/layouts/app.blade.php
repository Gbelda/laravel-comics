<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC | @yield('page_title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="">
    </head>

    <body>

        @include('partials.header')
        {{-- ./SITE_HEADER --}}

        <main id="site_main">
            <div class="hero_img"></div>

            @yield('content')
        </main>

        @include('partials.footer')

    </body>
</html>
