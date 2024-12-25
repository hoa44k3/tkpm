@extends('site.master')

@section('title','Trang chủ')
@section('body')
<main>
    <!-- slider-area -->
     <section id="parallax" class="slider-area slider-two fix p-relative">
        <div class="slider-shape ss-one layer" data-depth="0.10"><img src="/site/img/bg/slider_shape01.png" alt="shape"></div>
         <div class="slider-shape ss-two layer" data-depth="0.30"><img src="/site/img/bg/slider_shape02.png" alt="shape"></div>
         <div class="slider-shape ss-three layer" data-depth="0.40"><img src="/site/img/bg/slider_shape03.png" alt="shape"></div>
         <div class="slider-shape ss-four layer" data-depth="0.40"><img src="/site/img/bg/slider_shape04.png" alt="shape"></div>
         <div class="slider-active">
         <div class="single-slider slider-bg d-flex align-items-center" style="background: url(/site/img/slider/slider_img02.png) no-repeat; ">
                 <div class="container">
                    <div class="row justify-content-center align-items-center">
                         <div class="col-lg-7 col-md-8">
                             <div class="slider-content s-slider-content pt-150">
                                 <h5 data-animation="fadeInUp" data-delay=".4s">Chào mừng đến với Trung tâm gia sư</h5>
                                  <h2 data-animation="fadeInUp" data-delay=".4s">Chấp cánh những ước mơ cho bạn</h2>
                                 <p data-animation="fadeInUp" data-delay=".6s">Cố gắng phát triển và đào tạo ra những nhân tài giỏi cho đất nước, tạo ra một nền văn minh hiện đại cho xã hội sau này.</p>
                                 
                                  <div class="slider-btn mt-30">                                          
                                     <a href="about.html" class="btn mr-15" data-animation="fadeInUp" data-delay=".4s">Explore More <i class="fal fa-long-arrow-right"></i></a>                                             
                                 </div>        
                                                       
                             </div>
                         </div>
                         <div class="col-lg-5 col-md-4">
                             
                         </div>
                     </div>
                 </div>
             </div>
            
             </div>
             
        
     </section>
     <!-- slider-area-end -->
      <!-- cta-area -->
     <section class="cta-area cta-bg pt-30 pb-30" style="background:#da4a47;">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8">
                     <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                         <h2>Làm thế nào để đăng ký cho con bạn vào lớp học?</h2>
                         <p>Tại Đại học Estuidar, chúng tôi chuẩn bị cho bạn khởi nghiệp bằng cách cung cấp môi trường hỗ trợ, sáng tạo và chuyên nghiệp để học các kỹ năng thực tế và xây dựng mạng lưới quan hệ trong ngành.</p>
                     </div>
                                      
                 </div>
                 <div class="col-lg-4 text-right"> 
                     <div class="cta-btn s-cta-btn wow fadeInRight animated" data-animation="fadeInDown animated" data-delay=".2s">
                               <a href="about.html" class="btn ss-btn smoth-scroll">Đăng ký ngay <i class="fal fa-long-arrow-right"></i></a>			
                         </div>
                 </div>
             
             </div>
         </div>
     </section>
     <!-- cta-area-end -->	
      <!-- service-area -->
     <section class="service-details-one pt-120 pb-90 p-relative fix"  style="background: url(/site/img/bg/feature-bg.png) no-repeat; background-size: cover;">
         <div class="container">
             <div class="row">
               
                 <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="services-box mb-30 text-center wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                         
                      <div class="sr-contner">
                         <div class="icon">
                         <img src="/site/img/icon/sve-icon1.png" alt="icon01">
                         </div>
                         <div class="text">
                             <h3>Dịch vụ giáo dục</h3>
                             <p>Hình dung liền mạch vốn trí tuệ chất lượng mà không cần sự hợp tác và ý tưởng vượt trội như vậy và chia sẻ danh sách một cách chắc chắn</p>
                             <a href="single-courses.html" class="readmore">Đọc thêm<i class="fal fa-long-arrow-right"></i></a>
                         </div>
                      </div>
                         
                         
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="services-box mb-30 text-center wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                         <div class="sr-contner">
                         <div class="icon">
                         <img src="/site/img/icon/sve-icon2.png" alt="icon01">
                         </div>
                         <div class="text">
                             <h3>Giáo viên chuyên gia</h3>
                             <p>Trực quan hóa vốn trí tuệ chất lượng mà không cần sự hợp tác và ý tưởng vượt trội như vậy và chia sẻ danh sách một cách chắc chắn</p>
                             <a href="single-courses.html" class="readmore">Đọc thêm<i class="fal fa-long-arrow-right"></i></a>
                         </div>
                      </div>
                        
                     </div>
                 </div>
                 
             <div class="col-lg-4 col-md-6 col-sm-12">
                     <div class="services-box mb-30 text-center wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                         <div class="sr-contner">
                         <div class="icon">
                         <img src="/site/img/icon/sve-icon3.png" alt="icon01">
                         </div>
                         <div class="text">
                            <h3>Âm nhạc & Nghệ thuật</h3>
                             <p>Trực quan hóa vốn tri thức chất lượng mà không cần sự hợp tác và ý tưởng vượt trội như vậy và chia sẻ danh sách một cách chắc chắn</p>
                             <a href="single-courses.html" class="readmore">Đọc thêm <i class="fal fa-long-arrow-right"></i></a>
                         </div>
                      </div>
                         
                     </div>
                 </div>
              
             </div>
         </div>
     </section>
     <!-- service-details2-area-end -->
      <!-- about-area -->
     <section class="about-area about-p pt-120 pb-120 p-relative fix" style="background: #f7f9ff;">
        <div class="animations-06"><img src="/site/img/bg/an-img-01.png" alt="an-img-01"></div>
         <div class="animations-09"><img src="/site/img/bg/slider_shape03.png" alt="contact-bg-an-01"></div>
         <div class="container">
             <div class="row justify-content-center align-items-center">    
                <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                         <div class="about-title second-title pb-25">  
                             <h5><i class="fal fa-graduation-cap"></i> Về con em chúng ta</h5>
                             <h2>Chúng tôi là trường trẻ em với 10 năm kinh nghiệm</h2>                                   
                         </div>
                            <p class="txt-clr">Cộng đồng của chúng tôi đang được kêu gọi tái hiện tương lai. Là trường đại học duy nhất có một trường thiết kế nổi tiếng kết hợp với các trường đại học hàng đầu, chúng tôi đang làm cho việc học trở nên phù hợp và mang tính chuyển đổi hơn.</p>
                             <p>Chúng tôi tự hào cung cấp các dịch vụ việc làm hàng đầu như quản lý bảng lương và phúc lợi, hỗ trợ quản lý phạm vi kinh doanh toàn cầu, đồng thời đọc các văn bản hoặc tài liệu tôn giáo thường xuyên để tuân thủ.</p>
                            
                          <div class="slider-btn mt-20">                                          
                              <a href="about.html" class="btn ss-btn smoth-scroll">Read More <i class="fal fa-long-arrow-right"></i></a>				
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-12 col-sm-12">
                     <div class="s-about-img2 p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                         <img src="/site/img/features/about_img_03.png" alt="img">                                
                     </div>
                   
                 </div>
             </div>
         </div>
     </section>
     <!-- about-area-end -->
    <!-- class area start -->
     <section class="class-area pt-120 pb-120 p-relative fix">
         <div class="animations-06"><img src="/site/img/bg/an-img-11.png" alt="an-img-01"></div>
         <div class="animations-11"><img src="/site/img/bg/an-img-01.png" alt="contact-bg-an-01"></div>
         <div class="animations-12"><img src="/site/img/bg/an-img-12.png" alt="contact-bg-an-01"></div>
         <div class="animations-13"><img src="/site/img/bg/an-img-13.png" alt="contact-bg-an-01"></div>
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 col-md-12">
                     <div class="section-title text-center mb-50">
                         <h5>Các lớp học đang diễn ra</h5>
                         <h2>Nhận những lớp học tốt nhất với chúng tôi</h2>
                        
                     </div>
                 </div>
             </div>
             <div class="row justify-content-center">
                        @foreach($classes as $class)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="class-item mb-30 hover-zoomin">
                                <div class="class-img">
                                    <div class="class-img-outer">
                                        <a href="{{ route('class.detail', ['id' => $class->id]) }}">
                                            <img src="{{ asset('storage/' . $class->image) }}" alt="{{ $class->class_name }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="class-content">
                                    <h4 class="title"><a href="{{ route('class.detail', ['id' => $class->id]) }}">{{ $class->class_name }}</a></h4>
                                    <p>{{ \Illuminate\Support\Str::words($class->description, 15, '...') }}</p>
                                    <ul class="schedule">
                                        <li>
                                            <span>Age:</span>
                                            <span class="class-age">{{ $class->age_group }}</span>
                                        </li>
                                        <li>
                                            <span>Time:</span>
                                            <span class="class-size">{{ $class->time }}</span>
                                        </li>
                                        <li>
                                            <span>Class Size:</span>
                                            <span class="class-size">{{ $class->class_size }}</span>
                                        </li>
                                        <li>
                                            <span>Fee:</span>
                                            <span class="class-size">${{ number_format($class->fee, 2) }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
           
         </div>
     </section>
     <!-- class area start -->
      <!-- video-area -->
     <section id="video" class="video-area p-relative">
         <div class="container">
              <div class="row">
                 <div class="col-12">
                     <div class="s-video-wrap" style="background-image:url(/site/img/bg/video-img.png)">
                         <div class="s-video-content text-center">
                             <h2>Are You Ready To Love Preschool </h2>
                             <p>Lanunch Your Start Now</p>
                            <h6><a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="popup-video mb-50"><img src="/site/img/bg/play-button2.png" alt="circle_right"></a></h6> 
                            
                         </div>
                     </div>
                 </div>
                
             </div>
         </div>
     </section>
     <!-- video-area-end -->
      <!-- counter-area -->
     <div class="counter-area pb-90" style="background:#da4a47;">
         <div class="container">
        
             <div class="row p-relative">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                         <div class="counter p-relative" style="background-image:url(/site/img/bg/c-object.html);  background-repeat: no-repeat;">
                             <span class="count">1547</span>                               
                             <p>Teacher <br>& Staff</p>
                         </div>
                        
                     </div>
                 </div>
               <div class="col-lg-3 col-md-6 col-sm-12">
                     <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                         <div class="counter p-relative" style="background-image:url(/site/img/bg/c-object.html);  background-repeat: no-repeat;">
                             <span class="count">2587</span>                               
                             <p>Our Happy<br>Student</p>
                         </div>
                        
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-12">
                     <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                          <div class="counter p-relative" style="background-image:url(/site/img/bg/c-object.html);  background-repeat: no-repeat;">
                             <span class="count">1879</span>                               
                             <p>School <br>Class</p>
                         </div>
                       
                     </div>
                 </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                     <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="counter p-relative" style="background-image:url(/site/img/bg/c-object.html);  background-repeat: no-repeat;">
                             <span class="count">2547</span>                               
                             <p>Computer <br>Labs</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- counter-area-end -->	
      <!-- event-area -->
     <section class="event event02 pt-120 pb-90 p-relative fix">
          <div class="animations-06"><img src="/site/img/bg/an-img-14.png" alt="an-img-01"></div>
         <div class="animations-08"><img src="/site/img/bg/an-img-15.png" alt="contact-bg-an-01"></div>
         <div class="animations-09"><img src="/site/img/bg/an-img-16.png" alt="contact-bg-an-01"></div>
         <div class="container">
             <div class="row">   
                 <div class="col-lg-12 p-relative">
                    <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                          <h5><i class="fal fa-graduation-cap"></i> Sự kiện của chúng tôi</h5>
                         <h2>
                            Sự kiện sắp tới
                         </h2>
                      
                     </div>
                 </div>                        
                  
             </div>
             <div class="row">
              
                @foreach($events as $event)
                <div class="col-lg-6 col-md-6 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="{{ route('events.show', $event->id) }}">
                                <img src="{{ asset('storage/' . $event->image_url) }}" alt="Event Image">
                            </a>
                        </div>
                        <div class="event-content">
                            <div class="text">
                                <div class="icon">
                                    <i class="fal fa-calendar-alt"></i>
                                </div>
                                <div class="date">
                                    <strong>{{ \Carbon\Carbon::parse($event->event_date)->format('d') }}</strong>
                                    {{ \Carbon\Carbon::parse($event->event_date)->format('F, Y') }}
                                </div>
                                <h3>
                                    <a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a>
                                </h3>
                                <p>{{ Str::limit($event->description, 100) }}</p>
                                <div class="time">
                                    {{ \Carbon\Carbon::parse($event->start_time)->format('g:i a') }} - 
                                    {{ \Carbon\Carbon::parse($event->end_time)->format('g:i a') }}
                                    <i class="fal fa-long-arrow-right"></i>
                                    <strong>{{ $event->location }}</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                         
             </div>
         </div>
     </section>
    <!-- courses-area -->
     <!-- team-area -->
     <section class="team-area fix p-relative pt-120 pb-80" style="background: #f7f9ff;">  
         <div class="animations-06"><img src="/site/img/bg/an-img-17.png" alt="an-img-01"></div>
         <div class="animations-09"><img src="/site/img/bg/slider_shape03.png" alt="contact-bg-an-01"></div>
         <div class="container">  
             <div class="row">   
                 <div class="col-lg-12 p-relative">
                    <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h5><i class="fal fa-graduation-cap"></i> Giáo viên của chúng tôi</h5>
                         <h2>
                            Giáo viên chuyên gia của chúng tôi
                         </h2>
                      
                     </div>
                 </div>                        
                  
             </div>
            <div class="row">                   
                @foreach($teachers as $teacher)
                <div class="col-xl-3 col-md-6">
                    <div class="single-team mb-40">
                        <div class="team-thumb">
                            <div class="brd">
                                <a href="{{ route('teachers.show', $teacher->id) }}">
                                    <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}">
                                </a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4><a href="{{ route('teachers.show', $teacher->id) }}">{{ $teacher->name }}</a></h4>
                            <p>{{ $teacher->title }}</p>
                            <div class="team-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                 
             </div>
         </div>
     </section>
     <!-- team-area-end --> 
     
     
      <!-- blog-area -->
     <section id="blog" class="blog-area blog-area3 p-relative fix pt-120 pb-90" >
         <div class="animations-06"><img src="/site/img/bg/an-img-18.png" alt="an-img-01"></div>
         <div class="animations-09"><img src="/site/img/bg/an-img-19.png" alt="contact-bg-an-01"></div>
         <div class="container">
             <div class="row align-items-center"> 
                 <div class="col-lg-12">
                     <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                         <h5><i class="fal fa-graduation-cap"></i> Blog của chúng tôi</h5>
                         <h2>
                            Blog & Tin tức mới nhất
                         </h2>
                        
                     </div>
                    
                 </div>
             </div>
             <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="blog-thumb2">
                                <a href="{{ route('blogs.show', $blog->id) }}">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->name }}">
                                </a>
                                <div class="date-home">
                                    <i class="fal fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format('jS F Y') }}
                                </div>
                            </div>
                            <div class="blog-content2">
                                <div class="b-meta">
                                    <div class="meta-info">
                                        <ul>
                                            <li><i class="fal fa-user"></i> By Admin</li>
                                            <li><i class="fal fa-comments"></i> {{ $blog->comments_count ?? 0 }} Comments</li>
                                        </ul>
                                    </div>
                                </div>
                                <h4><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->name }}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
         </div>
     </section>
     <!-- blog-area-end -->
      <!-- brand-area -->
     <div class="brand-area pt-60 pb-60" style="background-color:#4ea9b4">
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