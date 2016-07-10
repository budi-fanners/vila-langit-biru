@extends('frontend.templates.layout')

@section('contents')
<style>
  




</style>


<div id="banner">
    <!-- desktop and tablet -->
    <div class="col-md-12 col-sm-12 hidden-xs p-l-none p-r-none">
        <div id="slider" class="owl-carousel owl-theme">
 
            @foreach($page_datas->sliders as $slider)
                <img class="img-responsive" src="{{ asset( is_null($slider['sumber']) ? 'images/errors/error-silder.png' : $slider['sumber'] ) }}">
            @endforeach

        </div>
    </div>

    <!-- mobile -->
    <div class="hidden-lg hidden-md hidden-sm col-xs-12 p-l-none p-r-none">

        @foreach($page_datas->sliders as $slider)
            <img class="img-responsive" src="{{ asset( is_null($slider['sumber']) ? 'images/errors/error-silder.png' : $slider['sumber'] ) }}">
        @endforeach      

    </div>    
</div>

<div id="content">
    <div class="col-md-12 col-sm-12 col-xs-12 p-t-sm p-b-sm">
        <div class="wrapper">
            <!-- top section -->
            <div class="row p-b-sm">
                <div class="col-md-4 col-sm-4 col-xs12">
                    <div class="highlight">
                        <div class="row p-b-sm">
                            <div class="col-md-12 col-sm-12 col-xs-12 icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 description">
                                <h3>Villa Terbaik</h3>
                                <p>
                                    Mulai dari semangat …. kami melayani Anda penuh suka cita …
                                    desain … kami rancang semuanya dengan cara terbaik.
                                    proses … kami layani Anda dengan cara terbaik …
                                </p>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs12">
                    <div class="highlight">
                        <div class="row p-b-sm">
                            <div class="col-md-12 col-sm-12 col-xs-12 icon">
                                <i class="fa fa-diamond"></i>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 description">
                                <h3>Fasilitas Terbaik</h3>
                                <p>Hanya 2  menit berkendara menuju tempat wisata keluarga terbaik di Jawa Timur : Jatim Park 2, BNS dan Eco Green Park.</p>
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="col-md-4 col-sm-4 col-xs12">
                    <div class="highlight">
                        <div class="row p-b-sm">
                            <div class="col-md-12 col-sm-12 col-xs-12 icon">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 description">
                                <h3>Harga Terbaik</h3>
                                <p>Harga yang masuk akal. Value of Money untuk liburan terindah. Anda tidak akan pernah kecewa dengan apa yang Anda dapatkan!</p>
                            </div>
                        </div>
                    </div>   
                </div>                        
            </div>

            <!-- middle section -->
            <div class="row">
                @foreach($page_datas->villas as $ctr => $villa)
                <div class="col-md-6 col-sm-6 col-xs-12 p-t-sm">
                    <div class="row p-b-sm card">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <a href="#">
                                <img class="img-responsive img-rounded" src="{{ asset( is_null($villa['image']['sumber']) ? 'images/errors/error-cover.png' : $villa['image']['sumber'] ) }}">
                            </a>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8">
                            <a href="#">
                                <h4>{{$villa['nama']}}</h4>
                            </a>
                            <p>
                                {{$villa['deskripsi']}}
                            </p>
                            <a href="#" class="btn btn-default">learn more</a>
                        </div>
                    </div>
                </div>
                @if($ctr % 2)
                    <div class="col-md-12 clearfix"></div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:blue;height:350px;">
    </div>
</div>

@stop

@section('plugins')
    @include('frontend.plugins.owl-carousel')
@stop