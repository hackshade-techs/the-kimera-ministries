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

    <h1>EVENTS</h1>

    <ul>

      <li><a href="{{ url('/') }}" title="">Home</a></li>

      <li><a href="{{ url('events') }}" title="">Events</a></li>

    </ul>

  </div>

</div><!--- PAGE TOP -->



<section>

  <div class="block">

    <div class="container">

      <div class="row">

        <div class="col-md-8 column">

          <div class="latest-sermons remove-ext">
            @if(isset($events) && count($events) > 0)
              @foreach($events as $event)
                <div class="sermon">

                  <div class="row">

                    <div class="col-md-3">

                      <div class="image">

                        <img src="{{ asset($event->image) }}" style="min-height: 150px; min-width: 100%;" alt="{{ $event->title }}" />

                        <a href="{{ $event->url() }}" title="{{ $event->title }}"><i class="fa fa-link"></i></a>

                      </div>

                    </div>

                    <div class="col-md-9">

                      <h3><a href="{{ $event->url() }}" title="{{ $event->title }}">{{ $event->title }}</a></h3>

                      <span><i class="fa fa-calendar-o"></i> {{ $event->start_time->format('g:ia D jS F Y') }}</span>

                      <p> {!! substr($event->body, 0, 260) !!} {{ strlen($event->body) >260 ? '...' : '' }} </p>

                    </div>

                  </div>

                </div><!-- SERMON -->
              @endforeach
            @endif

          </div><!-- LATEST SERMONS -->



            <div class="theme-pagination">

              <ul class="pagination">

               {{ $events->links() }}

              </ul>

            </div><!-- PAGINATION -->

          

        </div>

        @include('includes.sidebar')

      </div>

    </div>

  </div>

</section>

@endsection

@section('js')

  

@endsection
