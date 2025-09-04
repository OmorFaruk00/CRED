@extends('layouts.master')
@section('content')
<style>
.main-vision{
    font-family: 'Poppins', sans-serif;
    position: relative;
}
.main-vision:after{
    content: '';
    display: block;
    clear: both;
}
.main-vision .vision{
    width: 60%;
    margin: 0 30px 20px 0;
    float: left;
}
.main-vision .vision-content{
    color: #333;
    min-height: 150px;
    padding: 30px;
    border: 3px solid #5cb874;
    display: block;
    position: relative;
    z-index: 1;
}
.main-vision .vision-content:before,
.main-vision .vision-content:after{
    content: '';
    background: #fff;
    box-shadow: 0 0 10px -1px rgba(0,0,0,0.3);
    position: absolute;
    left: 10px;
    top: 10px;
    bottom: 10px;
    right: 10px;
    z-index: -1;
}
.main-vision .vision-content:after{
    background-color: #5cb874;
    height: 3px;
    width: 100px;
    box-shadow: none;
    transform: translateY(-50%);
    left: 100%;
    right: auto;
    top: 50%;
    bottom: auto;
    z-index: 1;
}
.main-vision .vision-content:hover{ text-decoration: none; }
.main-vision .vision-icon{
    color: #fff;
    background: linear-gradient(to bottom,#fdfcf8,#b2b3b4);
    font-size: 45px;
    text-align: center;
    line-height: 108px;
    height: 105px;
    width: 105px;
    box-shadow: 0 0 7px rgba(0,0,0,0.2);
    transform: translateY(-50%) rotate(45deg);
    position: absolute;
    top: 50%;
    right: -200px;
}
.main-vision .vision-icon:before{
    content: "";
   background: linear-gradient(to top,#5cb874
,#5cb874
);
    box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
    transform: translateX(-50%)translateY(-50%);
    position: absolute;
    width: 75%;
    height: 75%;
    top: 50%;
    left: 50%;
}
.main-vision .vision-icon i{
    line-height:inherit;
    transform: rotate(-45deg);
}
.main-vision .title{
    color: #5cb874;
    font-size: 22px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 7px 0;
}
.main-vision .description{
    font-size: 14px;
    letter-spacing: 1px;
    text-align: justify;
    margin: 0;
}
.main-vision .vision:nth-child(even){
    float: right;
    margin: 0 0 20px 30px;
}
.main-vision .vision:nth-child(even) .vision-content:after{
    left: auto;
    right: 100%;
}
.main-vision .vision:nth-child(even) .vision-icon{
    right: auto;
    left: -200px;
}
.main-vision .vision:nth-child(4n+2) .vision-content{ border-color: #37792F; }
.main-vision .vision:nth-child(4n+2) .vision-content:after{ background-color: #6AA72E; }
.main-vision .vision:nth-child(4n+2) .vision-icon:before{
     background: linear-gradient(to top,#37792F,#6AA72E);
}
.main-vision .vision:nth-child(4n+2) .title{ color: #37792F; }
.main-vision .vision:nth-child(4n+3) .vision-content{ border-color: #37792F; }
.main-vision .vision:nth-child(4n+3) .vision-content:after{ background-color: #37792F; }
.main-vision .vision:nth-child(4n+3) .vision-icon:before{
    background: linear-gradient(to top,#37792F,#6AA72E);
}
.main-vision .vision:nth-child(4n+3) .title{ color: #37792F; }
.main-vision .vision:nth-child(4n+4) .vision-content{ border-color: #08abcc; }
.main-vision .vision:nth-child(4n+4) .vision-content:after{ background-color: #08abcc; }
.main-vision .vision:nth-child(4n+4) .vision-icon:before{
    background: linear-gradient(to top,#04779e,#08abcc);
}
.main-vision .vision:nth-child(4n+4) .title{ color: #08abcc; }
@media screen and (max-width:767px){
    .main-vision .vision{
        width: 100%;
        padding: 0 170px 0 0;
    }
    .main-vision .vision:nth-child(even){ padding: 0 0 0 170px; }
    .main-vision .vision-content:after{ width: 50px; }
    .main-vision .vision-icon{ right: -150px; }
    .main-vision .vision:nth-child(even) .vision-icon{ left: -150px; }
}
@media screen and (max-width:576px){
    .main-vision .vision,
    .main-vision .vision:nth-child(even){
        padding: 35px 0 0 0;
        margin: 0 0 10px;
    }
    .main-vision .vision-content{ padding-top: 45px; }
    .main-vision .vision-content:after{ display: none; }
    .main-vision .vision .vision-icon{
        font-size: 25px;
        line-height: 50px;
        height: 50px;
        width: 50px;
        right: 7px;
        top: -27px;
        transform: translateY(0) rotate(45deg);
    }
    .main-vision .vision:nth-child(even) .vision-icon{ left: 7px; }
    .main-vision .vision .vision-icon:before{
        height: 83%;
        width: 83%;
    }
    .main-vision .title{ font-size: 18px; }
}
</style>
    <main class="main">
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">About</li>
                        <li class="current">Vision & Mission</li>
                    </ol>
                </div>
            </nav>
        </div>
        <section id="starter-section" class="starter-section section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Vision Mission Section</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
        </section>

        <div class="container">

    <div class="row">
        <div class="mb-5">
            <div class="main-vision">
                <div class="vision pb-4">
                    <a href="#" class="vision-content">
                        <div class="vision-icon">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h3 class="title">Vision</h3>
                        <p class="description">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur culpa ut autem eligendi ipsa deserunt aspernatur voluptas cum dolore iusto atque praesentium optio architecto, vel sint tenetur fugit, sequi recusandae quidem repudiandae unde perspiciatis ipsum. Dicta, numquam voluptate similique, suscipit sapiente ipsam a quam molestias modi, et nam ratione! Cupiditate.
                        </p>
                    </a>
                </div>
                <div class="vision">
                    <a href="#" class="vision-content">
                        <div class="vision-icon">
                            <i class="fa-solid fa-rocket"></i>
                        </div>
                        <h3 class="title">Mission</h3>
                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore expedita minima eius rerum aliquid animi odio quod quia tempora perferendis numquam ad reprehenderit, deleniti sunt labore saepe at quam veritatis eaque vel impedit corrupti, nisi perspiciatis maxime? Explicabo ab neque officia cupiditate tenetur natus, doloremque illo, vel eligendi beatae architecto.
                        </p>
                    </a>
                </div>


            </div>
        </div>
    </div>
</div>
    </main>
@endsection
