
@foreach ($articles as $article)
  <div class="widget-blog">

    <div class="widget-blog-img"><img src="{{ asset($article->image) }}" alt="" /></div>

    <p><a href="{{ url('/articles/'.$article->category->slug.'/'.$article->slug) }}" title="">{{ $article->title }}</a></p>

    <span><i class="fa fa-calendar-o"></i> {{ $article->date->toFormattedDateString() }}</span>

  </div><!-- WIDGET BLOG -->
@endforeach
