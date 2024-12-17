<!doctype html>
<html class="no-/site/js/" lang="zxx">
    
<!-- Mirrored from htmldemo.zcubethemes.com/qeducato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Dec 2024 15:14:49 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Qeducato - University and College HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="/site/image/x-icon" href="/site/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="/site/css/bootstrap.min.css">
        <link rel="stylesheet" href="/site/css/animate.min.css">
        <link rel="stylesheet" href="/site/css/magnific-popup.css">
        <link rel="stylesheet" href="fontawesome//site/css/all.min.css">
        <link rel="stylesheet" href="/site/css/dripicons.css">
        <link rel="stylesheet" href="/site/css/slick.css">
        <link rel="stylesheet" href="/site/css/meanmenu.css">
        <link rel="stylesheet" href="/site/css/default.css">
        <link rel="stylesheet" href="/site/css/style.css">
        <link rel="stylesheet" href="/site/css/responsive.css">
    </head>
    <body>
        <!-- header -->
        <header class="header-area header-three">  
           <div class="header-top second-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">      
                       
                        <div class="col-lg-4 col-md-4 d-none d-lg-block ">
                           <div class="header-social">
                                <span>
                                    Follow us:-
                                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" title="LinkedIn"><i class="fab fa-instagram"></i></a>               
                                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" title="Twitter"><i class="fab fa-youtube"></i></a>
                                   </span>                    
                                   <!--  /social media icon redux -->                               
                            </div>
                        </div>
                          <div class="col-lg-8 col-md-8 d-none d-lg-block text-right">
                              <div class="header-cta">
                                <ul>
                                   <li>
                                      <div class="call-box">
                                         <div class="icon">
                                            <img src="/site/img/icon/phone-call.png" alt="img">
                                         </div>
                                         <div class="text">
                                            <span>Call Now !</span>
                                            <strong><a href="tel:+917052101786">+91 7052 101 786</a></strong>                                              
                                         </div>
                                      </div>
                                   </li>
                                   <li>
                                      <div class="call-box">
                                         <div class="icon">
                                            <img src="/site/img/icon/mailing.png" alt="img">
                                         </div>
                                         <div class="text">
                                            <span>Email Now</span>
                                            <strong><a href="mailto:info@example.com"> info@example.com  </a></strong>                                               
                                         </div>
                                      </div>
                                   </li>                                 
                                </ul>
                             </div>                        
                        </div>
                        
                    </div>
                </div>
            </div>		
			  <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                             <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="index.html"><img src="/site/img/logo/logo.png" alt="logo"></a>
                                </div>
                            </div>
                           <div class="col-xl-6 col-lg-6">
                              
                                <div class="main-menu text-right text-xl-right">
                                    <nav id="mobile-menu">
                                          <ul>
                                            <li class="has-sub">
                                                <a href="{{ route('home') }}">Trang chủ</a>
                                                
                                            </li>
                                            <li><a href="{{ route('about') }}">Giới thiệu</a></li>        
                                            
                                              <li class="has-sub">
                                               <a href="courses.html">Thông tin</a>
                                                <ul>													
								
													<li> <a href="{{ route('courses') }}">Thông tin chung </a></li>
                                                    <li> <a href="{{ route('coursesdetail') }}">Chi tiết thông tin</a></li>
                                                   
												</ul>
                                            </li>  
                                              <li class="has-sub"><a href="#">Dịch vụ gia sư</a>
												<ul>
                                                    <li><a href="event.html">Khóa học</a></li>
                                                    <li><a href="single-event.html">Chi tiết khóa học</a></li>
                                                    {{-- <li><a href="projects.html">Gallery</a></li> --}}
                                                    <li><a href="pricing.html">Học phí</a></li>
                                                    <li><a href="faq.html">Câu hỏi</a></li>
                                                    <li><a href="{{ route('team') }}">Về giáo viên</a></li>
                                                    <li><a href="{{ route('teamdetail') }}">Chi tiết giáo viên</a></li>
                                                    <li><a href="404-error.html">404 Error</a></li>
                                                  </ul>
											</li>
                                            <li class="has-sub"> 
                                                <a href="blog.html">Bài viết</a>
                                                <ul>
                                                    <li><a href="{{ route('blog') }}">Bài viết</a></li>
                                                    <li><a href="{{ route('blogdetail') }}">Chi tiết bài viết</a></li>
                                                </ul>
                                            </li>


                                            <li><a href="{{ route('contact') }}">Liên hệ</a></li>                                               
                                        </ul>
                                    </nav>
                                </div>
                            </div>   
                             <div class="col-xl-3 col-lg-3 text-right d-none d-lg-block text-right text-xl-right">
                                 <div class="login">
                                    <ul>
                                        <li><a href="#" class="menu-tigger"><i class="fal fa-search"></i></a></li>
                                        <li>
                                            <div class="second-header-btn">
                                               <a href="contact.html" class="btn">admission open</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>                               
                            </div>
                            
                                <div class="col-1/site/js/2">
                                    <div class="mobile-menu"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
        <!-- offcanvas-area -->
          <div class="offcanvas-menu">
             <span class="menu-close"><i class="fas fa-times"></i></span>
             <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
                <input type="text" name="s" id="search" placeholder="Search"/>
                <button><i class="fa fa-search"></i></button>
             </form>
             <div id="cssmenu3" class="menu-one-page-menu-container">
                <ul  class="menu">
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.html">Home</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="courses.html">Courses</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Teacher</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.html">Contact</a></li>
                </ul>
             </div>
             <div id="cssmenu2" class="menu-one-page-menu-container">
                <ul id="menu-one-page-menu-12" class="menu">
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
                </ul>
             </div>
          </div>
          <div class="offcanvas-overly"></div>
          <!-- offcanvas-end -->
        <!-- main-area -->
       @yield('body')
        <!-- main-area-end -->

        <!-- footer -->
        <footer class="footer-bg footer-p pt-90" style="background-color: #125875; background-image: url(/site/img/bg/footer-bg.png);">
            <div class="footer-top pb-70">
                <div class="container">
                    <div class="row justify-content-between">
                        
                        <div class="col-xl-4 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>About Us</h2>
                                </div>
                                <div class="f-contact">
                                     <p>Suspendisse non sem ante. Cras pretium gravida leo a convallis. Nam malesuada interdum metus, sit amet dictum ante congue eu. Maecenas ut maximus enim.</p>
                                    
                                    </div>
                                 <div class="footer-social mt-10">                                    
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>    
                            </div>
                        </div>
						<div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Our Links</h2>
                                </div>
                                <div class="footer-link">
                                    <ul>                                        
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html"> About</a></li>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="contact.html"> Contact Us</a></li>
                                        <li><a href="blog.html">Blog </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Latest Post</h2>
                                </div>
                                <div class="recent-blog-footer">
                                    <ul>
                                        <li>
                                            <div class="thum"> <img src="/site/img/blog/s-blogimg-01.png" alt="img"></div>
                                            <div class="text"> <a href="blog-details.html">Nothing impossble to need hard work</a>
                                            <span>7 March, 2020</span></div>
                                        </li>
                                        
                                        <li>
                                            <div class="thum"> <img src="/site/img/blog/s-blogimg-02.png" alt="img"></div>
                                            <div class="text"> <a href="blog-details.html">Nothing impossble to need hard work</a>
                                            <span>7 March, 2020</span></div>
                                        </li>
                                    
                                    </ul>
                                   
                                     
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                  <h2>Contact Us</h2>
                                </div>
                                <div class="f-contact">
                                    <ul>
                                    <li>
                                        <i class="icon fal fa-phone"></i>
                                        <span><a href="tel:+14440008888">+1 (444) 000-8888</a><br><a href="tel:+917052101786">+91 7052 101 786</a></span>
                                    </li>
                                   <li><i class="icon fal fa-envelope"></i>
                                        <span>
                                            <a href="mailto:info@example.com">info@example.com</a>
                                       <br>
                                       <a href="mailto:help@example.com">help@example.com</a>
                                       </span>
                                    </li>
                                    <li>
                                        <i class="icon fal fa-map-marker-check"></i>
                                        <span>1247/Plot No. 39, 15th Phase,<br> LHB Colony, Kanpur</span>
                                    </li>
                                    
                                </ul>
                                    
                                    </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                          <div class="copy-text">
                                <a href="index.html"><img src="/site/img/logo/f_logo.png" alt="img"></a>   
                            </div>
                        </div>
                        <div class="col-lg-4 text-center">          
                            
                        </div>
                       <div class="col-lg-4 text-right text-xl-right">
                           Copyright &copy; Qeducato 2023 . All rights reserved.     
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->

		<!-- /site/js/ here -->
        <script src="/site/js/vendor/modernizr-3.5.0.min./site/js/"></script>
        <script src="/site/js/vendor/jquery-3.6.0.min./site/js/"></script>
        <script src="/site/js/popper.min./site/js/"></script>
        <script src="/site/js/bootstrap.min./site/js/"></script>
        <script src="/site/js/slick.min./site/js/"></script>
        <script src="/site/js/ajax-form./site/js/"></script>
        <script src="/site/js/paroller./site/js/"></script>
        <script src="/site/js/wow.min./site/js/"></script>
        <script src="/site/js/site/js/_isotope.pkgd.min./site/js/"></script>
        <script src="/site/js/imagesloaded.min./site/js/"></script>
        <script src="/site/js/parallax.min.html"></script>
        <script src="/site/js/jquery.waypoints.min./site/js/"></script>
        <script src="/site/js/jquery.counterup.min./site/js/"></script>
        <script src="/site/js/jquery.scrollUp.min./site/js/"></script>
        <script src="/site/js/jquery.meanmenu.min./site/js/"></script>
        <script src="/site/js/parallax-scroll./site/js/"></script>
        <script src="/site/js/jquery.magnific-popup.min./site/js/"></script>
        <script src="/site/js/element-in-view./site/js/"></script>
        <script src="/site/js/main./site/js/"></script>
    </body>

<!-- Mirrored from htmldemo.zcubethemes.com/qeducato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Dec 2024 15:16:35 GMT -->
</html>