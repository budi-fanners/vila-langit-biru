@extends('frontend.templates.layout')

@section('contents')
<style>
  
</style>


<div class="row slider-port">
    <!-- desktop and tablet -->
    <div class="col-md-12 col-sm-12 hidden-xs p-l-none p-r-none">
        <div id="slider" class="owl-carousel owl-theme">
 
            <img class="img-responsive" src="{{ asset('images/slider1.png') }}">
            <img class="img-responsive" src="{{ asset('images/slider2.png') }}">
            <img class="img-responsive" src="{{ asset('images/slider3.png') }}">

        </div>
    </div>

    <!-- mobile -->
    <div class="hidden-lg hidden-md hidden-sm col-xs-12 p-l-none p-r-none">
            <img class="img-responsive" src="{{ asset('images/slider1.png') }}">
            <img class="img-responsive" src="{{ asset('images/slider2.png') }}">
            <img class="img-responsive" src="{{ asset('images/slider3.png') }}">
    </div>    
</div>

@stop

@section('plugins')
    @include('frontend.plugins.owl-carousel')
@stop