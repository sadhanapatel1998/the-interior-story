<?php
ob_start();
?>

<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Contact us</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Page Contact Us Start -->
<div class="page-contact-us">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-12 ">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Our contact</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Get in touch with us</h2>
                </div>
            </div> -->
            <div class="col-lg-12">
                <div class="contact-info-box">
                    <div class="contact-info-item wow fadeInUp">
                        <div class="icon-box">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="contact-info-content">
                            <h3>phone number</h3>
                            <p> <a href="#">+91 XXXXX XXXXX</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <i class="fa-regular fa-envelope"></i>
                        </div>

                        <div class="contact-info-content">
                            <h3>e-mail support</h3>
                            <p><a href="#">
                                    info@theinteriorstory.in</a></p>
                        </div>
                    </div>
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <i class="fa-solid fa-house"></i>
                        </div>

                        <div class="contact-info-content">
                            <h3>Address</h3>
                            <p>LG 004, M3M Corner Walk, Sector 74, Gurugram - 122001</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-us-image">
                    <figure class="image-anime reveal">
                        <img src="assets/images/about/contact-img.jpg" alt="">
                    </figure>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-us-form">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">let's create together</h3>

                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Tell us about your
                            <span>space & vision</span>
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Share your requirements with us and let’s explore how thoughtful
                            design, premium materials and expert craftsmanship can transform
                            your space.
                        </p>
                    </div>
                    <div class="contact-form">
                        <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name*" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address*" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">submit</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Contact Us End -->

<!-- Google Map Section Start -->
<div class="google-map">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="google-map-iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3509.587220102215!2d77.0077428!3d28.401532899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d3d9c8f0c9fd9%3A0xb25c025ed7422001!2sM3M%20Corner%20Walk!5e0!3m2!1sen!2sin!4v1790755856865!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Google Map Section End -->


<?php
$content = ob_get_clean();
require 'layout.php';
?>