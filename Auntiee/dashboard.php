<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auntie vee | Admin Dashboard</title>

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

            <!-- ======================= Cards ================== -->
          <div class="cardBox">
            <a href="view_customers.php" class="card">
                <div>
                    <?php
                    // Database connection
                    $host = "localhost";
                    $dbname = "Adv";
                    $username = "root";
                    $password = "";

                    $conn = new mysqli($host, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        echo "<div class='numbers'>Error</div>";
                    } else {
                        $sql = "SELECT COUNT(*) AS total FROM booking";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $totalCustomers = $row['total'];

                        echo "<div class='numbers'>" . $totalCustomers . "</div>";
                    }

                    $conn->close();
                    ?>
                    <div class="cardName">Customers</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="location-outline"></ion-icon>
                </div>
            </a>


                  <?php
                    $host = "localhost";
                    $dbname = "Adv";
                    $username = "root";
                    $password = "";

                    $conn = new mysqli($host, $username, $password, $dbname);

                    $messageCount = 0;

                    if ($conn->connect_error) {
                        // You can handle error silently or log it
                    } else {
                        $sql = "SELECT COUNT(*) as count FROM contact";
                        $result = $conn->query($sql);
                        if ($result && $row = $result->fetch_assoc()) {
                            $messageCount = $row['count'];
                        }
                        $conn->close();
                    }
                    ?>

                    <a href="message.php" class="card">
                        <div>
                            <div class="numbers"><?php echo $messageCount; ?></div>
                            <div class="cardName">Messages</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>
                    </a>


                <a href="booking.php" class="card">
                        <div>
                    <?php
                    // Database connection
                    $host = "localhost";
                    $dbname = "Adv";
                    $username = "root";
                    $password = "";

                    $conn = new mysqli($host, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        echo "<div class='numbers'>Error</div>";
                    } else {
                        $sql = "SELECT COUNT(*) AS total FROM booking";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $totalCustomers = $row['total'];

                        echo "<div class='numbers'>" . $totalCustomers . "</div>";
                    }

                    $conn->close();
                    ?>
                    <div class="cardName">Boookings</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="calendar-outline"></ion-icon>
                </div>
            </a>

                                <?php
                                // Connect to database
                                $conn = new mysqli("localhost", "root", "", "Adv");
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $blogCount = 0;
                                $result = $conn->query("SELECT COUNT(*) AS total FROM news");
                                if ($result && $row = $result->fetch_assoc()) {
                                    $blogCount = $row['total'];
                                }
                                $conn->close();
                                ?>

                                <a href="news.php" class="card">
                                    <div>
                                        <div class="numbers"><?= $blogCount ?></div>
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
            <a href="booking.php" class="btn">View All</a>
        </div>

            <table>
                <thead>
                    <tr>
                        <td>Customer</td>
                        <td>Tour</td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    // Database connection
                    $host = "localhost";
                    $dbname = "Adv";
                    $username = "root";
                    $password = "";

                    $conn = new mysqli($host, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        echo "<tr><td colspan='4'>Connection failed.</td></tr>";
                    } else {
                        $sql = "SELECT email, tour_name FROM booking ORDER BY id DESC LIMIT 5";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td>" . htmlspecialchars($row['email']) . "</td>
                                    <td>" . htmlspecialchars($row['tour_name']) . "</td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No recent bookings found.</td></tr>";
                        }

                        $conn->close();
                    }
                    ?>
                </tbody>
            </table>
        </div>
                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>

                    <table>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "Adv");

                        if ($conn->connect_error) {
                            echo "<tr><td colspan='2'>Connection failed: " . $conn->connect_error . "</td></tr>";
                        } else {
                            $sql = "SELECT full_name, email FROM booking ORDER BY id DESC LIMIT 8";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>
                                        <td width="60px">
                                            <div class="imgBx"><img src="assets/imgs/3.png" alt=""></div>
                                        </td>
                                        <td>
                                            <h4>' . htmlspecialchars($row["full_name"]) . '<br> 
                                                <span>' . htmlspecialchars($row["email"]) . '</span>
                                            </h4>
                                        </td>
                                    </tr>';
                                }
                            } else {
                                echo "<tr><td colspan='2'>No recent customers found.</td></tr>";
                            }

                            $conn->close();
                        }
                        ?>
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