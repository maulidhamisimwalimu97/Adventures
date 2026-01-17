<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auntie Vee Adventures | Login</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/imgs/alogo.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-x...==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f0f4f8;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .logo-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .logo-title img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .logo-title span {
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 12px 12px 40px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .form-group .fa {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            color: #888;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color:  #6c757d;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color:  #6c757d;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }

            .logo-title img {
                width: 50px;
                height: 50px;
            }

            .logo-title span {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="logo-title">
            <img src="assets/imgs/alogo.png" alt="Habitat Heroes Logo">
            <span>Auntie Vee</span>
        </div>

        <form action="login_process.php" method="POST">
            <?php if (isset($_GET['error'])): ?>
                <div style="color: red; text-align: center; margin-bottom: 15px;">
                    <?php
                        if ($_GET['error'] === 'user_not_found') {
                            echo "User not found.";
                        } elseif ($_GET['error'] === 'incorrect_password') {
                            echo "Incorrect username or password.";
                        }
                    ?>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <i class="fa fa-envelope"></i>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>

            <div class="form-group">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>
 