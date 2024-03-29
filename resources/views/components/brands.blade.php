<section class="container brands">
    <div class="col-12">
        <h1 class="text-center" style="font-size: 2.6rem; color: #99cd08;">@lang('translates.partners')</h1>
    </div>
    <div class="owl-carousel" style="padding-top: 1rem !important;padding-bottom: 1rem !important;">
        @foreach($brands as $brand)
            <div class="item" >
                <img src="{{asset(Voyager::image($brand->getAttribute('image')))}}"  height="100" alt="{{$brand->getAttribute('title')}}">
            </div>
        @endforeach
    </div>
</section>
