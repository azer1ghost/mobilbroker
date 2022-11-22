@extends('website.layout')

@section('title', 'Policy' )
@section('description', 'Policy')

@section('content')
            <div class="row my-2">
                <div class="col-12" style="text-align: center">
                    <img style="border-radius: 15px" src="{{Voyager::image(setting('site.policy'))}}"  alt="About US image">
                </div>
            </div>
@endsection
