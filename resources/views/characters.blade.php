@extends('layouts.app')

@section('page_title', 'Characters')

@section('page-css')

    <link rel="stylesheet" href="/css/homepage.css">

@section('content')
    <section class="content_section container">
        <div class="section_title">
            <h3>CURRENT SERIES</h3>
        </div>
        <div class="row comic space_evenly">
            @foreach ($comics as $index => $comic)
                <a href="{{ route('comic', ['id' => $index]) }}" class="col-2">
                    <div class="comic">
                        <div class="comic_image">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <h3 class="title">
                            {{ $comic['series'] }}
                        </h3>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="load">
            <h4>LOAD MORE</h4>
        </div>
    </section>
    <!-- /.content_section -->
    <section class="content_index">
        <ul class="index_options d-flex container">
            @foreach ($miscs as $misc)
                <li>
                    <a href="#">
                        <div class="index_link">
                            <img src="{{ $misc['img'] }}" alt="" />
                            <h5>{{ strtoupper($misc['name']) }}</h5>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
