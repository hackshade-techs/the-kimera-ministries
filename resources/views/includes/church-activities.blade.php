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