<?php
require_once('functions.php');
checkUser();
$un = reflectUser();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proguides</title>
    <link rel="stylesheet" href="../css/features.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
<body>
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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="../php/Home.php">Home</a>
        <a class="nav-link" href="../php/Videos.php">Videos</a>
        <a class="nav-link active" href="../php/Book.php">Books</a>
      </div>
    </div>
  </div>
  </nav>
</nav>

<main>
   <div class="main-container" id="animation">
    <section id="section1">

<div class="firsthalf">
    <div class="card" style="width: 18rem;">
  <img src="../Images/Js.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="title">
    <h5 class="card-title">JavaScript</h5>
    </div>
    <div class="textp">
    <p class="card-text">Versatile language for interactive web behavior, essential for aspiring web developers to learn.</p>
    </div>
    <div class="buttonLearn">
    <a href="../pdf/JS.pdf" class="btn btn-primary">Learn</a>
    </div>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../Images/Js.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="title">
    <h5 class="card-title">HTML</h5>
    </div>
    <div class="textp">
    <p class="card-text">Standard markup language for structuring web pages, delivering information and multimedia across the internet.</p>
    </div>
    <div class="buttonLearn">
    <a href="../pdf/JS.pdf" class="btn btn-primary">Learn</a>
    </div>
  </div>
</div>

    <div class="card" style="width: 18rem;">
  <img src="../Images/Js.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="title">
    <h5 class="card-title">CSS</h5>
    </div>
    <div class="textp">
    <p class="card-text">Crucial web technology enhancing visual appearance, controlling layout, colors, fonts, and design aspects of websites.</p>
    </div>
    <div class="buttonLearn">
    <a href="../pdf/JS.pdf" class="btn btn-primary">Learn</a>
    </div>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../Images/Js.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="title">
    <h5 class="card-title">Laravel</h5>
    </div>
    <div class="textp">
    <p class="card-text">Popular PHP framework simplifying web app development with elegant syntax, robust features, and a supportive ecosystem.</p>
    </div>
    <div class="buttonLearn">
    <a href="../pdf/JS.pdf" class="btn btn-primary">Learn</a>
    </div>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../Images/Js.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="title">
    <h5 class="card-title">Bash</h5>
    </div>
    <div class="textp">
    <p class="card-text">Command-line interpreter and scripting language automating tasks, managing files, and executing commands efficiently in Unix-like systems.</p>
    </div>
    <div class="buttonLearn">
    <a href="../pdf/JS.pdf" class="btn btn-primary">Learn</a>
    </div>
  </div>
</div>

</div>

  <div class="half">

<div class="card" style="width: 18rem;">
  <img src="../Images/Js.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="title">
    <h5 class="card-title">React</h5>
    </div>
    <div class="textp">
    <p class="card-text">JavaScript library for building interactive user interfaces, creating reusable components and rendering UI changes efficiently.</p>
    </div>
    <div class="buttonLearn">
    <a href="../pdf/JS.pdf" class="btn btn-primary">Learn</a>
    </div>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../Images/Js.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="title">
    <h5 class="card-title">Angular</h5>
    </div>
    <div class="textp">
    <p class="card-text">TypeScript-based framework for scalable web applications with powerful features like two-way data binding and component-based architecture.</p>
    </div>
    <div class="buttonLearn">
    <a href="../pdf/JS.pdf" class="btn btn-primary">Learn</a>
    </div>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../Images/Js.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="title">
    <h5 class="card-title">C#</h5>
    </div>
    <div class="textp">
    <p class="card-text">Modern language by Microsoft for building web, desktop, and mobile applications with strong typing and extensive framework support.</p>
    </div>
    <div class="buttonLearn">
    <a href="../pdf/JS.pdf" class="btn btn-primary">Learn</a>
    </div>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../Images/Js.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="title">
    <h5 class="card-title">C++</h5>
    </div>
    <div class="textp">
    <p class="card-text">Powerful programming language for systems programming, game development, and resource-intensive applications, providing low-level control and high-level abstractions.</p>
    </div>
    <div class="buttonLearn">
    <a href="../pdf/JS.pdf" class="btn btn-primary">Learn</a>
    </div>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../Images/Js.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <div class="title">
    <h5 class="card-title">PHP</h5>
    </div>
    <div class="textp">
    <p class="card-text">Server-side scripting language for dynamic web development with seamless database integration.</p>
    </div>
    <div class="buttonLearn">
    <a href="../pdf/JS.pdf" class="btn btn-primary">Learn</a>
    </div>
  </div>
</div>
</div>
    </section>
   </div>
</main>





















<!-- Footer -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    <script>
VANTA.NET({
  el: "#animation",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0xa49b9e
})
</script>
</body>
</html>