<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$success = false;

// Include database connection
include 'includes/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $conn->real_escape_string($_POST["name"]);
    $email     = $conn->real_escape_string($_POST["email"]);
    $phone     = $conn->real_escape_string($_POST["phone"]);
    $subject   = "Tour Inquiry"; // Static subject
    $message   = $conn->real_escape_string($_POST["message"]);

    $sql = "INSERT INTO contact (full_name, email, phone, subject, message) 
            VALUES ('$full_name', '$email', '$phone', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        $success = true;
    }

    $conn->close();
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
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                    </div>
                  <a href="index.php#booking" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Book Now</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid position-relative text-white"
            style="background: url('img/cu.jpg') no-repeat center center; background-size: cover; height: 400px;">

            <!-- Dark overlay -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; 
                        background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

            <!-- Content -->
            <div class="container d-flex align-items-center justify-content-center text-center"
                style="max-width: 900px; height: 100%; position: relative; z-index: 2;">
                <h3 class="display-3 text-white mb-4">Contact Us</h3>
            </div>
        </div>
        <!-- Header End -->

       <!-- Contact Start -->
<div class="container-fluid contact overflow-hidden py-5">
    <div class="container py-5">
        <div class="row g-5 mb-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary pe-3">Quick Contact</h5>
                </div>
                <h1 class="display-5 mb-4">Karibu! Let's Plan Your Next Adventure</h1>
                <p class="mb-5">Ready to explore Tanzania with Auntie Vee? Whether you have a question, need help booking, or just want to chat travel — we’re here for you!</p>
                <div class="d-flex border-bottom mb-4 pb-4">
                    <i class="fas fa-map-marked-alt fa-4x text-primary bg-light p-3 rounded"></i>
                    <div class="ps-3">
                        <h5>Location</h5>
                        <p>Sokoine Road, Arusha City, Tanzania</p>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-xl-6">
                        <div class="d-flex">
                            <i class="fas fa-tty fa-3x text-primary"></i>
                            <div class="ps-3">
                                <h5 class="mb-3">Quick Contact</h5>
                                <div class="mb-3">
                                    <h6 class="mb-0">Phone:</h6>
                                    <a href="tel:+255712345678" class="fs-5 text-primary">+255 712 345 678</a>
                                </div>
                                <div class="mb-3">
                                    <h6 class="mb-0">Email:</h6>
                                    <a href="mailto:info@auntieveeadventures.com" class="fs-5 text-primary">info@auntieveeadventures.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="d-flex">
                            <i class="fas fa-clone fa-3x text-primary"></i>
                            <div class="ps-3">
                                <h5 class="mb-3">Opening Hours</h5>
                                <div class="mb-3">
                                    <h6 class="mb-0">Mon - Fri:</h6>
                                    <span class="fs-5 text-primary">08:30 AM - 06:00 PM</span>
                                </div>
                                <div class="mb-3">
                                    <h6 class="mb-0">Saturday:</h6>
                                    <span class="fs-5 text-primary">09:00 AM - 03:00 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center pt-3">
                    <div class="me-4">
                        <div class="bg-light d-flex align-items-center justify-content-center" style="width: 90px; height: 90px; border-radius: 10px;">
                            <i class="fas fa-share fa-3x text-primary"></i>
                        </div>
                    </div>
                    <div class="d-flex">
                        <a class="btn btn-secondary border-secondary me-2 p-0" href="#"><i class="fab fa-facebook-f px-3 py-2"></i></a>
                        <a class="btn btn-secondary border-secondary mx-2 p-0" href="#"><i class="fab fa-instagram px-3 py-2"></i></a>
                        <a class="btn btn-secondary border-secondary mx-2 p-0" href="#"><i class="fab fa-whatsapp px-3 py-2"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary pe-3">Let’s Connect</h5>
                </div>
                <h1 class="display-5 mb-4">Send Us a Message</h1>
                <p class="mb-3">Have a destination in mind? Want a custom itinerary? Drop us a message and our team will get back to you shortly.</p>
                <form method="POST">
                    <div class="row g-4">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
                                <label for="phone">Your Phone</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 160px" required></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Optional Map Section (customize or remove) -->
        <div class="col-12 pt-5 wow zoomIn" data-wow-delay="0.1s">
            <div class="rounded h-100">
                <iframe class="rounded w-100"
                    style="height: 500px;"
                    src="https://maps.google.com/maps?q=arusha&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

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

        <!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            icon: <?= $success ? "'success'" : "'error'" ?>,
            title: <?= $success ? "'Message Sent!'" : "'Failed!'" ?>,
            text: <?= $success 
                ? json_encode("Thank you, $full_name. We’ll get back to you shortly.") 
                : json_encode("Something went wrong. Please try again.") ?>,
            confirmButtonColor: '#3085d6'
        });
    });
</script>
<?php endif; ?>


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