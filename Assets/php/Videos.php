<?php
require_once('functions.php');
checkUser();
$un = reflectUser();
sessionTimeout();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proguides</title>
    <link rel="stylesheet" href="../css/Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
<body>
  <div class="container1">
<nav class="container-nav">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <div class="dropdown-center">
  <button class="btn btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fa-solid fa-book fa-2xl"></i>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item">Signed in as <?= $un; ?></a></li>
    <li><a class="dropdown-item" href="../php/Logout.php">Log Out</a></li>
  </ul>
</div>
    <div class="banner2">
    <a class="navbar-brand" href="#">Proguides</a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-muted="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="../php/Home.php">Home</a>
        <a class="nav-link active" href="../php/Videos.php">Videos</a>
        <a class="nav-link" href="../php/Book.php">Books</a>
      </div>
    </div>
  </div>
  </nav>
</nav>
</div>
<div class="main-container">
  <h1>Video Gallery</h1>

  <div class="video-container">
  <div class="video">
    <video src="../videos/HTML.mp4" muted></video>
  </div>
  <div class="video"> 
    <video src="../videos/Css.mp4" muted></video>
  </div>
  <div class="video">
    <video src="../videos/Js.mp4" muted></video>
  </div>
  <div class="video">
    <video src="../videos/Php.mp4" muted></video>
  </div>
  <div class="video">
    <video src="../videos/Java.mp4" muted></video>
  </div>
  <div class="video">
    <video src="../videos/Lara.mp4" muted></video>
  </div>
  <div class="video">
    <video src="../videos/CI4.mp4" muted></video>
  </div>
  <div class="video">
    <video src="../videos/React.mp4" muted></video>
  </div>
  <div class="video">
    <video src="path/to/video3.mp4" muted></video>
  </div>

  <div class="popup-video">
  <span>&items;</span>
  <video src="../videos/HTML.mp4" muted autoplay controls></video>

</div>

</div>



<script>

  document.querySelectorAll('.video-container video').forEach(vid =>{
    vid.onclick = () =>{
      document.querySelector('.popup-video').style.display = 'block';
      document.querySelector('.popup-video video').src = vid.getAttribute('src');
    }
  });
  
  document.querySelector('.popup-video span').onclick = () =>{
    document.querySelector('.popup-video').style.display = 'none';
  }
</script>

<footer class="bg-dark text-white text-center text-md-start">
  <!-- Grid container -->
  <div class="container-fluid p-5">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
      <h3>About Us</h3>
        <p>
          ProGuides is your ultimate online resource for mastering programming languages. 
          Our platform offers comprehensive tutorials, practical examples, and interactive coding exercises to help beginners and experienced programmers alike. 
          Join our community and elevate your programming skills with ProGuides.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h3>Contact</h3>
      <p>123 Main Street, City, Country</p>
      <p>Email: info@example.com</p>
      <p>Phone: +1 123 456 7890</p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
      <h3>Follow Us</h3>
  <ul class="list-unstyled">
    <li>
      <a href="#!" class="text-white">
        <i class="fas fa-github"></i> Github
      </a>
    </li>
    <li>
      <a href="#!" class="text-white">
        <i class="fas fa-facebook"></i> Facebook
      </a>
    </li>
    <li>
      <a href="#!" class="text-white">
        <i class="fas fa-twitter"></i> Twitter
      </a>
    </li>
    <li>
      <a href="#!" class="text-white">
        <i class="fas fa-linkedin"></i> LinkedIn
      </a>
    </li>
  </ul>
</div>

      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 bg-dark" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 ProGuides. All rights reserved.
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->




















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/90ba71c5ee.js" crossorigin="anonymous"></script> 
</body>
</html>