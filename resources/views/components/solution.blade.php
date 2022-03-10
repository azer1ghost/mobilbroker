<section class="advantages">
    <div class="row align-items-center">
        <div class="col-12 col-md-6 p-4 p-sm-5 text-center text-md-start">
            <h1 class="title" style="font-size: 2.6rem; color: #99cd08;">{!! $meta->get('title') !!}</h1>
            <div class="advantages-text">
                {!! $meta->get('body') !!}
            </div>
        </div>
        <div class="col-12 col-md-6 advantages-right-column">
            <div class="row g-0">
                @foreach($solutions as $solution)
                <div class="col-12 col-md-6">
                    <div class="advantage-image">
                        <img src="{{asset(Voyager::image($solution->getAttribute('image')))}}" alt="">
                        <div class="advantage-overlay">
                            <p>{{$solution->getTranslatedAttribute('title')}}</p>
                            <span class="overlay-icon">
                                <i class="{{$solution->getAttribute('icon')}} icon"></i>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
