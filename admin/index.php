<?php require('inc/db-config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css"
        integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
</head>

<body>

    <div class="admin-login">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-lg-5 col-md-7 col-sm-10">
                    <div class="admin-login-card">

                        <!-- Icon -->
                        <div class="admin-login-icon">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                        <h2 class="h-font">Admin Login</h2>
                        <p class="text-muted mb-4">Login to access your admin dashboard</p>

                        <form action="" method="POST">
                            <!-- Email -->
                            <div class="mb-3 text-start">
                                <label for="text" class="form-label">User Name</label>
                                <div class="input-group"><span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
                                    <input type="text" id="text" name="admin_name" class="form-control shadow-none" placeholder="Enter your username" required>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mb-3 text-start">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group"> <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>

                                    <input type="password" id="password" name="admin_pass" class="form-control shadow-none" placeholder="Enter your password" required>

                                    <button type="button" class="btn password-btn shadow-none" id="showPassword"><i class="fa-solid fa-eye"></i></button>
                                </div>
                            </div>
                            <!-- Login Button -->
                            <button type="submit" name="login" class="btn admin-login-btn w-100"><span>Login</span><i class="fa-solid fa-arrow-right ms-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    if (isset($_POST['login'])) {
        $frm_data = filteration($_POST);

        $query = "SELECT * FROM `admin` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];

        $res = select($query, $values, "ss");
        // print_r($res);
        if ($res->num_rows == 1) {
            echo "user got";
        } else {
            echo "<script>alert('user name or password wrong')</script>";
        }
    }
?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>