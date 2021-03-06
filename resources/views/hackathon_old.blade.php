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

        <!-- Socicon -->
        <link rel="stylesheet" href="{{ asset('socicon/css/styles.css') }}">

        <!-- Socicon -->
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        
        <!-- Other CSS -->
        <link href="{{ asset('css/util.css') }}" rel="stylesheet">
        <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
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
                    <li ><a href="#about-hack">عن الهاكاثون</a></li>
                    <li ><a href="#challenges">التحديات</a></li>
                    <li ><a href="#timeline">الخط الزمني</a></li>
                    <li ><a href="#faq">الأسئلة الشائعة</a></li>
                    @if(Auth::check())
                    <li id="login" ><a href="{{route('dashboard')}}">لوحةالتحكم</a></li>
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
                var header = document.querySelector("nav");
                header.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>

        
        <!-- The site content -->

            <!-- مقدمة عن الهاكاثون -->
            <div class="jumbotron text-right custom-bg-img banner banner-bg" id="main-page" style="background-image: url({{ asset('img/banner-bg-svg.svg') }});" >
                <div class="container custom-bg-color animsition-zoom" >
                    <h1 class="text-dark-blue wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s" style="font-size: 4em; padding-top: 100px;">
                       {{$namehacka->name}}
                    </h1>
                    <h3 class="text-blue wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s" style="padding-top: 50px;">
                       {{$hackathon->first_description}}
                    </h3>
                    <br />
                    <h5 class="text-dark-blue wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <br />
                        {{$hackathon->second_description}} ​
                    </h5>
                    <br />
                    
                </div>
                <div id="particles-1" class="particles"></div>
            </div>
        
        <div class="site-content"> 
            <!-- عن الهاكاثون -->
            <div class="container" id="about-hack" style="padding: 100px;">

                <h2 class="text-white wow zoomIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <br/>
                    عن الهاكاثون ​
                </h2>
                <h3 class="text-blue wow zoomIn" data-wow-duration="1.3s" data-wow-delay="0.2s" style="padding-top: 50px;">
                    {{$hackathon->about}}
                </h3>
            </div>

            <!-- التحديات والمجالات -->
            <div class="container" id="challenges">
                <hr class="featurette-divider">
                <h2 class="text-white wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <br/>
                    التحديات​
                </h2>
                <h3 class="text-blue" style="padding-top: 50px;">
                    <ul>
                        @foreach ($challenges as $challenge)
                            <li class="wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="0.5s" style=" padding: 10px;">{{$challenge->name}} </li>
                        @endforeach
                        <li class="wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay="0.5s" style="padding: 10px;">الدليل السياحي</li>
                        <li class="wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="0.5s" style="padding: 10px;">الثقافة و الأثار</li>
                    </ul>
                </h3>


            </div>

            <!-- Hackathon Fields -->
            <div class="jumbotron text-center album py-5 custom-bg-img animsition-fade-up" id="fields-page">
                <div class="container custom-bg-color ">
                    <h2 class="text-white">
                        <i class="fa " aria-hidden="true"></i>
                        مجالات الهاكاثون
                    </h2>
                    
                    <br />
                </div>
                <!-- <div class="row ">
                    <div class="col-md wow slideInRight" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="card mb-4 shadow-sm hvr-grow" style="min-height: 30vh; min-width: 30vh;">
                            <div class="card-body text-center">
                                <h1 class="text-blue">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </h1>
                                <h2 class="text-blue">
                                    اسم المجال
                                </h2>
                                <hr>
                                <h3 class="card-text text-dark-blue">
                                    وصف المجال
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md wow slideInLeft" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="card mb-4 shadow-sm hvr-grow" style="min-height: 30vh; min-width: 30vh;">
                            <div class="card-body text-center">
                                <h1 class="text-blue">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </h1>
                                <h2 class="text-blue">
                                    اسم المجال
                                </h2>
                                <hr>
                                <h3 class="card-text text-dark-blue">
                                    وصف المجال
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md wow slideInRight" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="card mb-4 shadow-sm hvr-grow" style="min-height: 30vh; min-width: 30vh;">
                            <div class="card-body text-center">
                                <h1 class="text-blue">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </h1>
                                <h2 class="text-blue">
                                    اسم المجال
                                </h2>
                                <hr>
                                <h3 class="card-text text-dark-blue">
                                    وصف المجال
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md wow slideInLeft" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="card mb-4 shadow-sm hvr-grow" style="min-height: 30vh; min-width: 30vh;">
                            <div class="card-body text-center">
                                <h1 class="text-blue">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </h1>
                                <h2 class="text-blue">
                                    اسم المجال
                                </h2>
                                <hr>
                                <h3 class="card-text text-dark-blue">
                                    وصف المجال
                                </h3>
                            </div>
                        </div>
                    </div>
                </div> -->

                <section id="features" class="services-area p-t-30" >
                    <p style="display: none">{{$a=0}}</p>
                    <div class="container" >
                        <div class="row justify-content-center content-row">
                            @foreach ($fields as $field)
                            @if ($a!=0 && 0 == $a%4)
                                </div> <!-- row -->
                                <div class="row justify-content-center content-row pt-3">
                                <p style="display: none">{{$a++}}</p>
                                <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 30vh;">
                                        <div class="single-services text-center mt-30 wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                            <div class="services-icon">
                                                <img class="shape" src="{{asset('img/services-shape.svg')}}" alt="shape">
                                                <img class="shape-1" src="{{asset('img/services-shape-1.svg')}}" alt="shape">
                                                <i class="lni-travel"></i>
                                            </div>
                                            <div class="services-content mt-30">
                                                <h4 class="services-title"><a href="#">{{$field->name}}</a></h4>
                                                <p class="text">{{$field->body}}.</p>
                                                <a class="more" href="hackathon.html">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                            </div>
                                        </div> <!-- single services -->
                                </div>
                            @else
                            <p style="display: none">{{$a++}}</p>
                            <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 30vh;">
                                <div class="single-services text-center mt-30 wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="services-icon">
                                        <img class="shape" src="{{asset('img/services-shape.svg')}}" alt="shape">
                                        <img class="shape-1" src="{{asset('img/services-shape-1.svg')}}" alt="shape">
                                        <i class="lni-travel"></i>
                                    </div>
                                    <div class="services-content mt-30">
                                        <h4 class="services-title"><a href="#">{{$field->name}}</a></h4>
                                        <p class="text">{{$field->body}}.</p>
                                        <a class="more" href="hackathon.html">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                            @endif
                            @endforeach
                            {{-- <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 30vh;">
                                <div class="single-services text-center mt-30 wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="services-icon">
                                        <img class="shape" src="{{asset('img/services-shape.svg')}}" alt="shape">
                                        <img class="shape-1" src="{{asset('img/services-shape-2.svg')}}" alt="shape">
                                        <i class="lni-trees"></i>
                                    </div>
                                    <div class="services-content mt-30">
                                        <h4 class="services-title"><a href="#">هاكاثون الزراعة</a></h4>
                                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                                        <a class="more" href="#">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                            <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 30vh;">
                                <div class="single-services text-center mt-30 wow slideInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="services-icon">
                                        <img class="shape" src="{{asset('img/services-shape.svg')}}" alt="shape">
                                        <img class="shape-1" src="{{asset('img/services-shape-3.svg')}}" alt="shape">
                                        <i class="lni-book"></i>
                                    </div>
                                    <div class="services-content mt-30">
                                        <h4 class="services-title"><a href="#">هاكاثون الثقافة</a></h4>
                                        <p class="text">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, seddiam nonu eirmod tempor invidunt labore.</p>
                                        <a class="more" href="#">لمعرفة المزيد<i class="lni-chevron-left"></i></a>
                                    </div>
                                </div> <!-- single services -->
                            </div>
                            <div class="col-lg-2 col-md-7 col-sm-1 mt-2" style="min-height: 30vh; min-width: 30vh;">
                                <div class="single-services text-center mt-30 wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="services-icon">
                                        <img class="shape" src="{{asset('img/services-shape.svg')}}" alt="shape">
                                        <img class="shape-1" src="{{asset('img/services-shape-2.svg')}}" alt="shape">
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
                    </div> <!-- container -->
                </section>

            </div><!-- /.jumbotron -->

            <!-- الخط الزمني -->
            <!-- We can use an image rather than table for timeline -->
            <div class="container marketing" id="timeline">

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col wow fadeInDown" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <h2 class="featurette-heading text-white">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            خطواتنا لتعيش التجربة
                            <br />
                            <br>
                            <span class="text-grey" style="font-size: 33px;">
                                كل خطوات التجربة من بداية التسجيل إلى النهاية
                            </span>
                        </h2>
                    </div>
                    <!-- <div class="col-md-6 order-md-1 animsition-fade-left wow fadeInRight" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="main-container">
                            <section id="timeline" class="timeline-outer">
                                <div class="container" id="content">
                                    <div class="row">
                                        <div class="col s12 m12 l12">
                                            <ul class="timeline">
                                                <li class="event">
                                                    <h3 class="custom-en-text">Date</h3>
                                                    <p>1. بداية التسجيل </p>
                                                </li>
                                                <li class="event">
                                                    <h3 class="custom-en-text">Date</h3>
                                                    <p>2. ورش العمل </p>
                                                </li>
                                                <li class="event">
                                                    <h3 class="custom-en-text">Date</h3>
                                                    <p>3. بداية الهاكاثون </p>
                                                </li>
                                                <li class="event">
                                                    <h3 class="custom-en-text">Date</h3>
                                                    <p>4. عرض المشاريع وإعلان النتائج</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <br />
                        </div>
                    </div> -->
                    <div class="content-timeline mt-5">
                        <!--content title-->
                        <!-- <h2 class="content__title">Material Design compatible and Responsive</h2> -->
                        <!--content inner-->
                        <div class="content__inner">
                          <div class="timeline__new">
                            <!--timeline bar-->
                            <div class="timeline__bar"></div>
                            @foreach ($timelines as $timeline)
                            <!--timeline element-->
                            <div class="timeline__elem timeline__elem--{{$timeline->position}}">
                              <!--timeline element date-->
                              <div class="timeline__date"><span class="timeline__date-day">{{ date('j', strtotime($timeline->date))}}</span><span class="timeline__date-month">{{ date('M', strtotime($timeline->date))}}</span></div>
                              <!--timeline event-->
                              <div class="timeline__event wow fadeInLeft">
                                <!--timeline event full date and time-->
                                <div class="timeline__event-date-time">
                                  <div class="timeline__event-date"> <span>{{$timeline->date}}</span></div>
                                  <div class="timeline__event-time"><span></span></div>
                                </div>
                                <!--timeline event title-->
                                <h4 class="timeline__event-title">{{$timeline->name}}</h4>
                                <!--timeline event descrtiption-->
                                <div class="timeline__event-descr">
                                  <p>{{$timeline->body}} . This is a text field that is generated to test the font and view it in order to make adjusments, This is a text field that is generated to test the font and view it in order to make adjusments</p>
                                </div>
                                <!--timeline event actions links-->
                                <div class="timeline__event-actions"><a class="timeline__event-action" href="#" title="Learn More">لمعرفة المزيد</a><a class="timeline__event-action" href="#" title="Contact Us">تواصل معنا</a></div>
                              </div>
                            </div>
                            @endforeach
                            <!--timeline element-->
                            {{-- <div class="timeline__elem timeline__elem--right">
                              <!--timeline element date-->
                              <div class="timeline__date"><span class="timeline__date-day">18</span><span class="timeline__date-month">Jul</span></div>
                              <!--timeline event-->
                              <div class="timeline__event wow fadeInRight">
                                <!--timeline event full date and time-->
                                <div class="timeline__event-date-time">
                                  <div class="timeline__event-date"> <span>18/07/2019</span></div>
                                  <div class="timeline__event-time"><span>12:30</span></div>
                                </div>
                                <!--timeline event title-->
                                <h4 class="timeline__event-title">CSS Con</h4>
                                <!--timeline event descrtiption-->
                                <div class="timeline__event-descr">
                                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                </div>
                                <!--timeline event actions links-->
                                <div class="timeline__event-actions"><a class="timeline__event-action" href="#" title="Learn More">لمعرفة المزيد </a><a class="timeline__event-action" href="#" title="Contact Us">تواصل معنا</a></div>
                              </div>
                            </div>
                            <!--timeline element-->
                            <div class="timeline__elem timeline__elem--left">
                              <!--timeline element date-->
                              <div class="timeline__date"><span class="timeline__date-day">23</span><span class="timeline__date-month">Jul</span></div>
                              <!--timeline event-->
                              <div class="timeline__event wow fadeInLeft">
                                <!--timeline event full date and time-->
                                <div class="timeline__event-date-time">
                                  <div class="timeline__event-date"> <span>23/07/2019</span></div>
                                  <div class="timeline__event-time"><span>07:30</span></div>
                                </div>
                                <!--timeline event title-->
                                <h4 class="timeline__event-title">React Workshop</h4>
                                <!--timeline event descrtiption-->
                                <div class="timeline__event-descr">
                                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                </div>
                                <!--timeline event actions links-->
                                <div class="timeline__event-actions"><a class="timeline__event-action" href="#" title="Learn More">لمعرفة المزيد</a><a class="timeline__event-action" href="#" title="Contact Us">تواصل معنا</a></div>
                              </div>
                            </div>
                            <!--timeline element-->
                            <div class="timeline__elem timeline__elem--left">
                              <!--timeline element date-->
                              <div class="timeline__date"><span class="timeline__date-day">06</span><span class="timeline__date-month">Aug</span></div>
                              <!--timeline event-->
                              <div class="timeline__event wow fadeInLeft">
                                <!--timeline event full date and time-->
                                <div class="timeline__event-date-time">
                                  <div class="timeline__event-date"> <span>06/08/2019</span></div>
                                  <div class="timeline__event-time"><span>12:30</span></div>
                                </div>
                                <!--timeline event title-->
                                <h4 class="timeline__event-title">Angular Meetup</h4>
                                <!--timeline event descrtiption-->
                                <div class="timeline__event-descr">
                                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                </div>
                                <!--timeline event actions links-->
                                <div class="timeline__event-actions"><a class="timeline__event-action" href="#" title="Learn More">لمعرفة المزيد</a><a class="timeline__event-action" href="#" title="Contact Us">تواصل معنا</a></div>
                              </div>
                            </div>
                            <!--timeline element-->
                            <div class="timeline__elem timeline__elem--right">
                              <!--timeline element date-->
                              <div class="timeline__date"><span class="timeline__date-day">17</span><span class="timeline__date-month">Aug</span></div>
                              <!--timeline event-->
                              <div class="timeline__event wow fadeInRight">
                                <!--timeline event full date and time-->
                                <div class="timeline__event-date-time">
                                  <div class="timeline__event-date"> <span>17/08/2019</span></div>
                                  <div class="timeline__event-time"><span>16:30</span></div>
                                </div>
                                <!--timeline event title-->
                                <h4 class="timeline__event-title">Vue.js Con</h4>
                                <!--timeline event descrtiption-->
                                <div class="timeline__event-descr">
                                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                </div>
                                <!--timeline event actions links-->
                                <div class="timeline__event-actions"><a class="timeline__event-action" href="#" title="Learn More">لمعرفة المزيد</a><a class="timeline__event-action" href="#" title="Contact Us">تواصل معنا</a></div>
                              </div>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                </div>

                <hr class="featurette-divider">
            </div> <!-- /.container -->
         
            <!-- التسجيل -->
            <div class="container" id="register">
                <h2 class="text-dark-blue">
                    <a href="\" style="color: white; text-decoration: none;">سجل الآن!</a>
                </h2>

                
            </div>
            
            <!-- الأسئلة الشائعة -->
            <div class="container" id="faq" style="padding-bottom: 100px;">

                <hr class="featurette-divider">

                <!----------------------------------------------------------->
                
                <h2 class=" text-white" style="padding-bottom: 50px;  padding-top: 50px;">
                    الاسئلة الشائعة
                </h2>
                <div class="wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <button class="accordion text-dark-blue">هل يمكني ان اسجل بدون فريق ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">كم السن المطلوب للتسجيل ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">هل يمكني التسجيل بدون خبرة ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">كيف بامكاني التسجيل ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">كيف سيتم إعلامي بقبولي ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">ماهي شروط القبول ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">ماهي الأدوات التي سأحتاجها ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">ما هو مقدار معرفتي البرمجية للمشاركة ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">هل سيكون حضوري أم عن بعد ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">هل سنحصل على شهادات مشاركة ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">ماهي معايير تقييم الفرق ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">هل العمل داخل الهاكثون فردي أم مجموعات ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion text-dark-blue mt-1">هل سيكون هناك مرشد أثناء الهاكثون ؟</button>
                    <div class="panel text-dark-blue">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
    
                <!----------------------------------------------------------->

            </div>

            <!-- الرعاة -->
            <div class="container" id="sponsers">

                <hr class="featurette-divider">
                <h3 class="text-white">
                    <br />
                    الرعاة​
                </h3>

                <br /><br /><br /><br />

            </div>

            <!-- <div class="footer-basic">
                <footer>
                    All rights reserved Social medias
                    <div class="social">
                        <a href="#"><i class="icon ion-social-instagram"></i></a>
                        <a href="#"><i class="icon ion-social-snapchat"></i></a>
                        <a href="https://twitter.com/hackathon_x"><i class="icon ion-social-twitter"></i></a>
                        <a href="#"><i class="icon ion-social-facebook"></i></a>
                    </div>
                   
                    <p class="copyright">HackathonX 2021</p>
                </footer>
            </div> -->

            <section class="footer3 cid-sD2vqlmDEQ" once="footers" id="footer3-l">

    

                <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(35, 35, 35);"></div>
            
                <div class="container">
                    <div class="media-container-row align-center mbr-white">
                        <div class="row row-links">
                            <ul class="foot-menu">
                                
                                
                                
                                
                                
                            <li class="foot-menu-item mbr-fonts-style display-7">
                                    <a class="text-white" href="#" target="_blank">About us</a>
                                </li><li class="foot-menu-item mbr-fonts-style display-7">
                                    <a class="text-white" href="#" target="_blank">Services</a>
                                </li><li class="foot-menu-item mbr-fonts-style display-7">
                                    <a class="text-white" href="#" target="_blank">Contact Us</a>
                                </li><li class="foot-menu-item mbr-fonts-style display-7">
                                    <a class="text-white" href="#" target="_blank">Careers</a>
                                </li><li class="foot-menu-item mbr-fonts-style display-7">
                                    <a class="text-white" href="#" target="_blank">Work</a>
                                </li></ul>
                        </div>
                        <div class="row social-row">
                            <div class="social-list align-right pb-2">
                                
                                
                                
                                
                                
                                
                            <div class="soc-item">
                                    <a href="https://twitter.com/#" target="_blank">
                                        <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                </div><div class="soc-item">
                                    <a href="https://www.facebook.com/#" target="_blank">
                                        <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                </div><div class="soc-item">
                                    <a href="https://www.youtube.com/c/#" target="_blank">
                                        <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                </div><div class="soc-item">
                                    <a href="https://instagram.com/#" target="_blank">
                                        <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                </div><div class="soc-item">
                                    <a href="https://plus.google.com/u/0/#" target="_blank">
                                        <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                </div><div class="soc-item">
                                    <a href="https://www.behance.net/#" target="_blank">
                                        <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                                    </a>
                                </div></div>
                        </div>
                        <div class="row row-copirayt">
                            <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                                © Copyright 2021. All Rights Reserved.
                            </p>
                        </div>
                </div>
            </div>
            </section>

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

         <!-- timeline js -->
         <script src="{{ asset('js/timeline.js') }}"></script>
         <!-- <script src="js/script.js"></script>        -->

        
    </body>
</html>