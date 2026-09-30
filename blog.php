<?php
ob_start();
?>

<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Blogs</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Our Blog Section Start -->
<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <h3 class="wow fadeInUp">design journal</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        <span>Ideas for</span> inspired living
                    </h2>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="section-title-content">
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Explore thoughtful ideas, timeless design inspiration and
                        practical tips to help you create interiors that feel
                        elegant, functional and truly personal.
                    </p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp">
                    <div class="post-featured-image">
                        <figure>
                            <a href="blog.php"
                                class="image-anime"
                                data-cursor-text="View">

                                <img src="assets/images/post-1.jpg"
                                    alt="Modern Modular Kitchen Design">
                            </a>
                        </figure>
                    </div>

                    <div class="post-item-body">
                        <div class="post-item-content mb-0">
                            <h3>
                                <a href="blog.php">
                                    How to Design a Modular Kitchen That Works Beautifully
                                </a>
                            </h3>
                            <p class="mb-0 mt-2">
                                Discover practical design ideas, smart planning tips and elegant solutions
                                to help you create interiors that feel beautiful, functional and perfectly
                                suited to your everyday lifestyle.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp"
                    data-wow-delay="0.2s">
                    <div class="post-featured-image">
                        <figure>
                            <a href="blog.php"
                                class="image-anime"
                                data-cursor-text="View">
                                <img src="assets/images/post-2.jpg"
                                    alt="Luxury Wardrobe Interior Design">
                            </a>
                        </figure>
                    </div>


                    <div class="post-item-body">
                        <div class="post-item-content mb-0">
                            <h3>
                                <a href="blog.php">
                                    Smart Wardrobe Ideas for Elegant, Clutter-Free Spaces
                                </a>
                            </h3>
                            <p class="mb-0 mt-2">
                                Explore thoughtful storage ideas, refined finishes and practical wardrobe
                                solutions designed to keep your space organised while adding a sophisticated
                                touch to your bedroom interiors.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp"
                    data-wow-delay="0.4s">
                    <div class="post-featured-image">
                        <figure>
                            <a href="blog.php"
                                class="image-anime"
                                data-cursor-text="View">
                                <img src="assets/images/post-3.jpg"
                                    alt="Designer Wall Panelling Ideas">
                            </a>
                        </figure>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content mb-0">
                            <h3>
                                <a href="blog.php">
                                    Wall Panelling Ideas That Add Character to Your Home
                                </a>
                            </h3>
                            <p class="mb-0 mt-2">
                                Explore elegant wall panelling ideas, refined textures and contemporary
                                finishes that can add depth, character and a beautifully finished look
                                to your living spaces.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Our Blog Section End -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>