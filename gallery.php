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
                        <a href="gallery.php" class="nav-item nav-link active">Gallery</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
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
                <h3 class="display-3 text-white mb-4">Our Gallery</h3>
            </div>
        </div>
        <!-- Header End -->

        <!-- Gallery Start -->
<div class="container-fluid gallery py-5 my-5">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
        <h5 class="section-title px-3">Auntie Vee Moments</h5>
        <h1 class="mb-4">Discover the Spirit of Tanzania</h1>
        <p class="mb-0">Through the lens of Auntie Vee Adventures, explore Tanzania’s soul — from the savannah to the sea, the village paths to festive tables. Every image tells a story of adventure, culture, and connection.</p>
    </div>
    <div class="row g-2">
        <!-- Image 1: Kobe -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="gallery-item h-100">
                <img src="img/kobe.jpg" class="img-fluid w-100 h-100 rounded" alt="Turtle on the beach">
                <div class="gallery-content">
                    <div class="gallery-info">
                        <h5 class="text-white text-uppercase mb-2">Ocean Life</h5>
                        <a href="#" class="btn-hover text-white">Explore Marine Tours <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="gallery-plus-icon">
                    <a href="img/kobe.jpg" data-lightbox="gallery-av"><i class="fas fa-plus fa-2x text-white"></i></a>
                </div>
            </div>
        </div>

        <!-- Image 2: Madafu -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="gallery-item h-100">
                <img src="img/madafu.jpg" class="img-fluid w-100 h-100 rounded" alt="Fresh coconut in Zanzibar">
                <div class="gallery-content">
                    <div class="gallery-info">
                        <h5 class="text-white text-uppercase mb-2">Tropical Refresh</h5>
                        <a href="#" class="btn-hover text-white">Taste Coastal Life <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="gallery-plus-icon">
                    <a href="img/madafu.jpg" data-lightbox="gallery-av"><i class="fas fa-plus fa-2x text-white"></i></a>
                </div>
            </div>
        </div>

        <!-- Image 3: Camels -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="gallery-item h-100">
                <img src="img/carmels.jpg" class="img-fluid w-100 h-100 rounded" alt="Camel ride tour">
                <div class="gallery-content">
                    <div class="gallery-info">
                        <h5 class="text-white text-uppercase mb-2">Desert Vibes</h5>
                        <a href="#" class="btn-hover text-white">Ride the Dunes <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="gallery-plus-icon">
                    <a href="img/carmels.jpg" data-lightbox="gallery-av"><i class="fas fa-plus fa-2x text-white"></i></a>
                </div>
            </div>
        </div>

        <!-- Image 4: Lion -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="gallery-item h-100">
                <img src="img/lion.jpg" class="img-fluid w-100 h-100 rounded" alt="Lion in Serengeti">
                <div class="gallery-content">
                    <div class="gallery-info">
                        <h5 class="text-white text-uppercase mb-2">Savannah Kings</h5>
                        <a href="#" class="btn-hover text-white">Join Wildlife Safari <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="gallery-plus-icon">
                    <a href="img/lion.jpg" data-lightbox="gallery-av"><i class="fas fa-plus fa-2x text-white"></i></a>
                </div>
            </div>
        </div>

        <!-- Image 5: People -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="gallery-item h-100">
                <img src="img/people.jpg" class="img-fluid w-100 h-100 rounded" alt="Tanzanian community">
                <div class="gallery-content">
                    <div class="gallery-info">
                        <h5 class="text-white text-uppercase mb-2">Warm Welcomes</h5>
                        <a href="#" class="btn-hover text-white">Meet the Locals <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="gallery-plus-icon">
                    <a href="img/people.jpg" data-lightbox="gallery-av"><i class="fas fa-plus fa-2x text-white"></i></a>
                </div>
            </div>
        </div>

        <!-- Image 6: Table Fooding -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="gallery-item h-100">
                <img src="img/tablefooding.jpg" class="img-fluid w-100 h-100 rounded" alt="Traditional food setup">
                <div class="gallery-content">
                    <div class="gallery-info">
                        <h5 class="text-white text-uppercase mb-2">Authentic Flavors</h5>
                        <a href="#" class="btn-hover text-white">Enjoy Tanzanian Cuisine <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="gallery-plus-icon">
                    <a href="img/tablefooding.jpg" data-lightbox="gallery-av"><i class="fas fa-plus fa-2x text-white"></i></a>
                </div>
            </div>
        </div>

        <!-- Image 7: Masai -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="gallery-item h-100">
                <img src="img/masai.jpg" class="img-fluid w-100 h-100 rounded" alt="Masai warrior">
                <div class="gallery-content">
                    <div class="gallery-info">
                        <h5 class="text-white text-uppercase mb-2">Cultural Treks</h5>
                        <a href="#" class="btn-hover text-white">Walk with the Masai <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="gallery-plus-icon">
                    <a href="img/masai.jpg" data-lightbox="gallery-av"><i class="fas fa-plus fa-2x text-white"></i></a>
                </div>
            </div>
        </div>

        <!-- Image 8: Baloons -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="gallery-item h-100">
                <img src="img/baloons.jpg" class="img-fluid w-100 h-100 rounded" alt="Hot air balloons over Serengeti">
                <div class="gallery-content">
                    <div class="gallery-info">
                        <h5 class="text-white text-uppercase mb-2">Balloon Rides</h5>
                        <a href="#" class="btn-hover text-white">Soar the Skies <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="gallery-plus-icon">
                    <a href="img/baloons.jpg" data-lightbox="gallery-av"><i class="fas fa-plus fa-2x text-white"></i></a>
                </div>
            </div>
        </div>

        <!-- Image 9: Culture -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="gallery-item h-100">
                <img src="img/culture.jpg" class="img-fluid w-100 h-100 rounded" alt="Local cultural dance">
                <div class="gallery-content">
                    <div class="gallery-info">
                        <h5 class="text-white text-uppercase mb-2">Festive Traditions</h5>
                        <a href="#" class="btn-hover text-white">Join Celebrations <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="gallery-plus-icon">
                    <a href="img/culture.jpg" data-lightbox="gallery-av"><i class="fas fa-plus fa-2x text-white"></i></a>
                </div>
            </div>
        </div>

                <!-- Image 9: Culture -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="gallery-item h-100">
                <img src="img/jackie.jpg" class="img-fluid w-100 h-100 rounded" alt="Local cultural dance">
                <div class="gallery-content">
                    <div class="gallery-info">
                        <h5 class="text-white text-uppercase mb-2">Festive Traditions</h5>
                        <a href="#" class="btn-hover text-white">Join Celebrations <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="gallery-plus-icon">
                    <a href="img/culture.jpg" data-lightbox="gallery-av"><i class="fas fa-plus fa-2x text-white"></i></a>
                </div>
            </div>
        </div>

        <!-- Image 10: Minazi -->
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="gallery-item h-100">
                <img src="img/minazi.jpg" class="img-fluid w-100 h-100 rounded" alt="Palm trees in Zanzibar">
                <div class="gallery-content">
                    <div class="gallery-info">
                        <h5 class="text-white text-uppercase mb-2">Palm Paradise</h5>
                        <a href="#" class="btn-hover text-white">Visit Island Escapes <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="gallery-plus-icon">
                    <a href="img/minazi.jpg" data-lightbox="gallery-av"><i class="fas fa-plus fa-2x text-white"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

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