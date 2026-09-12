<?php include('include/header.php') ?>
<div class="row my-5 mx-auto">
    <h2 class="fw-bold h-font text-center" style="text-transform: uppercase">
        our rooms
    </h2>

    <div class="h-line"></div>

    <div class="row my-5">
        <div class="col-lg-3">
            <nav class="navbar navbar-expand-lg bg-body-tertiary rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="pt-1">FILTERS</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#FilterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="FilterDropdown">
                        <div class="border bg-light p-3 rounded mb-3">
                            <h6 class="mb-3">CHECK AVAIBILITY</h6>
                            <label class="form-label">Chech-in</label>
                            <input type="date" class="form-control shadow-none mb-3">

                            <label class="form-label">Chech-out</label>
                            <input type="date" class="form-control shadow-none mb-3">
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h6 class="mb-3">FACILITIES</h6>

                            <div class="mb-2">
                                <input type="checkbox" id="f1" class="form-check-input shadow-none me-2">
                                <label class="form-check-label" for="f1">
                                    Facility One
                                </label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f2" class="form-check-input shadow-none me-2">
                                <label class="form-check-label" for="f2">
                                    Facility Two
                                </label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f3" class="form-check-input shadow-none me-2">
                                <label class="form-check-label" for="f3">
                                    Facility Three
                                </label>
                            </div>
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h6 class="mb-3">GUESTS</h6>
                            <div class="d-flex gap-2">
                                <div class="mb-1">
                                    <label class="form-label">Adults</label>
                                    <input type="number" class="form-control shadow-none mb-3">
                                </div>
                                <div class="mb-1">
                                    <label class="form-label">Children</label>
                                    <input type="number" class="form-control shadow-none mb-3">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="col-lg-9 mt-lg-0 mt-md-0 mt-3">
            <div class="card mb-3 border-0 shadow">
                <div class="row g-0 p-2 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="img/rooms/1.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Simple Room Name</h5>
                        <div class="features mb-2">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">2 Rooms</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">1
                                Bathroom</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">1
                                Balcony</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">3 Sofa</span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">Wifi</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">AC</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">TV</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">Room
                                Heater</span>
                        </div>
                        <div class="guests">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">5 Adult</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">4 Children</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center mt-4">
                        <h6 class="">&#8377;200 per night</h6>
                        <a href="#" class="btn btn-sm w-100 my-1 text-white custom-bg shadow-none mt-2">Book
                            Now</a>
                        <a href="#" class="btn btn-sm w-100 my-1 btn-outline-dark shadow-none mt-2">More
                            Details</a>
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0 shadow">
                <div class="row g-0 p-2 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="img/rooms/1.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Simple Room Name</h5>
                        <div class="features mb-2">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">2 Rooms</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">1
                                Bathroom</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">1
                                Balcony</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">3 Sofa</span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">Wifi</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">AC</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">TV</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">Room
                                Heater</span>
                        </div>
                        <div class="guests">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">5 Adult</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">4 Children</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center mt-4">
                        <h6 class="">&#8377;200 per night</h6>
                        <a href="#" class="btn btn-sm w-100 my-1 text-white custom-bg shadow-none mt-2">Book
                            Now</a>
                        <a href="#" class="btn btn-sm w-100 my-1 btn-outline-dark shadow-none mt-2">More
                            Details</a>
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0 shadow">
                <div class="row g-0 p-2 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                        <img src="img/rooms/1.jpg" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3">Simple Room Name</h5>
                        <div class="features mb-2">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">2 Rooms</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">1
                                Bathroom</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">1
                                Balcony</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">3 Sofa</span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">Wifi</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">AC</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">TV</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">Room
                                Heater</span>
                        </div>
                        <div class="guests">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">5 Adult</span>
                            <span class="badge rounded-pill text-bg-light text-wrap lh-base">4 Children</span>
                        </div>
                    </div>
                    <div class="col-md-2 text-center mt-4">
                        <h6 class="">&#8377;200 per night</h6>
                        <a href="#" class="btn btn-sm w-100 my-1 text-white custom-bg shadow-none mt-2">Book
                            Now</a>
                        <a href="#" class="btn btn-sm w-100 my-1 btn-outline-dark shadow-none mt-2">More
                            Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php include('include/footer.php') ?>