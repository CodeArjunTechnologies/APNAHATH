<?php
require("../dbcon.php");
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true && !isset($_SESSION['apna_hath_admin_email'])) {
    header("location: index.php");
    exit;
}

?>




<?php

$eid = $_GET['id'];



// Handle form submission
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    $image = $_FILES['picture']['name'];
    $tmp_name = $_FILES['picture']['tmp_name'];
    $upload_dir = "uploads/";
    $final_image = $row['image']; // default to existing image

    // If a new image is uploaded
    if (!empty($image)) {
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $new_image_name = uniqid() . "." . $image_ext;
        $target_file = $upload_dir . $new_image_name;

        // Move the new file
        if (move_uploaded_file($tmp_name, $target_file)) {
            // Delete the old image if it exists
            if (!empty($row['image']) && file_exists($upload_dir . $row['image'])) {
                unlink($upload_dir . $row['image']);
            }
            $final_image = $new_image_name;
        }
    }

    // Update the database
    $update_sql = "UPDATE apna_hath_category SET name=?, description=?, image=? WHERE id=?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("sssi", $name, $description, $final_image, $eid);

    if ($stmt->execute()) {
        echo "<script>alert('Service updated successfully'); window.location.href='view_category.php';</script>";
    } else {
        echo "<script>alert('Failed to update service');</script>";
    }

    $stmt->close();
    // $conn->close();
}
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
    <title>Edit Category</title>
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
          <h4 class="f-w-700">Edit Category</h4>
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
                    <h4>Edit Category</h4>
                  </div>
                  <div class="card-body custom-input">
                   
                   <?php 
$eid = $_GET['id'];
$sql = "SELECT * FROM apna_hath_category WHERE id='$eid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form id="myform" class="row g-3" method="post" action="" enctype="multipart/form-data">

  <div class="col-12"> 
                        <label class="form-label" for="first-name">Category Name</label>
                        <input value="<?php echo $row['name']; ?>" name="name" class="form-control up" id="first-name" type="text" placeholder="" aria-label="First name" >
                      </div>


                       <div class="col-12"> 
                        <label class="form-label" for="first-name">Description</label>
                        
                        <textarea name="description" class="form-control up" id="first-name" type="textarea" placeholder="" aria-label="First name" rows="5"> <?php echo $row['description']; ?> </textarea>
                      </div>

                      
                                                                
                      
  <!-- Profile Picture -->
  <div class="col-12"> 
    <label class="form-label">Profile Picture</label><br>
    <?php if(!empty($row['image'])) { ?>
      <img src="uploads/<?php echo $row['image'];?>" alt="Profile Picture" width="150" height="150" style="border:1px solid #ccc; margin-bottom:10px; border-radius:5px;"><br>
    <?php } ?>
    <input name="picture" class="form-control" type="file">
  </div>

  
  <div class="col-12">
    <button name="submit" class="btn btn-primary" type="submit">Submit</button>
    <a href="view_category.php" class="btn border-dashed-danger">Back</a>
  </div>
</form>




                    <!-- <form id="myform" class="row g-3" method="post" action="" enctype="multipart/form-data">
                      <div class="col-12"> 
                        <label class="form-label" for="first-name">Title</label>
                        <input name="title" class="form-control up" id="first-name" type="text" value="<?php echo $row['title'];?>" aria-label="First name" >
                      </div>

                      <div class="col-12"> 
                        <label class="form-label" for="first-name">Date</label>
                        <input name="date" class="form-control up" id="first-name" type="date" placeholder="" aria-label="First name" value="<?php echo $row['blog_date'];?>" >
                      </div>
                      
                      
                      <div class="col-12"> 
                        <label class="form-label" for="first-name">Description</label>
                        <input name="description" class="form-control" id="" type="text" value="<?php echo $row['description'];?>" placeholder="" aria-label="First name" >
                      </div>
                     
                     <div class="col-12">
                        <label class="form-label" for="exampleInputFile">Picture</label>
                        <img src="blog_image/<?php echo $row['image'];?>" width="120" height="120">
                     <div class="input-group">

                      <div class="col-12">
                        <input type="hidden" name="oldpic" value="<?php echo $row['image'];?>"><br>
                        <input name="newpic" type="file" class="custom-file-input" id="exampleInputFile" class="form-control"><br>
                      </div>
                     
                    </div class="form-group"><br>
                    <button type="submit" name="SUBMIT" class="btn btn-primary">Image upload</button>
                      </div>
                                                                
                    
                    
                      <div class="col-12">
                        <button name="submit" class="btn btn-primary" type="submit" id="submit">Submit</button>
                        <a href="view_blog.php" class="btn border-dashed-danger">Back</a>
                      </div>
                    </form> -->



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