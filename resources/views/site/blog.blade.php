@extends('site.master')

@section('title','Bài viết')
@section('body')
<main>
            
    <!-- breadcrumb-area -->
     <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(/site/img/bg/bdrc-bg.png)">
       
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xl-12 col-lg-12">
                     <div class="breadcrumb-wrap text-left">
                         <div class="breadcrumb-title">
                             <h2>Blog</h2>    
                             
                         </div>
                     </div>
                 </div>
                 <div class="breadcrumb-wrap2">
                       
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Blog</li>
                             </ol>
                         </nav>
                     </div>
                 
             </div>
         </div>
     </section>
     <!-- breadcrumb-area-end -->   
      <!-- inner-blog -->
     <section class="inner-blog pt-120 pb-120">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8">
                     <div class="bsingle__post mb-50">
                         <div class="bsingle__post-thumb">
                             <img src="/site/img/blog/inner_b1.jpg" alt="">
                         </div>
                         <div class="bsingle__content">
                             <div class="meta-info">
                                <div class="meta-info">
                                 <ul>
                                     <li><i class="fal fa-eye"></i> 100 Views  </li>
                                     <li><i class="fal fa-comments"></i> 35 Comments</li>
                                     <li><i class="fal fa-calendar-alt"></i> 24th March 2023</li>
                                 </ul>
                             </div>
                             </div>
                             <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur
                                     cing elit, sed do eiusmod tempor.</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                             <div class="blog__btn">
                                 <a href="blog-details.html" class="btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="bsingle__post mb-50">
                         <div class="bsingle__post-thumb video-p">
                             <img src="/site/img/blog/inner_b2.jpg" alt="">
                             <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="video-i popup-video"><i class="fas fa-play"></i></a>
                         </div>
                         <div class="bsingle__content">
                             <div class="meta-info">
                                 <ul>
                                     <li><i class="fal fa-eye"></i> 100 Views  </li>
                                     <li><i class="fal fa-comments"></i> 35 Comments</li>
                                     <li><i class="fal fa-calendar-alt"></i> 24th March 2023</li>
                                 </ul>
                             </div>
                             <h2><a href="blog-details.html">There are many variations passages of like consectetur lorem ipsum available.</a></h2>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                             <div class="blog__btn">
                                  <a href="blog-details.html" class="btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="bsingle__post mb-50">
                         <div class="bsingle__post-thumb blog-active">
                             <div class="slide-post">
                                 <img src="/site/img/blog/inner_b3.jpg" alt="">
                             </div>
                             <div class="slide-post">
                                 <img src="/site/img/blog/inner_b2.jpg" alt="">
                             </div>
                             <div class="slide-post">
                                 <img src="/site/img/blog/inner_b1.jpg" alt="">
                             </div>
                         </div>
                         <div class="bsingle__content">
                             <div class="meta-info">
                                 <ul>
                                     <li><i class="fal fa-eye"></i> 100 Views  </li>
                                     <li><i class="fal fa-comments"></i> 35 Comments</li>
                                     <li><i class="fal fa-calendar-alt"></i> 24th March 2023</li>
                                 </ul>
                             </div>
                             <h2><a href="blog-details.html">I must explain to you how all this mistaken idea of denouncing pleasure.</a></h2>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                             <div class="blog__btn">
                                 <a href="blog-details.html" class="btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="bsingle__post mb-50">
                         <div class="bsingle__post-thumb embed-responsive embed-responsive-16by9">
                             <iframe height="300" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/547295505&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                         </div>
                         <div class="bsingle__content">
                             <div class="meta-info">
                                <ul>
                                     <li><i class="fal fa-eye"></i> 100 Views  </li>
                                     <li><i class="fal fa-comments"></i> 35 Comments</li>
                                     <li><i class="fal fa-calendar-alt"></i> 24th March 2023</li>
                                 </ul>
                             </div>
                             <h2><a href="blog-details.html">There are many variations passages of like consectetur lorem ipsum available.</a></h2>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                             <div class="blog__btn">
                                 <a href="blog-details.html" class="btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="bsingle__post mb-50">
                         <div class="bsingle__content">
                             <div class="meta-info">
                                  <ul>
                                     <li><i class="fal fa-eye"></i> 100 Views  </li>
                                     <li><i class="fal fa-comments"></i> 35 Comments</li>
                                     <li><i class="fal fa-calendar-alt"></i> 24th March 2023</li>
                                 </ul>
                             </div>
                             <h2><a href="blog-details.html">On the other hand, we denounce with of righteous indignation and dislike men.</a></h2>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                             <div class="blog__btn">
                                 <a href="blog-details.html" class="btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="bsingle__post mb-50">
                         <div class="bsingle__content quote-post" style="background-image:url(/site/img/bg/quote_bg.png)">
                             <div class="meta-info">
                                 <ul>
                                     <li><i class="fal fa-eye"></i> 100 Views  </li>
                                     <li><i class="fal fa-comments"></i> 35 Comments</li>
                                     <li><i class="fal fa-calendar-alt"></i> 24th March 2023</li>
                                 </ul>
                             </div>
                             <div class="quote-icon">
                                 <img src="/site/img/icon/blockquote.png" alt="">
                             </div>
                             <h2><a href="blog-details.html">We denounce with of righteous one indignation and dislike men.</a></h2>
                         </div>
                     </div>
                     <div class="pagination-wrap">
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
                  <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar-widget">
                       <section id="search-3" class="widget widget_search">
                          <h2 class="widget-title">Search</h2>
                          <form role="search" method="get" class="search-form" action="http://wordpress.zcube.in/finco/">
                             <label>
                             <span class="screen-reader-text">Search for:</span>
                             <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                             </label>
                             <input type="submit" class="search-submit" value="Search" />
                          </form>
                       </section>
                       <section id="custom_html-5" class="widget_text widget widget_custom_html">
                          <h2 class="widget-title">Follow Us</h2>
                          <div class="textwidget custom-html-widget">
                             <div class="widget-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-wordpress"></i></a>
                             </div>
                          </div>
                       </section>
                       <section id="categories-1" class="widget widget_categories">
                          <h2 class="widget-title">Categories</h2>
                          <ul>
                             <li class="cat-item cat-item-16"><a href="#">Branding</a> (4)</li>
                             <li class="cat-item cat-item-23"><a href="#">Corporat</a> (3)</li>
                             <li class="cat-item cat-item-18"><a href="#">Design</a> (3)</li>
                             <li class="cat-item cat-item-22"><a href="#">Gallery</a> (3)</li>
                          </ul>
                       </section>
                       <section id="recent-posts-4" class="widget widget_recent_entries">
                          <h2 class="widget-title">Recent Posts</h2>
                          <ul>
                             <li>
                                <a href="#">User Experience Psychology And Performance Smshing</a>
                                <span class="post-date">August 19, 2020</span>
                             </li>
                             <li>
                                <a href="#">Monthly Web Development Up Cost Of JavaScript</a>
                                <span class="post-date">August 19, 2020</span>
                             </li>
                             <li>
                                <a href="#">There are many variation passages of like available.</a>
                                <span class="post-date">August 19, 2020</span>
                             </li>
                          </ul>
                       </section>
                       <section id="tag_cloud-1" class="widget widget_tag_cloud">
                          <h2 class="widget-title">Tag</h2>
                          <div class="tagcloud">
                              <a href="#" class="tag-cloud-link tag-link-28 tag-link-position-1" style="font-size: 8pt;" aria-label="app (1 item)">app</a>
                             <a href="#" class="tag-cloud-link tag-link-17 tag-link-position-2" style="font-size: 8pt;" aria-label="Branding (1 item)">Branding</a>
                             <a href="#" class="tag-cloud-link tag-link-20 tag-link-position-3" style="font-size: 8pt;" aria-label="corporat (1 item)">corporat</a>
                             <a href="#" class="tag-cloud-link tag-link-24 tag-link-position-4" style="font-size: 16.4pt;" aria-label="Design (2 items)">Design</a>
                             <a href="#" class="tag-cloud-link tag-link-25 tag-link-position-5" style="font-size: 22pt;" aria-label="gallery (3 items)">gallery</a>
                             <a href="#" class="tag-cloud-link tag-link-26 tag-link-position-6" style="font-size: 8pt;" aria-label="video (1 item)">video</a>
                             <a href="#" class="tag-cloud-link tag-link-29 tag-link-position-7" style="font-size: 16.4pt;" aria-label="web design (2 items)">web design</a>
                          </div>
                       </section>
                    </aside>
                 </div>
             </div>
         </div>
     </section>
     <!-- inner-blog-end -->
 </main>
 @endsection	