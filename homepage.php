<?php
include "basic.php";
$id = $_GET["id"];
global $conn;
$sql = "SELECT * FROM users WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$sql = "SELECT * FROM teacher WHERE school_id='$id'";
$data2 = mysqli_query($conn, $sql);
$sql = "SELECT * FROM student WHERE school_id='$id'";
$data3 = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($data);
$name = $r["username"];
?>
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

  <title>Adward</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>
  <div class="top_container">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              Adward
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="homepage.php?id=<?php echo $id ?>"> Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="student.php?id=<?php echo $id ?>"> students </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="teacher.php?id=<?php echo $id ?>"> Teachers </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php" style="color:red ;"> log out </a>
                </li>

              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
        </nav>
      </div>
    </header>
    <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
          <h3>
            Welcome to <br>
            Best educations
          </h3>
          <h1>
            <?php echo $name ?>
          </h1>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised
          </p>
          <div class="hero_btn-continer">
            <a href="" class="call_to-btn btn_white-border">
              <span>
                Contact
              </span>
              <img src="images/right-arrow.png" alt="">
            </a>
          </div>
        </div>
        <div class="hero_img-container">
          <div>
            <img src="images/hero.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->
  <!-- teacher section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Our Teachers
      </h2>
      <p class="text-center">
        Ipsum available, but the majority h
      </p>
      <div class="teacher_container layout_padding2">
        <div class="card-deck">
          <?php
          $i = 1;
          while ($row = mysqli_fetch_assoc($data2)) {
            $i += 1;
            if ($i >= 4) {
              break;
            }
          ?>
            <div class="card">
              <img class="card-img-top" style="width:150px; margin:auto" src="images/<?php echo $row['image']; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['name']; ?></h5>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>


      <div class="d-flex justify-content-center mt-3">
        <a href="teacher.php?id=<?php echo $id ?>" class="call_to-btn  ">

          <span>
            See More
          </span>
          <img src="images/right-arrow.png" alt="">
        </a>
      </div>
    </div>
  </section>

  <!-- teacher section -->



  <!-- teacher section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Our students
      </h2>
      <p class="text-center">
        Ipsum available, but the majority h
      </p>
      <div class="teacher_container layout_padding2">
        <div class="card-deck">
          <?php
          $i = 1;
          while ($row = mysqli_fetch_assoc($data3)) {
            $i += 1;
            if ($i >= 4) {
              break;
            }
          ?>
            <div class="card">
              <img class="card-img-top" style="width:150px; margin:auto" src="images/<?php echo $row['image']; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['name']; ?></h5>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>


      <div class="d-flex justify-content-center mt-3">
        <a href="student.php?id=<?php echo $id ?>" class="call_to-btn  ">

          <span>
            See More
          </span>
          <img src="images/right-arrow.png" alt="">
        </a>
      </div>
    </div>
  </section>

  <!-- teacher section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
        Our Students Feedback
      </h2>
      <p class="text-center">
        There are many variations of passages of Lorem Ipsum available, but the majority hThere are many variations of
        passages of Lorem Ipsum available, but the majority h
      </p>
      <div class="layout_padding2">
        <div class="client_container d-flex flex-column">
          <div class="client_detail d-flex align-items-center">
            <div class="client_img-box ">
              <img src="images/student.png" alt="">
            </div>
            <div class="client_detail-box">
              <h4>
                Veniam Quis
              </h4>
              <span>
                (exercitation)
              </span>
            </div>
          </div>
          <div class="client_text mt-4">
            <p>
              "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
              anim id est laborum."


            </p>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- client section -->


</body>

</html>