@extends('site.master')

@section('title','Chi tiết')
@section('body')
<main>
            
    <!-- breadcrumb-area -->
     <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/site/img/bg/bdrc-bg.png)">
       
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xl-12 col-lg-12">
                     <div class="breadcrumb-wrap text-left">
                         <div class="breadcrumb-title">
                             <h2>Event Details</h2>    
                             
                         </div>
                     </div>
                 </div>
                 <div class="breadcrumb-wrap2">
                       
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Event Details</li>
                             </ol>
                         </nav>
                     </div>
                 
             </div>
         </div>
     </section>
     <!-- breadcrumb-area-end -->            
     <!-- Project Detail -->
     <section class="project-detail">
         <div class="container">
             <!-- Upper Box -->
             <div class="upper-box">
                 <div class="single-item-carousel owl-carousel owl-theme">
                     <figure class="image"><img src="/site/img/blog/inner_b1.jpg" alt=""></figure>                    
                 </div>
             </div>

             <!-- Lower Content -->
             <div class="lower-content2">
                 <div class="row">
                     <div class="text-column col-lg-9 col-md-12 col-sm-12">
                         <div class="s-about-content wow fadeInRight" data-animation="fadeInRight" data-delay=".2s">  
                            <h2>UI/UX Design Contest 2023</h2>
                            <p>The world of search engine optimization is complex and ever-changing, but you can easily understand the basics, and even a small amount of SEO knowledge can make a big difference. Free SEO education is also widely available on the web, including in guides like this! (Woohoo!) This guide is designed to describe all major aspects of SEO, from finding the terms and phrases (keywords) that can generate qualified traffic to your website, to making your site friendly to search engines, to building links and marketing the unique value of your site.Etiam pharetra erat sed fermentum feugiat velit mauris egestas quam ut erat justo.</p>
                             <div countdown class="conterdown wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s" data-date="Jan 1 2024 00:00:00">
                                  <div class="timer">										 
                                     <div class="timer-outer bdr1">												
                                        <span class="days" data-days>0</span> 
                                        <div class="smalltext">Days</div>
                                        <div class="value-bar"></div>
                                     </div>
                                     <div class="timer-outer bdr2">
                                        <span class="hours" data-hours>0</span> 
                                        <div class="smalltext">Hours</div>
                                     </div>
                                     <div class="timer-outer bdr3">
                                        <span class="minutes" data-minutes>0</span> 
                                        <div class="smalltext">Minutes</div>
                                     </div>
                                     <div class="timer-outer bdr4">
                                        <span class="seconds" data-seconds>0</span> 
                                        <div class="smalltext">Seconds</div>
                                     </div>
                                     <p id="time-up"></p>
                                  </div>
                             </div>
                                 <p>Fusce eleifend donec sapien sed phase lusa pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu avamus nda leo Etiam ind arcu. Morbi justo mauris tempus pharetra interdum at congue semper purus. Lorem ipsum dolor sit.The world of search engine optimization is complex and ever-changing, but you can easily understand the basics.</p>
                                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing.</p>
                                 <div class="two-column mt-30">
                                     <div class="row aling-items-center">
                                          <div class="image-column col-xl-6 col-lg-12 col-md-12">
                                              <div class="footer-social mt-10">                                    
                                                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                     <a href="#"><i class="fab fa-instagram"></i></a>
                                                     <a href="#"><i class="fab fa-twitter"></i></a>
                                                 </div>
                                         </div>
                                         <div class="text-column col-xl-6 col-lg-12 col-md-12 text-right">
                                           
                                         </div>

                                     </div>
                                 </div>
                             </div>
                     </div>

                     <div class="info-column col-lg-3 col-md-12 col-sm-12">
                         <div class="inner-column2">
                             <h3>Event Details</h3>
                             <ul class="project-info clearfix">
                                 <li>
                                     <span class="icon fal fa-clock"></span>
                                     <strong>4:00 pm - 6:00 pm</strong>
                                 </li>

                                 <li>
                                     <span class="icon fal fa-calendar-alt"></span>
                                     <strong>03 March, 2022</strong>
                                 </li>

                                 <li>
                                     <span class="icon fal fa-map-marker-check"></span>
                                     <strong>12/A, NewYork Sydney City</strong>
                                 </li>

                                 <li>
                                     <span class="icon fal fa-envelope"></span>
                                     <strong>yourmail@gmail.com</strong>
                                 </li>

                                 <li>
                                     <span class="icon fal fa-phone"></span>
                                     <strong>+91 705 2101 786</strong>
                                 </li>
                                 <li>
                                     <div class="slider-btn">                                          
                                          <a style="background-color: orange" href="contact.html" class="btn ss-btn smoth-scroll">Book A Seat <i class="fal fa-long-arrow-right"></i></a>				
                                     </div>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </section>
     <!--End Project Detail -->

     <!-- brand-area -->
     <div class="brand-area pt-60 pb-60" style="background-color:#125875">
         <div class="container">
             <div class="row brand-active">
                 <div class="col-xl-2">
                     <div class="single-brand">
                         <img src="/site/img/brand/b-logo1.png" alt="img">
                     </div>
                 </div>
                 <div class="col-xl-2">
                     <div class="single-brand">
                          <img src="/site/img/brand/b-logo2.png" alt="img">
                     </div>
                 </div>
                 <div class="col-xl-2">
                     <div class="single-brand">
                          <img src="/site/img/brand/b-logo3.png" alt="img">
                     </div>
                 </div>
                 <div class="col-xl-2">
                     <div class="single-brand">
                           <img src="/site/img/brand/b-logo4.png" alt="img">
                     </div>
                 </div>
                 <div class="col-xl-2">
                     <div class="single-brand">
                          <img src="/site/img/brand/b-logo5.png" alt="img">
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- brand-area-end -->        
 </main>
@endsection