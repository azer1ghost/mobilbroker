@extends('website.layout')

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))

@section('content')
    @include('website.components.banner', ['title' => $meta->get('title')])

    <main id="about-us">
        <h1 class="text-center">Mobil Broker</h1>
        <div class="container pt-4">
            <div class="row my-2">
                <div class="col-12">
                    <img src="{{asset(Voyager::image($meta->image()))}}" class="float-image float-image p-0 me-lg-4" alt="About US image">
                    <div class="about-us-content pe-0 pe-md-4 about-us-text text-justify">
                        {!! $meta->get('body') !!}
                    </div>
                </div>
            </div>
            <x-counter/>
        </div>
    </main>
@endsection
