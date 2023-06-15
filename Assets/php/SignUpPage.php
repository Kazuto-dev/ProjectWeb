<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/signup.css">
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
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
      </div>
    </div>
  </div>
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
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
              <form action="../php/SignUp.php" method="post">
                <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
                <p class="text-white-50 mb-5">Please enter your Information!</p>

                <div class="form-outline form-white mb-4">
                  <input type="text" name="username" id="typeUsernameX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeUsernameX">Username</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit" value="post">Sign Up</button>
              </form>
              
              </div>  
              <div>
                <p class="mb-0">Do you have an account already? <a href="../../Index.php" class="text-white-50 fw-bold">Log In</a></p>
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