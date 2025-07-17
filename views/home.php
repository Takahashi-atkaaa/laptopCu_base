<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Feane</title>

  <!-- Stylesheets -->
  <link rel="shortcut icon" href="assets/images/favicon.png" type="">
  <link rel="stylesheet" href="assets/css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="assets/images/hero-bg.jpg" alt="">
    </div>

    <!-- Header -->
    <?php include_once 'partials/header.php'; ?>
    <!-- End Header -->

    <!-- Slider section -->
    <section class="slider_section">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-lg-6">
                  <div class="detail-box">
                    <h1>Fast Food Restaurant</h1>
                    <p>Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum...</p>
                    <div class="btn-box">
                      <a href="#" class="btn1">Order Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-lg-6">
                  <div class="detail-box">
                    <h1>Fast Food Restaurant</h1>
                    <p>Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum...</p>
                    <div class="btn-box">
                      <a href="#" class="btn1">Order Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-lg-6">
                  <div class="detail-box">
                    <h1>Fast Food Restaurant</h1>
                    <p>Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum...</p>
                    <div class="btn-box">
                      <a href="#" class="btn1">Order Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Indicators -->
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End slider section -->
  </div>

  <!-- Offer section -->
  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container">
        <div class="row">
          <!-- Offer 1 -->
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="assets/images/o1.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>Tasty Thursdays</h5>
                <h6><span>20%</span> Off</h6>
                <a href="#">Order Now</a>
              </div>
            </div>
          </div>
          <!-- Offer 2 -->
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="assets/images/o2.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>Pizza Days</h5>
                <h6><span>15%</span> Off</h6>
                <a href="#">Order Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Food section -->
  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Our Menu</h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".burger">Burger</li>
        <li data-filter=".pizza">Pizza</li>
        <li data-filter=".pasta">Pasta</li>
        <li data-filter=".fries">Fries</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <!-- Sample Food Item -->
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="assets/images/f1.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>Delicious Pizza</h5>
                  <p>Veniam debitis quaerat officiis quasi cupiditate quo...</p>
                  <div class="options">
                    <h6>$20</h6>
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- (Thêm các món ăn khác tương tự tại đây) -->
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include_once 'partials/footer.php'; ?>
  <!-- End Footer -->

  <!-- Scripts -->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
