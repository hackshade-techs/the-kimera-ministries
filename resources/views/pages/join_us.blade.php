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

          <h1>JOIN US
              <span>The Kimera Ministries</span>
          </h1>

          <ul>

              <li>
                  <a href="{{ url('/') }}" title="">Home</a>
              </li>

              <li>
                  <a href="{{ url('join-us') }}" title="">Join Us</a>
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
                                  @foreach($churchActivities as $churchActivity)


									<div class="col-md-4">

									    <div class="story">

									        <div class="image">

									            <img style="max-width: 100%; max-height: 200px;" src="{{  asset($churchActivity->image) }}" alt="{{ $churchActivity->title }}" />

									            <a href="{{ url('church-activities/'.$churchActivity->slug) }}" title="">
									                <i class="fa fa-link"></i>
									            </a>

									        </div>

									        <div class="story-detail">

									            <span class="date">
									                <i class="fa fa-calendar-o"></i> {{ $churchActivity->date->toFormattedDateString() }}</span>

									            <h3>
									                <a href="{{ url('church-activities/'.$churchActivity->slug) }}" title="">{{ $churchActivity->title }}</a>
									            </h3>

									            <span>

									        </div>

									    </div>

									</div>


									@endforeach

                              </div>

                          </div>

                      </div>



                      <div class="theme-pagination">

                          <ul class="pagination">

                              {{ $churchActivities->links() }}

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
