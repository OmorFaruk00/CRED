@extends('layouts.master')
@section('research-title', 'Research - Ongoing Projects')

@section('content')
<style>
    .project{
     box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
     border-radius: 5px
    }
    .project-img{
        height: 200px;
        width:100%

    }
    .project-content{
        padding: 18px ;

    }
    .project-title{
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-align: justify;
    font-weight: 500;
    font-size: 20px

    }
    .project-desc{
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-align: justify;
    color: gray
    }
    .project-btn{
        color: #fff;
        background: #5cb874;
        padding: 5px 10px;
        border-radius: 5px;

    }
    .project-btn:hover{
        color:#000;
    }



</style>

<div class="page-title" data-aos="fade">
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="current">Research</li>
                <li class="current">Completed Research</li>
            </ol>
        </div>
    </nav>
</div>

<div class="container section-title py-4" data-aos="fade-up">
    <h2>Completed Research</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div>


<div class="container">
    <div class="row  project mb-4">
        <div class="col-lg-3 col-md-3" style="margin: 0px ; padding:0px">
            <img src="{{ asset('assets/img/card.jpg') }}" alt="" class="project-img">
        </div>
        <div class="col-lg-9 col-md-9">
       <div class="project-content">
             <p class="project-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, ipsam iure corporis magnam ut iusto, culpa aspernatur possimus fugiat architecto quae dolor cupiditate nesciunt natus tenetur dolore eius, sapiente asperiores omnis itaque. Eaque sapiente saepe quas, libero porro fuga voluptate!</p>
            <p class="project-desc ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum perferendis dolorem, corrupti fugit deserunt rem earum nostrum ex fuga dolores impedit aut eaque beatae minus esse libero repellat sapiente quisquam sit cum odio asperiores, tenetur expedita enim! Possimus, nisi a? Dicta eum nihil possimus optio qui est amet. Laborum, esse!</p>
            <a href="" class="project-btn"> Read More..</a>
       </div>
        </div>
    </div>
       <div class="row  project mb-4">
        <div class="col-lg-3 col-md-3" style="margin: 0px ; padding:0px">
            <img src="{{ asset('assets/img/card.jpg') }}" alt="" class="project-img">
        </div>
        <div class="col-lg-9 col-md-9">
       <div class="project-content">
             <p class="project-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, ipsam iure corporis magnam ut iusto, culpa aspernatur possimus fugiat architecto quae dolor cupiditate nesciunt natus tenetur dolore eius, sapiente asperiores omnis itaque. Eaque sapiente saepe quas, libero porro fuga voluptate!</p>
            <p class="project-desc ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum perferendis dolorem, corrupti fugit deserunt rem earum nostrum ex fuga dolores impedit aut eaque beatae minus esse libero repellat sapiente quisquam sit cum odio asperiores, tenetur expedita enim! Possimus, nisi a? Dicta eum nihil possimus optio qui est amet. Laborum, esse!</p>
            <a href="" class="project-btn"> Read More..</a>
       </div>
        </div>

    </div>
       <div class="row  project mb-5">
        <div class="col-lg-3 col-md-3" style="margin: 0px ; padding:0px">
            <img src="{{ asset('assets/img/card.jpg') }}" alt="" class="project-img">
        </div>
        <div class="col-lg-9 col-md-9">
       <div class="project-content">
             <p class="project-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, ipsam iure corporis magnam ut iusto, culpa aspernatur possimus fugiat architecto quae dolor cupiditate nesciunt natus tenetur dolore eius, sapiente asperiores omnis itaque. Eaque sapiente saepe quas, libero porro fuga voluptate!</p>
            <p class="project-desc ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum perferendis dolorem, corrupti fugit deserunt rem earum nostrum ex fuga dolores impedit aut eaque beatae minus esse libero repellat sapiente quisquam sit cum odio asperiores, tenetur expedita enim! Possimus, nisi a? Dicta eum nihil possimus optio qui est amet. Laborum, esse!</p>
            <a href="" class="project-btn"> Read More..</a>
       </div>
        </div>

    </div>
</div>

@endsection
