@extends('site.master')

@section('title','Liên hệ')
@section('body')
<main>
            
    <!-- breadcrumb-area -->
     <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/site/img/bg/bdrc-bg.png)">
       
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xl-12 col-lg-12">
                     <div class="breadcrumb-wrap text-left">
                         <div class="breadcrumb-title">
                             <h2>Liên hệ</h2>  
                         </div>
                     </div>
                 </div>
                 <div class="breadcrumb-wrap2">
                       
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                             </ol>
                         </nav>
                     </div>
                 
             </div>
         </div>
     </section>
     <!-- breadcrumb-area-end -->
     
    <!-- services-area -->          
     <section id="services" class="services-area pt-120 pb-90 fix">
         <div class="container">
            <div class="row">
                  <div class="col-lg-12">
                     <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                         <h5><i class="fal fa-graduation-cap"></i> Liên hệ chúng tôi</h5>
                         <h2>
                          Thông tin chung
                         </h2>
                      
                     </div>
                    
                 </div>
             </div>
             <div class="row">
                  <div class="col-lg-4 col-md-4">
                      
                   <div class="services-box text-center">
                       <div class="services-icon">
                            <img src="/site/img/bg/contact-icon01.png" alt="image">
                         </div>
                        <div class="services-content2">
                             <h5><a href="tel:+14440008888">+0356694603</a></h5>   
                             <p>Số điện thoại</p>
                         </div>
                     </div>   
                      
                  
                 </div>
                 <div class="col-lg-4 col-md-4">
                      
                   <div class="services-box text-center active">
                       <div class="services-icon">
                           <img src="/site/img/bg/contact-icon02.png" alt="image">
                         </div>
                        <div class="services-content2">
                             <h5><a href="mailto:jobs@webtrueexample.com">pxinh3771@gmail.com</a></h5>   
                              <p>Thư điện tử</p>
                              
                         </div>
                     </div>   
                      
                  
                 </div>
                 <div class="col-lg-4 col-md-4">
                      
                   <div class="services-box text-center">
                       <div class="services-icon">
                          <img src="/site/img/bg/contact-icon03.png" alt="image">
                         </div>
                        <div class="services-content2">
                             <h5>Thành phố Vinh, Nghệ An</h5>   
                             <p>Địa chỉ</p>
                         </div>
                     </div>   
                      
                  
                 </div>
                 
             </div>
         </div>
     </section>
     <!-- services-area-end -->
     <!-- map-area-end -->
     <div class="map fix" style="background: #f5f5f5;">
         <div class="container-flud">
             
             <div class="row">
                 <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212867.83634504632!2d-112.24455686962897!3d33.52582710700138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b743829374b03%3A0xabaac255b1e43fbe!2sPlexus%20Worldwide!5e0!3m2!1sen!2sin!4v1618567685329!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                 </div>
             </div>
         </div>
     </div>
      <!-- map-area-end -->
      <!-- contact-area -->
     <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix" style="background: #e7f0f8;">
         
         <div class="container">
      
             <div class="row">
                 
                  
                 <div class="col-lg-12 order-2">
                     <div class="contact-bg">
                     <div class="section-title center-align text-center mb-50">
                         <h2>
                            Custom Inqure Form
                         </h2>
                        
                     </div>
                      
                     <form action="{{ route('contact.store') }}" method="post" class="contact-form mt-30 text-center">
                        @csrf <!-- Thêm token bảo mật của Laravel -->
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="contact-field p-relative c-name mb-30">
                                    <input type="text" id="firstn" name="name" placeholder="First Name" required>
                                    <i class="icon fal fa-user"></i>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-field p-relative c-subject mb-30">
                                    <input type="email" id="email" name="email" placeholder="Email" required>
                                    <i class="icon fal fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-field p-relative c-subject mb-30">
                                    <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                    <i class="icon fal fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-30">
                                    <textarea name="message" id="message" cols="30" rows="50" placeholder="Write comments"></textarea>
                                    <i class="icon fal fa-edit"></i>
                                </div>
                                <div class="slider-btn text-center">
                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Make An Request <i class="fal fa-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                     
                     </div>
                 
                 </div>
             </div>
             
         </div>
        
     </section>
     <!-- contact-area-end -->
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