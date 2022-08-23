<?php
include "basic.php";
$id = $_GET["id"];
global $conn;
$sql = "SELECT*FROM student WHERE school_id=$id";
$data = mysqli_query($conn, $sql);

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
  <div class="top_container sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="homepage.php?id=<?php echo $id; ?>">
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
                  <a class="nav-link" href="homepage.php?id=<?php echo $id; ?>"> Home <span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- end header section -->


  <!-- teacher section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Our Students
      </h2>
      <p class="text-center">
        Ipsum available, but the majority h
      </p>
      <div class="teacher_container layout_padding2">
        <div class="card-deck">
          <?php while ($row = mysqli_fetch_assoc($data)) { ?>
            <div class="card">
              <img class="card-img-top" style="width:150px; margin:auto" src="images/<?php echo $row['image']; ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['name']; ?></h5>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['email']; ?></h5>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['phone']; ?></h5>
              </div>
              <div class="d-flex justify-content-center mt-3">
                <a href="deletestudent.php?did=<?php echo $row['id'] ?>&id=<?php echo $id ?>" class="call_to-btn  ">
                  <span>
                    Delete
                  </span>
                  <img src="images/right-arrow.png" alt="">
                </a>
              </div>
              <div class="d-flex justify-content-center mt-3">
                <a href="editstudent.php?id=<?php echo $row['id'] ?>&s_id=<?php echo $id ?>" class="call_to-btn  ">
                  <span>
                    Edit
                  </span>
                  <img src="images/right-arrow.png" alt="">
                </a>
              </div>
              <p style="margin:auto ;">----------------------------------------</p>
            </div>

        </div>
      <?php } ?>
      </div>


      <div class="d-flex justify-content-center mt-3">
        <a href="newstudent.php?id=<?php echo $id ?>" class="call_to-btn  ">

          <span>
            New
          </span>
          <img src="images/right-arrow.png" alt="">
        </a>
      </div>
      <br>

    </div>
  </section>

  <!-- teacher section -->

</body>

</html>