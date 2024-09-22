<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$name = $_SESSION["id"];
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Eyewear,Sunglasses,Glasses,Contact Lenses,Prescription Eyewear,Vision Care,Fashion Eyewear,Eye Health,Optical Products,Online Eyewear Store,Stylish Frames,Trendy Eyewear,Home Eye Test,Eyewear Trends,Designer Eyeglasses,Affordable Eyewear,Eye Examination,Lens Options,Frame Collections,Vision Solutions,Reading Glasses,Blue Light Glasses,Progressive Lenses,UV Protection,Lens Coatings,Eye Accessories,Optical Fashion,Eye Protection,Eyewear Brands,Fashionable Eyeglasses,Premium Eyewear,Vision Correction,Optometry Services,Eyeglass Frames,Vision Enhancement,Eyewear Styles,Custom Eyewear,Lens Technology,Visual Comfort,Digital Eye Strain,Contact Lens Care,Eyewear Trends 2023,Eyeglass Fashion,Prescription Sunglasses,Colored Contact Lenses,Eyeglass Trends,Eyewear Accessories,Eyewear Deals,Vision Protection,Online Glasses Shop,Affordable Sunglasses,Fashionable Sunglasses,Prescription Lens Options,Lens Materials,Optometry Clinic,Eyewear Selection,Vision Wellness,Stylish Sunglasses,Fashionable Frames,Eyewear for Men,Eyewear for Women,Kids' Eyewear,Sports Eyewear,Trending Eyewear,Lens Treatments,Eyewear Online Shopping,Virtual Try-On,Online Eye Test,Eyewear Discounts,Prescription Contacts,Eyewear Savings,Eye Care Products,Lens Durability,Eyewear Guide,Vision Enhancers,Stylish Contact Lenses,Frame Materials,Prescription Glasses Online,Eyeglass Accessories,Eyewear Subscription,Lens Enhancements,Fashionable Contact Lenses,Eyewear Clearance,Eyeglass Care Tips,Prescription Eyewear Online,Polarized Sunglasses,Eyewear Trends 2023,Eyeglass Savings,Colored Glasses,Eyewear Collections,Designer Frames,Lens Protection,Online Optical Store,Eyewear for All Ages,Optical Health,UV Protection Eyewear,Eyewear Deals 2023,Vision Care Products,Lens Upgrades,Custom Lens Options,Eyewear Financing,Eyeglass Materials,Lens Comfort,Trendy Contact Lenses,Online Eyewear Sales,Vision Comfort,Eyewear Offers,Lens Clarity,Fashionable Eyewear 2023,Eyeglass Selection,Eyewear for Kids,Eyewear Trends 2023,Eye Care Solutions,Lens Coating Options,Eyeglass Trends 2023,Prescription Eyeglasses Online,Affordable Contacts,Stylish Eyewear 2023,Eyeglass Financing,Online Sunglasses Shop,Lens Customization,Lens Protection Options,Online Eyewear Discounts,Contact Lens Options,Designer Eyewear 2023,Lens Clarity Enhancements,Virtual Try-On Glasses,Eyewear Savings 2023,Blue Light Lens Options,Eyewear Sale,Kids' Eyewear Trends,Vision Enhancement Products,Stylish Frames 2023,Fashionable Sunglasses 2023,Lens Upgrade Options,Affordable Eyeglasses Online,Lens Coating Benefits,Prescription Sunglasses Online,Eyewear Accessories 2023,Lens Comfort Enhancements,Custom Lens Treatments,Eyeglass Trends 2023,Colored Contact Lens Options,Stylish Eyeglasses 2023,Trending Sunglasses,Online Eyewear Clearance,Lens Care Tips,Fashionable Eyeglasses 2023,Lens Durability Enhancements,Vision Care Savings,Eyewear Selection 2023,Stylish Sunglasses 2023,Lens Clarity Benefits,Eyeglass Protection,Lens Technology Advancements,Vision Wellness Products,Eyewear Subscription Services,Lens Protection Treatments,Designer Eyeglasses 2023,Trending Contact Lenses">
    <meta name="description" content="Elevate your style and vision with VisionVibe. Explore a curated collection of trendy sunglasses, glasses, and contact lenses. Our personalized home eye tests ensure clear vision and comfort. Discover the latest eyewear trends and expert eye care advice. Shop now for fashion-forward frames that redefine your look, all at VisionVibe.">
    <title>VisionVibe admin</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-xl navbar-dark fixed-top bg-dark navbar-nav flex-row flex-wrap ms-md-auto py-3">
            <div class="container-fluid">
                <a href="admin_index.php" class="d-flex align-items-center mb-2 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="logo.png" class="bi mx-2 mt-1" width="40" height="32">
                    <span class="fs-4">VisionVibe</span>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <main class="d-flex flex-nowrap">

        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark  pt-5 mt-5" style="width: 280px; min-height: 701px;">

            <ul class="nav nav-pills flex-column mb-auto ">
                <li class="nav-item text-center">
                    <a href="admin_index.php" class="nav-link active text-light" aria-current="page">
                        <b>Sales Inquiry</b>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a href="contact_inquiry.php" class="nav-link text-light">
                        <b>Contact Inquiry</b>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a href="home_inquiry.php" class="nav-link text-light">
                        <b>Home eye Test Inquiry</b>
                    </a>
                </li>
            </ul>

            <hr>

            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="admin.png" alt="" width="80" height="50" class="rounded-circle me-1">
                    <strong><?php echo $name ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="sign_out.php">Sign out</a></li>
                </ul>
            </div>
        </div>

        <div class="my-5 py-5 px-2">

            <table class="table text-center" style="width: 180%;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    include "connection.inc.php";
                    if ($conn) {
                        $selectquery = "SELECT * from inquiry";
                        $recordset = mysqli_query($conn, $selectquery);
                        while ($row = mysqli_fetch_array($recordset)) {
                    ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['Mobile_Number']; ?></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><?php echo $row['Address']; ?></td>
                                <td>
                                    <?php
                                    if (isset($_REQUEST['err'])) {
                                        echo ($_REQUEST['err']);
                                    }
                                    ?>
                                    <form action="Remove_Inquiry.php" method="post">
                                        <input type="hidden" name="inquiry_name" value="<?php echo $row['name']; ?>">
                                        <input type="submit" value="Remove Inquiry">
                                    </form>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
            </table>

        </div>
    </main>
</body>

</html>