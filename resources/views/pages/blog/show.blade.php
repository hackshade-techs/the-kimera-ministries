@extends('layouts.app')

@section('title')
{{{ $article->title }}}
@endsection

@section('desc')
  {{{ !is_null($article->meta_description) ? $article->meta_description : ''}}}
@endsection

@section('keywords')

@endsection

@section('css')

@endsection

@section('content')

<div class="page-top">

  <div class="parallax" style="background:url({{ asset('images/parallax1.jpg') }});"></div>  

  <div class="container"> 

    <h1>{{{ $article->title }}}</h1>

    <ul>

      <li><a href="{{ url('/') }}" title="">Home</a></li>

      <li><a href="{{ url('articles') }}" title="">Articles</a></li>

      <li><a href="{{ url('/articles/'.$article->category->slug.'/'.$article->slug) }}" title="">{{{ $article->title }}}</a></li>

    </ul>

  </div>

</div><!--- PAGE TOP -->



<section>

  <div class="block">

    <div class="container">

      <div class="row">

        <div class="col-md-8 column">

          <div class="single-page">

            <img src="{{ asset($article->image) }}" alt="" />

            <h2>{{ $article->title }} </h2>

            <div class="meta">

              <ul>

                <li><i class="fa fa-reply"></i> Posted In <a href="{{ url('/articles/'.$article->category->slug) }}" title="{{ $article->title }}">{{ $article->category->name }}</a></li>

                <li><i class="fa fa-calendar-o"></i> {{ $article->created_at->toFormattedDateString() }} </li>


              </ul>


            </div><!-- POST META -->

          </div><!-- SERMON SINGLE -->

          

          <p>
            {!! $article->content !!}
          </p>



          <div class="comments">

            <h4>COMMENTS</h4>

            <div id="disqus_thread"></div>
            <script>

            /**
              *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
              *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
              /*
              var disqus_config = function () {
              this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
              this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
              };
              */
              (function() { // DON'T EDIT BELOW THIS LINE
              var d = document, s = d.createElement('script');
              s.src = 'https://the-kimera-ministries.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
              })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

            </ul>

          </div><!-- COMMENTS -->                   


        </div>


        @include('includes.sidebar')

      </div>

    </div>

  </div>

</section>

@endsection

@section('js')
<script id="dsq-count-scr" src="//the-kimera-ministries.disqus.com/count.js" async></script>
@endsection
