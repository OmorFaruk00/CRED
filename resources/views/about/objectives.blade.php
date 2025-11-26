@extends('layouts.master')
@section('content')
<style>
.serviceBox{
    padding: 40px 15px;
    background: #fff;
    border: 1px solid #eee;
    border-bottom-color: #5cb874;
    text-align: center;
    position: relative;
    transition: all 0.5s ease 0s;
    
}
.serviceBox:hover{ border: 1px solid #5cb874; }
.serviceBox:before,
.serviceBox:after{
    content: "";
    width: 70%;
    height: 5px;
    background: #5cb874;
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
    background: #5cb874;
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
    text-align: justify;
    padding: 0px;
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
            </div>
        </section>


<div class="container">


    <div class="row pb-5">
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="serviceBox">
                <i class="service-icon fa fa-globe"></i>
                <h3 class="title">Foster a Research-Oriented Culture</h3>
                <p class="description">
                    To cultivate an intellectually stimulating environment that encourages students and faculty to engage actively in innovative and high-quality research.
                </p>
            </div>
        </div>

        <div class="col-md-4 col-sm-6  mb-4">
            <div class="serviceBox">
                <i class="service-icon fa-solid fa-dumbbell"></i>
                <h3 class="title">Enhance Research Skills and Capacity</h3>
                <p class="description">
                    To organize training, workshops, and mentorship programs aimed at developing research, analytical, and publication skills among students and faculty members.
                </p>
            </div>
        </div>

        <div class="col-md-4 col-sm-6  mb-4">
            <div class="serviceBox">
                <i class="service-icon fa fa-briefcase"></i>
                <h3 class="title">Promote Interdisciplinary Collaboration:</h3>
                <p class="description">
               To facilitate collaborative research projects across departments, disciplines, and institutions, both nationally and internationally.
                </p>
            </div>
        </div>

        <div class="col-md-4 col-sm-6  mb-4">
            <div class="serviceBox">
                <i class="service-icon fa fa-mobile"></i>
                <h3 class="title">Encourage Quality Publications</h3>
                <p class="description">
                  To support and guide researchers in publishing their work in reputable national and international journals, ensuring academic integrity and global visibility.
                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6  mb-4">
            <div class="serviceBox">
                <i class="service-icon fa fa-mobile"></i>
                <h3 class="title">Develop Research Infrastructure</h3>
                <p class="description">
                 To establish and maintain a robust research support system—including databases, funding opportunities, and research management tools—to enhance productivity and impact.
                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6  mb-4">
            <div class="serviceBox">
                <i class="service-icon fa fa-mobile"></i>
                <h3 class="title">Integrate Research with Societal Needs</h3>
                <p class="description">
                  To align research priorities with national development goals, community needs, and global sustainability challenges, thereby ensuring relevance and social contribution.
                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6  mb-4">
            <div class="serviceBox">
                <i class="service-icon fa fa-mobile"></i>
                <h3 class="title">Encourage Quality Publications</h3>
                <p class="description">
                  To support and guide researchers in publishing their work in reputable national and international journals, ensuring academic integrity and global visibility.
                </p>
            </div>
        </div>
    </div>
</div>



    </main>
@endsection
