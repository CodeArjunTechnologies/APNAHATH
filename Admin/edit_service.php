<?php
require("../dbcon.php");
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true && !isset($_SESSION['admin_hath_admin_email'])) {
    header("location: index.php");
    exit;
}
?>





<?php

// Get service details
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM apna_hath_services WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}

// Update service
if (isset($_POST['update'])) {
    $subcategory_id = intval($_POST['subcategory_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Handle image upload
    if (!empty($_FILES['image']['name'])) {
        $image = "service_image/" . time() . "_" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $image);
    } else {
        $image = $row['image']; // keep old one
    }

    $update = "UPDATE apna_hath_services 
               SET subcategory_id='$subcategory_id', name='$name', description='$description', image='$image' 
               WHERE id='$id'";
    if (mysqli_query($conn, $update)) {
        echo "<script>alert('Service updated successfully');window.location='view_service.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


$subQuery = "SELECT id, name FROM apna_hath_subcategory ORDER BY name ASC";
$subResult = mysqli_query($conn, $subQuery);
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/logo/pba_logo3.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/pba_logo3.png" type="image/x-icon">
    <title>Apnahath</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body> 
    <div class="loader-wrapper"> 
      <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner-1"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <div class="page-header row">
        <div class="header-logo-wrapper col-auto">
          <div class="logo-wrapper"><a href="#"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt=""/><img class="img-fluid for-dark" src="assets/images/logo/logo_light.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700">Edit Service</h4>
        </div>
        <!-- Page Header Start-->

        
        <?php include('includes/header.php')?>
        <!-- Page Header Ends -->
      </div>
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
         <?php include('includes/sidebar.php');?>
        
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              
              <div class="col-xl-12">
                <div class="card height-equal">
                  <div class="card-header">
                    <h4>Edit Service</h4>
                  </div>
                  <div class="card-body custom-input">






    <form method="POST" enctype="multipart/form-data">
        <label class="form-label" for="first-name">Subcategory</label>
        <select class="form-control up" name="subcategory_id" required>
            <option value="">-- Select Subcategory --</option>
            <?php while ($sub = mysqli_fetch_assoc($subResult)) { ?>
                <option value="<?php echo $sub['id']; ?>" 
                    <?php if ($sub['id'] == $row['subcategory_id']) echo "selected"; ?>>
                    <?php echo $sub['name']; ?>
                </option>
            <?php } ?>
        </select>
        <br><br>

        <label class="form-label" for="first-name">Name</label>
        <input class="form-control up" type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <br><br>

        <label class="form-label" for="first-name">Description</label>
        <textarea class="form-control up" name="description" required><?php echo $row['description']; ?></textarea>
        <br><br>

        <label class="form-label" for="first-name">Image</label>
        <input class="form-control up" type="file" name="image">
        <br>
        <?php if (!empty($row['image'])) { ?>
            <img src="<?php echo $row['image']; ?>" height="80" width="80">
        <?php } ?>
        <br><br>

        <button class="btn btn-primary" type="submit" name="update">Update</button>
    </form>









                    
                  </div>
                </div>
              </div>
            
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
       <?php include('includes/footer.php');?>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/sidebar-pin.js"></script>
    <script src="assets/js/slick/slick.min.js"></script>
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/header-slick.js"></script>
    <!-- calendar js-->
    <script src="assets/js/form-validation-custom.js"></script>
    <script src="assets/js/height-equal.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/script1.js"></script>
    <!--<script src="assets/js/theme-customizer/customizer.js"></script>-->
    <!-- Plugin used-->

    

    

  </body>
</html>