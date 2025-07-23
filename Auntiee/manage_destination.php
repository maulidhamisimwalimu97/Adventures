<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auntie Vee | Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Auntie Vee Adventures</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
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
                    <a href="bookings.php">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Bookings</span>
                    </a>
                </li>

                <li>
                    <a href="blogs.php">
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

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <div class="form-container">
                <h2>Add New Destination</h2>
                <form action="insert_destination.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Destination Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter destination name" required>
                    </div>
            
                    <div class="form-group">
                        <label for="region">Region</label>
                        <input type="text" id="region" name="region" placeholder="Enter region" required>
                    </div>
            
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" rows="4" placeholder="Enter destination description" required></textarea>
                    </div>
            
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" id="image" name="image" accept="image/*" required>
                    </div>
            
                    <div class="form-group">
                        <button type="submit" class="btn">Save Destination</button>
                    </div>
                </form>
            </div>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>            