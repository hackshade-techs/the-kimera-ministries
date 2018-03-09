<aside class="col-md-4 sidebar column">

	<div class="widget">

		<div class="widget-title"><h4>UPCOMING EVENT</h4></div>
		@foreach($events as $event)
			<div class="event-count">

				<div class="event-img">

					<img src="{{ asset($event->image) }}" alt="{{ $event->title }}" />

					<div class="downcount">

						<i class="fa fa-clock-o"></i>

						<ul class="countdown">

							<li> <span class="days">{{ $event->start_time->diffInDays(\Carbon\Carbon::now()) }}</span>

							<p class="days_ref">DAYS</p>

							</li>

							<li> <span class="hours">{{ $event->start_time->diffInHours(\Carbon\Carbon::now()) }}</span>

							<p class="hours_ref">HOURS</p>

							</li>

							<li> <span class="minutes">{{ $event->start_time->diffInMinutes(\Carbon\Carbon::now()) }}</span>

							<p class="minutes_ref">MINS</p>

							</li>

							<li> <span class="seconds">{{ $event->start_time->diffInSeconds(\Carbon\Carbon::now()) }}</span>

							<p class="seconds_ref">SECS</p>

							</li>

						</ul>

					</div>

				</div>

				<h4><a href="{{ $event->url() }}" title="{{ $event->title }}">{{ $event->title }}</a></h4>

			</div>
		@endforeach

	</div><!-- UPCOMING EVENT -->

	<div class="widget">

		<div class="widget-title"><h4>CATEGORIES</h4></div>

		<ul>
			@foreach ($categories as $category)
				<li><a href="{{ url('/articles/'.$category->slug) }}" title="{{ $category->name }}"><i class="fa fa-hand-o-right"></i>{{ $category->name }}</a></li>
			@endforeach

		</ul>

	</div><!-- CATEGORIES -->



	<div class="widget">

		<div class="widget-title"><h4>RECENT POSTS</h4></div>

		<div class="remove-ext">

			@include('pages.blog.recent')

		</div>

	</div><!-- POPULAR POSTS -->



</aside><!-- SIDEBAR -->
