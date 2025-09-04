@extends('layouts.master')
@section('content')
    <style>



    </style>
    <main class="main">
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">About</li>
                        <li class="current">Governance & Structure</li>
                    </ol>
                </div>
            </nav>
        </div>




      <x-publication />








    </main>
@endsection
