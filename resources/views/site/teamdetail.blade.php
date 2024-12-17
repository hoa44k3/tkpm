@extends('site.master')

@section('title','Chi tiết teacher')
@section('body')
<main>
            
    <!-- breadcrumb-area -->
     <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/site/img/bg/bdrc-bg.png)">
       
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xl-12 col-lg-12">
                     <div class="breadcrumb-wrap text-left">
                         <div class="breadcrumb-title">
                             <h2>Teacher Details</h2>    
                             
                         </div>
                     </div>
                 </div>
                 <div class="breadcrumb-wrap2">
                       
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Teacher Details</li>
                             </ol>
                         </nav>
                     </div>
                 
             </div>
         </div>
     </section>
     <!-- breadcrumb-area-end -->   
      <!-- Project Detail -->
     <section class="team-area-content" >
         <div class="container">

             <!-- Lower Content -->
             <div class="lower-content">
                 <div class="row">
                      <div class="col-lg-5 col-md-12 col-sm-12">
                          <div class="team-img-box">
                              <a href="team-single.html"><img src="/site/img/team/team01.jpg" alt="img"></a>
                          </div>
                     </div>

                     <div class="text-column col-lg-7 col-md-12 col-sm-12">
                        <div class="s-about-content pl-30 wow fadeInRight" data-animation="fadeInRight" data-delay=".2s">  
                            <h2>Ronal Anderson</h2>
                            <p>The world of search engine optimization is complex.</p>
                             <div class="per-info">
                                 <div class="info-text">
                                     <strong>Course: 2</strong>
                                     <p>Students: 30</p>
                                 </div>
                                 <div class="info-text">
                                     <strong>Experiance:</strong>
                                     <p>10 Years</p>
                                 </div>                                        
                                 <div class="info-text">
                                     <p><i class="fal fa-phone"></i> +(963) 2145 3654</p>
                                     <p><i class="fal fa-envelope"></i> example@example.com</p>
                                 </div>
                             </div>
                             <h3>About Info</h3>
                                 <p>Fusce eleifend donec sapien sed phase lusa pellentesque lacus.Vivamus lorem arcu semper duiac. Cras ornare arcu avamus nda leo Etiam ind arcu. Morbi justo mauris tempus pharetra interdum at congue semper purus. Lorem ipsum dolor sit.The world of search engine optimization is complex and ever-changing, but you can easily understand the basics.</p>
                                
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
                                           <div class="slider-btn">                                          
                                              <a href="team.html" class="btn ss-btn smoth-scroll">Read More <i class="fal fa-long-arrow-right"></i></a>				
                                         </div>
                                         </div>

                                     </div>
                                 </div>
                             </div>
                     </div>


                 </div>
             </div>

         </div>
     </section>
     <!--End Project Detail -->
 </main>
 @endsection	