<div class="featured-services section light-background">
    <div class="container">
           <div class="container section-title" data-aos="fade-up">
          <h2>Upcoming Events</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit</p>
        </div>

    <div class="row py-5">
        <div class="col-lg-6 col-md-6 col-sm-12  mx-auto">
            <div class="upcoming-event">

                <div class="signature-icon">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <div class="signature-details">
                    <h2 class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit accusantium qui quos quibusdam optio necessitatibus ut voluptate? Quis, sunt natus. </h2>
                    <span class="post">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit accusantium qui quos quibusdam optio necessitatibus ut voluptate? Quis, sunt natus.</span>
                    <div class="d-flex justify-content-between pt-3">
                        <p> <i class="fa-solid fa-calendar-days me-1 "></i><strong>  20-05-2025 </strong></p>
                        <a href="#"> View More</a>
                    </div>
                </div>

            </div>
        </div>
           <div class="col-lg-6 col-md-6 col-sm-12  mx-auto">
            <div class="upcoming-event">

                <div class="signature-icon">
                   <i class="fa-solid fa-bullhorn"></i>
                </div>
                <div class="signature-details">
                    <h2 class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit accusantium qui quos quibusdam optio necessitatibus ut voluptate? Quis, sunt natus. </h2>
                    <span class="post">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit accusantium qui quos quibusdam optio necessitatibus ut voluptate? Quis, sunt natus.</span>
                     <div class="d-flex justify-content-between pt-3">
                        <p> <i class="fa-solid fa-calendar-days me-1 "></i><strong>  20-05-2025 </strong></p>
                        <a href="#"> View More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<style>

.upcoming-event{
    background: #039982;
    font-family: 'Noto Sans', sans-serif;
    padding: 50px 20px 40px 140px;
    border-radius: 25px;
    box-shadow: 0 0 3px #999,10px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    z-index: 1;
}
.upcoming-event:before,
.upcoming-event:after{
    content: "";
    background: #00c0a9;
    width: 100px;
    height: 100%;
    border-radius: 100%;
    position: absolute;
    top: 0;
    left: -45px;
}
.upcoming-event:after{
    background: #fff;
    width: 88%;
    border-radius: 150px 0 0 150px;
    left: auto;
    right: 0;
    z-index: -1;
}
.upcoming-event .signature-icon{
    color: #00c0a9;
    background-color: #eaeaea;
    font-size: 40px;
    text-align: center;
    line-height: 65px;
    width: 90px;
    height: 90px;
    border-radius: 20px;
    border: 10px solid #fff;
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    left: 16px;
    z-index: 1;
}
.upcoming-event .signature-icon i{ line-height:inherit; }
.upcoming-event .signature-details{
    text-transform: capitalize;
    width: 100%;
    padding: 10px 0 0;
    /* margin: 0 15px 0 0; */
    float: left;

}
.upcoming-event .title{
    font-size: 18px;
    font-weight: 600;
    display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  text-align: justify
}
.upcoming-event .post{
    font-size: 14px;
      display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  text-align: justify
}
.upcoming-event .signature-content{
    width: 100%;
    padding: 0 0 0 10px;
    margin: 0;
    list-style: none;
    border-left: 2px solid #00c0a9;
    display: inline-block;
}


@media screen and (max-width:576px){
    .upcoming-event{ padding: 180px 15px 20px; }
    .upcoming-event:before{
        background: #00c0a9;
        width: 100%;
        height: 100px;
        border-radius: 100%;
        top: -45px;
        left: 0;
    }
    .upcoming-event:after{
        height: 74%;
        width: 100%;
        border-radius: 150px 150px 0 0;
        top: auto;
        bottom: 0;
    }
    .upcoming-event .signature-icon{
        margin: 0 auto;
        top: 70px;
        left: 0;
        right: 0;
    }
    .upcoming-event .signature-details{
        text-align: center;
        width: 100%;
        margin: 0 auto;
        float: none;
    }
    .upcoming-event .title{ font-size: 25px; }
    .upcoming-event .signature-content{
        text-align: center;
        width: 100%;
        padding: 15px 0 0;
        border-left: none;
        float: none;
    }
}

</style>
