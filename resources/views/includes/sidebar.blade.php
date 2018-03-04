<aside class="col-md-4 sidebar column">

	<div class="widget">

		<div class="widget-title"><h4>UPCOMING EVENT</h4></div>

		<div class="event-count">

			<div class="event-img">

				<img src="images/resource/event1.jpg" alt="" />

				<div class="downcount">

					<i class="fa fa-clock-o"></i>

					<ul class="countdown">

						<li> <span class="days">00</span>

						<p class="days_ref">DAYS</p>

						</li>

						<li> <span class="hours">00</span>

						<p class="hours_ref">HOURS</p>

						</li>

						<li> <span class="minutes">00</span>

						<p class="minutes_ref">MINTS</p>

						</li>

						<li> <span class="seconds">00</span>

						<p class="seconds_ref">SECS</p>

						</li>

					</ul>

				</div>

			</div>

			<h4><a href="event-single.html" title="">Offer and General Visuals</a></h4>

		</div>

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

		<div class="widget-title"><h4>POPULAR POSTS</h4></div>

		<div class="remove-ext">

			<div class="widget-blog">

				<div class="widget-blog-img"><img src="images/resource/widget-blog.jpg" alt="" /></div>

				<p><a href="blog-single.html" title="">Suspendisse velit anteg, aliquet vel adiping.</a></p>

				<span><i class="fa fa-calendar-o"></i> November 01, 2013</span>

			</div><!-- WIDGET BLOG -->



			<div class="widget-blog">

				<div class="widget-blog-img"><img src="images/resource/widget-blog2.jpg" alt="" /></div>

				<p><a href="blog-single.html" title="">Suspendisse velit anteg, aliquet vel adiping.</a></p>

				<span><i class="fa fa-calendar-o"></i> November 01, 2013</span>

			</div><!-- WIDGET BLOG -->



			<div class="widget-blog">

				<div class="widget-blog-img"><img src="images/resource/widget-blog3.jpg" alt="" /></div>

				<p><a href="blog-single.html" title="">Suspendisse velit anteg, aliquet vel adiping.</a></p>

				<span><i class="fa fa-calendar-o"></i> November 01, 2013</span>

			</div><!-- WIDGET BLOG -->

		</div>

	</div><!-- POPULAR POSTS -->



</aside><!-- SIDEBAR -->
