<?php
   session_start();  
   include_once('conn.php');
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
      <title>Dapp</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
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
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header class="section">
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="pageshoping.php"><img src="images/logo.png" width="200" height="200" alt="#"></a> </div>
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
                                 <li><a href="newpost.php">Info</a></li>
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
                                 </div>
                              </div>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome to <strong class="color">Our Shop</strong></h1>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button">Buy Now</a>
                              <a class="btn btn-lg btn-primary" href="about.html" role="button">About </a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/file.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome to <strong class="color">Our Shop</strong></h1>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button">Buy Now</a>
                              <a class="btn btn-lg btn-primary" href="about.html" role="button">About</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="images/file3.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome to <strong class="color">Our Shop</strong></h1>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button">Buy Now</a>
                              <a class="btn btn-lg btn-primary" href="about.html" role="button">About</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/file3.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
      <!-- plant -->
         <div class="clothes_main section ">
          <div class="container">
            <div class="row">
            <?php
               if ($conn->connect_error) {
                  //$_SESSION['msg'] = "Connection failed";
                     //die("Connection failed: " . $conn->connect_error);
                        echo "connection failed!";
                  }
               else{ 
                  $address = $_SESSION['useraddress'];
                  $sql_command ="select * from product where address !='$address'" ;  
                  #echo $sql_command;
                  $result = mysqli_query($conn,$sql_command);
                  if(mysqli_num_rows($result)>0){
                     while ($row = mysqli_fetch_assoc($result)){
                        $id = $row['idproduct'];
                        $subject = $row['subject'];
                        $price = $row['cost'];
                        echo'
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                 <div class="sport_product">
                                    <figure><img src="images/iconicon.png" alt="img"/></figure>
                                    <br>
                                    <a class="btn btn-lg btn-primary" href="detail.php?id='.$id.'" role="button">'.$price.'</a>
                                    <h4>'.$subject.'</h4>
                                 </div>
                              </div>';
                              
                     } 
                     
                  }   
                  else{
                      echo 'No result';
                   } 
               } 
             ?>
            </div>
           </div>
      </div>
      <!-- end plant -->
            <div class="row">
               <div class="contact_us_3 layout_padding">
            <div class="row">
               <div class="address_2">
                  <div class="row">
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/map-icon.png" /></span>
                          <span style="margin-top: 10px;">No.123 Chalingt Gates, Supper market New York</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/phone-icon.png" /></span>
                          <span style="margin-top: 21px;">( +71 7986543234 )</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/email-icon.png" /></span>
                          <span style="margin-top: 21px;">demo@gmail.com</span></div>
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
</html>
