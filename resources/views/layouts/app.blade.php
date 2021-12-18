<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC | @yield('page_title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        @yield('page-css')
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Armata&family=Open+Sans+Condensed:wght@300;700&display=swap" rel="stylesheet">
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
