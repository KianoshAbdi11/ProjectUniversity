<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DAFIT</title>
    <link rel="shortcut icon" href="images/logo/Logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="vendor/fontawesome6/all.min.css" />
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="styles/reset.css" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/package.css">
    <link rel="stylesheet" href="styles/responsive.css">
</head>
<body>
@extends('layouts.heder')
    <!-- finish header -->
@section('index')
    <!-- start landing  -->
    <section class="landing">
      <div class="container">
        <h1 class="animate__animated animate__fadeInDown landing-title">
          If you think the price of winning <br> is too high , wait until you get <br> the
          bill from Regret
        </h1>
      </div>
    </section>
    <!-- finish landing  -->

    <!-- start classes box  -->
    <div class="classes">
      <div class="container">
        <div class="classes-header lang" key="SERVICES">Dafit Services</div>

          <div class="container">
              <div class="new-member">
                  <div class="new-member__item">
                      <h2 class="new-member__title">new member</h2>
                      <p class="new-member__p">Get 3 private listing and pay for 2
                          Just $170
                      </p>
                  </div>
              </div>
              <div class="packList">
                  <div class="container">
                      <div class="row">
                          <div class="col-12 col-md-6 col-lg-4 packContainer">
                              <input type="radio" id="personal" class="packRadio" name="pack" />
                              <label class="pack" for="personal">
                                  <div class="header">
                                      <h2 class="orange-package">Orange package</h2>
                                  </div>
                                  <div class="price">
                                      <p>
                                          Starting at
                                          <b> $140
                                          </b>
                                      </p>
                                  </div>
                                  <div class="features">
                                      <p>
                                          🌟 Get Fit in 6 Weeks! 🌟
                                      </p>
                                      <ul>
                                          <li class="active">Free 50 minutes workout session
                                          </li>
                                          <li class="active">6 weeks Personalized Diet Plan</li>
                                          <li class="active">6 weeks Workout Program</li>
                                          <li class="active">Exercise explanations</li>
                                          <li>Comprehensive Workout Program
                                          </li>
                                          <li>Full Body Scan</li>
                                          <li>Personalized Support via WhatsApp</li>
                                      </ul>
                                  </div>
                              </label>
                          </div>
                          <div class="col-12 col-md-6 col-lg-4 packContainer">
                              <input type="radio" id="institutional" class="packRadio" name="pack"  checked="checked" />
                              <label class="pack" for="institutional">
                                  <div class="header">
                                      <h2 class="red-package">Red package </h2>
                                  </div>
                                  <div class="price">
                                      <p>
                                          Starting at
                                          <b>$180</b>
                                      </p>
                                  </div>
                                  <div class="features">
                                      <p>
                                          🌟 Total Body Transformation Program 🌟
                                      </p>
                                      <ul>
                                          <li class="active">Free 50 minutes  Workout Session</li>
                                          <li class="active">Personalized Diet Plan</li>
                                          <li class="active">Comprehensive Workout Program</li>
                                          <li class="active">Full Body Scan</li>
                                          <li class="active">Injury Assessment and Rehabilitation</li>
                                          <li class="active">Personalized Support via WhatsApp
                                          </li>
                                      </ul>
                                  </div>
                              </label>
                          </div>
                          <div class="col-12 col-md-6 col-lg-4 packContainer">
                              <input type="radio" id="social" class="packRadio" name="pack" />
                              <label class="pack" for="social">
                                  <div class="header">
                                      <h2 class="blue-package">Blue package</h2>
                                  </div>
                                  <div class="price">
                                      <p>
                                          Starting at
                                          <b>$340</b>
                                      </p>
                                  </div>
                                  <div class="features">
                                      <p>
                                          🌟 Achieve Your Fitness Goals with Our Blue Package! 🌟
                                      </p>
                                      <ul>
                                          <li class="active">Four private 1:1 sessions (50 minutes)</li>
                                          <li class="active">Personalized Diet Plan
                                          </li>
                                          <li class="active">Comprehensive Workout Program</li>
                                          <li class="active">Injury Assessment and Rehabilitation</li>
                                          <li class="active">Full Body Scan</li>
                                          <li class="active">Personalized Support via WhatsApp</li>
                                      </ul>
                                  </div>
                              </label>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="golden-package">
                  <div class="golden-package__item">
                      <h2 class="golden-package__title">Golden package :  $60 for 50 minutes private class 1:1 </h2>
                      <p class="golden-package__p">10 session of 50 minutes private session only $ 600
                      </p>
                  </div>
              </div>
          </div>
            <br><br>
        <div class="classes-content">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="classes-box">
                  <a href="#">
                    <img
                      src="images/alexander-redl-d3bYmnZ0ank-unsplash.jpg"
                      alt="Course img"
                      class="classes-box__img"
                    />
                  </a>
                  <div class="classes-box__main">
                    <a href="/package" class="classes-box__title lang" >
                        Orange package
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="classes-box">
                  <a href="#">
                    <img
                      src="images/alexander-redl-d3bYmnZ0ank-unsplash.jpg"
                      alt="Course img"
                      class="classes-box__img"
                    />
                  </a>
                  <div class="classes-box__main">
                    <a href="{{ url('/package') }}" class="classes-box__title lang" >
                        Red package
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="classes-box">
                  <a href="#">
                    <img
                      src="images/alexander-redl-d3bYmnZ0ank-unsplash.jpg"
                      alt="Course img"
                      class="classes-box__img"
                    />
                  </a>
                  <div class="classes-box__main">
                    <a href="{{ url('/package') }}" class="classes-box__title lang" > Blue package </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="classes-box">
                  <a href="#">
                    <img
                      src="images/alexander-redl-d3bYmnZ0ank-unsplash.jpg"
                      alt="Course img"
                      class="classes-box__img"
                    />
                  </a>
                  <div class="classes-box__main">
                    <a href="{{ url('/classes') }}" class="classes-box__title lang" key="LOSEW"> Lose Weight </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="classes-box">
                  <a href="#">
                    <img
                      src="images/alexander-redl-d3bYmnZ0ank-unsplash.jpg"
                      alt="Course img"
                      class="classes-box__img"
                    />
                  </a>
                  <div class="classes-box__main">
                    <a href="{{ url('/classes') }}" class="classes-box__title lang" key="BOXING"> Boxing </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="classes-box">
                  <a href="#">
                    <img
                      src="images/alexander-redl-d3bYmnZ0ank-unsplash.jpg"
                      alt="Course img"
                      class="classes-box__img"
                    />
                  </a>
                  <div class="classes-box__main">
                    <a href="{{ url('/classes') }}" class="classes-box__title lang" key="STRENGTH">
                      Strength and conditioning
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- finish classes box  -->

    <!-- start input section  -->
    <div class="input">
      <div class="container">
        <div class="input-header">
          <h2 class="input-header__title lang" key="JOIN">Join us to start a new experience</h2>
        </div>
        <div class="input-content">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                  @if(session('status'))
                      <div class="alert alert-success">
                          <h5> {{ session('status') }}</h5>
                      </div>
                  @endif
                <form method="post" action="{{ route('formquestion') }}" class="login-form">
                    @csrf
                  <div class="login-form__username">
                    <input
                      type="text"
                      class="login-form__username-input"
                      id="name"
                      name="name"
                      placeholder="Name"
                    />
                  </div>
                  <div class="login-form__username">
                    <input
                      type="email"
                      class="login-form__username-input"
                      id="email"
                      name="email"
                      placeholder="Email address"
                    />
                  </div>
                  <div class="login-form__username">
                    <input
                      type="text"
                      class="login-form__username-input"
                      id="phone"
                      name="phone"
                      placeholder="Phone number"
                    />
                  </div>
                  <div class="login-form__username">
                    <textarea name="text" id="textarea" cols="42" rows="5" placeholder="Description" class="login-form__username-input"></textarea>
                  </div>
                  <div class="login-form__password-setting">
{{--                    <label class="login-form__password-remember">--}}
{{--                      <input--}}
{{--                        type="checkbox"--}}
{{--                        name="text"--}}
{{--                        class="login-form__password-checkbox"--}}
{{--                      />--}}
{{--                      <span class="login-form__password-text lang" key="AGREE"--}}
{{--                        >Agree to the terms and privacy policy.</span--}}
{{--                      >--}}
{{--                    </label>--}}
                  </div>
                  <button
                    class="login-form__btn"
                    type="submit"
                    id="register-btn"
                  >
                    <i class="fas fa-sign-out-alt login-form__btn-icon"></i>
                    <span class="login-form__btn-text lang" key="SUBMIT">Submit</span>
                  </button>

                </form>

              </div>
              <div class="col-12 col-sm-4 col-md-6 col-lg-8 input-img">
                <div class="input-img__right">
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- finish input section  -->

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
@endsection
