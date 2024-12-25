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
                             <h2>Sự kiện của chúng tôi</h2>    
                             
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
                    @foreach($events as $event)
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                        <div class="event-item mb-30 hover-zoomin">
                            <div class="thumb">
                                <a href="#"><img src="{{ $event->image_url ?? '/site/img/default-event.jpg' }}" alt="{{ $event->title }}"></a>
                            </div>
                            <div class="event-content">
                                <div class="date">
                                    <strong>{{ date('d', strtotime($event->event_date)) }}</strong> 
                                    {{ date('F, Y', strtotime($event->event_date)) }}
                                </div>
                                <h3><a href="{{ route('event.detail', ['id' => $event->id]) }}">{{ $event->title }}</a></h3>
                                <p>{{ Str::limit($event->description, 100) }}</p>
                                <div class="time">
                                    {{ date('h:i A', strtotime($event->start_time)) }} - {{ date('h:i A', strtotime($event->end_time)) }}
                                    <i class="fal fa-long-arrow-right"></i> <strong>{{ $event->location }}</strong>
                                </div>
                            </div>
                        </div>
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