<?php include('header.php'); ?>
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
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Service Enquiry</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Service Enquiry</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center mb-5">
                    <h5 class="sub-title text-primary">Service Enquiry</h5>
                    <h1 class="display-5 mb-3">Let’s Discuss Your Needs</h1>
                    <p class="mb-0">Please fill out the form below and we’ll get back to you as soon as possible.</p>
                </div>

                <form action="service_enquiry_action.php" method="POST">
                    <div class="row g-4">
                       
                       <?php 
                     
                       $service = isset($_GET['service']) ? urldecode($_GET['service']) : '';
                       ?>

                        <input type="hidden" name="service_name" value="<?php echo $service; ?>">

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                                <label for="phone">Phone Number</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="address" id="service" placeholder="Address">
                                <label for="service">Address</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="message" id="message" placeholder="Message" style="height: 160px" required></textarea>
                                <label for="message">Your Message</label>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button name="submit" class="btn btn-primary px-5 py-3" type="submit">Submit Enquiry</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>







        <!-- Contact End -->

        <!-- Footer Start -->
        <?php include('footer.php');?>
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