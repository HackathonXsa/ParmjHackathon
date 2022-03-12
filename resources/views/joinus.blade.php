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
          <h5 class="card-title text-center font-bold mb-3">إنضم إلى هاكثون برمج</h5>
          <form method="POST" action="joinus" class="needs-validation" novalidate>
            @csrf
            <!-- {{ csrf_field() }} -->
            <label for="InputName" class="form-label">الاسم الكامل</label>
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
              <input type="tel" pattern="05[0-9]{8}" maxlength="10" placeholder="05XXXXXXXX" class="form-control" id="InputPhone" name="phone" aria-describedby="validationServerPhoneFeedback" required>
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
            <!--
            <label for="InputAge" class="form-label">العمر</label>
            <div class="mb-3">-->
            <!-- is-invalid -->
            <!--
              <input type="text" pattern="[0-9]*" maxlength="2" placeholder="أدخل عمرك" class="form-control" id="InputAge" name="age" aria-describedby="validationServerAgeFeedback" required>
              <div id="validationServerAgeFeedback" class="invalid-feedback">
                العمر غير صحيح.
              </div>
            </div>-->
            <label for="InputDate" class="form-label">تاريخ الميلاد</label>
            <div class="mb-3">
              <!-- is-invalid -->
              <div class="row">
                <div class="col-3">
                  <select class="form-select" id="InputDateDay" name="day" aria-describedby="validationServerDateFeedback" required>
                    <option selected disabled value="">يوم</option>
                  </select>
                </div>
                <div class="col-3">
                  <select class="form-select" id="InputDateMonth" name="month" aria-describedby="validationServerDateFeedback" required>
                    <option selected disabled value="">شهر</option>
                  </select>
                </div>
                <div class="col-6">
                  <select class="form-select" id="InputDateYear" name="year" aria-describedby="validationServerDateFeedback" required>
                    <option selected disabled value="">سنة</option>
                  </select>
                </div>
              </div>
              <div id="validationServerDateFeedback" class="invalid-feedback">
                تاريخ الميلاد غير صحيح
              </div>
            </div>
            <label for="InputHackathon" class="form-label">مجال الهاكثون</label>
            <div class="mb-3">
              <!-- is-invalid -->
              <select class="form-select" id="InputHackathon" name="hackathon" aria-describedby="validationServerHackathonFeedback" required>
                <option selected disabled value="">إختر ...</option>
                @foreach ($hackathons as $hackathon)
                <option value="{{$hackathon->id}}">{{ $hackathon->name }}</option>
                @endforeach
              </select>
              <div id="validationServerHackathonFeedback" class="invalid-feedback">
                إختر مجال.
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
  <script>
    //Create references to the dropdown's
    const yearSelect = document.getElementById("InputDateYear");
    const monthSelect = document.getElementById("InputDateMonth");
    const daySelect = document.getElementById("InputDateDay");

    const months = ['1', '2', '3', '4',
      '5', '6', '7', '8', '9', '10',
      '11', '12'
    ];

    //Months are always the same
    (function populateMonths() {
      for (let i = 0; i < months.length; i++) {
        const option = document.createElement('option');
        option.textContent = months[i];
        monthSelect.appendChild(option);
      }
    })();

    let previousDay;

    function populateDays(month) {
      //Delete all of the children of the day dropdown
      //if they do exist
      while (daySelect.firstChild) {
        daySelect.removeChild(daySelect.firstChild);
      }
      //Holds the number of days in the month
      let dayNum;
      //Get the current year
      let year = yearSelect.value;

      if (month === '1' || month === '3' ||
        month === '5' || month === '7' || month === '8' ||
        month === '10' || month === '12') {
        dayNum = 31;
      } else if (month === '4' || month === '6' ||
        month === '9' || month === '11') {
        dayNum = 30;
      } else {
        //Check for a leap year
        if (new Date(year, 1, 29).getMonth() === 1) {
          dayNum = 29;
        } else {
          dayNum = 28;
        }
      }
      //Insert the correct days into the day <select>
      const option = document.createElement("option");
      option.textContent = 'يوم';
      option.disabled = true;
      option.defaultSelected = true;
      option.value = '';
      daySelect.appendChild(option);
      for (let i = 1; i <= dayNum; i++) {
        const option = document.createElement("option");
        option.textContent = i;
        daySelect.appendChild(option);
      }
      if (previousDay) {
        daySelect.value = previousDay;
        if (daySelect.value === "") {
          daySelect.value = previousDay - 1;
        }
        if (daySelect.value === "") {
          daySelect.value = previousDay - 2;
        }
        if (daySelect.value === "") {
          daySelect.value = previousDay - 3;
        }
      }
    }

    function populateYears() {
      //Get the current year as a number
      let year = new Date().getFullYear();
      //Make the previous 100 years be an option
      for (let i = 0; i < 101; i++) {
        const option = document.createElement("option");
        option.textContent = year - i;
        yearSelect.appendChild(option);
      }
    }

    populateDays(monthSelect.value);
    populateYears();

    yearSelect.onchange = function() {
      populateDays(monthSelect.value);
    }
    monthSelect.onchange = function() {
      populateDays(monthSelect.value);
    }
    daySelect.onchange = function() {
      previousDay = daySelect.value;
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>