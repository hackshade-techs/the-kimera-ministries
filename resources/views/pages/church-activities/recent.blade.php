@extends('layouts.app')

@section('title')
Home
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

  		<h1>Articles <span></span></h1>

  		<ul>

  			<li><a href="{{ url('/') }}" title="">Home</a></li>

  			<li><a href="{{ url('/articles') }}" title="">Articles</a></li>

  		</ul>

  	</div>

  </div>



  <section>

  	<div class="block">

  		<div class="container">

  			<div class="row">

  				<div class="col-md-8 column">

  					<div class="remove-ext">

              @foreach ($articles as $article)
                <div class="blog-post">

    							<div class="row">

    								<div class="col-md-5">

    									<div class="image">

    										<img src="{{ asset($article->image) }}" alt="{{ $article->title }}" />

    										<a href="{{ url('/articles/'.$article->category->slug.'/'.$article->slug) }}" title="{{ $article->title }}"><i class="fa fa-link"></i></a>

    									</div>

    								</div>

    								<div class="col-md-7">

    									<div class="blog-detail">

    										<h3><a href="{{ url('/articles/'.$article->category->slug.'/'.$article->slug) }}" title="{{ $article->title }}">{{ $article->title }}</a></h3>

    										<p>
                          {{ substr($article->content, 0, 220) }} {{ strlen($article->content) > 220 ? '...' : '' }}
                        </p>

    										<span><i class="fa fa-calendar-o"></i> {{ $article->created_at->toFormattedDateString() }}</span>

    									</div>

    								</div>

    							</div>

    						</div><!-- BLOG POST -->
              @endforeach




  					</div>



  					<div class="theme-pagination">

  						<ul class="pagination">
                {{ $articles->links() }}
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
