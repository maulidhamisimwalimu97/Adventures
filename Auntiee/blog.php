<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auntie Vee | Admin Dashboard</title>


        <!-- ======= Favicon ======= -->
        <link rel="icon" type="image/png" href="assets/imgs/alogo.png">
        
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/styless.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Auntie Vee Adventures</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="view_customers.php">
                        <span class="icon">
                            <ion-icon name="map-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="message.php">
                        <span class="icon">
                            <ion-icon name="mail-unread-outline"></ion-icon>
                        </span>
                        <span class="title">Message</span>
                    </a>

                </li>

                <li>
                    <a href="booking.php">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Bookings</span>
                    </a>
                </li>

                <li>
                    <a href="blog.php">
                        <span class="icon">
                            <ion-icon name="newspaper-outline"></ion-icon>
                        </span>
                        <span class="title">Blogs</span>
                    </a>
                </li>

                <li>
                    <a href="change-password.php">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Change Password</span>
                    </a>
                </li>

                 <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="welcome-msg" style="font-weight: bold; color: #333;">
                    <?php
                        session_start();
                        if (isset($_SESSION['email'])) {
                            echo "Welcome!   " . htmlspecialchars($_SESSION['email']);
                        } else {
                            echo "Welcome Guest";
                        }
                    ?>
                </div>

                <div class="user">
                    <img src="assets/imgs/3.png" alt="">
                </div>
            </div>

            <!-- ========== Upload News Form ========== -->
            <div class="card" style="max-width: 700px; margin: 40px auto; padding: 30px; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 10px;">
                <h2 style="text-align: center; margin-bottom: 25px; color: #2c3e50;">Upload News</h2>
                
                <form action="uploads_news.php" method="POST" enctype="multipart/form-data">
                    
                    <!-- Title -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="title" style="display: block; font-weight: bold; margin-bottom: 5px;">
                            Title <span style="color: red;">*</span>
                        </label>
                        <input type="text" name="title" id="title" required placeholder="Enter news title" 
                            style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                    </div>

                    <!-- Content -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="content" style="display: block; font-weight: bold; margin-bottom: 5px;">
                            Content <span style="color: red;">*</span>
                        </label>
                        <textarea name="content" id="content" rows="6" required placeholder="Write news content here..." 
                            style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
                    </div>

                    <!-- Image -->
                    <div class="form-group" style="margin-bottom: 25px;">
                        <label for="image" style="display: block; font-weight: bold; margin-bottom: 5px;">
                            Image <span style="color: red;">*</span>
                        </label>
                        <input type="file" name="image" id="image" accept="image/*" required 
                            style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                    </div>

                    <!-- Submit Button -->
                    <div style="text-align: center;">
                        <button type="submit" style="background-color: #2980b9; color: white; padding: 12px 30px; border: none; border-radius: 5px; cursor: pointer;">
                            <ion-icon name="cloud-upload-outline" style="margin-right: 5px;"></ion-icon> Upload News
                        </button>
                    </div>

                </form>
            </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>;
        <script>
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'News uploaded successfully.',
            confirmButtonColor: '#3085d6'
        }).then(() => {
            // Remove query parameter from URL
            window.history.replaceState(null, null, window.location.pathname);
        });
    }
</script>



           
                <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>            