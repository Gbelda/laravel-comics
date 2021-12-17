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
        <li>
          <a href="#">
            <div class="index_link">
              <img src="../assets" alt="" />
              <h5>DIGITAL COMICS</h5>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="index_link">
              <img src="../assets/img/" alt="" />

              <h5>DC MERCHANDISE</h5>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="index_link">
              <img src="../assets/img/buy-comics-subscriptions.png" alt="" />

              <h5>SUBSCRIPTION</h5>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="index_link">
              <img
                src="../assets/img/
                alt=""
                class="locator_logo"
              />

              <h5>COMIC SHOP LOCATOR</h5>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="index_link">
              <img src="../assets/img/buy-dc-power-visa.svg" alt="" />

              <h5>DC POWER VISA</h5>
            </div>
          </a>
        </li>
      </ul>
    </section>
    </div>
@endsection