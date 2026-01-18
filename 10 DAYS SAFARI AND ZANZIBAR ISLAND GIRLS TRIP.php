<?php
// Handle form submission at the top of the page
$submitted = false;
$success = false;

// Include your database connection
include 'includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        $submitted = true;
        $success = false;
    } else {
        // Retrieve and sanitize form data
        $full_name = $conn->real_escape_string($_POST['full_name']);
        $email = $conn->real_escape_string($_POST['email']);

        // Default values for other required fields
        $tour_name = "10 DAYS SAFARI AND ZANZIBAR ISLAND GIRLS TRIP";       
        $arrival_date = date('Y-m-d');      
        $number_of_adults = 1;              
        $number_of_children = 0;         
        $special_requests = NULL;      
        $tour_details = NULL;           

        // Prepare SQL insert
        $stmt = $conn->prepare("INSERT INTO booking (tour_name, tour_details, full_name, email, arrival_date, number_of_adults, number_of_children, special_requests) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssiis", $tour_name, $tour_details, $full_name, $email, $arrival_date, $number_of_adults, $number_of_children, $special_requests);

        if ($stmt->execute()) {
            $success = true;
        } else {
            $success = false;
        }

        $submitted = true;
        $stmt->close();
        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Auntie Vee Adventures</title>
        <link rel="icon" href="/img/alogo.png" type="image/png">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/new.css" rel="stylesheet">
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

                    <a href="#overview" class="nav-item nav-link">
                        Trip Overview
                    </a>

                    <a href="#included" class="nav-item nav-link">
                        What’s Included
                    </a>

                    <a href="#itinerary" class="nav-item nav-link">
                        Itinerary
                    </a>

                    <a href="#location" class="nav-item nav-link">
                        Location
                    </a>

                </div>

               <!-- Price CTA -->
              <div class="d-flex align-items-center ms-lg-3">
                  <div class="text-end me-3">
                      <div class="fw-bold text-danger fs-5">$1,800</div>
                      <small class="text-danger">Deposit: $150</small>
                  </div>
              </div>

            </div>

            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid position-relative text-white"
            style="background: url('img/g4.jpeg') no-repeat center center; background-size: cover; height: 400px;">

            <!-- Dark overlay -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; 
                        background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

            <!-- Content -->
            <div class="container d-flex align-items-center justify-content-center text-center"
                style="max-width: 900px; height: 100%; position: relative; z-index: 2;">
                <h3 class="display-3 text-white mb-4">GIRLS TRIP EXPERIENCE</h3>
            </div>
        </div>
        <!-- Header End -->
          <<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">

            <!-- Image -->
            <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="bg-light rounded position-relative">

                    <!-- Date Badge -->
                    <div class="position-absolute top-0 start-0 bg-primary text-white px-4 py-2 rounded-end">
                        <strong>Feb 19 – Feb 28, 2026</strong><br>
                        <strong>Jun 14 – Jun 23, 2026</strong><br>
                        <small>10 Days / 9 Nights</small>
                    </div>

                    <img src="img/g4.jpeg" class="img-fluid w-100" style="margin-bottom: -7px;" alt="10 Days Safari & Zanzibar Girls Trip">
                </div>
            </div>

            <!-- Content -->
            <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">

                <h5 class="sub-title pe-3">GIRLS TRIP EXPERIENCE</h5>
                <h1 class="display-5 mb-3">
                    10 Days Tanzania Safari & Zanzibar Island Girls’ Trip
                </h1>

                <!-- Date Row -->
                <div class="d-flex flex-wrap align-items-center mb-4">
                    <span class="badge bg-primary me-3 mb-2">
                        📅 Feb 19 – Feb 28, 2026
                    </span>

                    <span class="badge bg-primary me-3 mb-2">
                        📅 Jun 14 – Jun 23, 2026
                    </span>

                    <span class="badge bg-secondary me-3 mb-2">
                        ⏳ 10 Days / 9 Nights
                    </span>

                    <span class="badge bg-light text-dark mb-2">
                        📍 Tanzania & Zanzibar
                    </span>
                </div>

                <p class="mb-4">
                    Get ready for an unforgettable <strong>10-day Girls’ Trip through Tanzania & Zanzibar</strong>,
                    happening from 
                    <strong>February 19 to February 28, 2026</strong> 
                    and 
                    <strong>June 14 to June 23, 2026</strong>. 
                    This journey blends thrilling wildlife safaris in Mikumi National Park with breathtaking white-sand beaches, rich culture,
                    island adventures, and deep sisterhood connections.
                </p>


                <div class="row gy-4 align-items-center">

                   <div class="row gy-4 align-items-center">

                    <!-- Feature 1 -->
                    <div class="col-12 col-sm-6 d-flex align-items-center">
                        <img src="img/w3.jpeg" alt="Safari & Wildlife Experiences"
                            class="img-fluid rounded"
                            style="width:120px; height:120px; object-fit:cover;">
                        <h5 class="ms-4 mb-0">Safari & Wildlife Experiences</h5>
                    </div>

                    <!-- Feature 2 -->
                    <div class="col-12 col-sm-6 d-flex align-items-center">
                        <img src="img/4b.jpeg" alt="Zanzibar Island & Boat Adventures"
                            class="img-fluid rounded"
                            style="width:120px; height:120px; object-fit:cover;">
                        <h5 class="ms-4 mb-0">Zanzibar Island & Boat Adventures</h5>
                    </div>

                    <!-- Feature 3 -->
                    <div class="col-12 col-sm-6 d-flex align-items-center">
                        <img src="img/g3.jpeg" alt="Maasai Village Cultural Experience"
                            class="img-fluid rounded"
                            style="width:120px; height:120px; object-fit:cover;">
                        <h5 class="ms-4 mb-0">Maasai Village Cultural Experience</h5>
                    </div>

                </div>


                    <!-- Stats -->
                    <div class="col-4 col-md-3">
                        <div class="bg-light text-center rounded p-3">
                            <div class="mb-2">
                                <i class="fas fa-calendar-alt fa-4x text-primary"></i>
                            </div>
                            <h1 class="display-5 fw-bold mb-2">10</h1>
                            <p class="text-muted mb-0">Days Experience</p>
                        </div>
                    </div>

                    <!-- Highlights -->
                    <div class="col-8 col-md-9">
                        <div class="mb-4">
                            <p class="text-primary h6 mb-3">
                                <i class="fa fa-check-circle text-secondary me-2"></i>
                                Mikumi National Park safaris & Maasai village visit
                            </p>
                            <p class="text-primary h6 mb-3">
                                <i class="fa fa-check-circle text-secondary me-2"></i>
                                Stone Town, Prison Island & Nakupenda Sandbank
                            </p>
                            <p class="text-primary h6 mb-3">
                                <i class="fa fa-check-circle text-secondary me-2"></i>
                                Safari Blue or Mnemba Island snorkeling experience
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Inclusions & Exclusions -->
                <div class="row g-4 mt-3" id="included">

                    <!-- Inclusions -->
                    <div class="col-md-6">
                        <div class="bg-light rounded p-4 h-100">
                            <h5 class="text-primary fw-bold mb-3">Trip Includes</h5>
                            <ul class="mb-0">
                                <li>Accommodation throughout the trip</li>
                                <li>Private transportation, driver & fuel</li>
                                <li>4x4 Safari vehicle & professional guide</li>
                                <li>Full-board Safari & Bed & Breakfast in Zanzibar</li>
                                <li>Boat tickets & all entrance fees</li>
                                <li>Unlimited bottled drinking water</li>
                                <li>24/7 tour support</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Exclusions -->
                    <div class="col-md-6">
                        <div class="bg-light rounded p-4 h-100">
                            <h5 class="text-primary fw-bold mb-3">Trip Excludes</h5>
                            <ul class="mb-0">
                                <li>International airfare</li>
                                <li>Travel insurance & visa fees</li>
                                <li>Tips & personal expenses</li>
                                <li>Alcoholic drinks & laundry</li>
                                <li>Optional activities not listed</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- CTA -->
                <div class="d-flex flex-wrap align-items-center mt-4">
                    <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                        <a href="tel:+255687789424" class="position-relative wow tada" data-wow-delay=".9s">
                            <i class="fa fa-phone-alt text-primary fa-3x"></i>
                            <div class="position-absolute" style="top: 0; left: 25px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>
                    </div>

                    <div class="d-flex flex-column justify-content-center">
                        <span class="text-primary">Ready to join the ultimate Girls’ Trip?</span>
                        <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">
                            Call: +255 687 789 424
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Itinerary Start -->
<div class="container-fluid py-5" id="itinerary">
  <div class="container">

    <div class="text-center mb-5">
      <h5 class="sub-title text-primary px-3">Trip Itinerary</h5>
      <h2 class="fw-bold">Day-by-Day Experience</h2>
    </div>

    <div class="row g-4">

      <!-- Feb 19 -->
      <div class="col-md-6">
        <div class="bg-light rounded p-4 h-100">
          <h5 class="fw-bold text-primary">Feb 19, 2026 – Arrival in Dar Es Salaam</h5>
          <ul class="text-muted mb-0">
            <li>Airport pick-up and transfer to hotel</li>
            <li>Check-in and relaxation</li>
            <li>Casual evening, dinner à la carte</li>
            <li><strong>Accommodation:</strong> Crown Plaza</li>
          </ul>
        </div>
      </div>

      <!-- Feb 20 -->
      <div class="col-md-6">
        <div class="bg-light rounded p-4 h-100">
          <h5 class="fw-bold text-primary">Feb 20 – Mikumi National Park</h5>
          <ul class="text-muted mb-0">
            <li>7:00 am pick-up and train to Morogoro (1.5 hrs)</li>
            <li>Drive to Mikumi National Park</li>
            <li>Full-day game drive with lunch inside the park</li>
            <li>Sunset drive to lodge</li>
            <li><strong>Accommodation:</strong> Camp Bastian (Dinner included)</li>
          </ul>
        </div>
      </div>

      <!-- Feb 21 -->
      <div class="col-md-6">
        <div class="bg-light rounded p-4 h-100">
          <h5 class="fw-bold text-primary">Feb 21 – Full Day Game Drive</h5>
          <ul class="text-muted mb-0">
            <li>6:15 am early breakfast</li>
            <li>7:00 am full-day game drive in Mikumi</li>
            <li>Lunch inside the park</li>
            <li>Evening return to lodge</li>
            <li><strong>Accommodation:</strong> Camp Bastian (Dinner included)</li>
          </ul>
        </div>
      </div>

      <!-- Feb 22 -->
      <div class="col-md-6">
        <div class="bg-light rounded p-4 h-100">
          <h5 class="fw-bold text-primary">Feb 22 – Maasai Village & Back to Dar</h5>
          <ul class="text-muted mb-0">
            <li>Breakfast and check-out</li>
            <li>Visit Maasai Village cultural experience</li>
            <li>Train from Morogoro to Dar Es Salaam</li>
            <li>Relax at beachside hotel</li>
            <li><strong>Accommodation:</strong> Crown Plaza</li>
          </ul>
        </div>
      </div>

      <!-- Feb 23 -->
      <div class="col-md-6">
        <div class="bg-light rounded p-4 h-100">
          <h5 class="fw-bold text-primary">Feb 23 – Dar Es Salaam to Zanzibar</h5>
          <ul class="text-muted mb-0">
            <li>Breakfast at hotel</li>
            <li>Transfer to ferry terminal</li>
            <li>Ferry ride to Zanzibar</li>
            <li>Hotel check-in & relaxation</li>
            <li><strong>Accommodation:</strong> Crystal Beach Nungwi</li>
          </ul>
        </div>
      </div>

      <!-- Feb 24 -->
      <div class="col-md-6">
        <div class="bg-light rounded p-4 h-100">
          <h5 class="fw-bold text-primary">Feb 24 – Prison Island | Nakupenda | Stone Town</h5>
          <ul class="text-muted mb-0">
            <li>Stone Town walking tour (2–3 hrs)</li>
            <li>Boat ride to Prison Island & giant tortoises</li>
            <li>Nakupenda Sandbank & seafood BBQ lunch</li>
            <li><strong>Accommodation:</strong> Crystal Beach Nungwi (Lunch included)</li>
          </ul>
        </div>
      </div>

      <!-- Feb 25 -->
      <div class="col-md-6">
        <div class="bg-light rounded p-4 h-100">
          <h5 class="fw-bold text-primary">Feb 25 – Safari Blue or Mnemba Island</h5>
          <ul class="text-muted mb-0">
            <li>Full-day ocean adventure</li>
            <li>Dhow cruise, snorkeling & sandbank visit</li>
            <li>Seafood lunch & mangrove lagoon</li>
            <li><strong>Accommodation:</strong> Crystal Beach Nungwi (Lunch included)</li>
          </ul>
        </div>
      </div>

      <!-- Feb 26 -->
      <div class="col-md-6">
        <div class="bg-light rounded p-4 h-100">
          <h5 class="fw-bold text-primary">Feb 26 – Leisure Day</h5>
          <ul class="text-muted mb-0">
            <li>Free day to relax or explore Zanzibar</li>
            <li><strong>Accommodation:</strong> Crystal Beach Nungwi</li>
          </ul>
        </div>
      </div>

      <!-- Feb 27 -->
      <div class="col-md-6">
        <div class="bg-light rounded p-4 h-100">
          <h5 class="fw-bold text-primary">Feb 27 – Maalum Caves & The Rock Restaurant</h5>
          <ul class="text-muted mb-0">
            <li>Maalum Caves exploration</li>
            <li>Lunch at The Rock Restaurant</li>
            <li><strong>Accommodation:</strong> Crystal Beach Nungwi</li>
          </ul>
        </div>
      </div>

      <!-- Feb 28 -->
      <div class="col-md-6">
        <div class="bg-light rounded p-4 h-100">
          <h5 class="fw-bold text-primary">Feb 28 – Departure</h5>
          <ul class="text-muted mb-0">
            <li>Souvenir shopping</li>
            <li>Transfer to airport</li>
            <li>Departure from Zanzibar</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Itinerary End -->

<!-- Booking & Organizer Start -->
<div class="container-fluid py-5 bg-light">
  <div class="container">
    <div class="row g-4 justify-content-center">

      <!-- BOOKING FORM CARD -->
      <div class="col-lg-6">
        <div class="bg-white rounded shadow p-4 h-100">

          <h4 class="text-primary fw-bold mb-3">Book Your Spot</h4>

          <!-- Price -->
          <div class="mb-3">
            <h2 class="fw-bold text-dark">$1,800</h2>
            <p class="text-muted">
              <strong>Double Occupancy:</strong><br>
              $1,800 per person (Two people sharing a room with two beds)<br>
              <strong>Deposit:</strong> $150 (required to secure your spot)
            </p>

            <p class="text-muted">
              <strong>Payment Schedule:</strong><br>
              Deposit at registration, balance in 2 installments.<br>
              Full payment due by <strong>Feb 19, 2026</strong>.
            </p>

            <p class="text-muted">
              <strong>Cancellation & Refund Policy:</strong><br>
              All cancellations must be submitted in writing to
              <strong>info@auntieveeadventure.com</strong>.
            </p>

            <p class="text-muted">
              <strong>Additional Information:</strong><br>
              WhatsApp group will be created for all attendees.<br>
              Arrival: Dar Es Salaam (Feb 19, 2026)<br>
              Departure: Zanzibar (Feb 28, 2026)
            </p>

          <form action="#" method="post">
            <div class="mb-3">
              <label class="form-label fw-semibold">Full Name</label>
              <input type="text" class="form-control" name="full_name" placeholder="Enter your full name" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Email Address</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2">
              Request to Book
            </button>
          </form>

          <?php if ($submitted): ?>
            <script>
                <?php if ($success): ?>
                    Swal.fire({
                        icon: 'success',
                        title: 'Booking Successful!',
                        text: 'Your request has been submitted. We will contact you soon.',
                        confirmButtonColor: '#3085d6'
                    });
                <?php else: ?>
                    Swal.fire({
                        icon: 'error',
                        title: 'Booking Failed!',
                        text: 'Something went wrong. Please try again.',
                        confirmButtonColor: '#d33'
                    });
                <?php endif; ?>
            </script>
            <?php endif; ?>



        </div>
      </div>
                  </div>

      <!-- ORGANIZER CARD -->
      <div class="col-lg-4">
        <div class="bg-white rounded shadow p-4 h-100 text-center">

          <h4 class="text-primary fw-bold mb-3">Your Organizer</h4>

          <!-- Profile Image -->
          <img 
            src="img/jackie.jpg" 
            alt="Tour Organizer"
            class="rounded-circle mb-3"
            style="width:120px;height:120px;object-fit:cover;"
          >

          <h5 class="fw-bold mb-1">Auntie Vee</h5>
          <p class="text-muted mb-3">Girls Trip Host & Travel Curator</p>

          <p class="text-muted">
            Welcome, beautiful souls 💕  
            I’m so excited to host you on this unforgettable
            <strong>10-day Girls’ Trip through Tanzania & Zanzibar</strong>.
            Expect adventure, sisterhood, laughter, culture, and memories
            that will stay with you forever.
          </p>

          <p class="fw-semibold text-primary mt-3">
            I can’t wait to travel with you!
          </p>

        </div>
      </div>

    </div>
  </div>
</div>
<!-- Booking & Organizer End -->

<!-- Zanzibar Map Start -->
<div class="container-fluid py-5" id="location">
    <div class="container">

        <div class="text-center mb-5">
            <h5 class="sub-title text-primary px-3">Trip Location</h5>
            <h2 class="fw-bold">Zanzibar Island, Tanzania</h2>
            <p class="text-muted">
                Experience paradise on the Indian Ocean — white sand beaches,
                turquoise waters, culture, and island adventures.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="bg-light rounded shadow overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps?q=Zanzibar%20Island%2C%20Tanzania&output=embed"
                        width="100%" 
                        height="450" 
                        style="border:0;"
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Location Highlights -->
                <div class="row g-4 mt-4 text-center">

                    <div class="col-md-4">
                        <div class="bg-light rounded p-3 h-100">
                            <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                            <h6 class="fw-bold">Stone Town</h6>
                            <p class="text-muted mb-0">
                                UNESCO heritage site with rich Swahili culture
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="bg-light rounded p-3 h-100">
                            <i class="fas fa-water fa-2x text-primary mb-2"></i>
                            <h6 class="fw-bold">Pristine Beaches</h6>
                            <p class="text-muted mb-0">
                                Nungwi, Kendwa & Mnemba Island waters
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="bg-light rounded p-3 h-100">
                            <i class="fas fa-ship fa-2x text-primary mb-2"></i>
                            <h6 class="fw-bold">Island Adventures</h6>
                            <p class="text-muted mb-0">
                                Safari Blue, snorkeling & dhow cruises
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
<!-- Zanzibar Map End -->

        
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

            window.onload = () => {
                welcomeMessage.style.display = 'block';
                setTimeout(() => {
                    welcomeMessage.style.display = 'none';
                }, 5000);
            };

            chatbotIcon.addEventListener('click', () => {
                if (chatWindow.style.display === 'none' || chatWindow.style.display === '') {
                    chatWindow.style.display = 'block';
                    chatIcon.classList.remove('fa-comments');
                    chatIcon.classList.add('fa-times');
                    welcomeMessage.style.display = 'none';
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