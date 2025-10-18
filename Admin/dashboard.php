<?php 
include('../dbcon.php');
?>
<?php
$sql5 = "SELECT count(id) as total from apna_hath_category";
$result5 = mysqli_query($conn, $sql5);
$row5=mysqli_fetch_assoc($result5); 

// $sql6 = "SELECT count(id) as total from sikder_student_admission;";
// $result6 = mysqli_query($conn, $sql6);
// $row6=mysqli_fetch_assoc($result6); 


// $sql7="SELECT COUNT(id) AS total 
// FROM sikder_student_admission
// WHERE DATE_FORMAT(admission_date, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m')";
// $result7 = mysqli_query($conn, $sql7);
// $row7=mysqli_fetch_assoc($result7);


// $sql8="SELECT COALESCE(SUM(payment_amount), 0) AS total_payment 
// FROM sikder_courses_enrollment
// WHERE YEAR(payment_date) = YEAR(CURDATE()) 
// AND MONTH(payment_date) = MONTH(CURDATE())";
// $result8 = mysqli_query($conn, $sql8);
// $row8=mysqli_fetch_assoc($result8);


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
    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Dashboard</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">
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
    <!-- page-wrapper StartMy Currencies-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <div class="page-header row">
        <div class="header-logo-wrapper col-auto">
          <div class="logo-wrapper"><a href="#"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt=""/><img class="img-fluid for-dark" src="assets/images/logo/logo_light.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700"> Dashboard</h4>
          <nav>
           <!--  <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Dashboard</li>
              <li class="breadcrumb-item f-w-400 active">Education</li>
            </ol> -->
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
          <div class="container-fluid dashboard-4">
            <div class="row">
              <div class="col-xl-6 col-md-12 proorder-md-1">  
                <div class="row"> 


                 <!--  <div class="col-xl-6 col-sm-6"> 
                    <div class="card">
                      <div class="card-body student">
                        <div class="d-flex gap-2 align-items-end"> 
                          <div class="flex-grow-1">
                            <h2><?php echo $row5['total'];?></h2>
                            <p class="mb-0 text-truncate"> Total Courses</p>
                            
                          </div>
                          <div class="flex-shrink-0"><img src="assets/images/dashboard-4/icon/student.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="col-xl-6 col-sm-6"> 
                    <div class="card">
                      <div class="card-body student-2">
                        <div class="d-flex gap-2 align-items-end"> 
                          <div class="flex-grow-1">
                            <h2>659</h2>
                            <p class="mb-0 text-truncate"> Total Teachers</p>
                            <div class="d-flex student-arrow text-truncate">
                              <p class="mb-0 up-arrow bg-light-success"><i class="icon-arrow-up font-success"></i></p><span class="f-w-500 font-success">+27.02%</span>than last 4 Month
                            </div>
                          </div>
                          <div class="flex-shrink-0"><img src="assets/images/dashboard-4/icon/teacher.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <div class="col-xl-6 col-sm-6"> 
                    <div class="card">
                      <div class="card-body student-3">
                        <div class="d-flex gap-2 align-items-end"> 
                          <div class="flex-grow-1">
                            <h2><?php echo $row5['total'];?></h2>
                            <p class="mb-0 text-truncate"> Total Service</p>
                            <!-- <div class="d-flex student-arrow text-truncate">
                              <p class="mb-0 up-arrow bg-light-success"><i class="icon-arrow-up font-success"></i></p><span class="f-w-500 font-success">+ 12.01%</span>than last 8 Month
                            </div> -->
                          </div>
                          <div class="flex-shrink-0"><img src="assets/images/dashboard-4/icon/calendar.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>


                  
                  <!-- <div class="col-xl-6 col-sm-6"> 
                    <div class="card">
                      <div class="card-body student-3">
                        <div class="d-flex gap-2 align-items-end"> 
                          <div class="flex-grow-1">
                            <h2><?php //echo $row8['total_payment'];?></h2>
                            <p class="mb-0" style="word-wrap: break-word; overflow-wrap: break-word;"> Total Payment This Month</p>
                            
                          </div>
                          <div class="flex-shrink-0"><img src="assets/images/dashboard-4/icon/calendar.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>

                 
                 <div class="col-xl-6 col-sm-6"> 
                    <div class="card">
                      <div class="card-body student-3">
                        <div class="d-flex gap-2 align-items-end"> 
                          <div class="flex-grow-1">
                            <h2><?php // echo $row7['total'];?></h2>
                            <p class="mb-0" style="word-wrap: break-word; overflow-wrap: break-word;"> Total Admission This Month</p>
                            
                          </div>
                          <div class="flex-shrink-0"><img src="assets/images/dashboard-4/icon/calendar.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
 -->

                  <!-- <div class="col-xl-6 col-sm-6"> 
                    <div class="card">
                      <div class="card-body student-4">
                        <div class="d-flex gap-2 align-items-end"> 
                          <div class="flex-grow-1">
                            <h2>1,984</h2>
                            <p class="mb-0 text-truncate"> Invoice Status</p>
                            <div class="d-flex student-arrow text-truncate">
                              <p class="mb-0 up-arrow bg-light-danger"><i class="icon-arrow-down font-danger"></i></p><span class="f-w-500 font-danger">- 15.02%</span>than last 5 Month
                            </div>
                          </div>
                          <div class="flex-shrink-0"><img src="assets/images/dashboard-4/icon/invoice.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <!-- <div class="col-xl-6 col-md-6 proorder-md-2"> 
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h4>Study Statistics</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body"> 
                    <div class="studay-statistics"> 
                      <ul class="d-flex align-item-center gap-2">
                        <li> <span class="bg-primary"> </span>UX Design</li>
                        <li> <span class="bg-secondary"> </span>Illustrations</li>
                      </ul>
                    </div>
                    <div id="study-statistics"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-md-12 proorder-md-4"> 
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h4>Assignments</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown1" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown1"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0 assignments-table px-0">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table display" id="assignments-table" style="width:100%">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </th>
                            <th>Id no  </th>
                            <th>Teacher</th>
                            <th>Subject  </th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Progress</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </td>
                            <td> <span>0542</span></td>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><img src="assets/images/dashboard-4/user/1.png" alt=""></div>
                                <div class="flex-grow-1 ms-2"><a href="product-page.html">
                                    <h6>Gary payi</h6></a></div>
                                <div class="active-status active-online"></div>
                              </div>
                            </td>
                            <td>Accounts</td>
                            <td>12 May 2024  </td>
                            <td>20 May 2024 </td>
                            <td> 
                              <div class="progress-showcase">
                                <div class="progress sm-progress-bar progress-border-primary">
                                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </td>
                            <td><span>9548</span></td>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><img src="assets/images/dashboard-4/user/2.png" alt=""></div>
                                <div class="flex-grow-1 ms-2"><a href="product-page.html">
                                    <h6>Ralph Waters</h6></a></div>
                                <div class="active-status active-online"></div>
                              </div>
                            </td>
                            <td>UI/UX Design</td>
                            <td>06 May 2024</td>
                            <td>16 May 2024</td>
                            <td> 
                              <div class="progress-showcase">
                                <div class="progress sm-progress-bar progress-border-secondary">
                                  <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdown3" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </td>
                            <td><span>2950</span></td>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><img src="assets/images/dashboard-4/user/3.png" alt=""></div>
                                <div class="flex-grow-1 ms-2"><a href="product-page.html">
                                    <h6>Edwin Day</h6></a></div>
                                <div class="active-status active-online"></div>
                              </div>
                            </td>
                            <td>Mathematics</td>
                            <td>25 Sep 2024  </td>
                            <td>30 May 2024 </td>
                            <td> 
                              <div class="progress-showcase">
                                <div class="progress sm-progress-bar progress-border-warning">
                                  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdown4" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown4"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </td>
                            <td><span>9605</span></td>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><img src="assets/images/dashboard-4/user/4.png" alt=""></div>
                                <div class="flex-grow-1 ms-2"><a href="product-page.html">
                                    <h6>Aaron Hogan</h6></a></div>
                                <div class="active-status active-online"></div>
                              </div>
                            </td>
                            <td>Computer App</td>
                            <td>23 May 2024  </td>
                            <td>26 May 2024</td>
                            <td> 
                              <div class="progress-showcase">
                                <div class="progress sm-progress-bar progress-border-tertiary">
                                  <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdown5" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown5"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </td>
                            <td> <span>1552</span></td>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><img src="assets/images/dashboard-4/user/2.png" alt=""></div>
                                <div class="flex-grow-1 ms-2"><a href="product-page.html">
                                    <h6>Ralph Waters</h6></a></div>
                                <div class="active-status active-online"></div>
                              </div>
                            </td>
                            <td>Accounts</td>
                            <td>15 May 2024  </td>
                            <td>26 May 2024 </td>
                            <td> 
                              <div class="progress-showcase">
                                <div class="progress sm-progress-bar progress-border-success">
                                  <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdown6" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown6"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </td>
                            <td><span>125</span></td>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><img src="assets/images/dashboard-4/user/3.png" alt=""></div>
                                <div class="flex-grow-1 ms-2"><a href="product-page.html">
                                    <h6>Aaron Hogan</h6></a></div>
                                <div class="active-status active-online"></div>
                              </div>
                            </td>
                            <td>Accounts</td>
                            <td>05 May 2024  </td>
                            <td>19 May 2024 </td>
                            <td> 
                              <div class="progress-showcase">
                                <div class="progress sm-progress-bar progress-border-danger">
                                  <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdown7" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown7"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </td>
                            <td><span>254</span></td>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><img src="assets/images/dashboard-4/user/1.png" alt=""></div>
                                <div class="flex-grow-1 ms-2"><a href="product-page.html">
                                    <h6>Gary payi</h6></a></div>
                                <div class="active-status active-online"></div>
                              </div>
                            </td>
                            <td>Accounts</td>
                            <td>22 May 2024  </td>
                            <td>02 May 2024 </td>
                            <td> 
                              <div class="progress-showcase">
                                <div class="progress sm-progress-bar progress-border-info">
                                  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                </div>
                              </div>
                            </td>
                            <td class="text-center">
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdown8" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown8"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 proorder-md-5"> 
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h4>Live Meeting</h4>
                      <div class="location-menu dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown9" type="button" data-bs-toggle="dropdown" aria-expanded="false">1pm-2pm</button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown9"><a class="dropdown-item" href="#">Address Selection</a><a class="dropdown-item" href="#">Geo-Menu</a><a class="dropdown-item" href="#">Place Picker</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body live-meet">
                    <div class="live-metting">  <img class="img-fluid" src="assets/images/dashboard-4/metting/teacher.png" alt="">
                      <div class="star-img"><img class="img-fluid" src="assets/images/dashboard-4/metting/chart.png" alt=""><img class="img-fluid" src="assets/images/dashboard-4/metting/message.png" alt=""><img src="assets/images/dashboard-4/metting/1.png" alt=""><img src="assets/images/dashboard-4/metting/2.png" alt=""><img src="assets/images/dashboard-4/metting/3.png" alt=""><img src="assets/images/dashboard-4/metting/4.png" alt=""><img src="assets/images/dashboard-4/metting/5.png" alt=""><img src="assets/images/dashboard-4/metting/6.png" alt=""><img src="assets/images/dashboard-4/metting/7.png" alt=""><img src="assets/images/dashboard-4/metting/8.png" alt=""><img src="assets/images/dashboard-4/metting/9.png" alt=""><img src="assets/images/dashboard-4/metting/10.png" alt=""></div>
                    </div>
                    <ul>
                      <li> 
                        <h5 class="text-truncate"> <span>Class: </span>Technique of Drawing in One Line</h5>
                      </li>
                      <li>
                        <h5 class="text-truncate"> <span>Batch: </span>GDM (2/3) </h5>
                      </li>
                      <li><a href="https://support.pixelstrap.com/ " target="_blank">
                          <h5 class="font-primary text-truncate"> <span>Class Link: </span>https://support.pixelstrap.com/ </h5></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-7 box-col-7 col-md-6 proorder-md-3"> 
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h4>Actively Hours</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown10" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown10"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="actively-hours"></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-5 box-col-5 col-md-6 proorder-md-6"> 
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h4>Enrolled Classes</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown11" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown11"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0 pb-1">
                    <ul class="enrolled-class"> 
                      <li class="d-flex align-items-center gap-2"><span class="b-primary bg-primary"></span>
                        <div class="flex-grow-1"> <a href="">
                            <h5 class="text-truncate">After Effects CC Masterclass </h5></a>
                          <p>10:20 -11:30</p>
                        </div>
                        <div class="flex-shrink-0"> 
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown12" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-angle-right"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown12"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center gap-2"><span class="b-secondary bg-secondary"></span>
                        <div class="flex-grow-1"> <a href="">
                            <h5 class="text-truncate">Design from A to Z</h5></a>
                          <p>09:00 -10:30</p>
                        </div>
                        <div class="flex-shrink-0"> 
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown13" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-angle-right"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown13"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center gap-2"><span class="b-warning bg-warning"></span>
                        <div class="flex-grow-1"> <a href="">
                            <h5 class="text-truncate">Graphic Design Bootcamp</h5></a>
                          <p>15:00 -16:00</p>
                        </div>
                        <div class="flex-shrink-0"> 
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown14" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-angle-right"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown14"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center gap-2"><span class="b-tertiary bg-tertiary"></span>
                        <div class="flex-grow-1"> <a href="">
                            <h5 class="text-truncate">The Ultimate Guide to Usabillity</h5></a>
                          <p>13:25 -14:30</p>
                        </div>
                        <div class="flex-shrink-0"> 
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown15" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-angle-right"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown15"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center gap-2"><span class="b-success bg-success"></span>
                        <div class="flex-grow-1"> <a href="">
                            <h5 class="text-truncate">After Effects CC Masterclass</h5></a>
                          <p>12:45 -14:20</p>
                        </div>
                        <div class="flex-shrink-0"> 
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown16" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-angle-right"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown16"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xxl-5 col-xl-6 box-col-6 proorder-4-xl-1 proorder-md-7"> 
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h4>Featured Courses</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown17" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown17"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0 featured-table">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table display" id="featured-table" style="width:100%">
                        <thead>
                          <tr>
                            <th>Course Name</th>
                            <th>Start</th>
                            <th>Rate</th>
                            <th>Type</th>
                            <th>Save</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0"> <img src="assets/images/dashboard-4/featured/1.png" alt=""></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Mobile UX</h5></a><span>Erin Mooney</span></div>
                              </div>
                            </td>
                            <td>Feb 15</td>
                            <td> <span class="d-flex align-item-center gap-2 font-primary"> <i class="font-primary" data-feather="star"> </i>4.8</span></td>
                            <td>UX/UI Design</td>
                            <td class="initial-color" id="colorChangeButton"><i data-feather="bookmark"> </i></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2"> 
                                <div class="flex-shrink-0"><img src="assets/images/dashboard-4/featured/2.png" alt=""></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Illustration</h5></a><span>Elsie Lemon</span></div>
                              </div>
                            </td>
                            <td>Mar 22</td>
                            <td> <span class="d-flex align-item-center gap-2 font-primary"> <i class="font-primary" data-feather="star"> </i>2.3</span></td>
                            <td>Web Designer</td>
                            <td class="initial-color" id="colorChangeButton1"><i data-feather="bookmark"> </i></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0"><img src="assets/images/dashboard-4/featured/3.png" alt=""></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Design System</h5></a><span>Anna Green</span></div>
                              </div>
                            </td>
                            <td>Jun 28</td>
                            <td> <span class="d-flex align-item-center gap-2 font-primary"> <i class="font-primary" data-feather="star"> </i>1.5</span></td>
                            <td>Developer</td>
                            <td class="initial-color" id="colorChangeButton2"><i data-feather="bookmark"> </i></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0"><img src="assets/images/dashboard-4/featured/4.png" alt=""></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Leadership</h5></a><span>John  Elliot</span></div>
                              </div>
                            </td>
                            <td>Apr 04</td>
                            <td> <span class="d-flex align-item-center gap-2 font-primary"> <i class="font-primary" data-feather="star"> </i>2.4</span></td>
                            <td>UX/UI Design</td>
                            <td class="initial-color" id="colorChangeButton3"><i data-feather="bookmark"> </i></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div class="flex-shrink-0"><img src="assets/images/dashboard-4/featured/5.png" alt=""></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h5>Latest Figma</h5></a><span>Dylan Field</span></div>
                              </div>
                            </td>
                            <td>jun 01</td>
                            <td><span class="d-flex align-item-center gap-2 font-primary"> <i class="font-primary" data-feather="star"> </i>5.4</span></td>
                            <td>Graphic Designer</td>
                            <td class="initial-color" id="colorChangeButton4"><i data-feather="bookmark"> </i></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-7 col-xl-12 box-col-12 proorder-md-8"> 
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h4>Monthly  Attendance Report (Feb)</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown18" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown18"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="monthly-report">
                      <ul class="d-flex align-item-center gap-2">
                        <li> <span class="bg-primary"> </span>Teacher</li>
                        <li> <span class="bg-secondary"> </span>Student</li>
                      </ul>
                    </div>
                    <div id="monthly-reportchart"></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-5 col-xl-6 box-col-6 proorder-md-9"> 
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h4>Schedule</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown19" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown19"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body schedult-calendar pt-0">
                    <div class="schedule-container"> 
                      <div id="schedulechart"></div>
                    </div>
                  </div>--->
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
    <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="assets/js/chart/apex-chart/moment.min.js"></script>
    <!-- calendar js-->
    <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="assets/js/datatable/datatables/datatable.custom1.js"></script>
    <script src="assets/js/dashboard/dashboard_4.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/script1.js"></script>
    <!-- <script src="assets/js/theme-customizer/customizer.js"></script> -->
    <!-- Plugin used-->
  </body>
</html>