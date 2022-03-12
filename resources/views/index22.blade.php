<!DOCTYPE html>
<html lang="ar">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="Hackathon">
        
        <link href="{{ asset('img/hack-logo-new.png') }}" rel="shortcut icon" />
        <title>هاكاثون برمج</title>

        <!-- CSS files -->

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <!-- Custom bootstrap CSS  -->
        <link href="{{ asset('css/bootstrap/carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap/pricing.css') }}" rel="stylesheet">

        <!-- animsition library -->
        <!-- <link rel="stylesheet" href="css/animsition/animsition.min.css">
        <script src="css/animsition/animsition.js"></script> -->

        <!-- Custom hackathon CSS -->
        <link href="{{ asset('css/hackathon.css') }}" rel="stylesheet">
        <!-- <link href="css/styles.css" rel="stylesheet"> -->

        <!-- Custom liabrary -->
        <!-- <link rel="stylesheet" href="css/hover/hover-min.css"> -->

        <!-- animation CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

        <!-- Icons CSS -->
        <link rel="stylesheet" href="{{ asset('css/LineIcons.css') }}">

        <!-- Other CSS -->
        <link href="{{ asset('css/util.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <!-- <script>
            $(document).ready(function () {
                $('.animsition').animsition();
                //====== Frames ========
    
                //mainFrame
                $('.animsition-main').animsition({
                    inClass: 'zoom-in-sm',
                    outClass: 'zoom-out-sm'
                });
    
                $('.animsition-zoom').animsition({
                    inClass: 'zoom-in-sm',
                    outClass: 'zoom-out-sm'
                });
    
                $('.animsition-fade-up').animsition({
                    inClass: 'fade-in-up-sm',
                    outClass: 'fade-out-up-sm'
                });
    
                $('.animsition-fade-right').animsition({
                    inClass: 'fade-in-right-sm',
                    outClass: 'fade-out-right-sm'
                });
    
                $('.animsition-fade-left').animsition({
                    inClass: 'fade-in-left-sm',
                    outClass: 'fade-out-left-sm'
                });
    
                $('.animsition-fade-up').animsition({
                    inClass: 'fade-in-up-lg',
                    outClass: 'fade-out-up-lg'
                });
    
            });
        </script> -->
        

    </head>
    
    <body class="animsition animsition-main body-bg" id="main-page">

        <!-- The site header -->
        <header>
            <!-- Navigation -->
            <nav>
                <input id="nav-toggle" type="checkbox">
                <div class="logo">
                    <a href="{{route('home.index')}}">
                        <img src="{{ asset('img/hack-logo-new.png') }}"  width="170px" height="10px"> 
                    </a>  
                </div>
                <ul class="links">
                    <li><a href="#main-page">الرئيسية</a></li>
                    <li ><a href="#hackathons">الهاكاثونات</a></li>
                    <li ><a href="#timeline">التقويم</a></li>
                    @if(Auth::check())
                    <li id="login" ><a href="{{route('dashboard')}}">لوحة التحكم</a></li>
                    @else
                    <li id="login" ><a href="{{route('login')}}">تسجيل الدخول</a></li>
                    <li id="register" ><a href="{{route('register')}}">تسجيل</a></li>
                    @endif
                </ul>
    
                <label for="nav-toggle" class="icon-burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </label>
            </nav>
        </header>

        <script type="text/javascript">
            window.addEventListener("scroll", function(){
                let header = document.querySelector("nav");
                header.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>

        
        <!-- The site content -->

            <!-- مقدمة عن الهاكاثون -->
            <div class="jumbotron text-right custom-bg-img banner banner-bg" id="main-page" style="background-image: url('img/banner-bg-svg.svg');" >
                <div class="container custom-bg-color animsition-zoom" >
                    <h1 class="text-dark-blue wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s" style="font-size: 4em; padding-top: 100px;">
                       هاكاثون برمج
                    </h1>
                    <h3 class="text-blue wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s" style="padding-top: 50px;">
                        مجموعة من المسابقات البرمجية التي تقيمها جمعية مبرمجين 
                    </h3>
                    <br />
                    <h5 class="text-dark-blue wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">
                        <br />
                        تهدف الى تحسين وتطوير العديد من المجالات في الجوانب المجتمعية  ​
                    </h5>
                    <br />
                    
                </div>
                <div id="particles-1" class="particles"></div>
            </div>
        
        <div class="site-content"> 

            <!-- الهاكاثونات -->
            <div class="jumbotron text-center album py-5 custom-bg-img animsition-fade-up" id="hackathons">

                <div class="container custom-bg-color ">
                    <h2 class="text-white" style="padding: 50px 0;">
                        <i class="fa wow " aria-hidden="true"></i>
                        الهاكاثونات
                    </h2>
                    
                    <br />
                </div>

                <!-- Row One -->
                <!-- <div class="row ">
                    <div class="col-md wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="card mb-4 shadow-sm hvr-grow" style="min-height: 30vh; min-width: 30vh;">
                            <div class="card-body text-center">
                                <h1 class="text-blue">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </h1>
                                <img src="img/logo.png"  width="100px" height="10px"> 
                                
                                <h4 class="card-text text-dark-blue" style="padding-top: 50px;">
                                    هاكاثون السفر
                                </h4>

                                <h5 class="text-dark-blue">وصف مختصر للهاكاثون</h5>

                                <button class="btn-signup" type="button" onclick="location.href='hackathon.html'">
                                    لمعرفة المزيد
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="col-md wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="card mb-4 shadow-sm hvr-grow" style="min-height: 30vh; min-width: 30vh;">
                            <div class="card-body text-center">
                                <h1 class="text-blue">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </h1>
                                <img src="img/logo.png"  width="100px" height="10px"> 

                                <h4 class="card-text text-dark-blue" style="padding-top: 50px;">
                                    هاكاثون الزراعة
                                </h4>

                                <h5 class="text-dark-blue">وصف مختصر للهاكاثون</h5>

                                <button class="btn-signup" type="button" onclick="location.href='hackathon.html'">
                                    لمعرفة المزيد
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="card mb-4 shadow-sm hvr-grow" style="min-height: 30vh; min-width: 30vh;">
                            <div class="card-body text-center">
                                <h1 class="text-blue">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </h1>
                                <img src="img/logo.png"  width="100px" height="10px"> 

                                <h4 class="card-text text-dark-blue" style="padding-top: 50px;">
                                    هاكاثون الثقافة
                                </h4>

                                <h5 class="text-dark-blue">وصف مختصر للهاكاثون</h5>

                                <button class="btn-signup" type="button" onclick="location.href='hackathon.html'">
                                    لمعرفة المزيد
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                        <div class="card mb-4 shadow-sm hvr-grow" style="min-height: 30vh; min-width: 30vh;">
                            <div class="card-body text-center">
                                <h1 class="text-blue">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </h1>
                                <img src="img/logo.png"  width="100px" height="10px"> 

                                <h4 class="card-text text-dark-blue" style="padding-top: 50px;">
                                    هاكاثون اللغات
                                </h4>

                                <h5 class="text-dark-blue">وصف مختصر للهاكاثون</h5>

                                <button class="btn-signup" type="button" onclick="location.href='hackathon.html'">
                                    لمعرفة المزيد
                                </button>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Row Two -->
                <!-- <div class="row ">
                    <div class="col-md wow fadeIn" data-wow-duration="1s" data-wow-delay="1.4s">
                        <div class="card mb-4 shadow-sm hvr-grow" style="min-height: 30vh; min-width: 30vh;">
                            <div class="card-body text-center">
                                <h1 class="text-blue">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </h1>
                                <img src="img/logo.png"  width="100px" height="10px"> 

                                <h4 class="card-text text-dark-blue" style="padding-top: 50px;">
                                    هاكاثون الصحة النفسية
                                </h4>

                                <h5 class="text-dark-blue">وصف مختصر للهاكاثون</h5>

                                <button class="btn-signup" type="button" onclick="location.href='hackathon.html'">
                                    لمعرفة المزيد
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="col-md wow fadeIn" data-wow-duration="1s" data-wow-delay="1.7s">
                        <div class="card mb-4 shadow-sm hvr-grow" style="min-height: 30vh; min-width: 30vh;">
                            <div class="card-body text-center">
                                <h1 class="text-blue">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </h1>
                                <img src="img/logo.png"  width="100px" height="10px"> 

                                <h4 class="card-text text-dark-blue" style="padding-top: 50px;">
                                    هاكاثون حقوق الإنسان
                                </h4>

                                <h5 class="text-dark-blue">وصف مختصر للهاكاثون</h5>

                                <button class="btn-signup" type="button" onclick="location.href='hackathon.html'">
                                    لمعرفة المزيد
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md wow fadeIn" data-wow-duration="1s" data-wow-delay="2.0s">
                        <div class="card mb-4 shadow-sm hvr-grow" style="min-height: 30vh; min-width: 30vh;">
                            <div class="card-body text-center">
                                <h1 class="text-blue">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </h1>
                                <img src="img/logo.png"  width="100px" height="10px"> 

                                <h4 class="card-text text-dark-blue" style="padding-top: 50px;">
                                    هاكاثون الخدمة العامة والمجتمعية
                                </h4>

                                <h5 class="text-dark-blue">وصف مختصر للهاكاثون</h5>

                                <button class="btn-signup" type="button" onclick="location.href='hackathon.html'">
                                    لمعرفة المزيد
                                </button>
                            </div>
                        </div>
                    </div>

                
                </div> -->

                <section id="features" class="services-area p-t-30" >
                    <p style="display: none">{{$a=0}}</p>
                    <div class="container" >
                        <div class="row justify-content-center content-row">
                            
                            @foreach ($hackathons as $hackathon)
                            @if ($a!=0 && 0 == $a%4)
                                </div> <!-- row -->
                                <div class="row justify-content-center content-row pt-3">
                                <p style="display: none">{{$a++}}</p>
                                <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 35vh;">
                                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                        <div class="services-icon">
                                            <img class="shape" src="img/services-shape.svg" alt="shape">
                                            <img class="shape-1" src="img/services-shape-1.svg" alt="shape">
                                            <i class="{{$hackathon->hackathon_image}}"></i>
                                        </div>
                                        <div class="services-content mt-30">
                                            <h4 class="services-title"><a href="#">{{$hackathon->name}}</a></h4>
                                            <p class="text">.{{$hackathon->body}}</p>
                                            <a class="more" href="{{ route('home.hackathon', $hackathon->id) }}">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                        </div>
                                    </div> <!-- single services -->
                                </div>
                            @else
                            <p style="display: none">{{$a++}}</p>
                            <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 35vh;">
                                <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="services-icon">
                                        <img class="shape" src="img/services-shape.svg" alt="shape">
                                        <img class="shape-1" src="img/services-shape-1.svg" alt="shape">
                                        <i class="{{$hackathon->hackathon_image}}"></i>
                                    </div>
                                    <div class="services-content mt-30">
                                        <h4 class="services-title"><a href="#">{{$hackathon->name}}</a></h4>
                                        <p class="text">.{{$hackathon->body}}</p>
                                        <a class="more" href="{{ route('home.hackathon', $hackathon->id) }}">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                            @endif
                            @endforeach
                            {{-- <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 35vh;">
                                <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="services-icon">
                                        <img class="shape" src="img/services-shape.svg" alt="shape">
                                        <img class="shape-1" src="img/services-shape-2.svg" alt="shape">
                                        <i class="lni-trees"></i>
                                    </div>
                                    <div class="services-content mt-30">
                                        <h4 class="services-title"><a href="#">هاكاثون الزراعة</a></h4>
                                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                                        <a class="more" href="#">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                            <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 35vh;">
                                <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                                    <div class="services-icon">
                                        <img class="shape" src="img/services-shape.svg" alt="shape">
                                        <img class="shape-1" src="img/services-shape-3.svg" alt="shape">
                                        <i class="lni-book"></i>
                                    </div>
                                    <div class="services-content mt-30">
                                        <h4 class="services-title"><a href="#">هاكاثون الثقافة</a></h4>
                                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                                        <a class="more" href="#">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                            <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 35vh;">
                                <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="services-icon">
                                        <img class="shape" src="img/services-shape.svg" alt="shape">
                                        <img class="shape-1" src="img/services-shape-2.svg" alt="shape">
                                        <i class="lni-text-format"></i>
                                    </div>
                                    <div class="services-content mt-30">
                                        <h4 class="services-title"><a href="#">هاكاثون اللغات</a></h4>
                                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                                        <a class="more" href="#">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                    </div>
                                </div> <!-- single services -->
                            </div> --}}
                        </div> <!-- row -->
                        {{-- <div class="row justify-content-center content-row pt-3">
                            <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 35vh;">
                                <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                                    <div class="services-icon">
                                        <img class="shape" src="img/services-shape.svg" alt="shape">
                                        <img class="shape-1" src="img/services-shape-3.svg" alt="shape">
                                        <i class="lni-thought"></i>
                                    </div>
                                    <div class="services-content mt-30">
                                        <h4 class="services-title"><a href="#">هاكاثون الصحة النفسية</a></h4>
                                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                                        <a class="more" href="#">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                            <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 35vh;">
                                <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="services-icon">
                                        <img class="shape" src="img/services-shape.svg" alt="shape">
                                        <img class="shape-1" src="img/services-shape-1.svg" alt="shape">
                                        <i class="lni-hand"></i>
                                    </div>
                                    <div class="services-content mt-30">
                                        <h4 class="services-title"><a href="#">هاكاثون حقوق الإنسان</a></h4>
                                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                                        <a class="more" href="#">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                            <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 35vh;">
                                <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="services-icon">
                                        <img class="shape" src="img/services-shape.svg" alt="shape">
                                        <img class="shape-1" src="img/services-shape-2.svg" alt="shape">
                                        <i class="lni-users"></i>
                                    </div>
                                    <div class="services-content mt-30">
                                        <h4 class="services-title"><a href="#">هاكاثون الخدمة العامة والمجتمعية</a></h4>
                                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                                        <a class="more" href="#">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                        </div> <!-- row --> --}}
                    </div> <!-- container -->
                </section>

            </div><!-- /.jumbotron -->

            <!-- الخط الزمني -->
            <!-- We can use an image rather than table for timeline -->
            <div class="container marketing" id="timeline" style="padding-bottom: 100px;">

                <hr class="featurette-divider">

                <h2 class="text-white"> TimeLine </h2>

            </div> <!-- /.container -->
         


            <div class="footer-basic">
                <footer>
                    <!-- All rights reserved Social medias -->
                    <div class="social">
                        <!--<a href="#"><i class="icon ion-social-instagram"></i></a>-->
                        <!--<a href="#"><i class="icon ion-social-snapchat"></i></a>-->
                        <a href="https://twitter.com/hackathon_x"><i class="icon ion-social-twitter"></i></a>
                        <!--<a href="#"><i class="icon ion-social-facebook"></i></a>-->
                    </div>
                   
                    <p class="copyright">HackathonX 2021</p>
                </footer>
            </div>

        </div> 

        <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
        <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/faqs.js') }}"></script>

        <!--====== wow js ======-->
        <script src="{{ asset('js/wow.min.js') }}"></script>

            <!--====== Jquery js ======-->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('js/vendor/modernizr-3.7.1.min.js') }}"></script>

            <!--====== Particles js ======-->
        <script src="{{ asset('js/particles.min.js') }}"></script>
        
        <!-- main js -->

        <script src="{{ asset('js/main.js') }}"></script>

        
    </body>
</html>