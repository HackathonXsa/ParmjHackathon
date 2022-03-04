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
          <a class="px-3" href="#">الرئيسية</a>
          <a class="px-3" href="#">الهاكثونات</a>
          <a class="px-3" href="#">التقويم</a>
          <a class="px-3" href="#">الأسئلة الشائعة</a>
        </nav>
        <div class="signin mx-5">
          <div style="width: 160px;"></div>
        </div>
      </div>
    </div>
  </header>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">الرئيسية</a>
    <a href="#">الهاكثونات</a>
    <a href="#">التقويم</a>
    <a href="#">الأسئلة الشائعة</a>
  </div>
  <span class="sidebtn" onclick="openNav()">&#9776;</span>
  <div class="sign-bg">
    <div class="container d-flex flex-column justify-content-center align-items-center py-5">
      <div class="card" style="width: 28rem;">
        <div class="card-body">
          <h5 class="card-title text-center font-bold mb-3">إنضم إلى {{$namehacka->name}}</h5>
          <form method="POST" action="joinus" class="needs-validation" novalidate>
            @csrf <!-- {{ csrf_field() }} -->
            <label for="InputName" class="form-label">الاسم</label>
            <div class="mb-3">
              <!-- is-invalid -->
              <input type="text" placeholder="اكتب اسمك" class="form-control" id="InputName" name="name" aria-describedby="validationServerNameFeedback" required>
              <div id="validationServerNameFeedback" class="invalid-feedback">
                الاسم غير صحيح.
              </div>
            </div>
            <label for="InputPhone" class="form-label">رقم الجوال</label>
            <div class="mb-3">
              <!-- is-invalid -->
              <input type="tel" pattern="05[0-9]{8}" placeholder="05XXXXXXXX" class="form-control" id="InputPhone" name="phone" aria-describedby="validationServerPhoneFeedback" required>
              <div id="validationServerPhoneFeedback" class="invalid-feedback">
                رقم الجوال غير صحيح.
              </div>
            </div>
            <label for="InputEmail" class="form-label">البريد الإلكتروني</label>
            <div class="mb-3">
              <!-- is-invalid -->
              <input type="email" placeholder="email@domain.com" class="form-control" id="InputEmail" name="email" aria-describedby="validationServerEmailFeedback" required>
              <div id="validationServerEmailFeedback" class="invalid-feedback">
                البريد الإلكتروني غير صحيح.
              </div>
            </div>
            <label for="InputAge" class="form-label">العمر</label>
            <div class="mb-3">
              <!-- is-invalid -->
              <input type="text" pattern="[0-9]*" maxlength="2" placeholder="أدخل عمرك" class="form-control" id="InputAge" name="age" aria-describedby="validationServerAgeFeedback" required>
              <div id="validationServerAgeFeedback" class="invalid-feedback">
                العمر غير صحيح.
              </div>
            </div>
            <label for="InputTeamName" class="form-label">اسم الفريق</label>
            <div class="mb-3">
              <!-- is-invalid -->
              <input type="text" placeholder="اكتب اسم الفريق" class="form-control" id="InputTeamName" name="team_name" aria-describedby="validationServerTeamNameFeedback">
              <div id="validationServerTeamNameFeedback" class="invalid-feedback">
                الاسم غير صحيح.
              </div>
            </div>
            <label for="InputRole" class="form-label">دورك في الفريق</label>
            <div class="mb-3">
              <!-- is-invalid -->
              <select class="form-select" id="InputRole" name="role" aria-describedby="validationServerRoleFeedback">
                <option selected disabled value="">إختر ...</option>
                <option>مطور</option>
                <option>مصمم</option>
                <option>رائد أعمال</option>
              </select>
              <div id="validationServerRoleFeedback" class="invalid-feedback">
                إختر دورك.
              </div>
            </div>
            <button type="submit" class="btn accent-main-bg">إنضم</button>
          </form>
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
  <script>
    (function() {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>