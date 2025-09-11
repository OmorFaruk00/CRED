@extends('layouts.master')
@section('research-title', 'Research - Ongoing Projects')

@section('content')
<style>


</style>

<div class="page-title" data-aos="fade">
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="current">Research</li>
                <li class="current">Ongoing Research Project</li>
            </ol>
        </div>
    </nav>
</div>

<div class="container section-title py-4" data-aos="fade-up">
    <h2>Ongoing Research Project</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div>

<div class="container">
  <div class="row pb-4">
    <div class="col-md-6 col-lg-4 mb-4">
      <div class="research-card">
        <a href="#" class="link"></a>
        <img src="{{ asset('assets/img/card.jpg') }}" alt="card" class="img-fluid">
        <div class="research-info">
          <h2 class="research-title">Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text</h2>
          <div class="research-date">2022/08/10</div>
          <div class="research-details">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nemo deserunt in tenetur similique hic reprehenderit officia, asperiores voluptatibus repudiandae!</p>
            <a href="#" class="research-btn-more">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <div class="research-card">
        <a href="#" class="link"></a>
        <img src="https://images.unsplash.com/photo-1657211548377-67c51948661f" alt="" class="img-fluid">
        <div class="research-info">
          <h2 class="research-title">Lorem Ipsum is simply dummy text</h2>
          <div class="research-date">2022/08/10</div>
          <div class="research-details">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
            <a href="#" class="research-btn-more">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <div class="research-card">
        <a href="#" class="link"></a>
        <img src="https://images.unsplash.com/photo-1652169890471-17c3e68bf920" alt="" class="img-fluid">
        <div class="research-info">
          <h2 class="research-title">Lorem Ipsum is simply dummy text</h2>
          <div class="research-date">2022/08/10</div>
          <div class="research-details">
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in classical Latin.</p>
            <a href="#" class="research-btn-more">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
