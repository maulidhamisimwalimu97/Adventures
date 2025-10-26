<?php
session_start();

// Block browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?error=please_login");
    exit();
}
?>
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
    <link rel="stylesheet" href="assets/css/styless.css">
    <!-- DataTables Scroll CSS (Optional but good for appearance) -->
    <style>
        table.dataTable {
            white-space: nowrap;
        }
    </style>

  
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

<!-- ============ Bookings Table ============= -->
<div class="card" style="margin: 20px;">
    <h2 style="margin-bottom: 15px;">All Bookings</h2>
    <div style="overflow-x: auto;">
        <table id="customersTable" class="display nowrap" style="width:100%;">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Tour</th>
                    <th>Arrival Date</th>
                    <th>Adults</th>
                    <th>Children</th>
                    <th>Special Requests</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'includes/db_config.php';
                $conn = new mysqli($host, $username, $password, $dbname);

                if ($conn->connect_error) {
                    echo "<tr><td colspan='8'>Connection failed: " . $conn->connect_error . "</td></tr>";
                } else {
                    date_default_timezone_set("Africa/Nairobi");
                    $today = date("Y-m-d");

                    // Get all bookings
                    $sql = "SELECT id, full_name, email, tour_name, arrival_date, number_of_adults, number_of_children, special_requests FROM booking ORDER BY id DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $arrivalDate = $row['arrival_date'];

                            // If expired, delete the booking
                            if ($arrivalDate < $today) {
                                $deleteSQL = "DELETE FROM booking WHERE id = " . $row['id'];
                                $conn->query($deleteSQL);
                                continue; // skip rendering this row
                            }

                            // Determine status
                            if ($arrivalDate <= date("Y-m-d", strtotime("+7 days"))) {
                                $status = "<span style='color:orange;'>Soon</span>";
                            } else {
                                $status = "<span style='color:green;'>Coming</span>";
                            }

                            // Output the booking row
                            echo "<tr>
                                <td>" . htmlspecialchars($row['full_name']) . "</td>
                                <td>" . htmlspecialchars($row['email']) . "</td>
                                <td>" . htmlspecialchars($row['tour_name']) . "</td>
                                <td>" . htmlspecialchars($row['arrival_date']) . "</td>
                                <td>" . htmlspecialchars($row['number_of_adults']) . "</td>
                                <td>" . htmlspecialchars($row['number_of_children']) . "</td>
                                <td>" . htmlspecialchars($row['special_requests']) . "</td>
                                <td>" . $status . "</td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No bookings found.</td></tr>";
                    }

                    $conn->close();
                }
                ?>
                </tbody>

        </table>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#customersTable').DataTable({
            scrollX: true // Enable horizontal scrolling
        });
    });
</script>


    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>