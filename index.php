<?php include('header.php'); ?>

<?php include('dbcon.php'); ?>
        <!-- Navbar & Hero End -->
<style type="text/css">

    /* Fix carousel caption overlap on small screens */
@media (max-width: 767px) {
  .carousel-caption {
    position: relative; /* avoid overlapping */
    padding: 1rem !important;
    text-align: center;
  }

  .carousel {
    margin-bottom: 30px; /* space below slider on mobile */
  }

  .carousel-caption h1 {
    font-size: 1.8rem !important; /* smaller heading */
    line-height: 1.3;
  }

  .carousel-caption p {
    font-size: 1rem !important;
    margin-bottom: 1rem;
  }

  .carousel-caption .btn {
    padding: 0.5rem 1.2rem;
    font-size: 0.9rem;
  }

  .carousel-item img {
    height: 320px; /* fix height for mobile */
    object-fit: cover;
  }
}

</style>

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="images/1.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <!-- <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Transforming Spaces, One Service at a Time!</h4> -->
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Transforming Spaces, One Service at a Time!</h1>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">
                                    At Apnahath, we believe every home deserves the best care and attention. Our dedicated team is here to provide reliable and efficient services, ensuring your home remains a haven of comfort and joy.
                                </p>
                                <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/2.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <!-- <h5 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Solution For All Type Of Visas</h5> -->
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s"> Bringing Excellence to Every Corner of Your Home!</h1>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">
                                  With Apnahath, your home is in trusted hands. From repairs to renovations, we deliver quality craftsmanship and heartfelt service—because your comfort is our mission.
                                </p>

                                <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Modal Search Start -->
       <!--  <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        </div> -->
        <!-- Modal Search End -->

        <div class="d-block d-md-none" style="height:40px;"></div>

        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="bg-light rounded">
                            <img src="images/3.jpg" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                            <!-- <img src="images/3.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image"> -->
                        </div>
                    </div>
                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                        <h5 class="sub-title pe-3">How Apnahath Can Help You ?</h5>
                        <h2 style="" class="display-5 mb-4">Trusted Home Solutions for Every Need</h2>

                        <p class="mb-4">At Apnahath, we believe every home deserves the best care and attention. Our dedicated team is here to provide reliable and efficient services, ensuring your home remains a haven of comfort and joy</p>

                        <!-- <div class="row gy-4 align-items-center">

                            <div class="col-12 col-sm-4 d-flex align-items-center">
                                <i class="fas fa-map-marked-alt fa-3x text-secondary"></i>
                                <h5 class="ms-4">On Demand Service</h5>
                            </div>
                            <div class="col-12 col-sm-4 d-flex align-items-center">
                                <i class="fas fa-passport fa-3x text-secondary"></i>
                                <h5 class="ms-4">Service tracking & history</h5>
                            </div>

                            <div class="col-12 col-sm-4 d-flex align-items-center">
                                <i class="fas fa-passport fa-3x text-secondary"></i>
                                <h5 class="ms-4">Task schedule & reminder</h5>
                            </div>

                            <div class="col-2 col-md-3">
                                <div class="bg-light text-center rounded p-1">
                                    <div class="mb-0">
                                        <i class="fas fa-ticket-alt fa-4x text-primary"></i>
                                    </div>
                                    <h1 class="display-5 fw-bold mb-0">34</h1>
                                    <p class="text-muted mb-0">Years of Experience</p>
                                </div>
                            </div>
                            <div class="col-8 col-md-9">
                                <div class="mb-1">
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Quick On-Demand Support Whenever You Need It</p>
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Seamless Service Tracking with Full History Access</p>
                                    <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Smart Task Scheduling with Timely Reminders</p>
                                </div>

                                <div class="d-flex flex-wrap">
                                    <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                        <a href="" class="position-relative wow tada" data-wow-delay=".9s">
                                            <i class="fa fa-phone-alt text-primary fa-3x"></i>
                                            <div class="position-absolute" style="top: 0; left: 25px;">
                                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <span class="text-primary">Have any questions?</span>
                                        <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">Free: +91-8794180180</span>
                                    </div>
                                </div>
                            </div> -->

                           <div class="row align-items-center">
    <!-- Left: Experience Box -->
    <div class="col-12 col-md-3 mb-4 mb-md-0">
        <div class="bg-light text-center rounded p-3">
            <div class="mb-2">
                <i class="fas fa-ticket-alt fa-3x text-primary"></i> <!-- Medium icon -->
            </div>
            <h1 class="display-6 fw-bold mb-1">8</h1> <!-- Medium heading -->
            <p class="text-muted fs-6 mb-0">Years of Experience</p>
        </div>
    </div>

    <!-- Right: Info and Contact -->
    <div class="col-12 col-md-9">
        <div class="mb-3">
            <p class="text-primary h6 mb-2"><i class="fa fa-check-circle text-secondary me-2"></i> Quick On-Demand Support Whenever You Need It</p>
            <p class="text-primary h6 mb-2"><i class="fa fa-check-circle text-secondary me-2"></i> Seamless Service Tracking with Full History Access</p>
            <p class="text-primary h6 mb-3"><i class="fa fa-check-circle text-secondary me-2"></i> Smart Task Scheduling with Timely Reminders</p>
        </div>

        <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
            <div id="phone-tada" class="me-sm-4 mb-3 mb-sm-0">
                <a href="tel:+918794180180" class="position-relative wow tada" data-wow-delay=".9s">
                    <i class="fa fa-phone-alt text-primary fa-3x"></i> <!-- Medium phone icon -->
                    <div class="position-absolute" style="top: 0; left: 25px;">
                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                    </div>
                </a>
            </div>
            <div>
                <span class="text-primary fs-6">Have any questions?</span><br>
                <span class="text-secondary fw-bold fs-5" style="letter-spacing: 1px;">Free: +91-8794180180</span>
            </div>
        </div>
    </div>
</div>









                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->






         <!-- Services Start -->
        <div class="container-fluid service overflow-hidden pt-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                       <h5 class="sub-title text-primary px-3">Categories</h5>
                    </div>
                    <h1 class="display-5 mb-4">Explore Our Range of Expert Services</h1>
                    <p class="mb-0">From home repairs and salon services to software development and documentation assistance — Apnahath offers a wide spectrum of reliable, on-demand solutions tailored to your needs. We bring quality, convenience, and professionalism right to your doorstep.</p>
                </div>
                <div class="row g-4">


                     <?php
                      $sql = "SELECT * FROM apna_hath_category ORDER BY id DESC LIMIT 8;";
                      $result = mysqli_query($conn, $sql);

                      while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['name'];
                        $description = $row['description'];
                        $image = !empty($row['image']) ? "Admin/uploads/" . $row['image'] : '';
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
                                       <a href="subcategory.php?id=<?php echo $row['id']; ?>" class="h4 text-white mb-0"><?php echo htmlspecialchars($name); ?></a>
                                    </div>
                                    <a class="btn bg-light text-secondary rounded-pill py-1 px-3 mb-2" href="subcategory.php?id=<?php echo $row['id']; ?>">View More</a>
                            </div>
                            <div class="service-content pb-4">
                               <a href="subcategory.php?id=<?php echo $row['id']; ?>">
                                  <h4 class="text-white mb-3 py-3"><?php echo htmlspecialchars($name); ?></h4>
                               </a>
                             <div class="px-4">
                                <p class="mb-4"><?php echo htmlspecialchars($description); ?></p>
                                <a class="btn btn-primary border-secondary rounded-pill py-1 px-3" href="subcategory.php?id=<?php echo $row['id']; ?>">View More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <?php } ?>

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
                    </div> -->











                    <!-- <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="images/cat (2).png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Room & Walls Paintings</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Enquiry Now</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Room & Walls Paintings</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">
                                            Refresh your space with expert painting and flawless finishes by professionals.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-1 px-3" href="#">Enquiry Now</a>
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
                                            <a href="#" class="h4 text-white mb-0">Men Beauty Services</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Enquiry Now</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Men Beauty Services</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">
                                            Professional men’s grooming services at home – skincare, facials, hair, and beard care.</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-1 px-3" href="#">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->



                    <div class="col-12 d-flex justify-content-center">
                        <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="service.php">View More Services</a>
                    </div>



                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- Counter Facts Start -->
        <div class="container-fluid counter-facts py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Happy Customers</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">29</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-passport"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Total Covered Distance</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">48</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;">K</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Services</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">83</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Experts</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">3</span>
                                    <h4 class="text-secondary mb-0" style="font-weight: 600; font-size: 25px;"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Facts End -->


       



        <!-- Features Start -->
        <div class="container-fluid features overflow-hidden py-5">
            <div class="container">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">Trending Service</h5>
                    </div>
                    <h1 class="display-5 mb-4">Customized Services Tailored to Your Needs</h1>
                    <p class="mb-0">
                    We understand that every client has unique requirements. That’s why we offer flexible, tailor-made solutions designed to meet your specific needs — delivered with professionalism, reliability, and care.
                   </p>
                </div>
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                               <i class="fas fa-spa fa-4x text-primary"></i> 
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Facial</h5>
                                <p class="mb-3">A rejuvenating facial treatment that hydrates and revitalizes your skin.</p>
                                <!-- <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>

                                <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More Features</a> -->
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <h5 class="mb-0 text-primary fw-bold">Starting at ₹700</h5>
                                    <a class="btn btn-primary border-secondary rounded-pill py-1 px-3 wow fadeInUp" data-wow-delay="0.1s" href="#">Book Now</a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <i class="fas fa-hand-holding-water fa-4x text-primary"></i>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Massage</h5>
                                <p class="mb-3">Relaxing massage service to relieve stress and tension.</p>
                                  <div class="d-flex justify-content-between align-items-center mt-4">
                                    <h5 class="mb-0 text-primary fw-bold">Starting at ₹950</h5>
                                    <a class="btn btn-primary border-secondary rounded-pill py-1 px-3 wow fadeInUp" data-wow-delay="0.1s" href="#">Book Now</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <i class="fas fa-cut fa-4x text-primary"></i>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Waxing</h5>
                                <p class="mb-3">This service offers a complete waxing solution for smooth and hair-free skin.</p>

                                 <div class="d-flex justify-content-between align-items-center mt-4">
                                    <h5 class="mb-0 text-primary fw-bold">Starting at ₹500</h5>
                                    <a class="btn btn-primary border-secondary rounded-pill py-1 px-3 wow fadeInUp" data-wow-delay="0.1s" href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <i class="fas fa-users fa-4x text-primary"></i>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Direct Interviews</h5>
                                <p class="mb-3">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                                <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div> -->


                    <!-- <div class="col-12">
                        <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More Features</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Features End -->



        <!-- Countries We Offer Start -->
        <div class="container-fluid country overflow-hidden py-5">
            <div class="container">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">CHECKOUT OUR APP</h5>
                    </div>
                    <h1 class="display-5 mb-4">Our Service is only a single click away</h1>
                    <p class="mb-0">
                     Experience convenience like never before — book appointments, explore services, and get instant updates through our app. Quick, simple, and just a tap away!
                    </p> <br>

                    <div class="col-12">
                        <a class="btn btn-primary border-secondary rounded-pill py-2 px-4 wow fadeInUp" data-wow-delay="0.1s" href="https://play.google.com/store/apps/details?id=com.apnahath.application.user">Download Our App</a>
                    </div>

                </div>



                <!--------------------->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


                <div class="swiper countrySwiper">
                  <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                     <div class="swiper-slide">
                       <div class="country-item">
                          <div class="rounded overflow-hidden">
                            <img src="images/s1.png" class="img-fluid w-100 rounded" alt="Image">
                          </div>
                          <!--  <div class="country-flag">
                          <img src="images/s1.png" class="img-fluid rounded-circle" alt="Image">
                          </div> -->
                         <!-- <div class="country-name">
                         <a href="#" class="text-white fs-4">Brazil</a>
                         </div> -->
                       </div>
                     </div>

                     
                     <!-- Repeat for each item -->
                    <div class="swiper-slide">
                      <div class="country-item">
                        <div class="rounded overflow-hidden">
                          <img src="images/s2.png" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                      </div>
                    </div>


                    <div class="swiper-slide">
                      <div class="country-item">
                        <div class="rounded overflow-hidden">
                          <img src="images/s3.png" class="img-fluid w-100 rounded" alt="Image">
                       </div>
                      </div>
                    </div>

     
                    <div class="swiper-slide">
                      <div class="country-item">
                        <div class="rounded overflow-hidden">
                          <img src="images/s4.png" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                      </div>
                    </div>


                    <div class="swiper-slide">
                      <div class="country-item">
                        <div class="rounded overflow-hidden">
                          <img src="images/s5.png" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                      </div>
                    </div>


                    <div class="swiper-slide">
                      <div class="country-item">
                        <div class="rounded overflow-hidden">
                          <img src="images/s6.png" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                      </div>
                    </div>


                    <div class="swiper-slide">
                      <div class="country-item">
                        <div class="rounded overflow-hidden">
                          <img src="images/s7.png" class="img-fluid w-100 rounded" alt="Image">
                       </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="country-item">
                       <div class="rounded overflow-hidden">
                         <img src="images/s8.png" class="img-fluid w-100 rounded" alt="Image">
                       </div>
                      </div>
                    </div>


                   <!-- <div class="swiper-slide">
                          <div class="country-item">
                             <div class="rounded overflow-hidden">
                               <img src="images/s9.png" class="img-fluid w-100 rounded" alt="Image">
                             </div>
                          </div>
                      </div> -->


                    <div class="swiper-slide">
                      <div class="country-item">
                        <div class="rounded overflow-hidden">
                           <img src="images/s10.png" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                      </div>
                    </div>


                    <div class="swiper-slide">
                       <div class="country-item">
                         <div class="rounded overflow-hidden">
                           <img src="images/s11.png" class="img-fluid w-100 rounded" alt="Image">
                         </div>
                      </div>
                    </div>

                    <!-- Add other countries similarly -->

                    </div>

                     <!-- Optional Navigation Buttons -->
                     <div class="swiper-button-next"></div>
                     <div class="swiper-button-prev"></div>
                 </div>

                 
                  <script>
                   var swiper = new Swiper(".countrySwiper", {
                    slidesPerView: 1,
                    spaceBetween: 30,
                     breakpoints: {
                       576: {
                     slidesPerView: 2,
                     },
                       992: {
                     slidesPerView: 3,
                     },
                     1200: {
                     slidesPerView: 4,
                     },
                     },
                      navigation: {
                       nextEl: ".swiper-button-next",
                       prevEl: ".swiper-button-prev",
                      },
                     loop: true,
                    });
                   </script>


                <!----------------------->
                <!-- <div class="row g-4 text-center">

                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/country-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/brazil.jpg" class="img-fluid rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                                <a href="#" class="text-white fs-4">Brazil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/country-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/india.jpg" class="img-fluid rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                                <a href="#" class="text-white fs-4">india</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/country-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/usa.jpg" class="img-fluid rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                                <a href="#" class="text-white fs-4">New York</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/country-4.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/italy.jpg" class="img-fluid rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                                <a href="#" class="text-white fs-4">Italy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More Countries</a>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Countries We Offer End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial overflow-hidden pb-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">OUR CLIENTS RIVIEWS</h5>
                    </div>
                    <h1 class="display-5 mb-4">What Our Clients Say</h1>
                    <p class="mb-0">
                    Hear from our happy customers about their experiences with our trusted home services—quality, reliability, and satisfaction guaranteed.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">
                    <div class="testimonial-item">
                        <div class="testimonial-content p-4 mb-5">
                            <p class="fs-5 mb-0">
                                Iam very happy to get such a service provider in my home town Agartala. Always been an extra hand for any service..keep it up Apnahath👍
                            </p>
                            <div class="d-flex justify-content-end">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle" src="review_image/1.png" alt="img">
                            </div>
                            <div class="my-auto">
                                <h5>প্রতীক পোদ্দার</h5>
                                <p class="mb-0">Customer</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content p-4 mb-5">
                            <p class="fs-5 mb-0">Very prompt & efficient service provider. I asked for the electrical work at my house..Very gentle efficient on time service was given to me.. wish all the success for this new innovative idea..service provider at Agartala.
                            </p>
                            <div class="d-flex justify-content-end">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle" src="review_image/2.png" alt="img">
                            </div>
                            <div class="my-auto">
                                <h5>Drsarbani Devbarman</h5>
                                <p class="mb-0">Customer</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content p-4 mb-5">
                            <p class="fs-5 mb-0">Very helpful app it is. I am sure after using once, everyone will become apnahath's fan. The workers are vry friendly n well behavior. The rate is also very reasonable.
                            </p>
                            <div class="d-flex justify-content-end">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle" src="review_image/3.png" alt="img">
                            </div>
                            <div class="my-auto">
                                <h5>Suchismita Saha</h5>
                                <p class="mb-0">Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->



        <!-- Training Start -->
        <!-- <div class="container-fluid training overflow-hidden bg-light py-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">CHECK OUR TRAINING</h5>
                    </div>
                    <h1 class="display-5 mb-4">Get the Best Coacing Service Training with Our Travisa</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/training-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">IELTS</a>
                                    <a href="#" class="h4 text-white mb-0">Coaching</a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">IELTS Coaching</h4></a>
                                <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, veritatis.</p>
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/training-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">TOEFL</a>
                                    <a href="#" class="h4 text-white mb-0">Coaching</a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">TOEFL Coaching</h4></a>
                                <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, veritatis.</p>
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/training-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">PTE</a>
                                    <a href="#" class="h4 text-white mb-0">Coaching</a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">PTE Coaching</h4></a>
                                <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, veritatis.</p>
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/training-4.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">OET</a>
                                    <a href="#" class="h4 text-white mb-0">Coaching</a>
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">OET Coaching</h4></a>
                                <p class="text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, veritatis.</p>
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">View More</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Training End -->


        <!-- Contact Start -->
        <!-- <div class="container-fluid contact overflow-hidden pb-5">
            <div class="container py-5">
                <div class="office pt-5">
                    <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary px-3">Worlwide Offices</h5>
                        </div>
                        <h1 class="display-5 mb-4">Explore Our Office Worldwide</h1>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-2.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Australia</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">+123.456.7890</a>
                                    <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                                    <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-1.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Canada</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">(012) 0345 6789</a>
                                    <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                                    <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-3.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">United Kingdom</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">01234.567.890</a>
                                    <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                                    <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-4.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">India</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2">+123.45.67890</a>
                                    <a href="#" class="text-muted fs-5 mb-2">travisa@example.com</a>
                                    <p class="mb-0">123, First Floor, 123 St Roots Terrace, Los Angeles 90010 Unitd States of America.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Contact End -->


        <!-- Footer Start -->
        <?php include('footer.php'); ?>
        <!-- Footer End -->

        
       
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