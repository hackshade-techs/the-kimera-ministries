
@foreach ($albums as $album)
    <div class="col-md-4">

    <div class="gallery lightbox">

        <img src="{{ asset($album->image) }}" style="min-width: 100%; min-height: 280px;" alt="{{ $album->title }}" />

        <div class="gallery-title">

            <i class="fa fa-picture-o"></i>
            <h3> {{ $album->title }} </h3>

        </div>

        <ul>

          @foreach($album->photos as $photo)
            <li>
                <a href="{{ $photo->image }}" title="{{ $photo->title }}">
                    <img src="{{ asset($photo->image) }}" style="width: 74px;height: 67px;" alt="{{ $photo->title }}" />
                </a>
            </li>

          @endforeach

        </ul>

    </div>
    <!-- GALLERY ITEM -->

</div>
@endforeach

