<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tenant | Home</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/fontawesome-all.min.css" rel="stylesheet">
  <link href="assets/css/swiper.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

  <!-- Navigation -->
  <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">

      <!-- Image Logo -->
      <a class="navbar-brand" href="/"><img src="assets/images/janit.png" alt="Logo" width="70"></a>

      <!-- Text Logo - Use this if you don't have a graphic logo -->
      <!-- <a class="navbar-brand logo-text" href="index.html">Ioniq</a> -->

      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ms-auto navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#header">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#details">Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pricing">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
              aria-expanded="false">Drop</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="article.html">Article Details</a></li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li><a class="dropdown-item" href="terms.html">Terms Conditions</a></li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
            </ul>
          </li>
        </ul>
        <span class="nav-item">
          <a class="btn-outline-sm" href="{{ route('tenant.login') }}">Log in</a>
        </span>
      </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
  </nav> <!-- end of navbar -->

  <!-- Header -->
  <header id="header" class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="text-container">
            <h1 class="h1-large">#1 CRM app for <span class="replace-me">small business, young startups,
                bootstrappers</span></h1>
            <p class="p-large">Proactively formulate exceptional growth strategies vis-a-vis an expanded array of niche
              markets. Dramatically maximize progressive.</p>
            <a class="btn-solid-lg" href="/">Sign up for free</a>
          </div> <!-- end of text-container -->
        </div> <!-- end of col -->
        <div class="col-lg-6">
          <div class="image-container">
            <img class="img-fluid" src="assets/images/header-illustration.svg" alt="Img">
          </div> <!-- end of image-container -->
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </header> <!-- end of header -->
  <!-- end of header -->

  <!-- Scripts -->
  <script src="assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
  <script src="assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
  <script src="assets/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
  <script src="assets/js/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
  <script src="assets/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
