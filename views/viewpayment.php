<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Receptionist-Dashboard Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/templatemo-style.css" rel="stylesheet">
  

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Receptionist</h1>
        </header>
       
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
        <ul>
            <li><a href="<?php echo base_url();?>index.php/Welcome/receptionist"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/edit_recep"><i class="fa fa-bar-chart fa-fw"></i>Edit Profile</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/recep_noti"><i class="fa fa-database fa-fw"></i>Notification</a></li>
            <li><a href="#" class="active"><i class="fa fa-map-marker fa-fw"></i>Payment</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/recep_hall"><i class="fa fa-users fa-fw"></i>Hall Management</a></li>
            <!-- <li><a href="<?php echo base_url();?>index.php/Welcome/recep_attend"><i class="fa fa-sliders fa-fw"></i>Attendence</a></li> -->
            <li><a href="<?php echo base_url();?>index.php/Welcome/recep_stu"><i class="fa fa-users fa-fw"></i>Student Registration</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/logout"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
         
          </ul>        
       
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                 <li><a href="<?php echo base_url();?>index.php/Welcome/payment">Payment</a></li>
                 <li><a href="" class="active">View Payment</a></li>
                
                
                <!-- <li><a href="login.html">Sign in form</a></li> -->
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
                   
              <div class="templatemo-content-widget white-bg">
                <i class="fa fa-times"></i>
                             
              
            <div class="templatemo-content-container">
          <div class="templatemo-content-widget padding">
           
           <div class="row">
 




<!--site_url: Returns base_url + index_page + uri_string-->
   <form class="form-inline" role="form" action="<?php echo site_url().'/search/search_keyword';?>" method="post">
       <div class="form-group">
           <input type="text" class="form-control" name="search" placeholder="Search by Student ID">
       </div>
<button type="submit" class="btn btn-info" name="submit" >Search</button>
   </form>




        </div>
          <footer class="text-right">
            <p>Copyright &copy; Team Innoview
            | Design:UCSC</p>
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>
