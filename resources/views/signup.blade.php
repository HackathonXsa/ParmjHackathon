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
    <div class="container d-flex justify-content-center py-5">
      <div class="card" style="width: 24rem;">
        <div class="card-body">
          <h5 class="card-title text-center font-bold mb-3">تسجيل</h5>
          <form>
            <label for="InputEmail" class="form-label">البريد الإلكتروني</label>
            <div class="input-group has-validation mb-3">
              <!-- is-invalid -->
              <input type="email" placeholder="email@domain.com" class="form-control" id="InputEmail" aria-describedby="validationServerEmailFeedback">
              <div id="validationServerEmailFeedback" class="invalid-feedback">
                البريد الإلكتروني مسجل.
              </div>
            </div>
            <label for="InputEmailConfirm" class="form-label">تأكيد البريد الإلكتروني</label>
            <div class="input-group has-validation mb-3">
              <!-- is-invalid -->
              <input type="email" placeholder="email@domain.com" class="form-control" id="InputEmailConfirm" aria-describedby="validationServerEmailConfirmFeedback">
              <div id="validationServerEmailConfirmFeedback" class="invalid-feedback">
                تأكيد البريد الإلكتروني غير صحيح.
              </div>
            </div>
            <label for="InputPhone" class="form-label">رقم الجوال</label>
            <div class="input-group has-validation mb-3">
              <!-- is-invalid -->
              <input type="tel" pattern="05[0-9]{8}" placeholder="05XXXXXXXX" class="form-control" id="InputPhone" aria-describedby="validationServerPhoneFeedback">
              <div id="validationServerPhoneFeedback" class="invalid-feedback">
                رقم الجوال غير صحيح.
              </div>
            </div>
            <label for="InputPassword" class="form-label">كلمة المرور</label>
            <div class="input-group has-validation mb-3">
              <!-- is-invalid -->
              <input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" class="form-control" id="InputPassword" aria-describedby="validationServerPasswordFeedback">
              <div id="validationServerPasswordFeedback" class="invalid-feedback">
                كلمة المرور غير صحيحة.
              </div>
            </div>
            <label for="InputPasswordConfirm" class="form-label">تأكيد كلمة المرور</label>
            <div class="input-group has-validation mb-3">
              <!-- is-invalid -->
              <input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" class="form-control" id="InputPasswordConfirm" aria-describedby="validationServerPasswordConfirmFeedback">
              <div id="validationServerPasswordConfirmFeedback" class="invalid-feedback">
                تأكيد كلمة المرور غير صحيح.
              </div>
            </div>
            <div class="mb-3">
              <span>لديك حساب؟ <a href="{{URL::route('signin')}}">سجل الدخول</a></span>
            </div>
            <button type="submit" class="btn accent-main-bg">تسجيل</button>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>