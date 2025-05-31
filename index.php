<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mottanai Recycling</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css" />
  <style>
    header .carousel-item img {
      height: 60vh;
      object-fit: cover;
    }
    .section-title {
      margin-bottom: 1rem;
      font-weight: bold;
    }
    .custom-border-r {
      border-radius: 15px;
    }
    .cta-btn {
      font-weight: bold;
      letter-spacing: 1px;
    }
    .partners img {
      max-height: 100px;
      object-fit: contain;
      padding: 1rem;
    }
    .about-text {
      text-align: justify;
    }
  </style>
</head>
<body>
  <div class="container-fluid p-0">
    <?php require_once "partials/navbar.php"; ?>

    <!-- Hero Carousel with CTA -->
<!-- Hero Carousel with Centered CTA -->
<header class="row">
  <div id="carouselExampleControls" class="carousel slide position-relative" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/items1.jpg" class="d-block w-100" alt="Waste Products" />
      </div>
      <div class="carousel-item">
        <img src="img/company.jpg" class="d-block w-100" alt="Company Factory" />
      </div>
      <div class="carousel-item">
        <img src="img/greenenvironment.jpg" class="d-block w-100" alt="Green Environment" />
      </div>
    </div>

    <!-- Centered CTA Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center" style="background-color: rgba(0, 0, 0, 0.4); z-index: 2;">
      <h1 class="text-white fw-bold mb-3 display-5">Turn Waste into Wealth</h1>
      <p class="text-white lead mb-4 px-3">Join Mottanai to earn, recycle, and power the future.</p>
      <a href="sign.php" class="btn px-4 py-2 btn-lg" style="background-color: #a5d894; color: #1a3b1f;">Get Started</a>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</header>



    <!-- About Section -->
    <section class="row py-5 px-3 bg-light align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="section-title text-center text-md-start">About Mottanai</h2>
        <p class="about-text">
          Mottanai is committed to redefining how communities manage waste. We empower individuals and businesses to turn everyday waste into valuable resources through responsible recycling and renewable energy solutions. Join us in building a greener tomorrow.
        </p>
        <div class="text-center text-md-start mt-4">
          <a href="about.html" class="btn btn-success btn-lg text-uppercase cta-btn">Learn More</a>
        </div>
      </div>
      <div class="col-lg-6 text-center">
        <img src="img/rrr.jpg" class="img-fluid custom-border-r shadow" alt="Recycling" />
      </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-success text-white text-center py-5">
      <div class="container">
        <h2 class="mb-3">Ready to Make a Difference?</h2>
        <p class="lead">Sign up today and start earning by recycling your waste.</p>
        <a href="sign.php" class="btn btn-outline-light btn-lg mt-3">Get Started</a>
      </div>
    </section>

    <!-- Services -->
    <section class="py-5 px-3">
      <div class="text-center mb-4">
        <h2 class="section-title text-uppercase">Our Services</h2>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="img/plastics.jpg" class="card-img-top" alt="Recycling PET Bottles" />
            <div class="card-body">
              <h5 class="card-title">Recycling</h5>
              <p class="card-text">We collect and recycle PET bottles, saving up to 40% of energy used in producing new ones.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="img/pickup.jpeg" class="card-img-top" alt="Pickup Service" />
            <div class="card-body">
              <h5 class="card-title">Pickup Services</h5>
              <p class="card-text">We provide flexible pickup schedules for households, schools, and companies to encourage proper waste management.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="img/grid.jpeg" class="card-img-top" alt="Waste to Energy" />
            <div class="card-body">
              <h5 class="card-title">Waste-to-Energy</h5>
              <p class="card-text">We convert non-recyclable waste into clean energy, helping reduce grid dependency and carbon footprint.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Partners -->
    <section class="py-5 bg-light">
      <div class="text-center mb-4">
        <h2 class="section-title text-uppercase">Our Partners</h2>
      </div>
      <div class="row justify-content-center partners text-center">
        <div class="col-6 col-md-3">
          <img src="img/cu-logo.png" alt="Covenant University" class="img-fluid" />
        </div>
        <div class="col-6 col-md-3">
          <img src="img/lawma.png" alt="LAWMA" class="img-fluid" />
        </div>
        <div class="col-6 col-md-3">
          <img src="img/sdgs.png" alt="SDGs" class="img-fluid" />
        </div>
      </div>
    </section>

    <?php require_once "partials/footer.php"; ?>
  </div>

  <script src="bootstrap/js/bootstrap.bundle.js"></script>
  <script src="jquery-3.7.1.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.cust').click(function(){
        var name = $('#name').val();
        var email = $('#email').val();
        if(name.length > 0 && email.length > 0 ){
          alert("Thank you for contacting us. We'll reach you shortly, cheers!");
        } else {
          alert('Please fill in all required fields!');
        }
      });
    });
  </script>
</body>
</html>
