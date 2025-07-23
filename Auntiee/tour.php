<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auntie Vee | Admin Dashboard</title>

    <!-- ======= Favicon ======= -->
    <link rel="icon" type="image/png" href="assets/imgs/2.jpg">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


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
                    <a href="reg-tour.php">
                        <span class="icon">
                            <ion-icon name="map-outline"></ion-icon>
                        </span>
                        <span class="title">Manage Tours</span>
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

<!-- ============ Tours Table ============= -->
<div class="card" style="margin: 20px;">
    <h2 style="margin-bottom: 15px;">All Tours</h2>
    <div class="table-responsive">
        <table id="customersTable" class="display" style="width: 100%;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample data - replace with PHP loop -->
                <tr>
                    <td>Mountain Trekking</td>
                    <td>$12</td>
                    <td>
                        <a href="#" onclick="return confirm('Are you sure to delete this customer?')">
                            <ion-icon name="trash-outline" style="color: red; font-size: 20px;"></ion-icon>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Wilflife Safari</td>
                    <td>$13</td>
                    <td>
                        <a href="#" onclick="return confirm('Are you sure to delete this customer?')">
                            <ion-icon name="trash-outline" style="color: red; font-size: 20px;"></ion-icon>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <!-- jQuery and DataTables Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#customersTable').DataTable({
            responsive: true
        });
    });
</script>


    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>