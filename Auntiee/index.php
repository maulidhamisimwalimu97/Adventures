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
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Habitat Heroes Adventures</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="manage_destination.html">
                        <span class="icon">
                            <ion-icon name="map-outline"></ion-icon>
                        </span>
                        <span class="title">Manage Destination</span>
                    </a>
                </li>


                <li>
                    <a href="tours.php">
                        <span class="icon">
                            <ion-icon name="map-outline"></ion-icon>
                        </span>
                        <span class="title">Manage Tours</span>
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

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <a href="view_destination.html" class="card">
                    <div>
                        <div class="numbers">12</div>
                        <div class="cardName">Destinations</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>
                </a>

                <a href="tours.php" class="card">
                    <div>
                        <div class="numbers">34</div>
                        <div class="cardName">Tours</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="map-outline"></ion-icon>
                    </div>
                </a>

                <a href="bookings.php" class="card">
                    <div>
                        <div class="numbers">87</div>
                        <div class="cardName">Bookings</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </div>
                </a>

                <a href="blogs.php" class="card">
                    <div>
                        <div class="numbers">15</div>
                        <div class="cardName">Blog Posts</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </div>
                </a>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Bookings</h2>
                        <a href="bookings.php" class="btn">View All</a>
                    </div>
            
                    <table>
                        <thead>
                            <tr>
                                <td>Customer</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>
            
                        <tbody>
                            <tr>
                                <td>Maria Jackson</td>
                                <td>$750</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Confirmed</span></td>
                            </tr>
            
                            <tr>
                                <td>John Doe</td>
                                <td>$500</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
            
                            <tr>
                                <td>Emily Smith</td>
                                <td>$250</td>
                                <td>Paid</td>
                                <td><span class="status inProgress">Processing</span></td>
                            </tr>
            
                            <tr>
                                <td>Daniel Mark</td>
                                <td>$1,200</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/3.png" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/3.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/3.png" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/3.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/3.png" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/3.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/3.png" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/3.png" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>