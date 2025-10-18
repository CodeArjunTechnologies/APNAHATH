<?php

require ("../dbcon.php");

?>


<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true && !isset($_SESSION['apna_hath_admin_email'])) {
    header("location: index.php");
    exit;
}

?>

<!-- Fetching data from Blog -->
<?php
$sql = "SELECT * FROM apna_hath_category;";
$result = mysqli_query($conn, $sql);
?>



<?php

if (isset($_GET['delid']) && isset($_GET['ppic'])) {
    $id = intval($_GET['delid']);
    $image = $_GET['ppic'];

    $imagePath = "uploads/" . $image; 
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    $query = "DELETE FROM apna_hath_category WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Service deleted successfully'); window.location='view_category.php';</script>";
    } else {
        echo "<script>alert('Error deleting service');</script>";
    }

    $stmt->close();
    $con->close();
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
    <title>Service Details</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatable-extension.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- add korlam -->
  <link href="../assets/libs/chartist/chartist.min.css" rel="stylesheet">
<!-- DataTables -->
        <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="../assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />   

        <!-- add korlam -->
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends--> 
    <div class="loader-wrapper"> 
      <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner-1"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <div class="page-header row">
        <div class="header-logo-wrapper col-auto">
          <div class="logo-wrapper"><a href="#"><img class="img-fluid for-light" src="assets/images/logo/pba_logo3.png" alt=""/><img class="img-fluid for-dark" src="assets/images/logo/logo_light.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700">Category Details</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
             <!-- <li class="breadcrumb-item"><a href="dashboard.php"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Extension Data Tables</li>
              <li class="breadcrumb-item f-w-400 active">Autofill Datatables</li>-->
            </ol>
          </nav>
        </div>
        <!-- Page Header Start-->
        
        <?php include('includes/header.php');?>
        <!-- Page Header Ends                              -->
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
              <div class="col-sm-12">
                <div class="card">
                
                </div>
              </div>
              
                </div>
              </div>
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0 card-no-border">
                    <h4>Category Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="dt-ext table-responsive theme-scrollbar">
                      <!-- <a class="btn btn-pill btn-air-primary btn-primary-gradien" href="add_service.php">Add Service</a> --> <br><br>
                      <table class="table table-bordered dt-responsive nowrap" id="datatable" data-order='[[ 0, "desc" ]]'>
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php while($row=mysqli_fetch_assoc($result)){ ?>
                          <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['description'];?></td>
                            
                            <td><?php if (!empty($row['image'])) { ?>
                               <img height="80" width="80" src="uploads/<?php echo htmlspecialchars($row['image']); ?>" alt="Image">
                               <?php } else { echo "No Image"; } ?></td>
                            
                           

                            
                            
                            <td>  
                              <ul class="action"> 
                                  <li class="edit"> <a href="edit_category.php?id=<?php echo $row['id'];?>"><i class="icon-pencil-alt"></i></a></li>
                              </ul>
                            </td> 
                                    
                           
                              <td>
                                <ul class="action"> 
                                  <li class="delete" ><a href="view_category.php?delid=<?php echo $row['id']; ?>&ppic=<?php echo $row['image']; ?>" onclick="return confirm('Do you really want to Delete ?');"><i class="icon-trash"></i></a></li>
                                </ul>  
                              </td>

                                   


                          </tr>
                        <?php } ?>
                          
                          
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
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
    <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/jszip.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
    <script src="assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
    <script src="assets/js/datatable/datatable-extension/custom.js"></script>
    <script src="assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/script1.js"></script>
    <!--<script src="../assets/js/theme-customizer/customizer.js"></script>-->
    <!-- Plugin used-->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        

        <!-- Peity chart-->
        <!--<script src="assets/libs/peity/jquery.peity.min.js"></script>-->

        <!-- Plugin Js-->
        <!--<script src="assets/libs/chartist/chartist.min.js"></script>
        <script src="assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>-->

       <!-- <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>-->
        <script src="assets/new_js/pages/datatables.init.js"></script>
        <script type="text/javascript">
           $('#datatable').dataTable({
        "bStateSave": true,
        "fnStateSave": function (oSettings, oData) {
            localStorage.setItem('offersDataTables', JSON.stringify(oData));
        },
        "fnStateLoad": function (oSettings) {
            return JSON.parse(localStorage.getItem('offersDataTables'));
        }
    });
        </script>
  </body>
</html>