<section id="clients" class="clients section light-background">
       <div class="container section-title" data-aos="fade-up">
          <h2>Recent Publications</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit</p>
        </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper publication">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="{{ asset('/assets/img/card.jpg') }}" class="card-img-top" alt="Publication">
                        <div class="card-body">
                            <h5 class="card-title text-dark text-truncate-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam molestiae
                                necessitatibus accusantium fugiat incidunt libero ex, tempore voluptates excepturi
                                dolorem!
                            </h5>
                            <p class="card-text text-muted text-truncate-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore incidunt alias
                                molestiae modi aperiam architecto eum laudantium soluta? Totam, repellat?
                            </p>
                        </div>
                        <a href="#" class="card-btn ">Read More</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="{{ asset('/assets/img/card.jpg') }}" class="card-img-top" alt="Publication">
                        <div class="card-body">
                            <h5 class="card-title text-dark text-truncate-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam molestiae
                                necessitatibus accusantium fugiat incidunt libero ex, tempore voluptates excepturi
                                dolorem!
                            </h5>
                            <p class="card-text text-muted text-truncate-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore incidunt alias
                                molestiae modi aperiam architecto eum laudantium soluta? Totam, repellat?
                            </p>
                        </div>
                        <a href="#" class="card-btn ">Read More</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="{{ asset('/assets/img/card.jpg') }}" class="card-img-top" alt="Publication">
                        <div class="card-body">
                            <h5 class="card-title text-dark text-truncate-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam molestiae
                                necessitatibus accusantium fugiat incidunt libero ex, tempore voluptates excepturi
                                dolorem!
                            </h5>
                            <p class="card-text text-muted text-truncate-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore incidunt alias
                                molestiae modi aperiam architecto eum laudantium soluta? Totam, repellat?
                            </p>
                        </div>
                        <a href="#" class="card-btn ">Read More</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="{{ asset('/assets/img/card.jpg') }}" class="card-img-top" alt="Publication">
                        <div class="card-body">
                            <h5 class=" text-dark text-truncate-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam molestiae
                                necessitatibus accusantium fugiat incidunt libero ex, tempore voluptates excepturi
                                dolorem!
                            </h5>
                            <p class=" text-muted text-truncate-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore incidunt alias
                                molestiae modi aperiam architecto eum laudantium soluta? Totam, repellat?
                            </p>
                        </div>
                        <a href="#" class="card-btn ">Read More</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const clientSwiper = new Swiper('.publication', {
            loop: true,
            speed: 600,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            spaceBetween: 40,
            pagination: {
                el: '.publication .swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 40
                }
            }
        });
    });
</script>
