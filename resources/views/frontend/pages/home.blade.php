@extends('frontend.templates.layout')

@section('contents')
<style>
	.nav-vlb{
        cursor: default;
        background-color: #333;
        background-image: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)));
        background-image: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)));
        background-image: -ms-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)));
        background-image: linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)));
        padding: 0;
    }

    .nav-vlb:after {
        content: '';
        display: block;
        width: 100%;
        height: 0.9em;
        background-color: #30df4a;
    }    
@media screen and (max-width: 767px) {
    .nav-vlb:after {
        height: 0.5em;
        margin-top: 8px;
    }
}

    .nav-vlb ul li{
        position: relative;
        display: inline-block;
        margin-left: 1em;
    }

    .nav-vlb ul li a{
        color: #c0c0c0 !important;
        text-decoration: none;
        border: 0;
        display: block;
        padding: 1.5em 0.5em 1.35em 0.5em;

        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16pt;
        font-weight: 300;
        line-height: 1.65em;        
    }

    .nav-vlb .active{
        font-weight: 600;  
        color: white !important;
    }

    .nav-vlb .active:before{
        -moz-transform: rotateZ(45deg);
        -webkit-transform: rotateZ(45deg);
        -ms-transform: rotateZ(45deg);
        transform: rotateZ(45deg);
        width: 0.75em;
        height: 0.75em;
        content: '';
        display: block;
        position: absolute;
        bottom: -0.5em;
        left: 50%;
        margin-left: -0.375em;
        background-color: #30df4a;
    }

     .nav-vlb .title{
        color: white;
        font-size: 1.5em;
        padding-top: 10px;
     }
</style>


<nav class="navbar navbar-default nav-vlb" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-xs-12 hidden-sm hidden-md hidden-lg p-l-none p-r-none">
            <a href="#">fa icon here
            </a>
            <span class="pull-right title">Villa Langit Biru</span>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="hidden-xs col-sm-12 col-md-12 col-lg-12">
            <ul class="nav navbar-nav pull-center">
                <li>
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>
                    <a href="about.html">Our Villas</a>
                </li>
                <li>
                    <a href="blog.html">About Us</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>

@stop