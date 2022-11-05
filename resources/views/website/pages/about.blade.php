@extends('website.layout')

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))

@section('content')
    @include('website.components.banner', ['title' => $meta->get('title')])
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
        <x-mission/>
        <br>
        <div class="container">
            <x-certificate/>
            <div class="container" style="background-image: url("{{asset('assets/images/mbroker.jpg')}}")>
                <div class="row">
                    <div class="col-12">
{{--                      <div style="background-image: url("{{asset('assets/images/AA.jpg')}}");">--}}
                      <div class="col-12" style="background-color: green;" >
{{--                          <img src="{{asset('assets/images/mbroker.jpg')}}" alt="">--}}
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3">
            <div class="accordion m-0" id="documents-accordion">
                <div class="card">
                    <p class="mb-0" type="button" data-toggle="collapse" data-target="#document-files" style="font-size: 100px">
                        <i class="fa fa-folder"></i>
                        <span class="badge badge-secondary"></span>
                    </p>
                </div>
           </div>
        </div>
        <x-counter/>
    </main>
@endsection
