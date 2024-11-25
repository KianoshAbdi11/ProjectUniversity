
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DAFIT</title>
    <link rel="shortcut icon" href="images/logo/Logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/fontawesome6/all.min.css" />
    <link rel="stylesheet" href="styles/reset.css" />
    <link rel="stylesheet" href="styles/about.css" />
    <link rel="stylesheet" href="styles/responsive.css" />
  </head>
  <body>
  @extends('layouts.heder')
  @section('about')
    <!-- start header -->

    <!-- finish header -->

    <!-- start main section -->

    <main class="about-content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="about-title">
              <h1 class="lang" key="ABOUT">About US :</h1>
              <br />
              <br />
              <p>
                <span class="lang" key="WELCOME">Welcome to DAFIT</span> <br />
                <br />
                <span class="lang" key="WE"
                  >We're thrilled to introduce ourselves as an online gym based
                  in Melbourne, Victoria, dedicated to providing top-notch
                  fitness services. At DAFIT, we prioritize exercise
                  programming, strength training, cardio workouts, group
                  classes, boxing sessions, personal training, and Yoga.</span
                >
                <br />
                <br />
                <span class="lang" key="WH"
                  >What sets us apart is our unwavering commitment to our
                  clients. We value your progress and well-being over everything
                  else. Our professional personal trainers are deeply invested
                  in your journey, focusing on your individual needs rather than
                  simply watching the clock. We believe in teaching not just how
                  to exercise but also how to live a healthier lifestyle. </span
                ><br />
                <br />
                <span class="lang" key="ONE"
                  >One of our core principles is variety. We take pride in our
                  diverse programming, ensuring that no two sessions are alike.
                  This approach not only keeps things interesting but also
                  challenges you to push beyond your limits and achieve results
                  you never thought possible. </span
                ><br />
                <br />
                <span class="lang" key="AT"
                  >At DAFIT, we're here to help you transform your body and
                  exceed your fitness goals. Join us and embark on a journey to
                  a healthier, stronger, and happier you.</span
                >
                <br />
                <br />
                <span class="lang" key="LET"
                  >Let's train together and unleash your full potential</span
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- start main section -->

    <!-- start footer  -->
    <footer class="footer">
      <div class="container">
        <div class="footer-content">
          <div class="footer-icons">
            <a href="#">
              <i
                class="fa-brands fa-instagram footer-icons__item footer-icons__item--instagram"
              ></i>
            </a>
            <a href="#">
              <i
                class="fa-brands fa-youtube footer-icons__item footer-icons__item--youtube"
              ></i>
            </a>
            <a href="#">
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

{{--  </body>--}}
{{--</html>--}}
@endsection
