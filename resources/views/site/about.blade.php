@extends('site.master')

@section('title','About')
@section('body')
<main>
            
    <!-- breadcrumb-area -->
     <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/site/img/bg/bdrc-bg.png)">
       
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xl-12 col-lg-12">
                     <div class="breadcrumb-wrap text-left">
                         <div class="breadcrumb-title">
                             <h2>Về chúng tôi</h2>    
                             
                         </div>
                     </div>
                 </div>
                 <div class="breadcrumb-wrap2">
                       
                     </div>
                 
             </div>
         </div>
     </section>
     <!-- breadcrumb-area-end -->
       <!-- about-area -->
     <section class="about-area about-p pt-120 pb-120 p-relative fix">
         <div class="animations-02"><img src="/site/img/bg/an-img-02.png" alt="contact-bg-an-01"></div>
         <div class="container">
             <div class="row justify-content-center align-items-center">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                         <img src="/site/img/features/about_img_05.png" alt="img">   
                        <div class="about-text second-about three-about">
                             <span>25 <sub>+</sub></span> 
                             <p>Years of Experience</p>
                         </div>
                     </div>
                 </div>
                 
             <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                         <div class="about-title second-title pb-25">  
                             <h5><i class="fal fa-graduation-cap"></i> Giới thiệu về trường đại học của chúng tôi</h5>
                             <h2>Một vài lời về trường đại học</h2>                                   
                         </div>
                            <p class="txt-clr">Cộng đồng của chúng tôi đang được kêu gọi tái hiện tương lai. Là trường đại học duy nhất có một trường thiết kế nổi tiếng kết hợp với các trường đại học hàng đầu, chúng tôi đang làm cho việc học trở nên phù hợp và mang tính chuyển đổi hơn.</p>
                             <p>Chúng tôi tự hào cung cấp các dịch vụ việc làm hàng đầu như quản lý bảng lương và phúc lợi và hỗ trợ cho phạm vi kinh doanh toàn cầu, việc đọc các văn bản hoặc tài liệu tôn giáo cũng thường được bao gồm trong sự tuân thủ.</p>
                             <div class="about-content2">
                             <div class="row">
                             <div class="col-md-12">
                              <ul class="green2">                                              
                                         <li><div class="abcontent"><div class="ano"><span>01</span></div> <div class="text"><h3>Bằng tiến sĩ</h3> <p>luôn luôn tạo ra hành trang mới cho ước mơ .</p></div></div></li>
                                         <li><div class="abcontent"><div class="ano"><span>02</span></div> <div class="text"><h3>Sinh viên toàn cầu</h3> <p>luôn luôn tạo ra hành trang mới cho ước mơ .</p></div></div></li>
                                         
                                    </ul>
                             </div>
                             </div>
                         </div>
                          
                     </div>
                 </div>
              
             </div>
         </div>
     </section>
     <!-- about-area-end -->
     <!-- cta-area -->
     <section class="cta-area cta-bg pt-50 pb-50" style="background-image:url(/site/img/bg/cta_bg02.png)">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-8">
                     <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                         <h2>Chương trình học bổng</h2>
                         <p>Tại Đại học Estuidar, chúng tôi chuẩn bị cho bạn khởi nghiệp bằng cách cung cấp một môi trường hỗ trợ, sáng tạo và chuyên nghiệp để học các kỹ năng thực tế và xây dựng mạng lưới liên hệ trong ngành..</p>
                     </div>
                                      
                 </div>
                 <div class="col-lg-4 text-right"> 
                     <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30" data-animation="fadeInDown animated" data-delay=".2s">
                               <a href="about.html" class="btn ss-btn smoth-scroll">Hỗ trợ tài chính <i class="fal fa-long-arrow-right"></i></a>			
                         </div>
                 </div>
             
             </div>
         </div>
     </section>
     <!-- cta-area-end -->	
    <!-- frequently-area -->
     <section class="faq-area pt-120 pb-120 p-relative fix">
         <div class="animations-10"><img src="/site/img/bg/an-img-04.png" alt="an-img-01"></div>
         <div class="animations-08"><img src="/site/img/bg/an-img-05.png" alt="contact-bg-an-01"></div>
         <div class="container">
             <div class="row justify-content-center  align-items-center">
                
                 <div class="col-lg-7">
                     <div class="section-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                         <h2>Nhận mọi câu trả lời ở đây..</h2>
                         <p>Một doanh nghiệp hoặc tổ chức được thành lập để cung cấp một dịch vụ cụ thể, thường là dịch vụ liên quan đến việc tổ chức các giao dịch.</p>
                     </div>
                     <div class="col-lg-5">
                        <h2>Đặt câu hỏi</h2>
                        <form method="POST" action="{{ route('faqs.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="question">Câu hỏi:</label>
                                <input type="text" id="question" name="question" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Gửi câu hỏi</button>
                        </form>
                     </div>
                        <div class="faq-wrap mt-30 pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="accordion" id="accordionExample">
                                @foreach ($faqs as $faq)
                                    <div class="card">
                                        <div class="card-header" id="heading{{ $faq['id'] }}">
                                            <h2 class="mb-0">
                                                <button class="faq-btn {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq['id'] }}">
                                                    {{ $faq['id'] }}. {{ $faq['question'] }}
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapse{{ $faq['id'] }}" class="collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                @if ($faq['answer'])
                                                    {{ $faq['answer'] }}
                                                @else
                                                    <form method="POST" action="{{ route('faqs.answer', $faq['id']) }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="answer{{ $faq['id'] }}">Trả lời câu hỏi:</label>
                                                            <textarea id="answer{{ $faq['id'] }}" name="answer" class="form-control" required></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-success mt-3">Trả lời</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>   
                    </div>
                 <div class="col-lg-5">
                     <div class="contact-bg02">
                     <div class="section-title wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                         <h2>
                            Tạo một liên hệ
                         </h2>
                       
                     </div>
                         
                     <form action="{{ route('contact.store') }}" method="post" class="contact-form mt-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                        @csrf <!-- Đừng quên thêm CSRF token -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-name mb-20">                                    
                                    <input type="text" id="firstn" name="firstn" placeholder="First Name" required>
                                </div>                               
                            </div>
                    
                            <div class="col-lg-12">                               
                                <div class="contact-field p-relative c-subject mb-20">                                   
                                    <input type="email" id="email" name="email" placeholder="Email" required>
                                </div>
                            </div>
                    
                            <div class="col-lg-12">                               
                                <div class="contact-field p-relative c-subject mb-20">                                   
                                    <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                </div>
                            </div>   
                    
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-30">                                  
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments" required></textarea>
                                </div>
                                <div class="slider-btn">                                          
                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">
                                        <span>Submit Now</span> 
                                        <i class="fal fa-long-arrow-right"></i>
                                    </button>				
                                </div>                             
                            </div>
                        </div>
                    </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- frequently-area-end -->	
    <!-- steps-area -->
     <section class="steps-area2 p-relative fix"  style="background-color: #125875;">
         <div class="animations-02"><img src="/site/img/bg/an-img-10.png" alt="an-img-01"></div>
         <div class="container">
   
             <div class="row align-items-center">
                 <div class="col-lg-6 col-md-12">
                     <div class="step-box step-box2 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                         <div class="dnumber">
                             <div class="date-box"><img src="/site/img/icon/fea-icon01.png" alt="icon"></div>
                         </div>
                         <div class="text">
                             <h2>Campus Tour</h2>
                             <p>Campus on a tour designed for prospective graduate and professional students. You will see how our university like, facilities, studenst and life in this university. Meet our graduate admissions representative to learn more about our graduate programs and decide what it the best for you.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-12">
                     <div class="step-img2 wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                         <img src="/site/img/bg/steps-img-2.png" alt="class image">
                     </div>
                    
                 </div>
                 
                
                 
             </div>
             
         </div>
     </section>
     <!-- steps-area-end -->
      <!-- steps-area -->
     <section class="steps-area2 p-relative fix"  style="background-color: #032e3f;">              
         <div class="container">
             <div class="animations-08"><img src="/site/img/bg/an-img-20.png" alt="contact-bg-an-01"></div>
             <div class="row align-items-center">                       
                 <div class="col-lg-6 col-md-12">
                     <div class="step-img3 wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                         <img src="/site/img/bg/steps-img-3.png" alt="class image">
                     </div>
                    
                 </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="step-box step-box3 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                         <div class="dnumber">
                             <div class="date-box"><img src="/site/img/icon/fea-icon03.png" alt="icon"></div>
                         </div>
                         <div class="text">
                             <h2>Powerful Alumni</h2>
                             <p>Campus on a tour designed for prospective graduate and professional students. You will see how our university like, facilities, studenst and life in this university. Meet our graduate admissions representative to learn more about our graduate programs and decide what it the best for you.</p>
                         </div>
                     </div>
                 </div>
                
                 
             </div>
             
         </div>
     </section>
     <!-- steps-area-end -->
     <!-- testimonial-area -->
     <section class="testimonial-area pt-120 pb-115 p-relative fix">
          <div class="animations-01"><img src="/site/img/bg/an-img-03.png" alt="an-img-01"></div>
         <div class="animations-02"><img src="/site/img/bg/an-img-04.png" alt="contact-bg-an-01"></div>
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                         <h5><i class="fal fa-graduation-cap"></i> Testimonial</h5>
                         <h2>
                          What Our Clients Says
                         </h2>
                      
                     </div>
                    
                 </div>
                 
                 <div class="col-lg-12">
                     <div class="testimonial-active wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                         <div class="single-testimonial text-center">
                              <div class="qt-img">
                             <img src="/site/img/testimonial/qt-icon.png" alt="img">
                             </div>
                             <p>Curabitur ac tortor ante. Sed quis iaculis risus. Ut ultrices ligula aliquet odio tristique euismod. Donec efficitur dolor in turpis aliquet, at mollis.</p>
                             <div class="testi-author">
                                 <img src="/site/img/testimonial/testi_avatar.png" alt="img">
                             </div>
                             <div class="ta-info">
                                     <h6>Margie Dose</h6>
                                     <span>Web Developer</span>
                                 </div>                                    
                         </div>
                         <div class="single-testimonial text-center">
                              <div class="qt-img">
                             <img src="/site/img/testimonial/qt-icon.png" alt="img">
                             </div>
                             <p>Curabitur ac tortor ante. Sed quis iaculis risus. Ut ultrices ligula aliquet odio tristique euismod. Donec efficitur dolor in turpis aliquet, at mollis.</p>
                             <div class="testi-author">
                                 <img src="/site/img/testimonial/testi_avatar_02.png" alt="img">
                             </div>
                             <div class="ta-info">
                                     <h6>Rock Dloder</h6>
                                     <span>Web Developer</span>
                                 </div>                                    
                         </div>
                       <div class="single-testimonial text-center">
                              <div class="qt-img">
                             <img src="/site/img/testimonial/qt-icon.png" alt="img">
                             </div>
                             <p>Curabitur ac tortor ante. Sed quis iaculis risus. Ut ultrices ligula aliquet odio tristique euismod. Donec efficitur dolor in turpis aliquet, at mollis.</p>
                             <div class="testi-author">
                                 <img src="/site/img/testimonial/testi_avatar_03.png" alt="img">
                             </div>
                             <div class="ta-info">
                                     <h6>Roboto Eorure</h6>
                                     <span>Web Developer</span>
                                 </div>                                    
                         </div>
                         <div class="single-testimonial text-center">
                              <div class="qt-img">
                             <img src="/site/img/testimonial/qt-icon.png" alt="img">
                             </div>
                             <p>Curabitur ac tortor ante. Sed quis iaculis risus. Ut ultrices ligula aliquet odio tristique euismod. Donec efficitur dolor in turpis aliquet, at mollis.</p>
                             <div class="testi-author">
                                 <img src="/site/img/testimonial/testi_avatar.png" alt="img">
                             </div>
                             <div class="ta-info">
                                     <h6>Margie Dose</h6>
                                     <span>Web Developer</span>
                                 </div>                                    
                         </div>
                        <div class="single-testimonial text-center">
                              <div class="qt-img">
                             <img src="/site/img/testimonial/qt-icon.png" alt="img">
                             </div>
                             <p>Curabitur ac tortor ante. Sed quis iaculis risus. Ut ultrices ligula aliquet odio tristique euismod. Donec efficitur dolor in turpis aliquet, at mollis.</p>
                             <div class="testi-author">
                                 <img src="/site/img/testimonial/testi_avatar_02.png" alt="img">
                             </div>
                             <div class="ta-info">
                                     <h6>Rock Dloder</h6>
                                     <span>Web Developer</span>
                                 </div>                                    
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- testimonial-area-end -->
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