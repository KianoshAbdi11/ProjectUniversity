<!DOCTYPE html>
{{--<html lang="en">--}}
<html lang="fa" class="rtl">
<!-- برای انگلیسی -->
<html lang="en" class="ltr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>DAFIT</title>
    <link rel="shortcut icon" href="images/logo/Logo.png" type="image/x-icon"/>
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="vendor/fontawesome6/all.min.css"/>
    <link rel="stylesheet" href="styles/reset.css"/>
    <link rel="stylesheet" href="styles/classes.css"/>
    <link rel="stylesheet" href="styles/responsive.css"/>
</head>
<body>
<!-- start header -->
@extends('layouts.heder')
<!-- finish header -->
@section('classes')
    <!-- start main section -->

    <main>
        @foreach($classes as $class)
        <section class="section-one Weight {{ app()->getLocale() == 'fa' ? 'rtl-content' : 'ltr-content' }}"  id="{{$class->id }}">

            <div class="container">
                <div class="section-title lang" >{{app()->getLocale() == 'fa' ? $class->title_fa : $class->title_en}}</div>
                <div class="section-img">
                    <img src="{{ asset($class->img) }}" alt="lose-weight-pic" class="section-img__class"/>
                </div>
                <div class="section-text">
                    <p class="lang" >
                        {{ app()->getLocale() == 'fa' ? $class->text_fa : $class->text_en }}
                    </p>
                </div>
            </div>

        </section>
        @endforeach
    </main>
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
                                <form  method="post" action="{{ route('formquestion') }}" class="login-form">
                                    @csrf
                                    <div class="login-form__username">
                                        <input type="text" class="login-form__username-input" id="name" name="name" placeholder="Name"/>
                                        @error('name'){{$message}}@enderror
                                    </div>
                                    <div class="login-form__username">
                                        <input type="email" class="login-form__username-input" id="email" name="email" placeholder="Email address"/>
                                        @error('email'){{$message}}@enderror
                                    </div>
                                    <div class="login-form__username">
                                        <input type="text" class="login-form__username-input" id="phone" name="phone" placeholder="Phone number"/>
                                        @error('phone'){{$message}}@enderror
                                    </div>
                                    <div class="login-form__username">
                                        <textarea name="text" id="textarea" cols="42" rows="5" placeholder="Description" class="login-form__username-input"></textarea>
                                        @error('text'){{$message}}@enderror
                                    </div>
                                    <div class="login-form__password-setting">
{{--                                        <label class="login-form__password-remember">--}}
{{--                                            <input type="checkbox" name="text" class="login-form__password-checkbox"/>--}}
{{--                                            <span class="login-form__password-text lang" key="AGREE"--}}
{{--                                            >Agree to the terms and privacy policy.</span--}}
{{--                                            >--}}
{{--                                        </label>--}}
                                    </div>
                                    <button class="login-form__btn" type="submit" id="register-btn">
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

    <!-- finish main section -->

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
    <script src="js/app.js"></script>
    <script src="js/ham.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"
    ></script>
    <script src="js/translate.js"></script>
@endsection
