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
    if(isset($_GET['status']) && $_GET['status']==='success')
        {   
            echo "<script>alert('Form Submit successfully')</script>";
        }
        elseif(isset($_GET['status']) && $_GET['status']==='false')
        {
            echo "<script>alert('There has been some error please retry after some time')</script>";
        }
?>
    <main class="wrapper">
        <?php include 'header.php' ?>
        
        <section class="contact-banner banner" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h2 class="banner-heading">
                            CONTACT US
                        </h2>
                        <p class="banner-text">HRN Tech Solutions One-stop solution to resolve your diverse business challenges! Upscale your business to the next level with our best-in-class IT services and innovative solutions from experts.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container form-container">
                <div class="row">
                    <div class="col caption-container">
                        <span class="line"></span>
                        <span class="dot"></span>
                        <h3 class="caption">Get In Touch</h3>
                        <span class="dot"></span>
                        <span class="line"></span>
                    </div>
                </div>
            <h1 class="heading-wrapper">Reach Out To Us</h1>

            <form action="form.php" class="contact-form">
                <input type="text" placeholder="First Name" name="first_name" required>
                <input type="text" placeholder="Last Name" name="last_name" required>
                <input type="text" placeholder="Your Number" name="phoneNo" required>
                <input type="email" placeholder="Your Email" name="email" required>
                <input type="text" placeholder="Company Name" name="message" class="full-width" required>
                <textarea placeholder="Additional Message"></textarea>
                <button type="submit" class="submit-button" name="form-1">
                    <div class="dot"></div> Submit
                </button>
            </form>
        </section>

        <!-- ///////////////////////////////////////////Branches/////////////////////////////////// -->

        <!-- <section class="contact-section">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                
                <div class="col-md-3">
                    <div class="card">
                    <h2>Sales</h2>
                    <p>
                        Do you want to know more about HRN Tech Solutions and its products & services or are you struggling with any technical glitches? Our experts are glad to answer!
                    </p>
                    <div class="card-contact">
                        <p><a href="tel:+919935710775"><span><i class="fa fa-phone"></i></span> +91 9935710775</a></p>
                        <p><a href="mailto:info@hrntechsolutions.com"><span><i class="fa fa-envelope"></i></span> info@hrntechsolutions.com</a></p>
                    </div>
                    <a href="#" class="btn-touch custom-btn">Get in touch</a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                    <h2>Careers</h2>
                    <p>
                        Interested in joining HRN Tech Solutions? Explore career opportunities and become part of our growing team driving innovation and impact.
                    </p>
                    <div class="card-contact">
                        <p><a href="tel:+919935710775"><span><i class="fa fa-phone"></i></span> +91 9935710775</a></p>
                        <p><a href="mailto:careers@hrntechsolutions.com"><span><i class="fa fa-envelope"></i></span> careers@hrntechsolutions.com</a></p>
                    </div>
                    <a href="#" class="btn-touch custom-btn">Apply Now</a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                    <h2>Partnership</h2>
                    <p>
                        Looking for strategic collaboration or business partnership with HRN Tech Solutions? Let’s work together for mutual growth and success.
                    </p>
                    <div class="card-contact">
                        <p><a href="tel:+919935710775"><span><i class="fa fa-phone"></i></span> +91 9935710775</a></p>
                        <p><a href="mailto:partners@hrntechsolutions.com"><span><i class="fa fa-envelope"></i></span> partners@hrntechsolutions.com</a></p>
                    </div>
                    <a href="#" class="btn-touch custom-btn">Collaborate</a>
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