<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM files WHERE MobileNo = '$id' ");
  while($row=mysqli_fetch_assoc($result)){
    echo "<pre>";
    echo $row['eventName'];
    $imageURL = 'admin/uploads/'. $row['image'];
    ?>
    <img src="<?php echo $imageURL?>" alt="<?php echo $imageURL?>" width="300px" />
    <?php
    $result2 = mysqli_query($conn, "SELECT * FROM test WHERE name='$row[image]' ");
    if(mysqli_num_rows($result2) > 0){
      ?>
      <h1>Done</h1>
      <?php
    }
    else{
      ?>
      <form action="" method="POST">
        <input type="checkbox" value="<?php  echo $row['image'] ?>" name="test[]">
        <input type="submit" value="submit" name="submit">
      </form>
      <?php
    }
    
    
    echo "</pre>";
}
}
else{
  header("Location: login.php");
}
?>
<?php

$conn = mysqli_connect("localhost", "root", "", "reglog");
     
if(isset($_POST['submit'])){ 
    $name = implode(',',$_POST['test']);
        
    $query="INSERT into test(name) VALUES('$name')";
    $res=mysqli_query($conn,$query);
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />




  <!-- slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:500|Raleway:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  </head>
  <body class="sub_page">
  <div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a href="index.html" class="navbar-brand">
            <img src="images/logo-black.png" alt="">
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="details.php">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info-logo">
            <a href="">
              <img src="images/info-logo.png" alt="">
            </a>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of
            </p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 offset-lg-1">
          <div class="info-nav">
            <h4>
              Navigation
            </h4>
            <ul>
              <li>
                <a href="index.html">
                  Home
                </a>
              </li>
              <li class="active">
                <a href="about.html">
                  Profile
                </a>
              </li>
              <li>
                <a href="contact.html">
                  Contact Us
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-contact">
            <h4>
              Contact Info
            </h4>
            <div class="location">
              <h6>
                Mantain Office Address:
              </h6>
              <a href="">
                <img src="images/location.png" alt="">
                <span>
                  Loram ipusm New York, NY 36524
                </span>
              </a>
            </div>
            <div class="call">
              <h6>
                Customer Service:
              </h6>
              <a href="">
                <img src="images/call.png" alt="">
                <span>
                  ( +01 1234567890 )
                </span>
              </a>
            </div>
            <div class="call">
              <a href="">
                <img src="images/mail.png" alt="">
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 offset-lg-1">
          <div class="discover">
            <h4>
              Discover
            </h4>
            <ul>
              <li>
                <a href="">
                  Help
                </a>
              </li>
              <li>
                <a href="">
                  How It Works

                </a>
              </li>
              <li>
                <a href="">
                  subscribe
                </a>
              </li>
              <li>
                <a href="contact.html">
                  Contact Us
                </a>
              </li>
            </ul>
            <div class="social-box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/insta.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="info_form">
        <h4>
          Subscribe
        </h4>
        <form action="">
          <input type="text" placeholder="Enter your email">
          <div class="d-flex justify-content-end">
            <button>

            </button>
          </div>
        </form>
      </div>
    </div>
  </section>



  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2020 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a><br>
      Distributed By
      <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- end google map js -->


  <script>
    $('.slider-for').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: true,
      centerMode: true,
      focusOnSelect: true,

    });
  </script>

  <script>
    $('.slick-carousel').slick({
      infinite: true,
      slidesToShow: 3, // Shows a three slides at a time
      slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 420,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 3,
        }
      }

      ]
    });
  </script>
  </body>
</html>