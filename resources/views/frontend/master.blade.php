<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>United Creative</title>
  
  <link rel="icon" type="image/png" href="images/v502_768.png">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="">
            <img src="images/logo_white.png" alt="" /><span>
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  <div class=" d-none d-lg-flex">
                  </div>
                </ul>
              </div>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()"></button>
            </div>
            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <a href="">HOME</a>
                <a href="">PRODUCTS</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-2 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                            28 Million <br />
                            Community
                          </h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hero_img-box">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>

  <!-- detail section -->

  @yield('content');

  <!-- end sign section -->

  <!-- info footer section -->
  <section class="info_section layout_padding">
    <div class="container links_container">
      <div class="row ">
        <div class="col-md-3">
          <img src="images/logo_white.png" alt="" style="width: 100px">
          <ul>
            <li>
                <h3>UNITED CREATIVE HEAD OFFICE</h3>
            </li>
            <li>
              Wisma Bali United, Jalan Panjang No. 29,
            </li>
            <li>
              (012345678)
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul>
            <li>
              <a href="">
                <h3>Product</h3>
              </a>
            </li>
            <li>
              <a href="">
                <h3>Services</h3>
              </a>
            </li>
            <li>
              <a href="">
                <h3>Works</h3>
              </a>
            </li>
            <li>
              <a href="">
                <h3>Client</h3>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul>
            <li>
              <a href="">
                <h3>About Us</h3>
              </a>
            </li>
            <li>
              <a href="">
                <h3>Contact Us</h3>
              </a>
            </li>
            <li>
              <a href="">
                <h3>Career</h3>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul>
            <li>
              <a href="">                
              <div style="text-align: right">
                <a href="">
                  <img src="images/instagram.png" alt="">
                </a>
              </div>
              </a>
            </li>
            <li style="text-align: right">
              <a href="">
                COPYRIGHT &copy; 2022
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
  </section>
  <!-- end info footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>