<?php
include "basic.php";
$id = $_GET["id"];
if (isset($_POST['name'])) {
    $name = $_FILES["image"]["tmp_name"];
    // Setting the Image Location
    $location = "images/";
    // Naming Algorithm
    $filename = strtolower($_POST["name"]);
    $filename = str_replace("-", "S", $filename);
    $filename = $filename . "-logo.png";
    // Uploading Image file
    move_uploaded_file($name, $location . $filename);
  global $conn;
  $name= $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $school_id = $_POST['school'];
  $sql = "INSERT INTO student (name , school_id , phone , email , image) VALUES ('$name', $school_id ,'$phone', '$email' , '$filename')";
  mysqli_query($conn, $sql);
  header("Location:student.php?id=$id ");
  }
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
  <div class="top_container sub_pages ">
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
                  <a class="nav-link" href="student.php?id=<?php echo $id ?>"> Home <span class="sr-only">(current)</span></a>
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

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">

      <h2 class="main-heading">
        New Student
      </h2>
      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="contact-form">

                <form method="POST" action="" enctype="multipart/form-data">
                  <div>
                    <input type="text" placeholder="Name" name="name">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" name="phone">
                  </div>
                  <div>
                    <input type="file" placeholder="Image" name="image">
                  </div>
                  <div>
                    <input type="email" placeholder="Email" name="email">
                  </div>
                  <div>
                    <input type="text" placeholder="school_id" name="school">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn_on-hover">
                      save
                    </button>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</body>

</html>