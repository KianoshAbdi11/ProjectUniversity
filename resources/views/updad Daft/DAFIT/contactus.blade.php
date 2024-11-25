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
    <link rel="stylesheet" href="styles/contactus.css">
    <link rel="stylesheet" href="styles/responsive.css">
</head>
<body>

    <!-- start header -->
   @extends('layouts.heder')
      <!-- finish header -->
    @section('contactus')
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
