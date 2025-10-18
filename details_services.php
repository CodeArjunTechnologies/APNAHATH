<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Services</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <?php


$category_name = "Our Services";
$category_description = "From home repairs and salon services to software development and documentation assistance — Apnahath offers a wide spectrum of reliable, on-demand solutions tailored to your needs. We bring quality, convenience, and professionalism right to your doorstep.";

if (isset($_GET['id'])) {
    $category_id = intval($_GET['id']); // sanitize input

    $sql_cat = "SELECT name, description FROM apna_hath_subcategory WHERE id = '$category_id' LIMIT 1";
    $result_cat = mysqli_query($conn, $sql_cat);

    if ($row_cat = mysqli_fetch_assoc($result_cat)) {
        $category_name = $row_cat['name'];
        $category_description = $row_cat['description'];
    }
}
?>




        <!-- Services Start -->
        <div class="container-fluid service overflow-hidden pt-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                       <h5 class="sub-title text-primary px-3">Sub Categories</h5>
                    </div>
                    <h1 class="display-5 mb-4">
    <?php echo htmlspecialchars($category_name); ?>
</h1>
<p class="mb-0">
    <?php echo htmlspecialchars($category_description); ?>
</p>
                </div>
                <div class="row g-4">

                   <?php


if (isset($_GET['id'])) {
    $subcategory_id = intval($_GET['id']); 

    $sql = "SELECT * FROM apna_hath_services WHERE subcategory_id = '$subcategory_id' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $description = $row['description'];
        $image = !empty($row['image']) ? "Admin/" . $row['image'] : '';
        $encoded_name = urlencode($name);
?>
    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item">
            <div class="service-inner">
                <div class="service-img">
                    <img src="<?php echo $image; ?>" class="img-fluid w-100 rounded" alt="<?php echo htmlspecialchars($name); ?>">
                </div>
                <div class="service-title">
                    <div class="service-title-name">
                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                            <a href="service_enquiry.php?service=<?php echo $encoded_name; ?>" class="h4 text-white mb-0">
                                <?php echo htmlspecialchars($name); ?>
                            </a>
                        </div>
                        <a class="btn bg-light text-secondary rounded-pill py-1 px-3 mb-2" href="service_enquiry.php?service=<?php echo $encoded_name; ?>">Enquiry Now</a>
                    </div>
                    <div class="service-content pb-4">
                        <a href="service_enquiry.php?service=<?php echo $encoded_name; ?>">
                            <h4 class="text-white mb-3 py-3"><?php echo htmlspecialchars($name); ?></h4>
                        </a>
                        <div class="px-4">
                            <p class="mb-4"><?php echo htmlspecialchars($description); ?></p>
                            <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="service_enquiry.php?service=<?php echo $encoded_name; ?>">Enquiry Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    } 
} else {
    echo "<p class='text-center text-danger'>No Category Selected!</p>";
}
?>



                   <!--  <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="images/cat (6).png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="service_enquiry.php?service=Cleaning%20%26%20Post%20Control" class="h4 text-white mb-0">Cleaning & Post Control</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-1 px-3 mb-2" href="service_enquiry.php">Enquiry Now</a></a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="service_enquiry.php?service=Cleaning%20%26%20Post%20Control"><h4 class="text-white mb-3 py-3">Cleaning & Post Control</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">
                                            Ensure a clean, pest-free environment with our expert cleaning and pest control services for your home or workplace.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="service_enquiry.php?service=Cleaning%20%26%20Post%20Control">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="images/cat (4).png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="service_enquiry.php?service=AC%20%26%20Appliance%20Repair" class="h4 text-white mb-0">AC & Appliance Repair</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-1 px-3 mb-2" href="#">Enquiry Now</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="service_enquiry.php?service=AC%20%26%20Appliance%20Repair"><h4 class="text-white mb-3 py-3">AC & Appliance Repair</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">Fast, reliable repair for appliances and ACs by expert technicians—convenient and long-lasting.</p>
                                            
                                            <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="service_enquiry.php?service=AC%20%26%20Appliance%20Repair">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="images/cat_12.png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="service_enquiry.php?service=Quick%20Home%20Repairs" class="h4 text-white mb-0">Quick Home Repairs</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-1 px-3 mb-2" href="#">Enquiry Now</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="service_enquiry.php?service=Quick%20Home%20Repairs"><h4 class="text-white mb-3 py-3">Quick Home Repairs</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">
                                            Enjoy year-round comfort with fast, reliable AC and appliance repair by expert technicians.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="service_enquiry.php?service=Quick%20Home%20Repairs">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="images/cat (7).png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="service_enquiry.php?service=Electrician%2C%20Plumber%20%26%20Carpenter" class="h4 text-white mb-0">Electrician, Plumber & Carpenter</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-1 px-3 mb-2" href="#">Enquiry Now</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="service_enquiry.php?service=Electrician%2C%20Plumber%20%26%20Carpenter"><h4 class="text-white mb-4 py-3">Electrician, Plumber & Carpenter</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">
                                            Expert electricians, plumbers, and carpenters delivering safe and timely home repairs.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="service_enquiry.php?service=Electrician%2C%20Plumber%20%26%20Carpenter">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="images/cat_11.png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="service_enquiry.php?service=Carpenter%20%28Home%20Maintenance%29" class="h4 text-white mb-0">Carpenter (Home Maintenance)</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-1 px-3 mb-2" href="#">Enquiry Now</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="service_enquiry.php?service=Carpenter%20%28Home%20Maintenance%29"><h4 class="text-white mb-4 py-3">Carpenter (Home Maintenance)</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">
                                            Skilled carpenters for furniture repairs and custom woodwork—reliable and doorstep service.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="service_enquiry.php?service=Carpenter%20%28Home%20Maintenance%29">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="images/cat (9).png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="service_enquiry.php?service=Festive%20Light%20Decoration" class="h4 text-white mb-0">Festive Light Decoration</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Enquiry Now</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="service_enquiry.php?service=Festive%20Light%20Decoration"><h4 class="text-white mb-4 py-3">Festive Light Decoration</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">
                                            Trained carpenters for doors, windows, and furniture—quality repairs and custom fittings at home.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="service_enquiry.php?service=Festive%20Light%20Decoration">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="images/cat (10).png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="service_enquiry.php?service=Festive%20Light%20Decoration" class="h4 text-white mb-0">Home Installation</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Enquiry Now</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="service_enquiry.php?service=Festive%20Light%20Decoration"><h4 class="text-white mb-4 py-3">Home Installation</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">
                                            Safe and efficient installation of lights, shelves, appliances, and more—right at your home.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="service_enquiry.php?service=Festive%20Light%20Decoration">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="images/cat (1).png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="service_enquiry.php?service=Women%20Beauty%20Services" class="h4 text-white mb-0">Women Beauty Services </a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Enquiry Now</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="service_enquiry.php?service=Women%20Beauty%20Services"><h4 class="text-white mb-4 py-3">Women Beauty Services</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">
                                            Certified beauticians offering facials, waxing, hair spa, and more—pampering you at home.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="service_enquiry.php?service=Women%20Beauty%20Services">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="images/cat (2).png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="service_enquiry.php?service=Room%20%26%20Walls%20Paintings" class="h4 text-white mb-0">Room & Walls Paintings</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Enquiry Now</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="service_enquiry.php?service=Room%20%26%20Walls%20Paintings"><h4 class="text-white mb-4 py-3">Room & Walls Paintings</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">
                                            Refresh your space with expert painting and flawless finishes by professionals.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="service_enquiry.php?service=Room%20%26%20Walls%20Paintings">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="images/cat (3).png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="service_enquiry.php?service=Men%20Beauty%20Services" class="h4 text-white mb-0">Men Beauty Services</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Enquiry Now</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="service_enquiry.php?service=Men%20Beauty%20Services"><h4 class="text-white mb-4 py-3">Men Beauty Services</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">
                                            Professional men’s grooming services at home – skincare, facials, hair, and beard care.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="service_enquiry.php?service=Men%20Beauty%20Services">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->




                </div>
            </div>
        </div>
        <!-- Services End -->


        
        <!-- Training End -->

        <!-- Footer Start -->
        <?php include('footer.php') ?>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>