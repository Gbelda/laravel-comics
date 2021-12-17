@extends('layouts.app')

@section('content')
    <div class="div">
            <section class="content_section container">
      <div class="section_title">
        <h3>CURRENT SERIES</h3>
      </div>
      <div class="row comic space_evenly">

      </div>
      <div class="load">
        <h4>LOAD MORE</h4>
      </div>
    </section>
    <!-- /.content_section -->
    <section class="content_index">
      <ul class="index_options d-flex container">
          @foreach($miscs as $misc)
          <li>
            <a href="#">
              <div class="index_link">
                <img src="{{$misc['img']}}" alt="" />
                <h5>{{$misc['name']}}</h5>
              </div>
            </a>
          </li>
          @endforeach
      </ul>
    </section>
    </div>
@endsection