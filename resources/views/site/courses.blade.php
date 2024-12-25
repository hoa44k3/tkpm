@extends('site.master')

@section('body')
<main>
            
    <!-- breadcrumb-area -->
     <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/site/img/bg/bdrc-bg.png)">
       
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xl-12 col-lg-12">
                     <div class="breadcrumb-wrap text-left">
                         <div class="breadcrumb-title">
                             <h2>Thông tin </h2>    
                             
                         </div>
                     </div>
                 </div>
                 <div class="breadcrumb-wrap2">
                       
                     </div>
                 
             </div>
         </div>
     </section>
     <!-- breadcrumb-area-end -->
     <!-- shop-area -->
     <section class="shop-area pt-120 pb-120 p-relative " data-animation="fadeInUp animated" data-delay=".2s">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-sm-6">
                 <h6 class="mt-20 mb-50">Showing 1–9 of 10 results</h6>
                 </div>
                 <div class="col-lg-6 col-sm-6 text-right">
                     <select name="orderby" class="orderby" aria-label="Shop order">
                         <option value="menu_order" selected="selected">Default sorting</option>
                         <option value="popularity">Sort by popularity</option>
                         <option value="rating">Sort by average rating</option>
                         <option value="date">Sort by latest</option>
                         <option value="price">Sort by price: low to high</option>
                         <option value="price-desc">Sort by price: high to low</option>
                     </select>
                 </div>
             </div>
             <div class="row align-items-center class-scroll">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6">
                        <!-- class-item -->
                        <div class="class-item mb-30">
                            <!-- class-img -->
                            <div class="class-img">
                                <div class="class-img-outer">
                                    <a href="single-courses.html">
                                        <img src="/site/img/class/class-7.jpg" alt="class image">
                                    </a>
                                    <!-- course-meta -->
                                    <div class="course-meta">
                                        <div class="row align-items-center">
                                            <div class="col-lg-8">
                                                <div class="author">
                                                    <div class="thumb">
                                                        {{-- <img src="/site/img/bg/testi_avatar.png" alt="image"> --}}
                                                        <img src="{{ $course->teacher_avatar ? asset('storage/' . $course->teacher_avatar) : '/site/img/bg/default-avatar.png' }}" alt="teacher avatar">
                                                    </div>
                                                    <div class="text">
                                                        <a href="single-courses.html">{{ $course->teacher_name }}</a>
                                                        <p>{{ $course->teacher_title }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="/site/img/bg/star.png" alt="image">
                                                <span>{{ $course->rating }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- course-meta-end -->
                                </div>
                            </div>
                            <!-- class-img -->
                            <!-- schedule -->
                            <ul class="schedule">
                                <li>
                                    <span>Age:</span>
                                    <span class="class-age">{{ $course->age_group }}</span>
                                </li>
                                <li>
                                    <span>Time:</span>
                                    <span class="class-size">{{ $course->time }}</span>
                                </li>
                                <li>
                                    <span>Class Size:</span>
                                    <span class="class-size">{{ $course->class_size }}</span>
                                </li>
                                <li>
                                    <span>Fee:</span>
                                    <span class="class-size">${{ $course->fee }}</span>
                                </li>
                            </ul>
                            <!-- schedule-end -->
                            <!-- class-content -->
                            <div class="class-content">
                                <h4 class="title"><a href="{{ route('course.detail', ['id' => $course->id]) }}">{{ $course->course_title }}</a></h4>
                                <p>{{ $course->description }}</p>
                            </div>
                            <!-- class-content-end -->
                        </div>
                        <!-- class-item-end -->
                    </div>
                @endforeach
            </div>
            
             <div class="row">
             <div class="col-12">
                 <div class="pagination-wrap mt-20 text-center">
                         <nav>
                             <ul class="pagination">
                                 <li class="page-item"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                 <li class="page-item active"><a href="#">1</a></li>
                                 <li class="page-item"><a href="#">2</a></li>
                                 <li class="page-item"><a href="#">3</a></li>
                                 <li class="page-item"><a href="#">...</a></li>
                                 <li class="page-item"><a href="#">10</a></li>
                                 <li class="page-item"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                             </ul>
                         </nav>
                     </div>
             </div>
         <div></div></div>
         </div>
     </section>
     <!-- shop-area-end -->
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