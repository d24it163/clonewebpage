<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Eyewear,Sunglasses,Glasses,Contact Lenses,Prescription Eyewear,Vision Care,Fashion Eyewear,Eye Health,Optical Products,Online Eyewear Store,Stylish Frames,Trendy Eyewear,Home Eye Test,Eyewear Trends,Designer Eyeglasses,Affordable Eyewear,Eye Examination,Lens Options,Frame Collections,Vision Solutions,Reading Glasses,Blue Light Glasses,Progressive Lenses,UV Protection,Lens Coatings,Eye Accessories,Optical Fashion,Eye Protection,Eyewear Brands,Fashionable Eyeglasses,Premium Eyewear,Vision Correction,Optometry Services,Eyeglass Frames,Vision Enhancement,Eyewear Styles,Custom Eyewear,Lens Technology,Visual Comfort,Digital Eye Strain,Contact Lens Care,Eyewear Trends 2023,Eyeglass Fashion,Prescription Sunglasses,Colored Contact Lenses,Eyeglass Trends,Eyewear Accessories,Eyewear Deals,Vision Protection,Online Glasses Shop,Affordable Sunglasses,Fashionable Sunglasses,Prescription Lens Options,Lens Materials,Optometry Clinic,Eyewear Selection,Vision Wellness,Stylish Sunglasses,Fashionable Frames,Eyewear for Men,Eyewear for Women,Kids' Eyewear,Sports Eyewear,Trending Eyewear,Lens Treatments,Eyewear Online Shopping,Virtual Try-On,Online Eye Test,Eyewear Discounts,Prescription Contacts,Eyewear Savings,Eye Care Products,Lens Durability,Eyewear Guide,Vision Enhancers,Stylish Contact Lenses,Frame Materials,Prescription Glasses Online,Eyeglass Accessories,Eyewear Subscription,Lens Enhancements,Fashionable Contact Lenses,Eyewear Clearance,Eyeglass Care Tips,Prescription Eyewear Online,Polarized Sunglasses,Eyewear Trends 2023,Eyeglass Savings,Colored Glasses,Eyewear Collections,Designer Frames,Lens Protection,Online Optical Store,Eyewear for All Ages,Optical Health,UV Protection Eyewear,Eyewear Deals 2023,Vision Care Products,Lens Upgrades,Custom Lens Options,Eyewear Financing,Eyeglass Materials,Lens Comfort,Trendy Contact Lenses,Online Eyewear Sales,Vision Comfort,Eyewear Offers,Lens Clarity,Fashionable Eyewear 2023,Eyeglass Selection,Eyewear for Kids,Eyewear Trends 2023,Eye Care Solutions,Lens Coating Options,Eyeglass Trends 2023,Prescription Eyeglasses Online,Affordable Contacts,Stylish Eyewear 2023,Eyeglass Financing,Online Sunglasses Shop,Lens Customization,Lens Protection Options,Online Eyewear Discounts,Contact Lens Options,Designer Eyewear 2023,Lens Clarity Enhancements,Virtual Try-On Glasses,Eyewear Savings 2023,Blue Light Lens Options,Eyewear Sale,Kids' Eyewear Trends,Vision Enhancement Products,Stylish Frames 2023,Fashionable Sunglasses 2023,Lens Upgrade Options,Affordable Eyeglasses Online,Lens Coating Benefits,Prescription Sunglasses Online,Eyewear Accessories 2023,Lens Comfort Enhancements,Custom Lens Treatments,Eyeglass Trends 2023,Colored Contact Lens Options,Stylish Eyeglasses 2023,Trending Sunglasses,Online Eyewear Clearance,Lens Care Tips,Fashionable Eyeglasses 2023,Lens Durability Enhancements,Vision Care Savings,Eyewear Selection 2023,Stylish Sunglasses 2023,Lens Clarity Benefits,Eyeglass Protection,Lens Technology Advancements,Vision Wellness Products,Eyewear Subscription Services,Lens Protection Treatments,Designer Eyeglasses 2023,Trending Contact Lenses">
    <meta name="description" content="Elevate your style and vision with VisionVibe. Explore a curated collection of trendy sunglasses, glasses, and contact lenses. Our personalized home eye tests ensure clear vision and comfort. Discover the latest eyewear trends and expert eye care advice. Shop now for fashion-forward frames that redefine your look, all at VisionVibe.">
    <title>VisionVibe</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <style>
        
        .product {
            position: relative;
            overflow: hidden;
            padding: 20px;
        }

        .product-category {
            padding: 0 10vw;
            font-size: 30px;
            font-weight: 500;
            margin-bottom: 40px;
            text-transform: capitalize;
        }

        .product-container {
            padding: 0 6vw;
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
        }

        .product-container::-webkit-scrollbar {
            display: none;
        }

        .product-card {
            flex: 0 0 auto;
            width: 250px;
            height: auto;
            margin-right: 15%;
        }

        .pre-btn,
        .nxt-btn {
            border: none;
            width: 10vw;
            height: 100%;
            position: absolute;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #fff 100%);
            cursor: pointer;
            z-index: 8;
        }

        .pre-btn {
            left: 0;
            transform: rotate(180deg);
        }

        .nxt-btn {
            right: 0;
        }

        .pre-btn img,
        .nxt-btn img {
            opacity: 0.2;
        }

        .pre-btn:hover img,
        .nxt-btn:hover img {
            opacity: 1;
        }
    </style>
</head>

<body>

    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-xl navbar-dark fixed-top bg-dark navbar-nav flex-row flex-wrap ms-md-auto">
            <div class="container-fluid">
                <a href="index.php" class="d-flex align-items-center mb-2 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="logo.png" class="bi mx-2 mt-1" width="40" height="32">
                    <span class="fs-4">VisionVibe</span>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto ms-5 ">
                        <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">HOME</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                GLASSES
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="glasses.php">Eye-Glasses</a></li>
                                <li><a class="dropdown-item" href="Sunglasses.php">Sun-Glasses</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="contact_lenses.php" class="nav-link">CONTACT-LENSES</a></li>
                        <li class="nav-item"><a href="home_eye_test.php" class="nav-link">HOME-EYE-TEST</a></li>
                        <li class="nav-item"><a href="about_us.php" class="nav-link">ABOUT US</a></li>
                        <li class="nav-item"><a href="contact_us.php" class="nav-link">CONTACT US</a></li>



                    </ul>
                    <div class="d-flex me-4">
                        <a href="login.php" class="nav-link"><i class="fa fa-user" style="font-size: 18px;" aria-hidden="true"></i></a>
                    </div>

                </div>
            </div>

            </div>
        </nav>
    </header>

    <?php
    if (isset($_REQUEST['err'])) {
        echo ($_REQUEST['err']);
    }
    ?>

    <main>
        <div id="myCarousel" class="carousel slide my-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- Image element to fill the carousel slide -->
                    <img src="index_image/index_img3.jpeg" class="img-fluid d-block w-100">
                    <div class="container-fluid">
                        <div class="carousel-caption text-start">
                            <h1>VisionVibe</h1>
                            <h5 class="ms-1">DO MORE,BE MORE</h5>
                            <p class="ms-1">As seen on Shark Tank India</p>
                            <p><a class="btn btn-sm btn-primary ms-1" href="Sunglasses.php">Shop Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="index_image/index_img1.jpeg" class="img-fluid d-block w-100">
                    <div class="container-fluid">
                        <div class="carousel-caption text-start">
                            <h1>VisionVibe</h1>
                            <h5 class="ms-1">Cool.Quirky.Crazy!</h5>
                            <p class="ms-1">Let's Elevate Your Frame Game</p>
                            <p><a class="btn btn-sm btn-primary ms-1" href="glasses.php">Shop Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="index_image/index_img2.jpeg" class="img-fluid d-block w-100">
                    <div class="container-fluid">
                        <div class="carousel-caption text-start">
                            <h1>VisionVibe</h1>
                            <h5 class="ms-1">Blend Edit</h5>
                            <p class="ms-1">The Perfect Material Mix</p>
                            <p><a class="btn btn-sm btn-primary ms-1" href="glasses.php">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container marketing my-5 pt-3">
            <h1 style="text-align: center; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" class="mb-4">
                Trending Sunglasses</h1>
            <a clss="getGaData" data-event="Banner Clicks" data-category="Banner Clicks" data-action="progressives_tv" data-label="1_trending_sunglasses" href="Sunglasses.php">
                <img src="index_image/index_img8.webp" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-fluid">
            </a>
        </div>
        <div class="container my-5 pt-3">
            <h1 style="text-align: center; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" class="mb-4 ">
                AQUACOLOR - GLAM UP WITH COLOR LENSES</h1>
            <a clss="getGaData" data-event="Banner Clicks" data-category="Banner Clicks" data-action="progressives_tv" data-label="1_trending_sunglasses" href="contact_lenses.php">
                <img src="index_image/index_img9.webp" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-fluid">
            </a>
        </div>

        <hr class="container my-5">

        <div class="container text-center mb-3">
            <div>
                <h2 class="pb-2">Our Lens Features At A Glance</h2>
                <p>Our lenses are designed keeping your comfort &amp; versatile lifestyle in mind.<br> Get the best of
                    features with your lenses here at VisionVibe!</p>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-1 text-i ">
                <div class="col">
                    <div class="card mx-auto" style="border: none; width: 50%;">
                        <img src="index_image/index_img10.webp" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Blocks Blue Light</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mx-auto" style="border: none; width: 50%;">
                        <img src="index_image/index_img11.webp" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Eliminates Glare</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mx-auto" style="border: none; width: 50%;">
                        <img src="index_image/index_img12.webp" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Blocks UV Light</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mx-auto" style="border: none; width: 50%;">
                        <img src="index_image/index_img13.webp" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Resists Scratches</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mx-auto" style="border: none; width: 50%;">
                        <img src="index_image/index_img14.webp" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Resists Fingerprints & Smudges</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mx-auto" style="border: none; width: 50%;">
                        <img src="index_image/index_img15.webp" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Repels Water & Liquids</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mx-auto" style="border: none; width: 50%;">
                        <img src="index_image/index_img16.webp" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Repels Dust Particles</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mx-auto" style="border: none; width: 50%;">
                        <img src="index_image/index_img17.webp" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Reduces Color & Image Distortion</p>
                        </div>
                    </div>
                </div>

            </div>

            <hr class="my-5">

        </div>

        <h4 class="container ps-5">EYEGLASSES</h4>
        <section class="product container">

            <button class="pre-btn"><img src="index_image/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="index_image/arrow.png" alt=""></button>
            <a href="glasses.php">
                <div class="product-container">
                    <div class="product-card">
                        <img src="glasses_images/glasses_img2.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="glasses_images/glasses_img4.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="glasses_images/glasses_img9.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="glasses_images/glasses_img11.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="glasses_images/glasses_img14.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="glasses_images/glasses_img15.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="glasses_images/glasses_img5.jpg" width="150%">
                    </div>
                </div>
            </a>
            <hr class="my-4">
        </section>

        <h4 class="container ps-5">SUNGLASSES</h4>
        <section class="product container">

            <button class="pre-btn"><img src="index_image/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="index_image/arrow.png" alt=""></button>
            <a href="Sunglasses.php">
                <div class="product-container">
                    <div class="product-card">
                        <img src="sunglasses_images/Sunglasses_img7.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="sunglasses_images/Sunglasses_img9.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="sunglasses_images/Sunglasses_img4.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="sunglasses_images/Sunglasses_img8.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="sunglasses_images/Sunglasses_img5.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="sunglasses_images/Sunglasses_img6.jpg" width="150%">
                    </div>
                    <div class="product-card">
                        <img src="sunglasses_images/Sunglasses_img1.jpg" width="150%">
                    </div>
                </div>
            </a>
        </section>


        <div class="container">
            <hr class="my-4">
            <h4 class=" mx-4 mb-3">Buy The Best Eyewear From VisionVibe </h4>
            <p class=" mx-5 mb-2" style="text-align: justify;">VisionVibe Is The Leading E-Commerce Portal For
                Eyewear In India. It Has
                Revolutionised The Eyewear Industry In
                The Country With Its Omni-Channel Approach. From An Ever-Growing Number Of Offline Stores Across Major
                Cities In The Country To Innovative Integration Of Technology While Purchasing Online, VisionVibe Caters
                To
                Every Customer With Several Deals And Offers.</p>
            <p class=" mx-5" style="text-align: justify;">A One-Stop Online Solution For Purchasing Eyewear And
                Its Accessories, VisionVibe
                Delivers Them Right At Your
                Doorstep With Convenient Methods Of Payment. Sunglasses as well as Eyeglasses Are Available For Men And
                Women In A Diverse Array Of Styles And Trendy Colours. If You Want To Try Out Contact Lenses, Pick The
                Ones
                Of Your Choice From The Extensive Variety Of Coloured Contact Lenses From Our Online Store.</p>
            <div class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center pt-3 ps-5 " href="#">
                <div class="col-sm-1 text-end">
                    <img src="index_image/24x7.png" class="bd-placeholder-img" style="width: 100%;">
                </div>
                <div class="col-sm-11 pe-5" style="text-align: justify;">
                    <h5 class="mb-1">VisionVibe Help Line: 1800-111-111</h5>
                    <small style="text-align: justify;">At VisionVibe, we are committed to providing
                        exceptional support to our valued
                        users. If you have any questions, concerns, or need assistance with our products or services,
                        our
                        dedicated and friendly customer support team is just a call away. Dial our toll-free Help Line
                        at
                        <b>1800-111-111</b>, and let us guide you through any queries you may have.</small>
                </div>
            </div>
        </div>



        <hr class="my-4">

        <div class="container">
            <div class="row row-cols-5 g-3 text-start">

                <div class="col">
                    <div class="card mb-3" style="border: none;">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <img src="index_image/index_img18.jpeg" width="80px">
                            </div>
                            <div class="col-lg-7">
                                <div class="card-body">
                                    <p class="card-text">100% Made in India</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3" style="border: none;">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <img src="index_image/index_img19.jpeg" width="80px">
                            </div>
                            <div class="col-lg-7">
                                <div class="card-body">
                                    <p class="card-text">High Quality Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3" style="border: none;">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <img src="index_image/index_img20.jpeg" width="80px">
                            </div>
                            <div class="col-lg-7">
                                <div class="card-body">
                                    <p class="card-text">Fast Track Delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3" style="border: none;">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <img src="index_image/index_img21.jpeg" width="80px">
                            </div>
                            <div class="col-lg-7">
                                <div class="card-body">
                                    <p class="card-text">7-Day Easy Returns</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3" style="border: none;">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <img src="index_image/index_img22.jpeg" width="80px">
                            </div>
                            <div class="col-lg-7">
                                <div class="card-body">
                                    <p class="card-text">100% Secure Payment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>





    </main>

    <?php
    include "footer.php";
    ?>


    <script>
        const productContainers = [...document.querySelectorAll('.product-container')];
        const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
        const preBtn = [...document.querySelectorAll('.pre-btn')];

        productContainers.forEach((item, i) => {
            let containerDimensions = item.getBoundingClientRect();
            let containerWidth = containerDimensions.width;

            nxtBtn[i].addEventListener('click', () => {
                item.scrollLeft += 500;
            })

            preBtn[i].addEventListener('click', () => {
                item.scrollLeft -= 500;
            })
        })
    </script>
</body>


</html>