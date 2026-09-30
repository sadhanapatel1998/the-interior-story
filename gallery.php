<?php
ob_start();
?>

<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Gallery</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Photo Gallery Section Start -->
<div class="page-gallery">
    <div class="container">
        <!-- gallery section start -->
        <div class="row gallery-items page-gallery-box">
            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                    <a href="images/gallery-1.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-1.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.2s" data-cursor-text="View">
                    <a href="images/gallery-2.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-2.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.4s" data-cursor-text="View">
                    <a href="images/gallery-3.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-3.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.6s" data-cursor-text="View">
                    <a href="images/gallery-4.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-4.jpg" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.8s" data-cursor-text="View">
                    <a href="images/gallery-5.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-5.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1s" data-cursor-text="View">
                    <a href="images/gallery-6.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-6.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.2s" data-cursor-text="View">
                    <a href="images/gallery-7.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-7.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.4s" data-cursor-text="View">
                    <a href="images/gallery-8.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-8.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.6s" data-cursor-text="View">
                    <a href="images/gallery-9.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-9.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>
        </div>
        <!-- gallery section end -->
    </div>
</div>
<!-- Photo Gallery Section End -->




<?php
$content = ob_get_clean();
require 'layout.php';
?>