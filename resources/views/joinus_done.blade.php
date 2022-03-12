<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/hackathon_style.css') }}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>تسجيل</title>
</head>

<body>
  <header>
    <div class="container">
      <div class="d-flex flex-row justify-content-center justify-content-xl-between align-items-center">
        <div class="logo mx-5">
          <img src="{{ asset('assets/Untitled_design-13@2x-c.png') }}" alt="logo">
        </div>
        <nav>
          <a class="px-3" href="{{ route('home.index') }}">الرئيسية</a>
          <a class="px-3" href="{{ route('home.index') }}">الهاكثونات</a>
          <a class="px-3" href="{{ route('home.index') }}">التقويم</a>
          <a class="px-3" href="{{ route('home.index') }}">الأسئلة الشائعة</a>
        </nav>
        <div class="signin mx-5">
          <div style="width: 160px;"></div>
        </div>
      </div>
    </div>
  </header>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{ route('home.index') }}">الرئيسية</a>
    <a href="{{ route('home.index') }}">الهاكثونات</a>
    <a href="{{ route('home.index') }}">التقويم</a>
    <a href="{{ route('home.index') }}">الأسئلة الشائعة</a>
  </div>
  <span class="sidebtn" onclick="openNav()">&#9776;</span>

  <div class="sign-bg">
    <div class="container d-flex flex-column justify-content-center align-items-center py-5">
      <div class="card card-width">
        <div class="card-body">
          <h5 class="card-title text-center font-bold mb-3">تم الإنضمام بنجاح</h5>
          <p>شكرا لك لإنضمامك إلى {{$namehacka->name}}</p>
        </div>
      </div>
    </div>
  </div>


  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>