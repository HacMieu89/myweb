<?php
session_start();
include_once("conn.php");
$idproduct = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Details</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


   <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>

   <!-- style css -->
   <!--[if lt IE 9]>
      
      
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <!-- end loader -->
   <!-- header -->
   <header class="section">
      <!-- header inner -->
      <div class="header_main">
         <div class="header_main">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="pageshoping.php"><img src="images/logo.png" width="100" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li> <a href="pageshoping.php">Home</a> </li>
                                 <li> <a href="about.html">About</a> </li>
                                 <li><a href="registered.php">Info</a></li>
                                 <li><a href="newpost.php">Post</a></li>
                                 <li><a href="index.php">Logout</a></li>
                                 <li>
                                    <form action="" class="search-form">
                                       <div class="form-group has-feedback">
                                          <label for="search" class="sr-only">Search</label>
                                          <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                          <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                    </form>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
   </header>
   <!-- end header -->
   <!-- start Contact Us-->

   <div id="plant" class="contact_us layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage">
                  <h2 color: style="text-align: center; margin-top: 45px;">Detail <strong style="color: #111315;">Product</strong></h2>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="contact_us_2 layout_padding paddind_bottom_0">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <img src="images/iconicon.png" alt="img" />
            </div>
            <div class="col-md-6">
               <div class="email_btn">
                  <div>
                     <?php
                     if ($conn->connect_error) {
                        //$_SESSION['msg'] = "Connection failed";
                        //die("Connection failed: " . $conn->connect_error);
                        echo "connection failed!";
                     } else {
                        $sql_command = "SELECT * FROM product where idproduct='" . $idproduct . "'";
                        $result = mysqli_query($conn, $sql_command);

                        if (mysqli_num_rows($result) > 0) {
                           while ($row = mysqli_fetch_assoc($result)) {
                              $subject = $row["subject"];
                              $timepost = $row["timeup"];
                              $seller = $row["address"];
                              $decription = $row["decription"];
                              $price = $row["cost"];
                              $idproduct = $row["idproduct"];
                              echo '
                                    <div class="form-group">
                                       <p id="subject" type="text" class="form-control form-control-sm">Subject: <span style="color:#696969">  ' . $subject . ' </span></p>
                                    </div>
                                    <div class="form-group">
                                       <p id="time" type="text" class="form-control form-control-sm">Time Post:   <span style="color:#696969"> ' . $timepost . '</p>
                                    </div>
                                    <div class="form-group">
                                       <p id="seller" type="text" class="form-control form-control-sm">Seller:  <span style="color:#696969">' . $seller . '</p> 
                                    </div>
                                    <div class="form-group">
                                       <p id="decription" type="text" class="form-control form-control-sm">Description:  <span style="color:#696969"> ' . $decription . '</p>
                                    </div>
                                 
                                    <div class="form-group">
                                       <p id="price" type="text" class="form-control form-control-sm">Price:  <span style="color:#696969"> ' . $price . '</p>
                                    </div>
                                    <div class="submit_btn">
                                       <button type="submit" class="btn btn-primary" id="buyButton" >Buy</button>
                                    </div>';
                              // set value for session to pass form 
                              $_SESSION['seller'] = $seller;
                              $_SESSION['idproduct'] = $idproduct;
                              $_SESSION['price'] = $price;
                           }
                        } else {
                           echo "No results";
                        }
                        mysqli_close($conn);
                     }
                     ?>
                  </div>
                  <!-- print message after buying -->
                  <?php
                  if (isset($_SESSION['message'])) {
                     $Color = "gray";
                     $Text = $_SESSION['message'];

                     echo '<div style="Color:' . $Color . '">' . $Text . '</div>';
                  }
                  unset($_SESSION['message']);
                  ?>
               </div>
            </div>
         </div>
      </div>
   </div>



   <div class="row">
      <div class="contact_us_3 layout_padding">
         <div class="row">
            <div class="address_2">
               <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-4">
                     <div class="site_info">
                        <span class="info_icon"><img src="images/map-icon.png" /></span>
                        <span style="margin-top: 10px;">No.123 Chalingt Gates, Supper market New York</span>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-4">
                     <div class="site_info">
                        <span class="info_icon"><img src="images/phone-icon.png" /></span>
                        <span style="margin-top: 21px;">( +71 7986543234 )</span>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-4">
                     <div class="site_info">
                        <span class="info_icon"><img src="images/email-icon.png" /></span>
                        <span style="margin-top: 21px;">demo@gmail.com</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="menu_main">
            <div class="menu_text">
               <ul>
                  <li class="active"><a href="pageshoping.php">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="registered.php">Info</a></li>
                  <li><a href="index.php">Logout</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</body>
<script type="text/javascript" src="js/transaction.js"></script>
<script type="text/javascript" src="js/conn.js"></script>

</html>