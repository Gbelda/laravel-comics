@extends('layouts.app')

@section('page-css')
    <link rel="stylesheet" href="/css/comic.css">

@section('content')

    <div class="highlight_bg"></div>

    <div class="content_container">

        <div class="poster">
            <img src="{{ $comic['thumb'] }}" alt="">
            <h6 class="sticker">COMIC BOOK</h6>
            <h6 class="gallery">VIEW GALLERY</h6>
        </div>

        <div class="main_content d-flex justify-content-between">
            <div class="comic_description col-7">
                <h1 class="comic_title">
                    {{ $comic['title'] }}
                </h1>

                <div class="info col-4 d-flex">
                    <div class="status d-flex col-8 justify-content-between align-items-center px-3">
                        <h6>U.S. Price: <span class="price">{{ $comic['price'] }}</span></h6>
                        <h6>AVAILABLE</h6>
                    </div>
                    <div class="availability col-4 d-flex justify-content-center align-items-center">
                        <h6>Check Availability&blacktriangledown;</h6>
                    </div>
                </div>
            </div>

            <div class="advert">
                <h6>
                    ADVERTISEMENT
                </h6>
            </div>
        </div>



    </div>


@endsection
