<?php
// Handle form submission at the top of the file
$submitted = false;
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database credentials
    $host = "localhost";
    $dbname = "Adv";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        $submitted = true;
        $success = false;
    } else {
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
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/custom-bootstrap.css">


        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/tour-cards.css" rel="stylesheet">
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

        <!-- Header Start -->
        <div class="container-fluid position-relative text-white"
            style="background: url('img/31.jpeg') no-repeat center center; background-size: cover; height: 400px;">

            <!-- Dark overlay -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; 
                        background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

            <!-- Content -->
            <div class="container d-flex align-items-center justify-content-center text-center"
                style="max-width: 900px; height: 100%; position: relative; z-index: 2;">
                <h3 class="display-3 text-white mb-4">Nocturnal Game Drive</h3>
            </div>
        </div>
        <!-- Header End -->

        <!-- Cultural Tour Info Cards Start -->
        <div class="container py-5">
            <div class="row g-4 text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow h-100 p-3">
                        <div class="card-body">
                            <i class="fas fa-dollar-sign fa-2x text-primary mb-2"></i>
                            <h5 class="card-title">Price</h5>
                            <p class="card-text">$120 per person</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow h-100 p-3">
                        <div class="card-body">
                            <i class="fas fa-clock fa-2x text-primary mb-2"></i>
                            <h5 class="card-title">Duration</h5>
                            <p class="card-text">1 Evening / Night</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow h-100 p-3">
                        <div class="card-body">
                            <i class="fas fa-hiking fa-2x text-primary mb-2"></i>
                            <h5 class="card-title">Tour Type</h5>
                            <p class="card-text">Wildlife & Adventure</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card shadow h-100 p-3">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                            <h5 class="card-title">Location</h5>
                            <p class="card-text">Tarangire or Lake Manyara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cultural Tour Info Cards End -->

        <!-- Tour Details & Booking Start -->
        <div class="container py-5">
            <div class="row g-5">
                <!-- Left Content -->
                <div class="col-lg-7">
                    <h4 class="mb-4">Overview / Insight</h4>
                    <p>Explore the wild under the stars on a thrilling nocturnal game drive. Discover the secret lives of nocturnal animals and witness predators in action during their prime hunting hours.</p>
                    
                    <h4 class="mt-5 mb-4">Areas to Visit</h4>
                    <ul>
                        <li>Lake Manyara National Park</li>
                        <li>Tarangire Wildlife Corridor</li>
                        <li>Special night-access routes</li>
                    </ul>

                    <h4 class="mt-5 mb-4">Brief Itinerary</h4>
                    <ol>
                        <li><strong>Evening:</strong> Pick-up & Briefing at the Lodge</li>
                        <li><strong>Night:</strong> Drive Begins at Sunset, Wildlife Spotting</li>
                        <li><strong>Late Night:</strong> Return to Lodge & Refreshments</li>
                    </ol>

                    <h4 class="mt-5 mb-4">Inclusions / Exclusions</h4>
                    <ul>
                        <li><strong>Included:</strong> Park Entry Fees, Safari Vehicle, Guide, Snacks</li>
                        <li><strong>Excluded:</strong> Accommodation, Travel Insurance, Personal Items</li>
                    </ul>
                </div>

                <!-- Right Booking Form -->
                <div class="col-lg-5">
                    <div class="bg-white rounded-4 shadow-lg p-5">
                        <h2 class="text-center text-dark mb-3">🎉 <span class="text-warning">50% Off</span> Your First Tour</h2>
                        <p class="text-center text-muted mb-4">Limited-time offer for first-time explorers!</p>

                        <form method="POST">
                            <div class="row g-3">
                                <!-- Hidden Tour Name -->
                                <input type="hidden" name="tour_name" value="Nocturnal Game Drive">

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
                <!-- End Right Booking -->
            </div>
        </div>
        <!-- Tour Details & Booking End -->
         <!-- SWEETALERT -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <?php if ($submitted): ?>
            <script>
                Swal.fire({
                    icon: '<?= $success ? "success" : "error" ?>',
                    title: '<?= $success ? "Booking Successful!" : "Booking Failed" ?>',
                    text: '<?= $success ? "Your tour has been successfully booked." : "There was an error while booking. Please try again." ?>',
                    confirmButtonColor: '#f59e0b'
                });
            </script>
            <?php endif; ?>


    
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