@extends('layouts.master')
@section('content')

    <main class="main">

      <!-- Hero Section -->
    <x-slider />
     <!-- /Hero Section -->

      <!-- Featured Services Section -->
      <x-service />
      <!-- /Featured Services Section -->


      <x-about />

      <x-news-event />
      <!-- /News & Events Section -->





      <!-- Clients Section -->
       <x-client />
      <!-- /Clients Section -->

      <!-- Services Section -->
      <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row g-5">

            <div class="col-lg-4 col-md-6" data-aos="fade-up"
              data-aos-delay="100">
              <div class="service-item item-cyan position-relative">
                <i class="bi bi-activity icon"></i>
                <h3><a href="service-details.html"
                    class="read-more stretched-link">Nesciunt Mete</a></h3>
                <p>Provident nihil minus qui consequatur non omnis maiores. Eos
                  accusantium minus dolores iure perferendis tempore et
                  consequatur.</p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up"
              data-aos-delay="200">
              <div class="service-item item-orange position-relative">
                <i class="bi bi-broadcast icon"></i>
                <h3><a href="service-details.html"
                    class="read-more stretched-link">Eosle Commodi</a></h3>
                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto
                  sint. Libero corrupti neque eum hic non ut nesciunt
                  dolorem.</p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up"
              data-aos-delay="300">
              <div class="service-item item-teal position-relative">
                <i class="bi bi-easel icon"></i>
                <h3><a href="service-details.html"
                    class="read-more stretched-link">Ledo Markt</a></h3>
                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur.
                  Minus ea aut. Vel qui id voluptas adipisci eos earum
                  corrupti.</p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up"
              data-aos-delay="400">
              <div class="service-item item-red position-relative">
                <i class="bi bi-bounding-box-circles icon"></i>
                <h3><a href="service-details.html"
                    class="read-more stretched-link">Asperiores Commodi</a></h3>
                <p>Non et temporibus minus omnis sed dolor esse consequatur.
                  Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up"
              data-aos-delay="500">
              <div class="service-item item-indigo position-relative">
                <i class="bi bi-calendar4-week icon"></i>
                <h3><a href="service-details.html"
                    class="read-more stretched-link">Velit Doloremque.</a></h3>
                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut
                  aut ipsam corporis aut. Sed animi at autem alias eius
                  labore.</p>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up"
              data-aos-delay="600">
              <div class="service-item item-pink position-relative">
                <i class="bi bi-chat-square-text icon"></i>
                <h3><a href="service-details.html"
                    class="read-more stretched-link">Dolori Architecto</a></h3>
                <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut
                  neque non et debitis iure. Corrupti recusandae ducimus
                  enim.</p>
              </div>
            </div><!-- End Service Item -->

          </div>

        </div>

      </section><!-- /Services Section -->

      <x-publication />

      <!-- Call To Action Section -->
      <section id="call-to-action"
        class="call-to-action section accent-background">

        <div class="container">

          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-9 text-center text-xl-start">
              <h3>Call To Action</h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.</p>
            </div>
            <div class="col-xl-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
          </div>

        </div>

      </section><!-- /Call To Action Section -->

      <!-- Portfolio Section -->
       <x-portfolio />
      <!-- /Portfolio Section -->

      <!-- Team Section -->
      <x-team />
      <!-- /Team Section -->

      <!-- Contact Section -->
      <x-contact />
      <!-- /Contact Section -->

    </main>
    @endsection

