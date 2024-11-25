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
    <link rel="stylesheet" href="styles/dakitchen.css">
    <link rel="stylesheet" href="styles/responsive.css">
</head>
<body>

    <!-- start header -->
  @extends('layouts.heder')
      <!-- finish header -->
    @section('dakitchen')
      <!-- start main section  -->

      <section class="dakitchen">
        <div class="container">
          <div class="dakitchen-header lang" key="KITCHEN">Kitchen</div>

          <div class="dakitchen-content">
            <div class="container">
              <div class="row">
                <div class="col-12 col-md-6">
                 <div class="dakitchen-content__box">
                   <h3 class="dakitchen-content__header lang" key="PERSIAN">Persian food</h3>
                  <p class="dakitchen-cintent__p lang" key="PERSIANFOODS"> Persian cuisine is known for its rich flavors and aromatic spices, and having a talented qualified chef like Suraya preparing the dishes must make it even more special. Enjoying a delicious meal is definitely one of life's pleasures, especially when it's prepared with care and expertise.
                  </p>

                  <button
                      type="submit"
                      class="dakitchen-content__button"
                      id="all-foods__button"
                      onclick="openNewPage()"
                    >
                    <span class="dakitchen-content__button-text lang" key="VIEWFOODS">view all foods</span>
                    <i class="fa fa-angle-right dakitchen-content__icon"></i>
                    </button>
                 </div>
                </div>
                <div class="col-12 col-md-6">
                 <div class="dakitchen-content__box">
                  <h3 class="dakitchen-content__header lang" key="DIET">Persian diet food
                  </h3>
                  <p class="dakitchen-cintent__p lang" key="DIETFOODS">  It's great to hear that Suraya is open to adjusting her cooking to accommodate those looking for lower-calorie options. Using spices like cumin and cinnamon not only adds wonderful flavor but also brings health benefits and can aid in weight management. Choosing healthier cooking oils or minimizing the use of oils altogether is also a smart approach. It's wonderful when chefs are able to adapt their culinary expertise to meet the diverse needs and preferences of their customers.

                  </p>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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
      <script src="js/allFoods.js"></script>
      <script src="js/ham.js"></script>
      <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <script src="js/translate.js"></script>

@endsection
