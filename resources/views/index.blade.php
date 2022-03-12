<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('OwlCarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('OwlCarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <a href="{{ route('home.index') }}">الرئيسية</a>
                </li>
                <li>
                    <a href="{{ route('home.index') }}">الهاكثونات</a>
                </li>
                <li>
                    <a href="{{ route('home.index') }}">التقويم</a>
                </li>
                <li>
                    <a href="{{ route('home.index') }}">الأسئلة الشائعة</a>
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
                <a href="{{ route('joinus.hackathon') }}">
                <button type="row justify-content-md-center button" class="btn btn-primary btn-lg join-us font-bold">انضم لنا الان</button>
                </a>
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
                        <a href="{{ route('home.hackathon', $hackathon->id) }}">
                            <div class="element-text">{{$hackathon->name}}</div>
                        </a>
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
                </div>
                <!---end timeline element-->
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
                </div>
                <!---end timeline element-->
                <div class="col-md-1 timeline-seperator"></div>
                <!---Timeline element-->
                <div class="col-md-2 text-center">
                    <div class="timeline-element-title">المرحلة الثالثة</div>
                    <div class="timeline-element-desc">الحملات الإعلانية للهاكثونات</div>
                    <div class="timeline-element-date">Sep, 1 2021</div>
                </div>
                <!---end timeline element-->
                <div class="col-md-1 timeline-seperator"></div>
                <!---Timeline element-->
                <div class="col-md-2 text-center">
                    <div class="timeline-element-title">المرحلة الرابعة</div>
                    <div class="timeline-element-desc">إطلاق الهاكثونات</div>
                    <div class="timeline-element-date">Sep, 1 2021</div>
                </div>
                <!---end timeline element-->
            </div>
            <!---end row-->
        </div>
    </section>
    <section class="sponsors">
        <div class="sponsors-body container-fluid">
            <div class="sponsors-title">الشركاء</div>
            <div class="row justify-content-md-center sponsors-logo-container">
                {{-- <div class="col-3 sponsors-logo"><img src="/assets/partner-logo.png" alt="Partner logo"></div>
                    <div class="col-3 sponsors-logo"><img src="/assets/partner-logo.png" alt="Partner logo"></div>
                    <div class="col-3 sponsors-logo"><img src="/assets/partner-logo.png" alt="Partner logo"></div>
                    <div class="col-3 sponsors-logo"><img src="/assets/partner-logo.png" alt="Partner logo"></div> --}}
            </div>
            <div class="owl-carousel">
                <div class="item sponsorship-item d-flex align-items-center">
                    <img src="{{ asset('assets/logo.png') }}">
                </div>
                <div class="item sponsorship-item d-flex align-items-center">
                    <img src="{{ asset('assets/mcit-logo.png') }}">
                </div>
                <div class="item sponsorship-item d-flex align-items-center">
                    <img src="{{ asset('assets/logo.png') }}">
                </div>
                <div class="item sponsorship-item d-flex align-items-center">
                    <img src="{{ asset('assets/mcit-logo.png') }}">
                </div>
                <div class="item sponsorship-item d-flex align-items-center">
                    <img src="{{ asset('assets/logo.png') }}">
                </div>
                <div class="item sponsorship-item d-flex align-items-center">
                    <img src="{{ asset('assets/mcit-logo.png') }}">
                </div>
                <div class="item sponsorship-item d-flex align-items-center">
                    <img src="{{ asset('assets/logo.png') }}">
                </div>
                <div class="item sponsorship-item d-flex align-items-center">
                    <img src="{{ asset('assets/mcit-logo.png') }}">
                </div>
            </div>
        </div>
    </section>
    <!-- Side nav -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ route('home.index') }}">الرئيسية</a>
        <a href="{{ route('home.index') }}">الهاكثونات</a>
        <a href="{{ route('home.index') }}">التقويم</a>
        <a href="{{ route('home.index') }}">الأسئلة الشائعة</a>
    </div>
    <span class="sidebtn" onclick="openNav()">&#9776;</span>
    <div class="join-us-s accent-sec-bg py-5 px-5 d-flex justify-content-center align-items-center">
        <div class="d-flex flex-sm-row flex-column align-items-center">
            <p class="fs-5 text-center me-sm-5 mb-sm-0">اطلق قدراتك وانضم لهاكثون السفر</p>
            <a href="{{ route('joinus.hackathon') }}">
                <button type="button" class="btn btn-primary btn-lg join-us-s-blue font-bold ms-sm-5 py-3">انضم لنا الان</button>
            </a>
        </div>
    </div>
    <footer>
        <div class="py-3 px-5 d-flex flex-sm-row flex-column justify-content-between align-items-sm-center">
            <p class="mb-sm-0"><small>جميع الحقوق محفوظة لهاكثون اكس 2022</small></p>
            <div class="d-flex flex-sm-row flex-column">
                <a href="#" class="text-decoration-none p-1">
                    <img src="{{ asset('assets/Group-818.png') }}" alt="">
                </a>
                <a href="tel:920085473" class="text-decoration-none p-1">
                    <img src="{{ asset('assets/Group-775.png') }}">
                    920085473
                </a>
                <a href="mailto:some@gamail.com" class="text-decoration-none p-1">
                    <img src="{{ asset('assets/Group-778.png') }}">
                    some@gamail.com
                </a>
            </div>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                rtl: true,
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                dots: false,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    400: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('OwlCarousel/owl.carousel.min.js') }}"></script>
</body>

</html>