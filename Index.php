<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proguides</title>
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.3/css/all.min.css">
    <script defer src="Assets/js/app.js" ></script>
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
    <li><a class="dropdown-item" href="#">Signed in as</a></li>
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
        <a class="nav-link" href="Assets/php/Home.php">Home</a>
        <a class="nav-link" href="">Features</a>
        <a class="nav-link" href="">Pricing</a>
      </div>
    </div>
  </div>
  </nav>
</nav>
<main>
<div class="container">
  <div class="bg" id="animation">
    <div class="txt">
      <h1>Unlock Your Coding Potential: </h1>
      <h3>Learn Programming Languages with Expert Guidance!</h3>
      </div>
  </div>
</div>

<div class="container2">
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="container2">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4 pb-5">

              <form action="Assets/php/Login.php" method="post">
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your email and password!</p>
                <div class="form-outline form-white mb-4">
    <input type="email" name="email" id="email" class="form-control form-control-lg">
    <label class="form-label" for="typeEmailX">Email</label>
  </div>

  <div class="form-outline form-white mb-4">
    <input type="password" name="password" id="password" class="form-control form-control-lg">
    <label class="form-label" for="typePasswordX">Password</label>
  </div>

  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#">Forgot password?</a></p>
  <p id="errorMessage" hidden></p>
  <button class="btn btn-outline-light btn-lg px-5" type="submit" value="post">Login</button>

  <div class="d-flex justify-content-center text-center mt-4 pt-1">
    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
  </div>
</form>
              </div>  
              <div>
                <p class="mb-0">Don't have an account?<a href="Assets/php/SignUpPage.php" class="text-white-50 fw-bold">Sign Up</a></p>
              </div>

            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
</div>

</main>
<footer>

</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/90ba71c5ee.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
    <script>
VANTA.BIRDS({
  el: "#animation",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  backgroundColor: 0x20202a,
  colorMode: "variance",
  birdSize: 1.10,
  wingSpan: 25.00,
  quantity: 4.00
})
</script>
</body>
</html>