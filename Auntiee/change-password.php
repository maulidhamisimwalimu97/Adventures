<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitat Heroes | Admin Dashboard</title>

    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>

        <!-- ======= Favicon ======= -->
        <link rel="icon" type="image/png" href="assets/imgs/2.jpg">
        
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/styles.css">
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

            <!-- ========== Change Password Form ========== -->
            <div class="card" style="max-width: 600px; margin: 40px auto; padding: 30px; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 10px;">
                <h2 style="text-align: center; margin-bottom: 25px; color: #2c3e50;">Change Password</h2>
                
                <form action="change_password.php" method="POST">
                    <!-- Current Password -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="current_password" style="display: block; font-weight: bold; margin-bottom: 5px;">
                            Current Password <span style="color: red;">*</span>
                        </label>
                        <input type="password" name="current_password" id="current_password" required 
                            placeholder="Enter current password" 
                            style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                    </div>

                    <!-- New Password -->
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="new_password" style="display: block; font-weight: bold; margin-bottom: 5px;">
                            New Password <span style="color: red;">*</span>
                        </label>
                        <input type="password" name="new_password" id="new_password" required 
                            placeholder="Enter new password" 
                            style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group" style="margin-bottom: 25px;">
                        <label for="confirm_password" style="display: block; font-weight: bold; margin-bottom: 5px;">
                            Confirm New Password <span style="color: red;">*</span>
                        </label>
                        <input type="password" name="confirm_password" id="confirm_password" required 
                            placeholder="Re-enter new password" 
                            style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                    </div>

                    <!-- Submit Button -->
                    <div style="text-align: center;">
                        <button type="submit" style="background-color: #e67e22; color: white; padding: 12px 30px; border: none; border-radius: 5px; cursor: pointer;">
                            <ion-icon name="lock-closed-outline" style="margin-right: 5px;"></ion-icon> Change Password
                        </button>
                    </div>
                </form>
            </div>

            <?php if (isset($_SESSION['swal'])): ?>
            <script>
                Swal.fire({
                    icon: '<?php echo $_SESSION["swal"]["icon"]; ?>',
                    title: '<?php echo $_SESSION["swal"]["title"]; ?>',
                    text: '<?php echo $_SESSION["swal"]["text"]; ?>',
                });
            </script>
            <?php unset($_SESSION['swal']); endif; ?>

                <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>            