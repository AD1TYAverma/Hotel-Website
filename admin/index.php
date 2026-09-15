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

<body class="bg-light">
    <div class="login-from text-center rounded bg-white shadow overflow-hidden">
        <form action="" method="POST">
            <h4 class="bg-dark text-white py-3">Admin login</h4>
            <div class="p-4">
                <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <input type="type" name="admin_name" class="form-control shadow-none" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="admin_pass" class="form-control shadow-none" required>
                </div>
                <button type="submit" name="login" class="btn custom-bg">Login</button>
            </div>
        </form>
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