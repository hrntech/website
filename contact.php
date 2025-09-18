<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRN Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
    if (isset($_GET['status']) && $_GET['status'] === 'success') {
        echo "<script>alert('Form Submit successfully')</script>";
    } elseif (isset($_GET['status']) && $_GET['status'] === 'false') {
        echo "<script>alert('There has been some error please retry after some time')</script>";
    }
    ?>
    <main class="wrapper">
        <?php include 'header.php' ?>

        <section class="contact-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h2>
                            CONTACT US
                        </h2>
                        <p>HRN Tech Solutions One-stop solution to resolve your diverse business challenges! Upscale your business to the next level with our best-in-class IT services and innovative solutions from experts.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="row ">
            <div class="col caption-container">
                <span class="line"></span>
                <span class="dot"></span>
                <h3 class="caption">Get In Touch</h3>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
        </div>
        <section class="contact-section">

            <div class="contact-container">

                <!-- Left Column -->
                <div class="contact-details">
                    <!-- <h4 class="subtitle">Get In Touch</h4> -->
                    <h2>Contact Us</h2>
                    <p>HRN Tech Solutions is committed to delivering high-quality digital solutions
                        to help businesses grow and scale sustainably.</p>

                    <div class="info">
                        <p><strong>Location : </strong> C-84, Sec-2, Noida, Uttar Pradesh-201306</p>
                        <!-- <p><strong>📞 Phone:</strong><br> <a href="tel:+919876543210">+91 98765 43210</a></p> -->
                        <p><span><i class="fa fa-phone"></i></span> <a href="tel:+919315602410">+91 9315602410</a></p>
                        <p><span><i class="fa-brands fa-whatsapp"></i></span><a href="https://wa.me/919315602410?text=Hello%20HRN%20Tech%20Solutions%2C%20I%20would%20like%20to%20know%20more%20about%20your%20Digital%20Marketing%20services."
                                target="_blank"
                                aria-label="WhatsApp">
                                Chat With Us
                            </a>
                        </p>
                        <!-- <a href="https://wa.me/919315602410?text=Hello%20HRN%20Tech%20Solutions%2C%20I%20would%20like%20to%20know%20more%20about%20your%20Digital%20Marketing%20services."
                            target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>Chat With Us
                        </a> -->

                        <p><span><i class="fa fa-envelope"></i></span> <a href="mailto:info@hrntechsolutions.com">info@hrntechsolutions.com</href></a> </p>

                    </div>

                    <!-- Social Icons -->
                    <div class="social">
                        <a href="https://www.facebook.com/hrntechsolutions" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/hrntechsolutions" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/hrntechsolutions" target="_blank" aria-label="Twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/hrntechsolutions" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://wa.me/919311240888" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Right Column (Form) -->
                <div class="contact-form-section">
                    <!-- <h1 class="heading-wrapper">Reach Out To Us</h1> -->
                    <form action="#" class="contact-form">
                        <input type="text" placeholder="First Name" name="first_name" required>
                        <input type="text" placeholder="Last Name" name="last_name" required>
                        <input type="text" placeholder="Your Number" name="phoneNo" required>
                        <input type="email" placeholder="Your Email" name="email" required>
                        <input type="text" placeholder="Company Name" name="message" class="full-width" required>
                        <textarea placeholder="Additional Message"></textarea>
                        <button type="submit" class="submit-button">
                            <div class="dot"></div> Submit
                        </button>
                    </form>
                </div>

            </div>
        </section>



        <!-- ///////////////////////////////////////////Branches/////////////////////////////////// -->

        <!-- <section class="contact-section">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <h2>App Development</h2>
                            <p>
                                We provide end-to-end mobile and desktop app development services, building scalable, secure, and user-friendly applications. Our solutions combine innovation and performance to help businesses engage customers and streamline operations effectively.
                            </p>
                            <div class="card-contact">
                                <p><a href="tel:+919935710775"><span><i class="fa fa-phone"></i></span> +91 9935710775</a></p>
                                <p><a href="tel:+918851613806"><span><i class="fa fa-phone"></i></span> +91 8851613806</a></p>

                                <p>
                                    <a href="mailto:info@hrntechsolutions.com">
                                        <span><i class="fa fa-envelope"></i></span>
                                        info@hrntechsolutions.com
                                    </a>
                                </p>
                            </div>
                            <a href="#" class="btn-touch">Get in touch</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h2>Web Development</h2>
                            <p>
                                Our web development services deliver responsive, secure, and visually appealing websites. We create everything from business websites to complex portals, ensuring functionality, performance, and seamless user experience across all devices and platforms.
                            </p>
                            <div class="card-contact">
                                <p><a href="tel:+919935710775"><span><i class="fa fa-phone"></i></span> +91 9935710775</a></p>
                                <p><a href="tel:+918851613806"><span><i class="fa fa-phone"></i></span> +91 8851613806</a></p>
                                <p><a href="mailto:info@hrntechsolutions.com"><span><i class="fa fa-envelope"></i></span> info@hrntechsolutions.com</a></p>
                            </div>
                            <a href="#" class="btn-touch">Get in touch</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h2>S/W Development</h2>
                            <p>
                                We design and develop custom software solutions tailored to your business goals. Our software development ensures efficiency, productivity, and long-term scalability, enabling organizations to optimize processes and stay competitive in dynamic markets.
                            </p>
                            <div class="card-contact">
                                <p><a href="tel:+919935710775"><span><i class="fa fa-phone"></i></span> +91 9935710775</a></p>
                                <p><a href="tel:+918851613806"><span><i class="fa fa-phone"></i></span> +91 8851613806</a></p>
                                <p><a href="mailto:info@hrntechsolutions.com"><span><i class="fa fa-envelope"></i></span> info@hrntechsolutions.com</a></p>
                            </div>
                            <a href="#" class="btn-touch">Get in touch</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h2>UI/UX Design</h2>
                            <p>
                                Our UI/UX design services focus on creating intuitive, visually engaging, and user-friendly interfaces. We craft experiences that enhance customer satisfaction, improve usability, and ensure your products stand out in the competitive digital marketplace.
                            </p>
                            <div class="card-contact">
                                <p><a href="tel:+919935710775"><span><i class="fa fa-phone"></i></span> +91 9935710775</a></p>
                                <p><a href="tel:+918851613806"><span><i class="fa fa-phone"></i></span> +91 8851613806</a></p>
                                <p><a href="mailto:info@hrntechsolutions.com"><span><i class="fa fa-envelope"></i></span> info@hrntechsolutions.com</a></p>
                            </div>
                            <a href="#" class="btn-touch">Get in touch</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h2>Preformance Marketing</h2>
                            <p>
                                We implement data-driven marketing campaigns that maximize return on investment. Our performance marketing strategies generate qualified leads, optimize ad spend, and deliver measurable results, ensuring consistent business growth and customer acquisition.
                            </p>
                            <div class="card-contact">
                                <p><a href="tel:+919935710775"><span><i class="fa fa-phone"></i></span> +91 9935710775</a></p>
                                <p><a href="tel:+918851613806"><span><i class="fa fa-phone"></i></span> +91 8851613806</a></p>
                                <p><a href="mailto:info@hrntechsolutions.com"><span><i class="fa fa-envelope"></i></span> info@hrntechsolutions.com</a></p>
                            </div>
                            <a href="#" class="btn-touch">Get in touch</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <h2>Digital Marketing</h2>
                            <p>
                                We craft comprehensive digital marketing campaigns that strengthen brand visibility. Our strategies include SEO, social media, and paid advertising, designed to increase engagement, attract targeted audiences, and ensure measurable growth and long-term customer loyalty.
                            </p>
                            <div class="card-contact">
                                <p><a href="tel:+919935710775"><span><i class="fa fa-phone"></i></span> +91 9935710775</a></p>
                                <p><a href="tel:+918851613806"><span><i class="fa fa-phone"></i></span> +91 8851613806</a></p>
                                <p><a href="mailto:info@hrntechsolutions.com"><span><i class="fa fa-envelope"></i></span> info@hrntechsolutions.com</a></p>
                            </div>
                            <a href="#" class="btn-touch">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.539593014628!2d77.315106!3d28.583585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce51ee5d79db7%3A0x685544a078523ffb!2sHRN%20Tech%20Solutions!5e0!3m2!1sen!2sin!4v1756100513176!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>




        <?php include 'footer.php' ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>