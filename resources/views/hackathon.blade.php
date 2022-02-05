<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('OwlCarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('OwlCarousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hackathon_style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>{{$namehacka->name}}</title>
</head>

<body>
    <header>
        <div class="d-flex justify-content-between"></div>
        <div class="logo-holder">
            <div class="logo">
                <img src="{{ asset('assets/Untitled_design-13@2x.png') }}" alt="logo">
            </div>
        </div>
        <nav>
            <ul class="links">
                <li class="p-3 active">
                    <a href="#">الرئيسية</a>
                </li>
                <li class="p-3">
                    <a href="#">الهاكثونات</a>
                </li>
                <li class="p-3">
                    <a href="#">التقويم</a>
                </li>
                <li class="p-3">
                    <a href="#">الأسئلة الشائعة</a>
                </li>
            </ul>
        </nav>
        <!-- href -->
        <a class="px-2 accent-main font-bold" href="#">تسجيل الدخول</a>
        </div>
    </header>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">الرئيسية</a>
        <a href="#">الهاكثونات</a>
        <a href="#">التقويم</a>
        <a href="#">الأسئلة الشائعة</a>
        <a href="#">تسجيل الدخول</a>
    </div>
    <span class="sidebtn" onclick="openNav()">&#9776;</span>
    <!--
    <nav class="navbar navbar-custom">
        <div class="d-flex justify-content-between container-fluid">
            <a class="px-2" href="#">
                <img src="Untitled_design-13.png" alt="Homepage" height="60">
            </a>
            <div class="py-2">
                <a class="px-2" href="#">
                    الرئيسية
                </a>
                <a class="px-2" href="#">
                    الهاكثونات
                </a>
                <a class="px-2" href="#">
                    التقويم
                </a>
                <a class="px-2" href="#">
                    الأسئلة الشائعة
                </a>
            </div>
            <a class="px-2 accent-main font-bold" href="#">تسجيل الدخول</a>
        </div>
    </nav>
    --->
    <div class="overflow">
        <img src="{{ asset('assets/Group-13233.png') }}" class="img-underlay img-bg">
        <div class="my-5">
            <div class="container container-custom-main mx-auto">
                <br>
                <br>
                <!-- text -->
                <h1 class="text-center py-5 font-bold accent-sec">{{$namehacka->name}}</h1>
                <br>
                <!-- text -->
                <p class="text-center py-3 accent-third">تحدي مطور لمدة ثلاث ايام لإنشاء أدوات ومنتجات رقمية جديدة
                    وإعادة تشكيل مستقبل صناعة
                    السفر والسياحة والضيافة</p>
                <br>
                <p class="text-center fs-5 accent-sec">باقي على الإنطلاق</p>
                <div class="shadow p-3 mx-auto mb-5 bg-body" id="countdown">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="mx-4">
                            <img src="{{ asset('assets/coding.svg') }}" class="img-overlay" width="60">
                            <img src="{{ asset('assets/suitcase.png') }}" width="60">
                        </div>
                        <!--
                        <div class="countdown-item text-center px-2">
                            <p class="font-bold fs-1 mb-1 accent-main" id="second">00</p>
                            ثانية
                        </div>
                        <div>:</div>
                        -->
                        <div class="countdown-item text-center px-2">
                            <p class="font-bold fs-1 mb-1 accent-main" id="minute">00</p>
                            دقيقة
                        </div>
                        <div>:</div>
                        <div class="countdown-item text-center px-2">
                            <p class="font-bold fs-1 mb-1 accent-main" id="hour">00</p>
                            ساعة
                        </div>
                        <div>:</div>
                        <div class="countdown-item text-center px-2">
                            <p class="font-bold fs-1 mb-1 accent-main" id="day">00</p>
                            يوم
                        </div>
                        <div>:</div>
                        <div class="countdown-item text-center px-2">
                            <p class="font-bold fs-1 mb-1 accent-main" id="month">00</p>
                            شهر
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="terms accent-sec-bg mx-auto my-5">
            <div class="d-flex flex-lg-row flex-column justify-content-around align-items-start align-items-sm-center">
                <div class="d-flex flex-row my-2">
                    <svg class="align-self-center mx-3" id="clock" xmlns="http://www.w3.org/2000/svg" width="55.272"
                        height="55.272" viewBox="0 0 55.272 55.272">
                        <path id="Path_15426" data-name="Path 15426"
                            d="M49.456,14.543a2.3,2.3,0,0,0-1.07,3.076,22.8,22.8,0,0,1,2.28,10.017,23.03,23.03,0,1,1-23.03-23.03,22.753,22.753,0,0,1,14.3,4.969A2.3,2.3,0,1,0,44.8,5.97,27.64,27.64,0,1,0,55.272,27.636a27.354,27.354,0,0,0-2.74-12.023A2.3,2.3,0,0,0,49.456,14.543Zm0,0"
                            fill="#fff" />
                        <path id="Path_15427" data-name="Path 15427"
                            d="M178.3,64a2.3,2.3,0,0,0-2.3,2.3V82.424a2.3,2.3,0,0,0,2.3,2.3h11.515a2.3,2.3,0,0,0,0-4.606h-9.212V66.3A2.3,2.3,0,0,0,178.3,64Zm0,0"
                            transform="translate(-150.667 -54.788)" fill="#fff" />
                    </svg>
                    <div class="m-2">
                        <span class="font-bold">تاريخ الانطلاق</span>
                        <br>
                        <!-- date -->
                        <span>20/03/2021</span>
                    </div>
                </div>
                <div class="d-flex flex-row my-2">
                    <svg class="align-self-center mx-3" xmlns="http://www.w3.org/2000/svg" width="51.513"
                        height="51.706" viewBox="0 0 51.513 51.706">
                        <g id="target" transform="translate(-0.956 0)">
                            <g id="Group_13334" data-name="Group 13334" transform="translate(0.956 0.001)">
                                <g id="Group_13331" data-name="Group 13331" transform="translate(12.192 14.254)">
                                    <g id="Group_13328" data-name="Group 13328">
                                        <g id="Group_13327" data-name="Group 13327">
                                            <path id="Path_15431" data-name="Path 15431"
                                                d="M122.689,143.164a1.009,1.009,0,1,1,.991-.812,1.018,1.018,0,0,1-.991.812Z"
                                                transform="translate(-121.681 -141.147)" fill="#fff" />
                                        </g>
                                    </g>
                                    <g id="Group_13330" data-name="Group 13330" transform="translate(18.455 20.738)">
                                        <g id="Group_13329" data-name="Group 13329">
                                            <path id="Path_15432" data-name="Path 15432"
                                                d="M305.437,348.51a1.009,1.009,0,1,1,1-.852A1.019,1.019,0,0,1,305.437,348.51Z"
                                                transform="translate(-304.427 -346.494)" fill="#fff" />
                                        </g>
                                    </g>
                                </g>
                                <g id="Group_13333" data-name="Group 13333" transform="translate(0)">
                                    <g id="Group_13332" data-name="Group 13332">
                                        <path id="Path_15433" data-name="Path 15433"
                                            d="M52.406,7.508a1.01,1.01,0,0,0-.871-.656L46.029,6.44,45.617.935A1.01,1.01,0,0,0,43.9.3L39.5,4.7a4.054,4.054,0,0,0-1.189,2.728q0,.027,0,.055l.06,3.372a23.005,23.005,0,1,0,3.293,3.258l3.333.054h.053a4.055,4.055,0,0,0,2.728-1.189l4.4-4.4a1.01,1.01,0,0,0,.233-1.065ZM40.923,6.125l2.844-2.844L44.045,7l-3.663,3.668-.057-3.191a2.04,2.04,0,0,1,.6-1.348ZM23.938,49.687A20.961,20.961,0,1,1,37.924,13.126l-2.339,2.339a17.642,17.642,0,0,0-17.632-3.353,1.01,1.01,0,0,0,.686,1.9A15.625,15.625,0,0,1,34.154,16.9l-2.343,2.343a12.332,12.332,0,1,0-2.269,20.474,1.01,1.01,0,1,0-.921-1.8,10.182,10.182,0,0,1-4.684,1.126,10.314,10.314,0,1,1,6.438-18.367L28.02,23.029a7.02,7.02,0,1,0,1.455,1.4l2.347-2.347A10.3,10.3,0,0,1,33.73,31.97a1.01,1.01,0,0,0,1.917.637,12.324,12.324,0,0,0-2.392-11.956l2.339-2.339A15.638,15.638,0,1,1,11.3,19.524,1.01,1.01,0,0,0,9.67,18.332a17.659,17.659,0,1,0,27.354-1.45l2.337-2.337A20.95,20.95,0,0,1,23.938,49.687Zm4.991-20.961a5,5,0,1,1-2.364-4.242l-3.221,3.221a1.01,1.01,0,1,0,1.428,1.428l3.259-3.259A4.963,4.963,0,0,1,28.929,28.726Zm17.415-17.18a2.042,2.042,0,0,1-1.35.6l-3.18-.051,1.94-1.94c.022-.022.042-.044.061-.067l1.658-1.66,3.714.278Z"
                                            transform="translate(-0.956 -0.001)" fill="#fff" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <div class="m-2">
                        <span class="font-bold">الفئة المستهدفة</span>
                        <br>
                        <!-- text -->
                        <span>المبرمجين،المصممين</span>
                    </div>
                </div>
                <div class="d-flex flex-row my-2">
                    <svg class="align-self-center mx-3" xmlns="http://www.w3.org/2000/svg" width="58.529"
                        height="42.967" viewBox="0 0 58.529 42.967">
                        <g id="team" transform="translate(0 -68.066)">
                            <g id="Group_13308" data-name="Group 13308" transform="translate(44.897 86.4)">
                                <g id="Group_13307" data-name="Group 13307">
                                    <path id="Path_15419" data-name="Path 15419"
                                        d="M399.492,229.456c-1.992-1-5.726-1.007-5.884-1.007a.857.857,0,1,0,0,1.715,14.805,14.805,0,0,1,5.117.826.857.857,0,0,0,.767-1.534Z"
                                        transform="translate(-392.751 -228.449)" fill="#fff" />
                                </g>
                            </g>
                            <g id="Group_13310" data-name="Group 13310" transform="translate(0 68.066)">
                                <g id="Group_13309" data-name="Group 13309" transform="translate(0 0)">
                                    <path id="Path_15420" data-name="Path 15420"
                                        d="M55.913,99.614,52.372,98.6a.359.359,0,0,1-.26-.344V97.076a6.445,6.445,0,0,0,.82-.672,6.307,6.307,0,0,0,1.93-4.563V90.21l.342-.685a5.47,5.47,0,0,0,.574-2.433V82.674a.857.857,0,0,0-.857-.857h-8.25a5.447,5.447,0,0,0-5.441,5.441v.051a4.548,4.548,0,0,0,.478,2.023l.439.878v1.4a6.69,6.69,0,0,0,2.75,5.409v1.239c0,.191,0,.27-.708.472l-1.728.494-5-1.817a.856.856,0,0,0-.234-.656l-1.6-1.678V92.255c.169-.139.335-.282.5-.433a10.063,10.063,0,0,0,3.17-7.315V82.258a9.91,9.91,0,0,0,.917-4.168V68.923a.857.857,0,0,0-.857-.857H26.525a8.2,8.2,0,0,0-8.191,8.191V78.09a9.91,9.91,0,0,0,.917,4.168v1.935a10.476,10.476,0,0,0,3.667,8v2.883l-1.6,1.678a.856.856,0,0,0-.234.656l-5.275,1.918a4.5,4.5,0,0,0-1.06.555l-.828-.414a6.548,6.548,0,0,0,3.284-2.658.857.857,0,0,0,0-.767c-.618-1.236-.693-3.5-.753-5.323-.02-.606-.039-1.179-.075-1.689a7.458,7.458,0,0,0-7.272-7.214A7.458,7.458,0,0,0,1.836,89.03c-.036.51-.055,1.083-.075,1.689-.06,1.82-.135,4.086-.753,5.322a.857.857,0,0,0,0,.767,6.547,6.547,0,0,0,3.288,2.656l-2.3,1.15A3.589,3.589,0,0,0,0,103.841v6.334a.857.857,0,0,0,1.715,0v-6.334a1.883,1.883,0,0,1,1.046-1.693l2.865-1.432,1,.947a3.606,3.606,0,0,0,4.97,0l1-.947.934.467a4.515,4.515,0,0,0-.69,2.394v6.6a.857.857,0,1,0,1.715,0v-6.6a2.818,2.818,0,0,1,1.849-2.64l5.562-2.022,2.315,3.473a1.768,1.768,0,0,0,1.3.781q.089.009.177.009a1.767,1.767,0,0,0,1.253-.52l1.412-1.412v8.931a.857.857,0,1,0,1.715,0v-8.931l1.412,1.412a1.766,1.766,0,0,0,1.253.52q.088,0,.177-.009a1.768,1.768,0,0,0,1.3-.781l2.315-3.473,5.562,2.022A2.818,2.818,0,0,1,44,103.577v6.6a.857.857,0,1,0,1.715,0v-6.6a4.532,4.532,0,0,0-1.268-3.137l.212-.06a4.7,4.7,0,0,0,.8-.288l2.189,2.189v7.9a.857.857,0,1,0,1.715,0v-7.9l2.174-2.174a2.04,2.04,0,0,0,.365.145l3.541,1.012a1.9,1.9,0,0,1,1.373,1.82v7.093a.857.857,0,1,0,1.715,0v-7.093A3.623,3.623,0,0,0,55.913,99.614ZM5.5,98.1a6.164,6.164,0,0,1-2.752-1.767,9.451,9.451,0,0,0,.489-2.053A6.393,6.393,0,0,0,5.5,97.072Zm4.912,2.32a1.892,1.892,0,0,1-2.608,0l-.8-.758a1.774,1.774,0,0,0,.209-.837v-.914a6.375,6.375,0,0,0,3.786,0v.913a1.774,1.774,0,0,0,.209.838Zm-1.3-3.936a4.648,4.648,0,0,1-4.643-4.643.852.852,0,0,0-1-.845c0-.074,0-.148.007-.221.019-.59.037-1.146.071-1.624a6.365,6.365,0,0,1,1.733-4,5.327,5.327,0,0,1,7.657,0,6.365,6.365,0,0,1,1.733,4c.034.477.052,1.034.072,1.624l.005.153a7.7,7.7,0,0,0-4.235-3.094,10.76,10.76,0,0,0-3.261-.517.858.858,0,0,0-.593.262l-1.547,1.6a.857.857,0,1,0,1.234,1.19l1.287-1.335c1.109.054,4.675.469,6.062,3.523A4.632,4.632,0,0,1,9.108,96.484ZM12.715,98.1V97.08a6.342,6.342,0,0,0,2.264-2.795,9.439,9.439,0,0,0,.488,2.048A6.193,6.193,0,0,1,12.715,98.1Zm8.251-13.909V82.066a.858.858,0,0,0-.085-.373,8.224,8.224,0,0,1-.831-3.6V76.257a6.484,6.484,0,0,1,6.476-6.476H38.5v8.31a8.224,8.224,0,0,1-.831,3.6.858.858,0,0,0-.085.373v2.441a8.231,8.231,0,0,1-2.628,6.064,8.529,8.529,0,0,1-.658.557l-.015.011a8.244,8.244,0,0,1-5.563,1.66A8.492,8.492,0,0,1,20.966,84.193Zm4.827,17.251a.054.054,0,0,1-.048.017.054.054,0,0,1-.044-.026l-2.666-4,.858-.9L27.938,99.3Zm3.482-3.309-4.643-3.174v-1.6A9.653,9.653,0,0,0,28.61,94.51q.339.022.675.022A9.931,9.931,0,0,0,33.918,93.4v1.566Zm3.574,3.3a.055.055,0,0,1-.044.026.053.053,0,0,1-.048-.017L30.612,99.3l4.045-2.765.858.9Zm15.655-.723-1.946-1.946a2.352,2.352,0,0,0,.053-.509V97.9a6.011,6.011,0,0,0,1.7.3c.066,0,.132,0,.2,0a6.369,6.369,0,0,0,1.89-.286v.345a2.05,2.05,0,0,0,.062.5Zm3.233-5.539a4.608,4.608,0,0,1-3.376,1.308,4.8,4.8,0,0,1-4.5-4.871v-1.6a.856.856,0,0,0-.091-.383l-.53-1.059a2.824,2.824,0,0,1-.3-1.256v-.051a3.73,3.73,0,0,1,3.726-3.726h7.393v3.561a3.746,3.746,0,0,1-.393,1.666l-.433.866a.857.857,0,0,0-.091.383v1.833A4.606,4.606,0,0,1,51.738,95.173Z"
                                        transform="translate(0 -68.066)" fill="#fff" />
                                </g>
                            </g>
                            <g id="Group_13312" data-name="Group 13312" transform="translate(53.147 103.818)">
                                <g id="Group_13311" data-name="Group 13311">
                                    <path id="Path_15421" data-name="Path 15421"
                                        d="M465.78,380.814a.857.857,0,0,0-.857.857v5.5a.857.857,0,1,0,1.715,0v-5.5A.857.857,0,0,0,465.78,380.814Z"
                                        transform="translate(-464.923 -380.814)" fill="#fff" />
                                </g>
                            </g>
                            <g id="Group_13314" data-name="Group 13314" transform="translate(3.667 104.951)">
                                <g id="Group_13313" data-name="Group 13313" transform="translate(0 0)">
                                    <path id="Path_15422" data-name="Path 15422"
                                        d="M32.934,390.728a.857.857,0,0,0-.857.857v4.367a.857.857,0,1,0,1.715,0v-4.367A.857.857,0,0,0,32.934,390.728Z"
                                        transform="translate(-32.077 -390.728)" fill="#fff" />
                                </g>
                            </g>
                            <g id="Group_13316" data-name="Group 13316" transform="translate(22.001 75.855)">
                                <g id="Group_13315" data-name="Group 13315" transform="translate(0 0)">
                                    <path id="Path_15423" data-name="Path 15423"
                                        d="M206.758,138.749c-3.243-3.243-10.027-2.623-12.794-2.206a1.76,1.76,0,0,0-1.5,1.753v1.975a.857.857,0,0,0,1.715,0V138.3a.057.057,0,0,1,.045-.058,27.087,27.087,0,0,1,5.57-.272c2.674.178,4.61.849,5.756,1.995a.857.857,0,1,0,1.212-1.212Z"
                                        transform="translate(-192.46 -136.203)" fill="#fff" />
                                </g>
                            </g>
                            <g id="Group_13318" data-name="Group 13318" transform="translate(18.334 105.651)">
                                <g id="Group_13317" data-name="Group 13317">
                                    <path id="Path_15424" data-name="Path 15424"
                                        d="M161.241,396.853a.857.857,0,0,0-.857.857v3.667a.857.857,0,1,0,1.715,0V397.71A.857.857,0,0,0,161.241,396.853Z"
                                        transform="translate(-160.384 -396.853)" fill="#fff" />
                                </g>
                            </g>
                            <g id="Group_13320" data-name="Group 13320" transform="translate(38.502 105.651)">
                                <g id="Group_13319" data-name="Group 13319">
                                    <path id="Path_15425" data-name="Path 15425"
                                        d="M337.663,396.853a.857.857,0,0,0-.857.857v3.667a.857.857,0,0,0,1.715,0V397.71A.857.857,0,0,0,337.663,396.853Z"
                                        transform="translate(-336.806 -396.853)" fill="#fff" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <div class="m-2">
                        <span class="font-bold">
                            اعضاء الفريق
                        </span>
                        <br>
                        <!-- text -->
                        <span>٣-٥ اعضاء</span>
                    </div>
                </div>
                <div class="d-flex flex-row my-2">
                    <svg class="align-self-center mx-3" xmlns="http://www.w3.org/2000/svg" width="54.087" height="43"
                        viewBox="0 0 54.087 43">
                        <g id="coding_1_" data-name="coding (1)" transform="translate(0 -52.478)">
                            <g id="Group_13322" data-name="Group 13322" transform="translate(37.524 58.698)">
                                <g id="Group_13321" data-name="Group 13321" transform="translate(0 0)">
                                    <path id="Path_15428" data-name="Path 15428"
                                        d="M371.21,125.249,358.7,112a2.028,2.028,0,1,0-2.95,2.784l11.194,11.859L355.752,138.5a2.029,2.029,0,0,0,2.95,2.785l12.508-13.252A2.029,2.029,0,0,0,371.21,125.249Z"
                                        transform="translate(-355.199 -111.361)" fill="#fff" />
                                </g>
                            </g>
                            <g id="Group_13324" data-name="Group 13324" transform="translate(0.001 58.698)">
                                <g id="Group_13323" data-name="Group 13323" transform="translate(0)">
                                    <path id="Path_15429" data-name="Path 15429"
                                        d="M16.012,138.5,4.818,126.639,16.012,114.78A2.028,2.028,0,1,0,13.061,112L.554,125.247a2.029,2.029,0,0,0,0,2.785l12.508,13.252a2.029,2.029,0,0,0,2.95-2.786Z"
                                        transform="translate(-0.001 -111.36)" fill="#fff" />
                                </g>
                            </g>
                            <g id="Group_13326" data-name="Group 13326" transform="translate(22.041 52.478)">
                                <g id="Group_13325" data-name="Group 13325">
                                    <path id="Path_15430" data-name="Path 15430"
                                        d="M216.921,52.5a2.03,2.03,0,0,0-2.312,1.7l-5.95,38.943a2.029,2.029,0,0,0,1.7,2.312,2.09,2.09,0,0,0,.309.023,2.029,2.029,0,0,0,2-1.722l5.95-38.943A2.029,2.029,0,0,0,216.921,52.5Z"
                                        transform="translate(-208.636 -52.478)" fill="#fff" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <div class="m-2">
                        <span class="font-bold">
                            نوع المسابقة
                        </span>
                        <br>
                        <!-- text -->
                        <span>اونلاين</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            <p class="text-center font-bold fs-1">
                معايير قبول المشاريع
            </p>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-3 g-0 g-lg-5">
                    <div class="col">
                        <div
                            class="d-flex justify-content-center terms-item shadow position-relative text-center p-2 m-3">
                            <span class="position-absolute top-0 start-0 translate-middle badge accent-main-bg">
                                1
                            </span>
                            <div class="align-self-center">
                                <span class="align-self-center">
                                    العمل كفريق و عدم تجاهل دور أي عضو
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div
                            class="d-flex justify-content-center terms-item shadow position-relative text-center p-2 m-3">
                            <span class="position-absolute top-0 start-0 translate-middle badge accent-main-bg">
                                2
                            </span>
                            <div class="align-self-center">
                                <span>
                                    أن لا يكون المشروع موجود سابقاً بدون أي تطوير
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div
                            class="d-flex justify-content-center terms-item shadow position-relative text-center p-2 m-3">
                            <span class="position-absolute top-0 start-0 translate-middle badge accent-main-bg">
                                3
                            </span>
                            <div class="align-self-center">
                                <span>
                                    دقة و صحة المعلومات المعروضة و المقدمة في المشروع من جميع النواحي
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div
                            class="d-flex justify-content-center terms-item shadow position-relative text-center p-2 m-3">
                            <span class="position-absolute top-0 start-0 translate-middle badge accent-main-bg">
                                4
                            </span>
                            <div class="align-self-center">
                                <span>
                                    اعداد عرض للمشروع
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div
                            class="d-flex justify-content-center terms-item shadow position-relative text-center p-2 m-3">
                            <span class="position-absolute top-0 start-0 translate-middle badge accent-main-bg">
                                5
                            </span>
                            <div class="align-self-center">
                                <span class="">
                                    تقديم العرض و مشاركة الأعضاء فيه
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div
                            class="d-flex justify-content-center terms-item shadow position-relative text-center p-2 m-3">
                            <span class="position-absolute top-0 start-0 translate-middle badge accent-main-bg">
                                6
                            </span>
                            <div class="align-self-center">
                                <span>
                                    التزام بمجال الهاكثون و ترابط المشروع بأهدافه
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br>
    <section class="timeline">
        <div class="timeline-body">
            <div class="timeline-title">الجدول الزمني</div>
            <!---row-->
            <div class="row g-0 timeline-elements-container justify-content-md-center">
                <!---Timeline element-->
                <div class="col-md-2 text-center">
                    <div class="row g-0 justify-content-md-center">
                        <div class="timeline-element-title">المرحلة الأولى</div>
                    </div>
                    <div class="row g-0 justify-content-md-center">
                        <div class="timeline-element-desc">الإعلان عن المبادرة</div>
                    </div>
                    <div class="row g-0 justify-content-md-center">
                        <div class="timeline-element-date">Sep, 1 2021</div>
                    </div>
                </div>
                <!---end timeline element-->
                <div class="col-md-1 timeline-seperator"></div>
                <!---Timeline element-->
                <div class="col-md-2 text-center">
                    <div class="row g-0 justify-content-md-center">
                        <div class="timeline-element-title">المرحلة الثانية</div>
                    </div>
                    <div class="row g-0 justify-content-md-center">
                        <div class="timeline-element-desc">استقبال المستثمرين والشركاء</div>
                    </div>
                    <div class="row g-0 justify-content-md-center">
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
    <div class="container my-5">
        <p class="text-center fs-1">
            الأسئلة الشائعة
        </p>
        <div class="mx-3">
            <div class="accordion accordion-flush" id="accordionFlushQandA">
                <div class="accordion-item">
                    <p class="accordion-header" id="flush-heading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                            هل يمكنني ان اسجل بدون فريق؟
                        </button>
                    </p>
                    <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1"
                        data-bs-parent="#accordionFlushQandA">
                        <div class="accordion-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <p class="accordion-header" id="flush-heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                            ماهو العمر المقبول للتسجيل؟
                        </button>
                    </p>
                    <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2"
                        data-bs-parent="#accordionFlushQandA">
                        <div class="accordion-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <p class="accordion-header" id="flush-heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                            هل يمكنني التسجيل بدون خبرة؟
                        </button>
                    </p>
                    <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3"
                        data-bs-parent="#accordionFlushQandA">
                        <div class="accordion-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <p class="accordion-header" id="flush-heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            كيف بإمكاني التسجيل؟
                        </button>
                    </p>
                    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                        data-bs-parent="#accordionFlushQandA">
                        <div class="accordion-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <p class="accordion-header" id="flush-heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            كيف سيتم اعلامي بقبولي؟
                        </button>
                    </p>
                    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
                        data-bs-parent="#accordionFlushQandA">
                        <div class="accordion-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <p class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                            ماهي شروط القبول؟
                        </button>
                    </p>
                    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6"
                        data-bs-parent="#accordionFlushQandA">
                        <div class="accordion-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <p class="accordion-header" id="flush-heading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                            ماهي الأدوات التي أحتاجها؟
                        </button>
                    </p>
                    <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7"
                        data-bs-parent="#accordionFlushQandA">
                        <div class="accordion-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <p class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                            ماهو مقدار معرفتي البرمجية للمشاركة؟
                        </button>
                    </p>
                    <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8"
                        data-bs-parent="#accordionFlushQandA">
                        <div class="accordion-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <p class="accordion-header" id="flush-heading9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                            هل سنحصل على شهادات للمشاركة؟
                        </button>
                    </p>
                    <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9"
                        data-bs-parent="#accordionFlushQandA">
                        <div class="accordion-body">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-bg mt-5 py-5">
        <div class="container">
            <p class="text-center fs-1">
                الرعاه
            </p>
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
    </div>
    <div class="join-us accent-sec-bg py-5 px-5 d-flex justify-content-center align-items-center">
        <div class="d-flex flex-sm-row flex-column align-items-center">
            <p class="fs-5 me-sm-5 mb-sm-0">اطلق قدراتك وانضم لهاكثون السفر</p>
            <button type="button" class="btn btn-primary btn-lg join-us-blue ms-sm-5 py-3">انضم لنا الان</button>
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
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                rtl: true,
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                dots: false,
                autoplayTimeout: 10000,
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
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 19, 2022 00:00:00").getTime();

        var x = setInterval(function () {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            //Note that a month is 30 days
            var months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30));
            var days = Math.floor(distance % (1000 * 60 * 60 * 24 * 30) / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            months = (months < 10) ? "0" + months : months;
            days = (days < 10) ? "0" + days : days;
            hours = (hours < 10) ? "0" + hours : hours;
            minutes = (minutes < 10) ? "0" + minutes : minutes;
            seconds = (seconds < 10) ? "0" + seconds : seconds;

            document.getElementById("month").innerHTML = months;
            document.getElementById("day").innerHTML = days;
            document.getElementById("hour").innerHTML = hours;
            document.getElementById("minute").innerHTML = minutes;
            //document.getElementById("second").innerHTML = seconds;

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "<div class='text-center font-bold fs-1 mb-1 accent-main'>إنتهى</div>";
            }
        }, 1000);
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="{{ asset('OwlCarousel/owl.carousel.min.js') }}"></script>
</body>

</html>