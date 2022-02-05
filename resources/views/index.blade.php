<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>هاكاثون برمج</title>
</head>
<body dir="rtl">
    <header>
        <div class="logo-holder">
            <div class="logo">
                <img src="{{ asset('assets/Untitled_design-13@2x.png') }}" alt="logo">
            </div>
        </div>
        <nav>            
            <ul class="links">
                <li class="active">
                    <a href="#">الرئيسية</a>
                </li>
                <li>
                    <a href="#">الهاكثونات</a>
                </li>
                <li>
                    <a href="#">التقويم</a>
                </li>
                <li>
                    <a href="#">الأسئلة الشائعة</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="container justify-content-md-center intro mx-auto">
        <div class="intro-img"></div>
            <div class="intro-body">
                <div class="container justify-content-md-center content">
                    <div class="row justify-content-md-center title">هاكثون برمج</div>
                    <div class="row justify-content-md-center subtitle">عام كامل من المسابقات البرمجية برعاية من جمعية المبرمجين</div>
                    <div class="row justify-content-md-center second-subtitle">أطلق قدراتك ومهاراتك في المكان المناسب</div>
                    <button type="row justify-content-md-center button" class="btn btn-primary btn-lg join-us">انضم لنا الان</button>
                </div>
            </div>
    </section>
    <section class="fields">
        <p style="display: none">{{$a=0}}</p>
        <div class="fields-body">
            <div class="fields-title">مجالات الهاكاثونات</div>
            <div class="fields-code"></div>
            <div class="row justify-content-center fields-content">
                @foreach ($hackathons as $hackathon)
                @if ($a!=0 && 0 == $a%4)
                    </div> <!-- row -->
                    <div class="row justify-content-center fields-content">
                        <p style="display: none">{{$a++}}</p>
                        <div class="col-md-4 field-element">
                            <div class="row justify-content-md-center">
                                <div class="field-element-image"><img src="/assets/social-care.png" alt=""></div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="element-text">{{$hackathon->name}}</div>
                            </div>
                        </div>
                @else
                    <p style="display: none">{{$a++}}</p>
                    <div class="col-md-4 field-element">
                        <div class="row justify-content-md-center">
                            <div class="field-element-image"><img src="/assets/social-care.png" alt=""></div>
                        </div>
                        <div class="row justify-content-md-center">
                            <a href="{{ route('home.hackathon', $hackathon->id) }}"><div class="element-text">{{$hackathon->name}}</div></a>
                        </div>
                    </div>
                @endif
                @endforeach
                {{-- <div class="col-md-4 field-element">
                    <div class="row justify-content-md-center">
                        <!-- Can use align items center with d-flex instead of this -->
                        <div class="field-element-image">d</div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md element-text">السفر والسياحة</div>
                    </div>
                </div>
                <div class="col-md-4 field-element">
                    <div class="row justify-content-md-center">
                        <div class="field-element-image">d</div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col element-text">السفر والسياحة</div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="timeline">
        <div class="timeline-body">
            <div class="timeline-title">الجدول الزمني</div>
            <!---row-->
            <div class="row timeline-elements-container justify-content-md-center">
                <!---Timeline element-->
                <div class="col-md-2 text-center">
                    <div class="row justify-content-md-center">
                    <div class="timeline-element-title">المرحلة الأولى</div>
                    </div>
                    <div class="row justify-content-md-center">
                    <div class="timeline-element-desc">الإعلان عن المبادرة</div>
                    </div>
                    <div class="row justify-content-md-center">
                    <div class="timeline-element-date">Sep, 1 2021</div>
                    </div>
                </div> <!---end timeline element-->
                <div class="col-md-1 timeline-seperator"></div>
                <!---Timeline element-->
                <div class="col-md-2 text-center">
                    <div class="row justify-content-md-center">
                    <div class="timeline-element-title">المرحلة الثانية</div>
                    </div>
                    <div class="row justify-content-md-center">
                    <div class="timeline-element-desc">استقبال المستثمرين والشركاء</div>
                    </div>
                    <div class="row justify-content-md-center">
                    <div class="timeline-element-date">Sep, 1 2021</div>
                    </div>
                </div><!---end timeline element-->
                <div class="col-md-1 timeline-seperator"></div>
                <!---Timeline element-->
                <div class="col-md-2 text-center">
                    <div class="timeline-element-title">المرحلة الثالثة</div>
                    <div class="timeline-element-desc">الحملات الإعلانية للهاكثونات</div>
                    <div class="timeline-element-date">Sep, 1 2021</div>
                </div> <!---end timeline element-->
                <div class="col-md-1 timeline-seperator"></div>
                <!---Timeline element-->
                <div class="col-md-2 text-center">
                    <div class="timeline-element-title">المرحلة الرابعة</div>
                    <div class="timeline-element-desc">إطلاق الهاكثونات</div>
                    <div class="timeline-element-date">Sep, 1 2021</div>
                </div><!---end timeline element-->
            </div><!---end row-->
        </div>
    </section>
    <section class="sponsors">
        <div class="sponsors-body container-fluid">
            <div class="sponsors-title">الشركاء</div>
            <div class="row justify-content-md-center sponsors-logo-container">
                    <div class="col-3 sponsors-logo"><img src="/assets/partner-logo.png" alt="Partner logo"></div>
                    <div class="col-3 sponsors-logo"><img src="/assets/partner-logo.png" alt="Partner logo"></div>
                    <div class="col-3 sponsors-logo"><img src="/assets/partner-logo.png" alt="Partner logo"></div>
                    <div class="col-3 sponsors-logo"><img src="/assets/partner-logo.png" alt="Partner logo"></div>
            </div>
        </div>
    </section>
    <section class="blue-join">
        <div class="row align-items-start blue-join-body">
            <div class="col join-text">اطلق قدراتك ومهاراتك في المكان المناسب</div>
            <div class="col"><button type="button" class="btn btn-primary btn-lg join-us-blue">انضم لنا الان</button></div>
        </div>
    </section>
    <!-- Side nav -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">الرئيسية</a>
        <a href="#">الهاكثونات</a>
        <a href="#">التقويم</a>
        <a href="#">الأسئلة الشائعة</a>
        <a href="#">تسجيل الدخول</a>
    </div>
      <span class="sidebtn" onclick="openNav()">&#9776;</span>
    <footer>
        <div class="footer-body">
            <div class="footer-code"></div>
            <div class="rights">جميع الحقوق محفوظة لهاكثون اكس 2022</div>
            <div class="contact">
                <div class="row justify-content-md-center">
                    <div class="col-1 twitter"></div>
                    <div class="col-1 telephone"></div>
                    <div class="col-2 telephone-text">0505012345</div>
                    <div class="col-2 email"></div>
                    <div class="col-2 email-text">test@test.com</div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>
</html>