<?php
   session_start();
   include_once("conn.php");
   
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New Product</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Custom CSS -->
    <link href="css/simple-blog-template.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
    <link rel="stylesheet" href="css/style.css">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 

  </head>

  <body class="main-layout">

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
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Newpost content  -->
        <div class="col-lg-12 newpost">
          <br>
          <!-- Title -->
          <h1>New post</h1>

          <!-- Newpost form -->
          <form id="new" action="uploaddb.php" method="post" enctype="multipart/form-data" class="newpost-form" >
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" class="form-control" required
              title="Please enter for name of product">
            </div>

            <div class="form-group">
              <label for="content">Decription</label>
              <textarea rows="5" id="decription" name="decription" class="form-control" ></textarea>
            </div>
            <span>Click on the "Choose File" button to upload a file:</span>
            <br>
            <input type="file" name="file"> <br><br>
            <div class="form-group">
              <label for="subject">Cost</label>
              <input type="text" id="cost" name="cost" class="form-control" required
              pattern="[0-9]+"
              title="Please enter number only.">
            </div>

            <?php
               if (isset($_SESSION['message'])){
                  $Color = "gray";
                  $Text = $_SESSION['message'];

                  echo '<div style="Color:'.$Color.'">'.$Text.'</div>';
               }
               unset($_SESSION['message']);
            ?>

            <button type="submit" class="btn btn-primary" name="submit">Post</button>
          </form>
          <!-- /form -->
        </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <br>
    <br>
    <!-- /.container -->

    <!-- Footer -->
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
     
</html>
