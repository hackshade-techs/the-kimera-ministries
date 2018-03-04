@extends('layouts.app')

@section('title')
About Us
@endsection

@section('desc')

@endsection

@section('keywords')

@endsection

@section('css')

@endsection

@section('content')

  <div class="page-top">

      <div class="parallax" style="background:url(images/parallax1.jpg);"></div>

      <div class="container">

          <h1>GALLERY
              <span>The Kimera Ministries</span>
          </h1>

          <ul>

              <li>
                  <a href="{{ url('/') }}" title="">Home</a>
              </li>

              <li>
                  <a href="{{ url('gallery') }}" title="">Gallery</a>
              </li>

          </ul>

      </div>

  </div>
  <!--- PAGE TOP -->



  <section>

      <div class="block">

          <div class="container">

              <div class="row">

                  <div class="col-md-12">

                      <div class="remove-ext">

                          <div class="row">

                              <div class="mas-gallery">
                                  {{-- includes the view composer for the gallery --}}
                                  @include('includes.gallery')

                              </div>

                          </div>

                      </div>



                      <div class="theme-pagination">

                          <ul class="pagination">

                              {{ $albums->links() }}

                          </ul>

                      </div>
                      <!-- PAGINATION -->



                  </div>

              </div>

          </div>

      </div>

  </section>


@endsection

@section('js')

@endsection
