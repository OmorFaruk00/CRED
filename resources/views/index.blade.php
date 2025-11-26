@extends('layouts.master')
@section('content')

    <main class="main">

      <!-- Hero Section -->
       <x-slider />
     <!-- /Hero Section -->



     
      

      <x-about />

      <x-news-event />
      <!-- /News & Events Section -->

      <x-upcoming-events />



      <!-- Clients Section -->
       {{-- <x-client /> --}}
      <!-- /Clients Section -->

      <!-- Services Section -->

      <!-- /Services Section -->

      {{-- <x-publication /> --}}


       <!-- Featured Services Section -->
      <x-service />
      <!-- /Featured Services Section -->

      <!-- Call To Action Section -->
    <x-call-to-action />
      <!-- /Call To Action Section -->

      <!-- Portfolio Section -->
       <x-portfolio />
      <!-- /Portfolio Section -->

      <!-- Team Section -->
      {{-- <x-team /> --}}
      <!-- /Team Section -->

      <!-- Contact Section -->
      {{-- <x-contact /> --}}
      <!-- /Contact Section -->

    </main>
    @endsection

