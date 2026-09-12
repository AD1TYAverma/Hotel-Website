<?php include('include/header.php') ?>
<div class="row my-5 px-4">
    <h2 class="fw-bold h-font text-center" style="text-transform: uppercase">
        Contact Us
    </h2>

    <div class="h-line"></div>

    <p class="text-center mt-4 px-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dolorum quam
        illum at, magnam excepturi voluptas earum recusandae mollitia sapiente,
        modi, libero voluptates necessitatibus maiores dolorem perferendis
        molestias. Harum at iusto inventore explicabo, iure quibusdam porro
        expedita. Neque praesentium eum nisi, pariatur temporibus sapiente eos
        doloribus iste deserunt. Placeat, quisquam?
    </p>
</div>

<div class="row">
    <div class="col-lg-6 col-md-4 mb-6 px-4">
        <div class="bg-white rounded shadow p-4">
            <iframe class="w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2711.439660975109!2d80.9710013740162!3d26.85160356271661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd3a99fba681%3A0xe82b751c187af53b!2sTaj%20Mahal%20Lucknow!5e1!3m2!1sen!2sin!4v1788526527239!5m2!1sen!2sin"
                width="600" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="strict-origin-when-cross-origin"></iframe>
            <div class="">
                <h5 class="mt-4">Address</h5>
                <a href="https://maps.app.goo.gl/zYDpX92oqjWZk9Xd8" target="_blank"
                    class="d-block text-decoration-none text-dark"><i class="fa-solid fa-location-dot me-1"></i>Taj
                    Hotal, Lucknow</a>
                <h5 class="mt-4">Call Us</h5>
                <a href="tel : +917778889990" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                        class="fa-solid fa-phone me-2"></i>+917778889990</a>
                <br>
                <a href="tel : +917778889990" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                        class="fa-solid fa-phone me-2"></i>+917778889990</a>
                <br>
                <h5 class="mt-3">Email</h5>
                <a href="mailto: adityaverma6300@gmail.com"
                    class="d-inline-block mb-2 text-decoration-none text-dark"><i
                        class="fa-solid fa-envelope me-2"></i>ask. aditya@gmail.com</a>
                <br>
                <h5 class="mt-3">Follow Us</h5>
                <a href="" class="d-inline-block text-decoration-none my-2">
                    <span class="bedge bg-white text-dark fs-6 fw-bold p-2">
                        <i class="fa-brands fa-twitter me-2"></i>
                    </span>
                </a>
                <a href="" class="d-inline-block text-decoration-none my-2">
                    <span class="bedge bg-white text-dark fs-6 fw-bold p-2">
                        <i class="fa-brands fa-square-facebook me-2"></i>
                    </span>
                    <a href="" class="d-inline-block text-decoration-none my-2">
                        <span class="bedge bg-white text-dark fs-6 fw-bold p-2">
                            <i class="fa-brands fa-instagram me-2"></i>
                        </span>
                    </a>
                    <br>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4">

            <h4 class="mb-4">Send A Message</h4>

            <form>

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" id="name" class="form-control shadow-none" placeholder="Enter your name" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" class="form-control shadow-none" placeholder="Enter your email" required>
                </div>

                <!-- Phone -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" id="phone" class="form-control shadow-none" placeholder="Enter your phone number">
                </div>

                <!-- Subject -->
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" id="subject" class="form-control shadow-none" placeholder="Enter subject">
                </div>

                <!-- Message -->
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea id="message" class="form-control shadow-none" rows="2" placeholder="Write your message..."
                        required></textarea>
                </div>

                <!-- Button -->
                <button type="submit" class="btn btn-primary px-4">
                    Send Message
                </button>

            </form>

        </div>
    </div>
</div>
<?php include('include/footer.php') ?>