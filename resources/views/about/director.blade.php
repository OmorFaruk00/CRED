@extends('layouts.master')
@section('content')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">About</li>
                        <li class="current">Director</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="starter-section" class="starter-section section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Message from the Director </h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
        </section>

        <div class="container">
            <div class="email-signature mb-4" data-aos="fade-up">
                <div class="signature-details">
                    <div class="signature-icon">
                        <img src="https://cdn.yahoobaba.net/email-signature/demo75/images/img-1.jpg" alt="">
                    </div>
                    <div class="inner-content">
                        <h2 class="title">Williamson</h2>
                        <span class="post">Director</span>
                    </div>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <ul class="signature-content">
                    <li>Mobile : +123 456 789</li>
                    <li>Email : your_email@email.com</li>
                    <li>Website : www.yourwebsite.com</li>
                    <li>Address : #1234, Lorem Ipsum</li>
                </ul>

            </div>
            <div class="email-signature mb-5" data-aos="fade-up">
                <p class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cumque et, commodi odio earum quo reprehenderit dolore quam eos at blanditiis accusamus dignissimos dolor impedit possimus alias quis expedita quaerat laudantium iste perferendis id deserunt? A aut possimus, nesciunt ex repellat expedita dolorum nostrum. Impedit nostrum possimus rerum, fuga doloremque, autem ipsum, consequuntur minima nesciunt recusandae exercitationem illum dicta reiciendis tempore eius ullam corrupti eum quasi libero adipisci? Ut nihil odio tenetur earum id, officiis veritatis. Rem pariatur totam voluptas quidem, minima neque dolore? Amet quia ullam eos, praesentium id totam provident asperiores, molestiae repellendus quasi doloribus officiis mollitia nesciunt. Explicabo ratione vel adipisci ipsam ut modi vitae placeat atque odio qui. Praesentium voluptatem a sunt, repellendus nisi magnam, suscipit veritatis minus minima, error nobis neque nihil dolore eveniet amet iure quo quibusdam ea reiciendis sit. Architecto ipsam laborum et unde laudantium ea illo quam. Nisi, facere! Provident fugiat, maxime labore ex perferendis excepturi magnam culpa ipsam itaque, illum,</p>
            </div>
        </div>


    </main>
@endsection
