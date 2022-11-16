<section class="container certificates mt-5">
    <div class="col-12">
        <h1 class="text-center" style="font-size: 2.6rem; color: #99cd08;">@lang('translates.certificates')</h1>
    </div>
    <div class="brands owl-carousel mt-5" >
        @foreach($certificates as $certificate)
            <div class="item">
                <a href="{{asset(Voyager::image($certificate->getAttribute('image')))}}" target="_blank">
                    <img src="{{asset(Voyager::image($certificate->getAttribute('image')))}}" height="250" width="500" alt="{{$certificate->getAttribute('title')}}" >
                </a>
            </div>
        @endforeach
    </div>
</section>
