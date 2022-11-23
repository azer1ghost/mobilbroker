<section class="container brands">
    <div class="col-12">
        <h1 class="text-center" style="font-size: 2.6rem; color: #99cd08;">@lang('translates.partners')</h1>
    </div>
    <div class="owl-carousel">
        @foreach($brands as $brand)
            <div class="item">
                <img src="{{asset(Voyager::image($brand->getAttribute('image')))}}" style="padding-top: 1rem;padding-bottom: 1rem" height="100" alt="{{$brand->getAttribute('title')}}">
            </div>
        @endforeach
    </div>
</section>
