@extends('layouts.master')
@section('content')
<style>
.serviceBox{
    padding: 50px 35px;
    background: #fff;
    border: 1px solid #eee;
    border-bottom-color: #428ef8;
    text-align: center;
    position: relative;
    transition: all 0.5s ease 0s;
}
.serviceBox:hover{ border: 1px solid #428ef8; }
.serviceBox:before,
.serviceBox:after{
    content: "";
    width: 70%;
    height: 5px;
    background: #428ef8;
    opacity: 0;
    position: absolute;
    top: -3px;
    left: 35%;
    transform: translateX(-50%);
    transition: all 0.5s ease 0s;
}
.serviceBox:hover:before,
.serviceBox:hover:after{
    opacity: 1;
    left: 50%;
}
.serviceBox:after{
    top: auto;
    bottom: -3px;
}
.serviceBox .service-icon{
    width: 65px;
    height: 65px;
    line-height: 65px;
    border-radius: 50%;
    background: #428ef8;
    margin: 0 auto 20px;
    font-size: 36px;
    color: #fff;
}
.serviceBox .title{
    font-size: 20px;
    font-weight: bold;
    color: #252525;
    margin: 0 0 10px 0;
    transition: all 0.5s ease 0s;
}
.serviceBox:hover .title{ opacity: 0; }
.serviceBox .description{
    font-size: 14px;
    color: #7a7a7a;
    line-height: 25px;
    margin: 0;
    transition: all 0.5s ease 0s;
}
.serviceBox:hover .description{
    margin-top: -20px;
    padding-bottom: 20px;
}
@media only screen and (max-width:990px){
    .serviceBox{ margin-bottom: 30px; }
}
</style>
    <main class="main">
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">About</li>
                        <li class="current">Objectives</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="starter-section" class="starter-section section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Objectives </h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
        </section>


<div class="container">


    <div class="row pb-5">
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <i class="service-icon fa fa-globe"></i>
                <h3 class="title">Web Design</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare neque ut felis dignissim, id pretium enim auctor. Curabitur maximus.
                </p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <i class="service-icon fa fa-rocket"></i>
                <h3 class="title">Web Development</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare neque ut felis dignissim, id pretium enim auctor. Curabitur maximus.
                </p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <i class="service-icon fa fa-briefcase"></i>
                <h3 class="title">Brand Building</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare neque ut felis dignissim, id pretium enim auctor. Curabitur maximus.
                </p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <i class="service-icon fa fa-mobile"></i>
                <h3 class="title">Responsive Design</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare neque ut felis dignissim, id pretium enim auctor. Curabitur maximus.
                </p>
            </div>
        </div>
    </div>
</div>



    </main>
@endsection
