<!DOCTYPE html>
{{--<html lang="en">--}}
<html lang="fa" class="rtl">
<!-- برای انگلیسی -->
<html lang="en" class="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFIT</title>
    <link rel="shortcut icon" href="images/logo/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome6/all.min.css">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/personaltraining.css">
    <link rel="stylesheet" href="styles/responsive.css">
</head>

<body>

    <!-- start header -->
    @extends('layouts.heder')
      <!-- finish header -->
    @section('personaltraining')
      <!-- start main section  -->

      <main class="personal-main">

        <div class="container">
            @foreach($Personaltrainings as $Personaltraining)
                <section class="section-one Weight {{ app()->getLocale() == 'fa' ? 'rtl-content' : 'ltr-content' }}"  id="{{$Personaltraining->id }}">
          <div class="personal-boxs">
            <div class="personal-box">
            <div class="personal-img">
              <img src="{{ asset($Personaltraining->img )}}" alt="">
            </div>

            <div class="personal-content">
              <div class="personal-title">
                <h2 class="lang" >
                    {{ app()->getLocale() == 'fa' ? $Personaltraining->title_fa : $Personaltraining->title_en }}
{{--                    {{ $Personaltraining->title_en }}--}}
                </h2>
              </div>
              <div class="personal-p">
                <p class="lang" >
                    {{ app()->getLocale() == 'fa' ? $Personaltraining->text_fa : $Personaltraining->text_en }}                </p>
{{--            {{ $Personaltraining->text_en }}--}}
              </div>
            </div>
          </div>
          </div>
                </section>
              @endforeach
{{--          <div class="personal-box">--}}
{{--            <div class="personal-img">--}}
{{--              <img src="images/alexander-redl-d3bYmnZ0ank-unsplash.jpg" alt="">--}}
{{--            </div>--}}
{{--            <div class="personal-content">--}}
{{--              <div class="personal-title">--}}
{{--                <h2 class="lang" key="PERSONALS">--}}
{{--                  Semi private classes--}}
{{--                </h2>--}}
{{--              </div>--}}
{{--              <div class="personal-p">--}}
{{--                <p class="lang" key="PERSONALSCLASS">--}}
{{--                We understand that not everyone may be able to afford 1:1 private training, and that's why we offer semi-private classes as an alternative. In these sessions, you'll experience the same level of dedication and attention to your personal goals, but with the added energy and camaraderie of a small group.--}}
{{--                Our semi-private classes provide the perfect balance of individualized instruction and group dynamics. While you'll be sharing the session with others, our trainers will still prioritize your personal goals and tailor the workout to meet your specific needs.--}}
{{--                With more people in the class, you'll find an extra level of motivation and encouragement, pushing you to work harder and achieve more than you thought possible. Plus, the sense of community and support among your fellow classmates will make each session even more enjoyable and rewarding.--}}
{{--                So whether you're looking to get in shape, build strength, or improve your overall fitness, our semi-private classes offer a cost-effective and efficient way to reach your goals. Join us and experience the power of teamwork and personal growth at DAFIT!--}}

{{--                </p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="personal-box">--}}
{{--            <div class="personal-img">--}}
{{--              <img src="images/alexander-redl-d3bYmnZ0ank-unsplash.jpg" alt="">--}}
{{--            </div>--}}
{{--            <div class="personal-content">--}}
{{--              <div class="personal-title">--}}
{{--                <h2 class="lang" key="SPECIAL">--}}
{{--                  Special class--}}
{{--                </h2>--}}
{{--              </div>--}}
{{--              <div class="personal-p">--}}
{{--                <p class="lang" key="SPECIALCLASS">--}}
{{--                  Welcome to DAFIT Special Classes for Special People!--}}
{{--                  We understand that not everyone feels comfortable working out in a gym or public area, and that's why we offer specialized classes designed to cater to your needs. Whether you're shy or simply prefer a more private setting, we're here to support you every step of the way. Our special classes allow you to enjoy the benefits of personalized fitness instruction in a location of your choice, whether it's a private space or the great outdoors. We'll work with you to create a comfortable and welcoming environment where you can focus on your health and wellness without any added pressure or anxiety.--}}
{{--                  And the best part? We offer these specialized classes at the same affordable price as our regular sessions. Your comfort and well-being are our top priorities, and we're committed to helping you achieve your fitness goals in a way that works for you.--}}
{{--                  So don't let shyness or fear hold you back from living your best life. Join us for our special classes and take the first step toward a happier, healthier you!--}}
{{--                </p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          </div>--}}

        </div>
      </main>

      <!-- finish main section  -->

      <!-- start footer  -->
      <footer class="footer">
        <div class="container">
          <div class="footer-content">
            <div class="footer-icons">
              <a href="#" >
                <i class="fa-brands fa-instagram footer-icons__item footer-icons__item--instagram"></i>
              </a>
              <a href="#" >
                <i class="fa-brands fa-youtube footer-icons__item footer-icons__item--youtube"></i>
              </a>
              <a href="#" >
                <i class="fa-brands fa-twitter footer-icons__item"></i>
              </a>
            </div>
            <div class="footer-privacy">
              <p class="footer-privacy-text">© 2024 Dafit LLC</p>
            </div>
          </div>
        </div>
      </footer>
      <!-- finish footer  -->

      <script src="vendor/fontawesome6/all.min.js"></script>
      <script src="js/ham.js"></script>
      <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <script src="js/translate.js"></script>

</body>
</html>
@endsection
