<?php
// Handle form submission at the top of the file
$submitted = false;
$success = false;

// Include database connection
include 'includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve and sanitize form data
    $tour_name = $_POST['tour_name'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $arrival_date = $_POST['arrival_date'];
    $number_of_adults = $_POST['number_of_adults'];
    $number_of_children = $_POST['number_of_children'];
    $special_requests = $_POST['special_requests'];

    // Prepare SQL insert
    $stmt = $conn->prepare("INSERT INTO booking (tour_name, full_name, email, arrival_date, number_of_adults, number_of_children, special_requests) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiis", $tour_name, $full_name, $email, $arrival_date, $number_of_adults, $number_of_children, $special_requests);

    if ($stmt->execute()) {
        $success = true;
    } else {
        $success = false;
    }

    $submitted = true;
    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Auntie Vee Adventures</title>
        <link rel="icon" href="/img/alogo.png" type="image/png">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/new.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0 d-flex align-items-center">
                    <img src="img/alogo.png" alt="Adventures Logo"
                    class="img-fluid"
                    style="max-height: 120px; height: auto; width: auto;">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <button class="btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                    <a href="#booking" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Book Now</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->


      <!-- Carousel Start -->
<section class="carousel-header">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators (Carousel Dots) -->
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="3"></li>
        </ol>

        <!-- Carousel Inner -->
        <div class="carousel-inner">

            <!-- Slide 1: Wildlife Safaris -->
            <div class="carousel-item active">
                <img src="img/wild.jpg" class="d-block w-100 img-fluid" alt="Wildlife Safaris">
                <div class="carousel-caption d-md-block">
                    <div class="container text-center p-3 p-md-4">
                        <h4 class="text-white text-uppercase fw-bold mb-2">Auntie Vee Adventures</h4>
                        <h2 class="text-white fw-bold mb-3">Explore Wildlife Safaris & National Parks</h2>
                        <p class="text-white mb-4">
                            Discover the beauty of Tanzania through guided tours in the Northern Circuit, Mikumi, Ruaha, Selous, and more.
                        </p>
                        <a href="wildlifesafaris.php" class="btn btn-primary text-white rounded-pill py-2 px-4">Start Your Safari</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Island Getaways & Cultural Tours -->
            <div class="carousel-item">
                <img src="img/island.jpg" class="d-block w-100 img-fluid" alt="Island and Cultural Tours">
                <div class="carousel-caption d-md-block">
                    <div class="container text-center p-3 p-md-4">
                        <h5 class="text-white text-uppercase fw-bold mb-2">Island Getaways & Cultural Journeys</h5>
                        <h2 class="text-white fw-bold mb-3">Experience Zanzibar & Local Culture</h2>
                        <p class="text-white mb-4">
                            Relax on pristine beaches. Dive into Tanzania’s rich culture with village tours, traditional cuisine, and more.
                        </p>
                        <a href="island.php" class="btn btn-primary text-white rounded-pill py-2 px-4">Book Your Trip</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Mountain Adventures -->
            <div class="carousel-item">
                <img src="img/mt-kilimanjaro.jpg" class="d-block w-100 img-fluid" alt="Mountain Adventures">
                <div class="carousel-caption d-md-block">
                    <div class="container text-center p-3 p-md-4">
                        <h5 class="text-white text-uppercase fw-bold mb-2">Mountain Treks & Climbing</h5>
                        <h2 class="text-white fw-bold mb-3">Conquer Kilimanjaro & Mt. Meru</h2>
                        <p class="text-white mb-4">
                            Explore Mt. Kilimanjaro, Mt. Meru, and scenic walking safaris across Tanzania's landscapes.
                        </p>
                        <a href="mountain-trekking.php" class="btn btn-primary text-white rounded-pill py-2 px-4">View Climbing Packages</a>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Cultural Journeys -->
            <div class="carousel-item">
                <img src="img/cu.jpg" class="d-block w-100 img-fluid" alt="Cultural Journeys">
                <div class="carousel-caption d-md-block">
                    <div class="container text-center p-3 p-md-4">
                        <h5 class="text-white text-uppercase fw-bold mb-2">Cultural & Adventure Tours</h5>
                        <h2 class="text-white fw-bold mb-3">Night Drives, Biking & Bird Watching</h2>
                        <p class="text-white mb-4">
                            Enjoy village tours, nocturnal safaris, adventurous bike rides, and peaceful birdwatching trips with local experts.
                        </p>
                        <a href="cultural.php" class="btn btn-primary text-white rounded-pill py-2 px-4">Discover Activities</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-secondary rounded-circle p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-secondary rounded-circle p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- Carousel End -->



        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <form id="searchForm" class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" id="searchInput" class="form-control p-3" placeholder="e.g. birds, Zanzibar, Kilimanjaro..." aria-describedby="search-icon-1" required>
                            <button type="submit" class="input-group-text p-3" id="search-icon-1">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal Search End -->

<!-- About Start -->
            <div class="container-fluid py-5">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="bg-light rounded">
                                <img src="img/alogo.png" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Auntie Vee Adventures">
                            </div>
                        </div>
                        <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                            <h5 class="sub-title pe-3">About Auntie Vee Adventures</h5>
                            <h1 class="display-5 mb-4">Your Trusted Partner in African Travel Experiences</h1>
                            <p class="mb-4">
                                Auntie Vee Adventures is a locally owned tourism company dedicated to creating unforgettable journeys across Tanzania and East Africa. We specialize in tailor-made tours ranging from wildlife safaris, cultural encounters, beach escapes, to mountain expeditions. Our deep knowledge of the region and commitment to authentic experiences make us your ideal partner for exploring Africa.
                            </p>
                            <div class="row gy-4 align-items-center">
                                <div class="col-12 col-sm-6 d-flex align-items-center">
                                    <i class="fas fa-binoculars fa-3x text-secondary"></i>
                                    <h5 class="ms-4">Expert-Led Safari Experiences</h5>
                                </div>
                                <div class="col-12 col-sm-6 d-flex align-items-center">
                                    <i class="fas fa-umbrella-beach fa-3x text-secondary"></i>
                                    <h5 class="ms-4">Bespoke Island Getaways</h5>
                                </div>
                                <div class="col-4 col-md-3">
                                    <div class="bg-light text-center rounded p-3">
                                        <div class="mb-2">
                                            <i class="fas fa-globe-africa fa-4x text-primary"></i>
                                        </div>
                                        <h1 class="display-5 fw-bold mb-2">10+</h1>
                                        <p class="text-muted mb-0">Years of Experience</p>
                                    </div>
                                </div>
                                <div class="col-8 col-md-9">
                                    <div class="mb-5">
                                        <p class="text-primary h6 mb-3">
                                            <i class="fa fa-check-circle text-secondary me-2"></i> Tailor-Made Itineraries for All Interests
                                        </p>
                                        <p class="text-primary h6 mb-3">
                                            <i class="fa fa-check-circle text-secondary me-2"></i> Local Expertise and Passionate Guides
                                        </p>
                                        <p class="text-primary h6 mb-3">
                                            <i class="fa fa-check-circle text-secondary me-2"></i> Safe, Authentic, and Affordable Travel
                                        </p>
                                    </div>
                                    <div class="d-flex flex-wrap">
                                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                            <a href="tel:+255123456789" class="position-relative wow tada" data-wow-delay=".9s">
                                                <i class="fa fa-phone-alt text-primary fa-3x"></i>
                                                <div class="position-absolute" style="top: 0; left: 25px;">
                                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <span class="text-primary">Have any questions?</span>
                                            <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">Call: +255 687 789 424</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


                     <!-- Services Start -->
        <div class="container-fluid service overflow-hidden pt-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">Our Services</h5>
                    </div>
                    <h1 class="display-5 mb-4">Explore Tanzania with Auntie Vee Adventures</h1>
                    <p class="mb-0">We offer curated experiences across Tanzania’s iconic destinations. From thrilling safaris to serene island escapes — we have something for every traveler.</p>
                </div>
                <div class="row g-4">
                    <!-- Service 1 -->
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded text-center p-4 shadow-sm h-100">
                            <div class="mb-4">
                                <i class="fas fa-paw fa-3x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Wildlife Safaris</h4>
                            <p>Experience the thrill of African wildlife in Serengeti, Ngorongoro, Mikumi, Selous, and more with expert guides.</p>
                            <a class="btn btn-outline-primary rounded-pill px-4 py-2 mt-3" href="wildlifesafaris.php">Learn More</a>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="bg-light rounded text-center p-4 shadow-sm h-100">
                            <div class="mb-4">
                                <i class="fas fa-umbrella-beach fa-3x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Beach & Island Tours</h4>
                            <p>Unwind on the pristine shores of Zanzibar, Mafia, and Pemba — ideal for snorkeling, diving, and relaxation.</p>
                            <a class="btn btn-outline-primary rounded-pill px-4 py-2 mt-3" href="island.php">Learn More</a>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-light rounded text-center p-4 shadow-sm h-100">
                            <div class="mb-4">
                                <i class="fas fa-mountain fa-3x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Mountain Climbing</h4>
                            <p>Climb Mount Kilimanjaro or Mount Meru with professional support and customized trekking itineraries.</p>
                            <a class="btn btn-outline-primary rounded-pill px-4 py-2 mt-3" href="mountain-trekking.php">Learn More</a>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="bg-light rounded text-center p-4 shadow-sm h-100">
                            <div class="mb-4">
                                <i class="fas fa-bicycle fa-3x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Biking & Hiking Tours</h4>
                            <p>Explore Tanzania's natural beauty through biking safaris, nature walks, and scenic hiking experiences.</p>
                            <a class="btn btn-outline-primary rounded-pill px-4 py-2 mt-3" href="cultural.php">Learn More</a>
                        </div>
                    </div>
                    <!-- Service 5 -->
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded text-center p-4 shadow-sm h-100">
                            <div class="mb-4">
                                <i class="fas fa-binoculars fa-3x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Bird Watching</h4>
                            <p>Join guided birdwatching trips across rich ecosystems from Lake Manyara to Gombe National Park.</p>
                            <a class="btn btn-outline-primary rounded-pill px-4 py-2 mt-3" href="cultural.php">Learn More</a>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="bg-light rounded text-center p-4 shadow-sm h-100">
                            <div class="mb-4">
                                <i class="fas fa-users fa-3x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Cultural Tours</h4>
                            <p>Discover authentic Tanzanian culture through village visits, local cuisine, dancing, crafts, and storytelling.</p>
                            <a class="btn btn-outline-primary rounded-pill px-4 py-2 mt-3" href="cultural.php">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->


<!-- ======================== -->
<!-- Safari Itineraries Start -->
<!-- ======================== -->
<div class="container py-5">
  <!-- Section Header -->
  <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
    <h5 class="sub-title text-primary px-3">SAFARI PACKAGES</h5>
    <h1 class="display-6 fw-bold">Auntie Vee Adventures – Experience Tanzania</h1>
    <p class="text-muted mt-3">Choose your dream safari adventure — from Mikumi to Serengeti and beyond.</p>
  </div>

  <!-- 3 DAYS MIKUMI SAFARI -->
  <div class="mb-5">
    <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
      <h5 class="sub-title text-primary px-3">3 DAYS 2 NIGHTS</h5>
      <h2 class="fw-bold">Mikumi Safari from Zanzibar</h2>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="p-4 border rounded bg-light shadow-sm h-100">
          <h5 class="text-primary fw-bold">Day 1: Game Drive</h5>
          <ul>
            <li>5:00 AM Pickup from hotel to Stone Town for ferry to Dar.</li>
            <li>Transfer by train to Morogoro and drive to Mikumi Park.</li>
            <li>Lunch and afternoon game drive till 6:30 PM.</li>
            <li>Overnight: Camp Lilac Mikumi.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="p-4 border rounded bg-light shadow-sm h-100">
          <h5 class="text-primary fw-bold">Day 2: Full Day Safari</h5>
          <ul>
            <li>Early breakfast and full-day game drive.</li>
            <li>Lunch at park restaurant, visit Masai Village after sunset.</li>
            <li>Overnight: Camp Lilac Mikumi.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="p-4 border rounded bg-light shadow-sm h-100">
          <h5 class="text-primary fw-bold">Day 3: Return to Zanzibar</h5>
          <ul>
            <li>Breakfast and transfer back to Morogoro Station.</li>
            <li>Train to Dar, ferry to Zanzibar, and hotel drop-off.</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="mt-4 text-center">
      <h6 class="fw-bold text-uppercase text-primary">Included:</h6>
      <p class="fw-bold mb-0">
        • Full-board accommodation &nbsp; • Water in safari &nbsp; • Park entrances &nbsp; • Professional guide <br>
        • 4x4 Safari Car &nbsp; • Train Tickets &nbsp; • Boat Tickets &nbsp; • Transfers
      </p>
    </div>
  </div>

  <!-- 2 DAYS TARANGIRE + NGORONGORO -->
  <div class="mb-5">
    <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
      <h5 class="sub-title text-primary px-3">2 DAYS 1 NIGHT</h5>
      <h2 class="fw-bold">Tarangire & Ngorongoro Crater Safari</h2>
    </div>
    <div class="row g-4">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="p-4 border rounded bg-light shadow-sm h-100">
          <h5 class="text-primary fw-bold">Day 1: Zanzibar to Tarangire</h5>
          <ul>
            <li>5:00 AM Pickup for flight to Arusha.</li>
            <li>Full-day game drive in Tarangire National Park.</li>
            <li>See baobab trees, elephants, lions, and more.</li>
            <li>Dinner & overnight at lodge/camp.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
        <div class="p-4 border rounded bg-light shadow-sm h-100">
          <h5 class="text-primary fw-bold">Day 2: Ngorongoro Crater</h5>
          <ul>
            <li>Early descent into the crater for a full-day tour.</li>
            <li>See rhinos, lions, elephants, and flamingos at Lake Magadi.</li>
            <li>Picnic lunch at Hippo Pool.</li>
            <li>Evening flight back to Zanzibar.</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="mt-4 text-center">
      <h6 class="fw-bold text-uppercase text-primary">Included:</h6>
      <p class="fw-bold mb-0">
        • Flight tickets &nbsp; • Park entry fees &nbsp; • Full-board accommodation &nbsp; • 4x4 Safari vehicle <br>
        • Professional guide &nbsp; • Meals &nbsp; • Drinking water
      </p>
    </div>
  </div>

  <!-- 3 DAYS SERENGETI + NGORONGORO -->
  <div class="mb-5">
    <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
      <h5 class="sub-title text-primary px-3">3 DAYS PRIVATE SAFARI</h5>
      <h2 class="fw-bold">Zanzibar to Serengeti (Direct Flight)</h2>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="p-4 border rounded bg-light shadow-sm h-100">
          <h5 class="text-primary fw-bold">Day 1: Zanzibar to Serengeti</h5>
          <ul>
            <li>Early flight to Seronera Airstrip (1.5–2 hrs).</li>
            <li>Game drive with packed lunch upon arrival.</li>
            <li>See elephants, lions, giraffes, wildebeest, and zebras.</li>
            <li>Overnight at Mawe Tented Camp or Osero Camp.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="p-4 border rounded bg-light shadow-sm h-100">
          <h5 class="text-primary fw-bold">Day 2: Full Day in Serengeti</h5>
          <ul>
            <li>Morning & afternoon game drives in Serengeti plains.</li>
            <li>Witness the Great Migration & Big Five.</li>
            <li>Overnight: Mawe Tented Camp or Osero Camp.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="p-4 border rounded bg-light shadow-sm h-100">
          <h5 class="text-primary fw-bold">Day 3: Ngorongoro Crater</h5>
          <ul>
            <li>Drive to Ngorongoro for full-day crater tour.</li>
            <li>Visit Lake Magadi for flamingos and hippos.</li>
            <li>Evening flight back to Zanzibar.</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="mt-4 text-center">
      <h6 class="fw-bold text-uppercase text-primary">Included:</h6>
      <p class="fw-bold mb-0">
        • Return flights &nbsp; • Accommodation &nbsp; • Park fees &nbsp; • Meals &nbsp; • Safari 4x4 Vehicle <br>
        • Professional driver/guide &nbsp; • Water & soft drinks
      </p>
    </div>
  </div>

  <!-- ZANZIBAR LUXURY SUNSET DHOW CRUISE -->
  <div class="mb-5">
    <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
      <h5 class="sub-title text-primary px-3">ZANZIBAR EXPERIENCE</h5>
      <h2 class="fw-bold">Luxury Sunset Dhow Cruise</h2>
    </div>
    <div class="p-4 border rounded bg-light shadow-sm wow fadeInUp" data-wow-delay="0.2s">
      <p>
        Set sail at <strong>4:30 PM</strong> aboard a traditional Swahili dhow and experience the stunning Zanzibar sunset with music, refreshments, and unmatched Indian Ocean views.
      </p>
      <ul>
        <li>Duration: 2–3 hours</li>
        <li>Includes drinks, Swahili canapés, seafood dinner (veg options available)</li>
        <li>Music on board & professional crew</li>
        <li>Pickup from selected hotels (optional)</li>
      </ul>
      <p class="fw-bold mt-3 mb-0">
        • 2–3 hour luxury cruise &nbsp; • Beverages & snacks &nbsp; • Live Swahili music &nbsp; • Safety equipment
      </p>
    </div>
  </div>
</div>

<!-- 4 DAYS SERENGETI SAFARI -->
<div class="mb-5">
  <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
    <h5 class="sub-title text-primary px-3">4 DAYS 3 NIGHTS</h5>
    <h2 class="fw-bold">Serengeti Safari from Arusha</h2>
    <p class="text-muted mt-2">
      Prices vary depending on the season: July to October (Peak Season) and April to Mid June (Low Season).
    </p>
    <p class="fw-semibold">3 Nights Serengeti</p>
  </div>

  <div class="row g-4">
    <!-- Day 1 -->
    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
      <div class="p-4 border rounded bg-light shadow-sm h-100">
        <h5 class="text-primary fw-bold">Day 1: Arusha to Serengeti</h5>
        <ul>
          <li>8:00 AM departure from Arusha in private 4x4 Landcruiser.</li>
          <li>Scenic 6.5 hour drive to Serengeti National Park.</li>
          <li>Lunch on arrival then afternoon game drive up to 6:30 PM.</li>
          <li>Search for Big Cats and the Big Nine wildlife species.</li>
          <li>Overnight: Serengeti Serena Lodge or Melia Serengeti.</li>
        </ul>
      </div>
    </div>

    <!-- Day 2 -->
    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
      <div class="p-4 border rounded bg-light shadow-sm h-100">
        <h5 class="text-primary fw-bold">Day 2: Full Day Safari</h5>
        <ul>
          <li>Morning game drive (6:15 AM to 9:00 AM).</li>
          <li>Afternoon game drive after lunch (3:30 PM to 6:30 PM).</li>
          <li>Option for a full-day safari with picnic lunch.</li>
          <li>Overnight: Serengeti Serena Lodge or Melia Serengeti.</li>
        </ul>
      </div>
    </div>

    <!-- Day 3 -->
    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
      <div class="p-4 border rounded bg-light shadow-sm h-100">
        <h5 class="text-primary fw-bold">Day 3: Explore Serengeti</h5>
        <ul>
          <li>Morning and afternoon game drives.</li>
          <li>Optional: Hot Air Balloon Safari or Maasai Village visit.</li>
          <li>Overnight: Serengeti Serena Lodge or Melia Serengeti.</li>
        </ul>
      </div>
    </div>

    <!-- Day 4 -->
    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
      <div class="p-4 border rounded bg-light shadow-sm h-100">
        <h5 class="text-primary fw-bold">Day 4: Return to Arusha</h5>
        <ul>
          <li>Sunrise game drive then breakfast.</li>
          <li>10:00 AM checkout and drive back to Arusha.</li>
          <li>Arrival around 3:00 PM. Hotel or airport drop-off.</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Inclusions -->
  <div class="mt-4 text-center">
    <h6 class="fw-bold text-uppercase text-primary">Included:</h6>
    <p class="fw-bold mb-0">
      • Full-board accommodation • Exclusive 4x4 Landcruiser • Private safari game drives <br>
      • Professional English-speaking Guide • Park & Concession Fees <br>
      • Soft drinks, water, teas & coffees • Fuel & Vehicle expenses • 24-hour ground support
    </p>
  </div>

  <!-- Exclusions -->
  <div class="mt-3 text-center">
    <h6 class="fw-bold text-uppercase text-primary">Not Included:</h6>
    <p class="fw-bold mb-0">
      • International flights & visas • Tips & personal expenses <br>
      • Premium drinks, cigars • Bank & card surcharges
    </p>
  </div>
</div>
<!-- ====================== -->
<!-- Safari Itineraries End -->
<!-- ====================== -->



<!-- Testimonial Start -->
<div class="container-fluid testimonial overflow-hidden pb-5">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">Our Clients Reviews</h5>
            </div>
            <h1 class="display-5 mb-4">What Travelers Say About Auntie Vee</h1>
            <p class="mb-0">We pride ourselves in delivering unforgettable experiences. Here’s what our happy travelers have to say about their journey with us.</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">

            <!-- Testimonial 1 -->
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">
                        From the moment we landed in Arusha, Auntie Vee Adventures took care of everything! The guides were knowledgeable, and the Serengeti safari was breathtaking. Highly recommended!
                    </p>
                    <div class="d-flex justify-content-end mt-3">
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="img/3.png" alt="Emily Taylor">
                    </div>
                    <div class="my-auto">
                        <h5>Emily Taylor</h5>
                        <p class="mb-0">Wildlife Photographer, UK</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">
                        We had the best beach holiday in Zanzibar. The team at Auntie Vee made it so smooth — from hotel bookings to fun activities. Everything was just perfect!
                    </p>
                    <div class="d-flex justify-content-end mt-3">
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star-half-alt text-secondary"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="img/3.png" alt="Rajesh Mehta">
                    </div>
                    <div class="my-auto">
                        <h5>Rajesh Mehta</h5>
                        <p class="mb-0">Travel Blogger, India</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">
                        I did the Kilimanjaro hike with Auntie Vee Adventures and it was a life-changing experience. The porters, guides, and services were top-notch. Thank you for the adventure of a lifetime!
                    </p>
                    <div class="d-flex justify-content-end mt-3">
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="img/3.png" alt="Lisa Gomez">
                    </div>
                    <div class="my-auto">
                        <h5>Lisa Gomez</h5>
                        <p class="mb-0">Adventure Seeker, USA</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Gallery Start -->
<div class="container-fluid gallery py-5 my-5">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
        <h5 class="section-title px-3">PHOTO GALLERY</h5>
        <h1 class="mb-4">Discover Auntie Vee’s Travel Moments</h1>
        <p class="mb-0">A glimpse into the adventures we’ve created. From wild safaris to pristine beaches, every memory is a moment worth sharing.</p>
    </div>
    <div class="tab-class text-center">
        <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="gallery.php">
                    <span class="text-dark" style="width: 150px;">All Moments</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="GalleryTab-All" class="tab-pane fade show p-0 active">
                <div class="row g-2 justify-content-center">
                    <!-- Image 1 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item position-relative overflow-hidden">
                            <img src="img/5.jpg" class="img-fluid w-100 rounded" style="height: 300px; object-fit: cover;" alt="Adventure Moment 1">
                            <div class="gallery-content position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center bg-dark bg-opacity-50 opacity-0 hover-opacity-100 transition">
                                <h5 class="text-white text-uppercase mb-2">Safari Magic</h5>
                                <a href="img/5.jpg" data-lightbox="auntie-vee-gallery" class="btn btn-outline-light btn-sm"><i class="fas fa-search-plus me-2"></i>View</a>
                            </div>
                        </div>
                    </div>

                    <!-- Image 2 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item position-relative overflow-hidden">
                            <img src="img/6.jpg" class="img-fluid w-100 rounded" style="height: 300px; object-fit: cover;" alt="Adventure Moment 2">
                            <div class="gallery-content position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center bg-dark bg-opacity-50 opacity-0 hover-opacity-100 transition">
                                <h5 class="text-white text-uppercase mb-2">Island Vibes</h5>
                                <a href="img/6.jpg" data-lightbox="auntie-vee-gallery" class="btn btn-outline-light btn-sm"><i class="fas fa-search-plus me-2"></i>View</a>
                            </div>
                        </div>
                    </div>

                    <!-- Image 3 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item position-relative overflow-hidden">
                            <img src="img/7.jpg" class="img-fluid w-100 rounded" style="height: 300px; object-fit: cover;" alt="Adventure Moment 3">
                            <div class="gallery-content position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center bg-dark bg-opacity-50 opacity-0 hover-opacity-100 transition">
                                <h5 class="text-white text-uppercase mb-2">Cultural Tour</h5>
                                <a href="img/7.jpg" data-lightbox="auntie-vee-gallery" class="btn btn-outline-light btn-sm"><i class="fas fa-search-plus me-2"></i>View</a>
                            </div>
                        </div>
                    </div>

                    <!-- Image 4 -->
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item position-relative overflow-hidden">
                            <img src="img/4.jpeg" class="img-fluid w-100 rounded" style="height: 300px; object-fit: cover;" alt="Adventure Moment 4">
                            <div class="gallery-content position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center bg-dark bg-opacity-50 opacity-0 hover-opacity-100 transition">
                                <h5 class="text-white text-uppercase mb-2">Nature Trails</h5>
                                <a href="img/4.jpeg" data-lightbox="auntie-vee-gallery" class="btn btn-outline-light btn-sm"><i class="fas fa-search-plus me-2"></i>View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button -->
        <div class="text-center mt-5">
            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.5s" href="gallery.php">View Full Gallery</a>
        </div>
    </div>
</div>
<!-- Gallery End -->


<!-- Tour Booking Start -->
<div id="booking" class="container-fluid booking py-5" style="background: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)), url('img/booking-bg.jpg') center center/cover no-repeat;">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <!-- Text Left -->
            <div class="col-lg-6 text-dark">
                <h5 class="section-title text-warning mb-3" style="font-size: 20px;">🌍 Tour Booking</h5>
                <h1 class="display-5 fw-bold mb-4">Book Your Next Tanzanian Adventure</h1>
                <p class="mb-4">From thrilling safaris to the serene beaches of Zanzibar — plan it all here, effortlessly.</p>
                <p class="mb-4">Enjoy exclusive offers, custom packages, and expert guides to make your journey unforgettable.</p>
                <a href="#" class="btn btn-outline-primary rounded-pill py-3 px-5 shadow-sm">Learn More</a>

                <!-- Booking Terms and Conditions -->
                <div class="mt-5 p-4 bg-light text-dark rounded border-start border-5 border-warning">
                    <h5 class="text-warning mb-3">📋 Booking Terms and Conditions</h5>
                    <h6 class="text-dark">💳 PAYMENT TERMS</h6>
                    <ul class="mb-3">
                        <li>40% deposit on confirmation.</li>
                        <li>Full payment must be received at least <strong>30 days</strong> prior to arrival.</li>
                        <li>All extras must be settled at least <strong>14 days</strong> prior to arrival.</li>
                        <li><em>Bookings with no full payments 14 days prior to arrival will be automatically released from the system.</em></li>
                    </ul>
                    <h6 class="text-dark">❌ CANCELLATION FEES</h6>
                    <ul>
                        <li>45 to 30 days prior to arrival: <strong>50%</strong> cancellation fee.</li>
                        <li>29 to 15 days prior to arrival: <strong>75%</strong> cancellation fee.</li>
                        <li>Less than 14 days prior to arrival: <strong>100%</strong> cancellation fee.</li>
                    </ul>
                </div>
            </div>

            <!-- Booking Form -->
            <div class="col-lg-6">
                <div class="bg-white rounded-4 shadow-lg p-5">
                    <h2 class="text-center text-dark mb-3">🎉 <span class="text-warning">50% Off</span> Your First Tour</h2>
                    <p class="text-center text-muted mb-4">Limited-time offer for first-time explorers!</p>

                    <form method="POST">
                        <div class="row g-3">

                            <!-- Tour Name Dropdown -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" name="tour_name" id="tour_name" required>
                                        <option selected disabled>Select Tour</option>
                                        <option value="Cultural & Adventure Tours">Cultural & Adventure Tours</option>
                                        <option value="Mountain Treks & Climbing">Mountain Treks & Climbing</option>
                                        <option value="Wildlife Safaris & Parks">Wildlife Safaris & Parks</option>
                                        <option value="Islands & Beaches">Islands & Beaches</option>
                                    </select>
                                    <label for="tour_name">Tour Name</label>
                                </div>
                            </div>

                            <!-- Full Name -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Your Full Name" required>
                                    <label for="full_name">Full Name</label>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <!-- Arrival Date -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="arrival_date" id="arrival_date" required>
                                    <label for="arrival_date">Arrival Date</label>
                                </div>
                            </div>

                            <!-- Number of Adults -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="number_of_adults" id="number_of_adults" min="1" required>
                                    <label for="number_of_adults">Number of Adults</label>
                                </div>
                            </div>

                            <!-- Number of Children -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="number_of_children" id="number_of_children" min="0" value="0">
                                    <label for="number_of_children">Number of Children</label>
                                </div>
                            </div>

                            <!-- Special Requests -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="special_requests" id="special_requests" style="height: 100px;" placeholder="Special Requests"></textarea>
                                    <label for="special_requests">Special Requests</label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning text-white w-100 py-3 rounded-pill shadow-sm">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Tour Booking End -->

<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s" style="background-color:#222;">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Contact Info</h4>
                    <a href="https://goo.gl/maps/your-location" target="_blank" class="text-white mb-2">
                        <i class="fa fa-map-marker-alt me-2"></i> 123 Safari Road, Arusha, Tanzania</a>
                    <a href="mailto:info@auntievee.com" class="text-white mb-2">
                        <i class="fas fa-envelope me-2"></i> info@auntievee.com</a>
                    <a href="tel:0687789424" class="text-white mb-2">
                        <i class="fas fa-phone me-2"></i> 068 778 9424</a>
                </div>
            </div>

            <!-- Social Media -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-secondary mb-4">Follow Us</h4>
                    <p class="text-white mb-3">Stay connected with us on social media for amazing travel content and deals.</p>
                    <div class="d-flex align-items-center">
                        <a class="btn btn-outline-light btn-sm mx-1" href="https://facebook.com/AuntieVeeAdventures" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-sm mx-1" href="https://instagram.com/auntieveeadventures" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Opening Time -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Opening Time</h4>
                    <div class="mb-3">
                        <h6 class="text-muted mb-1">Monday - Friday:</h6>
                        <p class="text-white mb-0">08:00 AM - 06:00 PM</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-1">Saturday:</h6>
                        <p class="text-white mb-0">09:00 AM - 03:00 PM</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-1">Sunday:</h6>
                        <p class="text-white mb-0">Closed</p>
                    </div>
                </div>
            </div>

            <!-- Our Services -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Our Services</h4>
                    <a href="#" class="text-white mb-2"><i class="fas fa-angle-right me-2"></i> Wildlife Safaris</a>
                    <a href="#" class="text-white mb-2"><i class="fas fa-angle-right me-2"></i> Cultural Tours</a>
                    <a href="#" class="text-white mb-2"><i class="fas fa-angle-right me-2"></i> Beach Holidays</a>
                    <a href="#" class="text-white mb-2"><i class="fas fa-angle-right me-2"></i> Mountain Climbing</a>
                    <a href="#" class="text-white mb-2"><i class="fas fa-angle-right me-2"></i> Bird Watching</a>
                    <a href="#" class="text-white mb-2"><i class="fas fa-angle-right me-2"></i> Customized Itineraries</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Copyright Start -->
<div class="container-fluid copyright py-4" style="background-color: #111;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto text-center text-white">
                Designed by <a class="border-bottom text-white text-decoration-none" href="https://jaftech.co.tz/" target="_blank">JAFTECH INVESTMENT COMPANY LIMITED</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- CHATBOT CODE BEGINS -->
<div class="chatbot-icon">
    <i class="fas fa-comments"></i>
</div>


<div class="chat-window">
    <div class="chat-window-header">Chat with Auntie Vee Adventures</div>
    <div class="chat-window-body" id="chatBody"></div>
    <div class="chat-window-footer">
        <input type="text" id="chatInput" placeholder="Type a message...">
        <button id="sendButton">Send</button>
    </div>
</div>
</div>
<!-- CHATBOT CODE ENDS -->


     
         <!-- WhatsApp Icon -->
        <a href="https://wa.me/255687789424" target="_blank" class="whatsapp-float" title="Chat with us on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- Translator -->
        <?php include 'translator.php'; ?>



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a> 
        
       

<script>
document.addEventListener("DOMContentLoaded", function () {
    const chatbotIcon = document.querySelector('.chatbot-icon');
    const chatWindow = document.querySelector('.chat-window');
    const chatBody = document.getElementById('chatBody');
    const chatInput = document.getElementById('chatInput');
    const sendButton = document.getElementById('sendButton');
    const chatIcon = document.querySelector('.chatbot-icon i');
    const welcomeMessage = document.querySelector('.chatbot-welcome-message');

    const userAvatar = 'img/3.png';
    const botAvatar = 'img/3.png';

    // Show welcome message (with null check)
    if (welcomeMessage) {
        welcomeMessage.style.display = 'block';
        setTimeout(() => {
            welcomeMessage.style.display = 'none';
        }, 5000);
    }

    chatbotIcon.addEventListener('click', () => {
        if (chatWindow.style.display === 'none' || chatWindow.style.display === '') {
            chatWindow.style.display = 'block';
            chatIcon.classList.remove('fa-comments');
            chatIcon.classList.add('fa-times');
            if (welcomeMessage) welcomeMessage.style.display = 'none';
            setTimeout(() => {
                appendMessage('bot', 'Hello! 👋 Welcome to Auntie Vee Adventures. How can we assist you today?', botAvatar);
            }, 500);
        } else {
            chatWindow.style.display = 'none';
            chatIcon.classList.remove('fa-times');
            chatIcon.classList.add('fa-comments');
        }
    });

    sendButton.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });

    function sendMessage() {
        const message = chatInput.value.trim().toLowerCase();
        if (message !== '') {
            appendMessage('user', message, userAvatar);
            chatInput.value = '';

            setTimeout(() => {
                let botMessage;

                if (["hello", "hi", "hellow", "hey"].includes(message)) {
                    botMessage = "Hi there! 😊 How can we help you today at Auntie Vee Adventures?";
                } else if (["mambo", "habari", "za uko", "za kazi", "inakuaje", "kwema"].some(greet => message.includes(greet))) {
                    botMessage = "Salama kabisa! Karibu Auntie Vee Adventures, tupo kwa ajili yako.";
                } else if (message.includes("assalam")) {
                    botMessage = "Walayqum salaam! Unakaribishwa sana.";
                } else if (message.includes("what do you do") || message.includes("services")) {
                    botMessage = "We offer wildlife safaris, beach holidays, cultural tours, and more!";
                } else if (message.includes("where are you") || message.includes("location")) {
                    botMessage = "We're based in Arusha, Tanzania 🗺️ — the heart of adventure!";
                } else if (message.includes("contact") || message.includes("phone")) {
                    botMessage = "You can reach us via WhatsApp at 📞 +255 758 906 071 or email us at info@auntievee.com.";
                } else if (message.includes("website")) {
                    botMessage = "Visit our official site at 🌐 [auntievee.com](https://auntievee.com)";
                } else if (message.includes("how can i volunteer") || message.includes("volunteer")) {
                    botMessage = "Thanks for your interest! Please contact us on WhatsApp to learn more about volunteering.";
                } else if (message.includes("i am from dubai") || message.includes("package from dubai")) {
                    botMessage = "Welcome! 🌍 Auntie Vee Adventures has great safari packages for international travelers. Let us know your preferences!";
                } else if (message.includes("is it safe") || message.includes("safety")) {
                    botMessage = "Yes! Your safety is our top priority. Our guides are professional and fully trained. 🛡️🦓";
                } else if (message.includes("booking") || message.includes("book a tour") || message.includes("how to book")) {
                    botMessage = "Booking is easy! Just send us a WhatsApp message or use the form on our website. ✅";
                } else if (message.includes("cost") || message.includes("how much") || message.includes("price")) {
                    botMessage = "Prices vary by package. Let us know the destination and number of days for an accurate quote. 💰";
                } else if (message.includes("day trip") || message.includes("how many days") || message.includes("duration")) {
                    botMessage = "We offer 1-day trips, weekend getaways, and week-long safari experiences. 🏕️🐘";
                } else if (message.includes("package") || message.includes("tour package") || message.includes("what's included")) {
                    botMessage = "All packages include transport, meals, accommodation, and guided tours. 🧳📦";
                } else if (message.includes("accommodation") || message.includes("where will i stay") || message.includes("hotel")) {
                    botMessage = "We work with top lodges and hotels to make sure you're always comfortable. 🏨🌴";
                } else if (message.includes("condition") || message.includes("weather") || message.includes("climate")) {
                    botMessage = "Tanzania's weather is warm and sunny most of the year — perfect for adventures! ☀️🌿";
                } else {
                    botMessage = "Thanks for your message! 🌟 Please WhatsApp us directly at +255 758 906 071 or ask a specific question.";
                }

                appendMessage('bot', botMessage, botAvatar);
            }, 1000);
        }
    }

    function appendMessage(sender, message, avatar) {
        const messageContainer = document.createElement('div');
        messageContainer.classList.add('message-container', sender);

        const profileImage = document.createElement('img');
        profileImage.classList.add('profile-image');
        profileImage.src = avatar;

        const messageElement = document.createElement('div');
        messageElement.classList.add('message', sender);
        messageElement.textContent = message;

        if (sender === 'user') {
            messageContainer.appendChild(messageElement);
            messageContainer.appendChild(profileImage);
        } else {
            messageContainer.appendChild(profileImage);
            messageContainer.appendChild(messageElement);
        }

        chatBody.appendChild(messageContainer);
        chatBody.scrollTop = chatBody.scrollHeight;
    }
});
</script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if ($submitted): ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: <?= $success ? "'success'" : "'error'" ?>,
            title: <?= $success ? "'Booking Confirmed!'" : "'Booking Failed'" ?>,
            text: <?= $success 
                ? json_encode("Thank you, $full_name. We'll contact you shortly!") 
                : json_encode("Something went wrong. Please try again later.") ?>,
            confirmButtonColor: '#ffa500'
        });
    });
</script>
<?php endif; ?>

<script>
document.getElementById('searchForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const query = document.getElementById('searchInput').value.toLowerCase().trim();

    const searchMap = {
        'wildlife': 'wildlifesafaris.php',
        'safari': 'wildlifesafaris.php',
        'national park': 'wildlifesafaris.php',
        'zanzibar': 'island.php',
        'island': 'island.php',
        'beach': 'island.php',
        'pemba': 'island.php',
        'mafia': 'island.php',
        'mountain': 'mountain-trekking.php',
        'kilimanjaro': 'mountain-trekking.php',
        'meru': 'mountain-trekking.php',
        'trek': 'mountain-trekking.php',
        'hike': 'mountain-trekking.php',
        'culture': 'cultural.php',
        'cultural': 'cultural.php',
        'bike': 'cultural.php',
        'night': 'cultural.php',
        'bird': 'cultural.php',
        'birds': 'cultural.php'
    };

    let matched = null;
    for (const keyword in searchMap) {
        if (query.includes(keyword)) {
            matched = searchMap[keyword];
            break;
        }
    }

    if (matched) {
        window.location.href = matched;
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Not Found',
            text: 'Sorry, we could not find a match for your search.',
            confirmButtonColor: '#dc3545'
        });
    }
});
</script>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Main Javascript -->
    <script src="js/mains.js"></script>
    </body>

</html>