@extends('layouts.master')
@section('content')
    <style>
        .contact-block p
        {
            line-height: 1 !important;
            color: #000 !important;
            font-size: 14px !important;
            padding: 0px 20px;

        }
          
        .contact-block h4 {
            line-height: 1 !important;
            color: #000 !important;
            font-size: 18px;
            padding: 0px 20px;
            font-weight: 600

        }
    </style>
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
                <h4>Center for Research, Excellence and Development (CRED)
                </h4>
                <h5> Dhaka International University</h5>
            </div>
        </section>

        <div class="container">
            {{-- <div class="email-signature mb-4" data-aos="fade-up">
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

            </div> --}}
            <div class="email-signature mb-5" data-aos="fade-up">
                <p class="message">At the Center for Research, Excellence and Development (CRED), we believe that research
                    is not just the pursuit of knowledge—it is the foundation for innovation, progress, and societal
                    transformation. Our mission is to nurture a dynamic research culture within Dhaka International
                    University that empowers both students and faculty to become pioneers of impactful discovery and thought
                    leadership.</p>
                <p class="message">Guided by our vision to position DIU as a leading institution recognized for vibrant and
                    interdisciplinary research, CRED is committed to creating an environment where ideas thrive,
                    collaborations flourish, and meaningful contributions are made to both national and global challenges.
                    Through our initiatives, we aim to provide comprehensive support—training, mentorship, and resources—to
                    enhance research capacity and quality across all disciplines.</p>
                <p class="message">We encourage our researchers to think beyond traditional boundaries, engage in
                    collaborative and cross-disciplinary projects, and publish their findings in reputable academic
                    platforms. At the heart of our work lies a shared goal: to translate academic excellence into real-world
                    solutions that contribute to sustainable development and societal well-being.</p>
                <p class="message">CRED stands as a catalyst for excellence, innovation, and knowledge creation. Together,
                    we are shaping a future where Dhaka International University becomes a beacon of research distinction
                    and a driving force in global academic advancement.</p>
                <p class="message"></p>

                <div class="contact-block">
                    <h4>Dr. Md. Shariful Alam</h4>
                    <h4>Director</h4>
                    <p>Center for Research, Excellence and Development (CRED)</p>
                    <p>Dhaka International University</p>
                    <p>Phone: 01781220000</p>
                    <p>Email: shariful1963@gmail.com</p>
                </div>
            </div>
        </div>


    </main>
@endsection
