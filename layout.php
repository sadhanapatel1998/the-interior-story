<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>The Interior Story</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo-black.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/tex-gyre-termes@5/index.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="assets/css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="assets/css/all.min.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="assets/css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="assets/css/custom.css" rel="stylesheet" media="screen">
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/loader.svg" alt=""></div>
        </div>
    </div> -->
    <!-- Preloader End -->


    <?php include("include/header.php"); ?>
    <?= $content ?? ''; ?>
    <?php require_once('include/footer.php') ?>



    <!-- Jquery Library File -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="assets/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="assets/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Isotop js file -->
    <script src="assets/js/isotope.min.js"></script>
    <!-- Magnific js file -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="assets/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="assets/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="assets/js/SplitText.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="assets/js/function.js"></script>
    <script src="assets/js/theme-panel-dynamic.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            if (typeof gsap !== "undefined") {

                gsap.from(".tis-mini-title", {
                    y: 30,
                    opacity: 0,
                    duration: 1
                });

                gsap.from(".tis-hero-title", {
                    y: 80,
                    opacity: 0,
                    duration: 1.3,
                    delay: 0.2
                });

                gsap.from(".tis-product-tags span", {
                    y: 25,
                    opacity: 0,
                    stagger: 0.08,
                    delay: 0.5
                });

                gsap.from(".tis-floating-card", {
                    x: 80,
                    opacity: 0,
                    duration: 1.2,
                    delay: 0.6
                });

                gsap.to(".hero-slider-image img", {
                    scale: 1.06,
                    duration: 14,
                    ease: "none",
                    repeat: -1,
                    yoyo: true
                });

            }

        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const header = document.querySelector(".header-sticky");

            if (!header) return;

            let lastScrollTop = 0;

            window.addEventListener("scroll", function() {

                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                // Activate sticky header after scrolling
                if (currentScroll > 100) {

                    // Scrolling down
                    if (currentScroll > lastScrollTop) {
                        header.classList.remove("active");
                        header.classList.add("hide");
                    }

                    // Scrolling up
                    else {
                        header.classList.remove("hide");
                        header.classList.add("active");
                    }

                } else {

                    // At top of page
                    header.classList.remove("active");
                    header.classList.remove("hide");
                }

                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;

            }, {
                passive: true
            });

        });
    </script>
</body>

</html>