<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel</title>
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
    <div class="container-fluid">
        <!-- navbar start -->
        <div class="row">
            <div class="col-sm-12 p-0">
                <nav class="navbar navbar-expand-lg bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
                    <div class="container-fluid">
                        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotel</a>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item mx-2">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="rooms.php">Rooms</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="facilities.php">Facilities</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="contect.php">Contect Us</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="about.php">About Us</a>
                                </li>
                            </ul>
                            <div class="d-flex" role="search">
                                <!-- <button class="btn btn-outline-success mx-2" type="submit">
                                    Search
                                </button> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-dark mx-2" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">
                                    Login
                                </button>

                                <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal"
                                    data-bs-target="#registerModal">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Modal -->
                <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel"><i
                                            class="fa-solid fa-circle-user fs-3 me-2"></i>User Login</h1>
                                    <button type="reset" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control shadow-none">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control shadow-none">
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between pt-2">
                                        <button type="submit" class="btn btn-dark">LOGIN</button>
                                        <a href="javascript:void(0)" class="text-decoration-none">Forgot Password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form action="">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 d-flex align-items-center" id="staticBackdropLabel"><i
                                            class="fa-solid fa-circle-user fs-3 me-2"></i>User Registration</h1>
                                    <button type="reset" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <span class="badge text-bg-light mb-3 text-wrap lh-base text-danger">Note : Your
                                        Details must be match with your Id (Aadhaar Card, Passport, Driving Licence,
                                        etc.) that will be required during chech-in.</span>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Email Address</label>
                                            <input type="email" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Picture</label>
                                            <input type="file" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <textarea class="form-control" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Pin Code</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Date Of Birth</label>
                                            <input type="date" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control shadow-none">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control shadow-none">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-dark">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- navbar end -->