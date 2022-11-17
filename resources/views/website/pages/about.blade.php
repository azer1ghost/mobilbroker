@extends('website.layout')

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))

@section('content')
    @include('website.components.banner', ['title' => $meta->get('title')])
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script>
    <main id="about-us">
        <div class="container pt-4">
            <div class="row my-2">
                <div class="col-12">
                    <img style="border-radius: 15px" src="{{asset(Voyager::image($meta->image()))}}" class="float-image float-image p-0 me-lg-4" alt="About US image">
                    <h1 class="mb-4">Mobil Broker</h1>
                    <div>
                        {!! $meta->get('body') !!}
                    </div>
                </div>
            </div>
        </div>
        <x-counter/>
        <x-mission/>


        <x-certificate/>

    </main>
@endsection
