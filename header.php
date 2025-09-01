<header class="shadow-lg sticky-top z-3">
    <nav class="navbar navbar-expand-md bg-white-50 backdrop-blur-3 py-3">
        <div class="container-fluid px-4 px-md-6 px-lg-8">
            <a class="navbar-brand py-2 me-0" href="#">
                <img src="assets/images/logo/logo.png" alt="HRN" class="img-fluid" style="width: 60%;">
            </a>

            <button class="navbar-toggler d-md-none p-2 " type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  justify-content-center " id="navbarNav">
                <ul class="navbar-nav  mb-2 mb-lg-0 space-x-6 ">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-medium" href="contact.php">Contact Us</a>
                    </li>
                </ul>

            </div>
            <button class=" custom-btn fw-semibold px-4 py-2 d-none d-md-inline" id="openBtn">
                <span class="dot me-2"></span>Let's start
            </button>
        </div>
    </nav>
</header>

<div class="offcanvas offcanvas-end d-md-none" tabindex="-1" id="offcanvasNavbar"
    aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header justify-content-end pb-0">
        <button type="button" class="btn-close text-reset p-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column">
        <ul class="navbar-nav flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link text-dark fs-5 fw-medium p-3" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fs-5 fw-medium p-3" href="services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fs-5 fw-medium p-3" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fs-5 fw-medium p-3" href="contact.php">Contact Us</a>
            </li>
        </ul>

        <div class="mt-auto pt-4 border-top border-2">
            <div class="d-flex justify-content-center space-x-6">
                <a href="https://www.facebook.com/hrntechsolutions" class="text-secondary hover-red mx-3"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/hrntechsolutions" class="text-secondary hover-red mx-3"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="https://www.instagram.com/hrntechsolutions" class="text-secondary hover-red mx-3"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="https://www.linkedin.com/company/hrntechsolutions" class="text-secondary hover-red mx-3"><i class="fab fa-linkedin fa-lg"></i></a>
            </div>
        </div>
    </div>
</div>




<!-- <section class="form-modal" id="myBox">
        <div class="container-wrapper">
            <span class="close-btn" id="formModalClose">&times;</span>
            <div class="registration-split-container">
                
                <div class="contact-info-section">
                    <div class="contact-content">
                        <h2>Contact Us</h2>
                        <p>We'd love to hear from you. Get in touch with us using the information below.</p>
                        
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+911234567890">+91 12345 67890</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:contact@example.com">contact@example.com</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>123 Classy Avenue, New Delhi, India</p>
                        </div>
                        <div class="contact-item">
                            <i class="fab fa-whatsapp"></i>
                            <a href="https://wa.me/911234567890" target="_blank">WhatsApp Us</a>
                        </div>
                        
                        <div class="social-links">
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3>Register Now</h3>
                    <form action="submit" method="post">
                        <label for="fname"><i class="fas fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="name" placeholder="Enter your full name" required>

                        <label for="email"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>

                        <label for="mobile"><i class="fas fa-mobile-alt"></i> Mobile</label>
                        <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required>

                        <label for="message"><i class="fas fa-message"></i> Message</label>
                        <input type="textarea" id="message" name="message" placeholder="Message" col=20 row=30 required>

                        <button type="submit" class="submit-btn">Submit Now</button>
                    </form>
                </div>

            </div>
        </div>
</section> -->

<section class="form-modal" id="myBox">
    <div class="container-wrapper">
        <span class="close-btn" id="formModalClose">&times;</span>
        <div class="registration-split-container">

            <!-- Contact Section -->
            <div class="contact-info-section">
                <div class="contact-content">
                    <h2>Contact Us</h2>
                    <p>We'd love to hear from you. Get in touch with us using the information below.</p>

                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+911234567890">+91 9311240888</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:contact@example.com">info@hrntechsolutions.com</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="https://maps.app.goo.gl/Xcjw1yJr2r6EXv2c9?g_st=aw">C-84, C Block, Sec-2, Noida,
                            Uttar Pardes</a>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-whatsapp"></i>
                        <a href="https://wa.me/919311240888" target="_blank">WhatsApp Us</a>
                    </div>

                    <div class="social-links">
                        <a href="https://www.linkedin.com/company/hrntechsolutions" class="social-icon"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://twitter.com/hrntechsolutions" class="social-icon"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/hrntechsolutions" class="social-icon"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/hrntechsolutions" class="social-icon"><i
                                class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>

            <!-- Form Section -->
            <div class="form-section">
                <h3>Register Now</h3>
                <form action="form.php" method="post" class="modal-form">
                    <!-- <label for="fname"> <i class="fas fa-user"></i>Full Name</label> -->
                    <div class="input"><i class="fas fa-user"></i><input type="text" id="fname" name="name"
                            placeholder="Enter your full name" required></div>

                    <!-- <label for="email"><i class="fas fa-envelope"></i> Email</label> -->
                    <div class="input"><i class="fas fa-envelope"></i><input type="email" id="email" name="email"
                            placeholder="Enter your email address" required></div>

                    <!-- <label for="mobile"><i class="fas fa-mobile-alt"></i> Mobile</label> -->
                    <div class="input"><i class="fas fa-mobile-alt"></i><input type="tel" id="mobile" name="mobile"
                            placeholder="Mobile Number" required></div>

                    <!-- <label for="Message"><i class="fas fa-message"></i> Message</label> -->
                    <div class="input txt"><i class="fas fa-message"></i><textarea id="Message" name="message"
                            placeholder="Message" required></textarea></div>

                    <!-- <label for="services"><i class="fas fa-briefcase"></i> Select Services</label> -->
                    <div class="input"><i class="fas fa-briefcase"></i><select id="services" name="services" required>
                            <option value="">Select Services</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Performance Marketing">Performance Marketing</option>
                            <option value="Graphic Designing">Graphic Designing</option>
                            <option value="Software Development">Software Development</option>
                            <option value="Influencer Marketing">Influencer Marketing</option>
                        </select></div>

                    <!-- Range Input -->
                    <div class="wraper">
                        <label for="amountRange" class="label">Select Amount (10k – 10 Lakh)</label>
                        <div class=""><input id="amountRange" type="range" min="10000" max="1000000" step="1000"
                                value="10000" name="budget" /></div>
                        <div class="display">
                            <div class="Amount"><span id="shortValue">10K</span></div>
                        </div>
                    </div>

                    <button type="submit" class="submit-btn" name="form-2">Submit Now</button>
                </form>
            </div>
        </div>
    </div>
</section>