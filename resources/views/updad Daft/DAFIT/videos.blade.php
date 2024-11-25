<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFIT</title>
    <link rel="shortcut icon" href="images/logo/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome6/all.min.css">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/videos.css">
    <link rel="stylesheet" href="styles/responsive.css">
    <style>
        .personal-main {
            background: #f7f7f7;
            padding: 20px 0;
        }

        .personal-boxs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .personal-box {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            max-width: 300px;
            width: 100%;
            overflow: hidden;
        }

        .personal-box img, .personal-box video {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }

        .personal-content {
            padding: 15px;
        }

        .personal-title h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .personal-p p {
            font-size: 1rem;
            margin: 0;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .personal-box {
                max-width: 100%;
            }

            .personal-title h2 {
                font-size: 1.25rem;
            }

            .personal-p p {
                font-size: 0.875rem;
            }
        }

        @media (max-width: 576px) {
            .personal-content {
                padding: 10px;
            }

            .personal-title h2 {
                font-size: 1rem;
            }

            .personal-p p {
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>

    <!-- start header -->
    @extends('layouts.heder')
      <!-- finish header -->
    @section('videos')
      <!-- start footer  -->

      <main class="personal-main">

          <div class="container">
              @foreach($videos as $video)
                  <div class="personal-boxs">

                      <div class="personal-box">
                          @if (preg_match('/\.(jpg|jpeg|png|gif|svg)$/i', $video->videos))
                              <img src="{{ asset($video->videos) }}" alt="Image" width="50">
                          @else
                              <video width="50" controls>
                                  <source src="{{ asset($video->videos) }}" type="video/mp4">
                                  مرورگر شما ویدئو را پشتیبانی نمی‌کند.
                              </video>
                          @endif

                          <div class="personal-content">
                              <div class="personal-title">
                                  <h2 class="lang" >
                                      {{ app()->getLocale() == 'fa' ? $video->title_fa : $video->title_en }}
                                      {{--                    {{ $Personaltraining->title_en }}--}}
                                  </h2>
                              </div>
                              <div class="personal-p">
                                  <p class="lang" >
                                      {{ app()->getLocale() == 'fa' ? $video->text_fa : $video->text_en }}
                                  </p>
                                  {{--            {{ $Personaltraining->text_en }}--}}
                              </div>
                          </div>
                      </div>
                      @endforeach
      </main>
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
