<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher Registration</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/scss/main.css">    
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/scss/skin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- <script src="C:\wamp64\www\project\assets1\script\index.js"></script> -->

    <script type="text/javascript" src="assets1\script\index.js"></script>
    
    
    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <!-- Vendor JS-->
    <!-- <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script> -->
    
</head>

<body id="wrapper">

    <section id="top-header">
        <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 top-header-links">
                        <!-- <ul class="contact_links">
                            <li><i class="fa fa-phone"></i><a href="#">+0912 242 189</a></li> -->
                            <!-- <li><i class="fa fa-envelope"></i><a href="#">sales@aspiresoftware.in</a></li> -->
                    
                    </div> 
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="social_links">
                            <li><i class="fa fa-phone"></i><a href="#">Call Us +0912 242 189</a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>                    
                        </ul>
                    </div>
                </div>
            </div>
            </div>
</section>
<header>
        <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark ">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <!-- <span class="icon-bar"></span> -->
                <span class="icon-bar"></span>
              </button>
                        <a class="navbar-brand " href="#" al>
                                <!-- <div class="col-xs-2 icon"><img src="..\..\..\assets1\img\logo.jpeg"></src></i></div> -->
                                <img height="120px" width="120px" src="assets1\img\logo.jpeg" class="attachment-full img-responsive" alt="">
                           
                                <!-- <h1>Southern Educational Institute</h1><span>Galle</span></a>  -->
                            <!-- < src="..\..\..\assets1\img\logo.jpeg">        -->
                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url();?>index.php/Welcome/home">Home</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Welcome/about">About Us</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Welcome/class_schedule">Class Schedule</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Welcome/contact">Contact Us</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Welcome/login">Sign In</a></li>
                            <li class="active"><a href="#">Sign Up</a></li>   
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!--/.nav-ends -->
    </header>

    <section id="top_banner">
       
            <!-- <div class="inner text-center"> -->
                    <!-- <div class="inner text-center">
                            <div class="fill"><img alt="" src="../../../assets1/img/pic.jpg" width="1350" height="100" alt="Galle fort"></div>        
                <div class="banner">       </div> -->
                <!-- <h2>Lorem ipsum dolor sit amet</h2>
            </div> -->
        <!-- </div> -->
    </section>



    <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-12 col-sm-12 forms-middle-icons">
                    <div class="section-heading">
                        <h2><span>Sign Up Teachers</span></h2>
                        <br/>
                        <p class="subheading">Register all the teachers to our system.
                        </p>
                    </div>
                    
                </div>
                <!--forms-right-icons-->
                <div class="col-md-6 col-sm-12">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Sign up now</h3>
                                <p>Fill in the form below to get instant access</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="" class="login-form">
                            <form role="form" action="<?php echo site_url('Signup/tregistrations');?>" method="post" class="login-form">

                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" id="user_type" name="user_type" placeholder="Teacher" value="Teacher" aria-describedby="basic-addon1" required="required">
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" required="required">
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" placeholder="Subject" aria-describedby="basic-addon1" required="required">
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" placeholder="Teaching Grade" aria-describedby="basic-addon1" required="required">
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                    <input type="radio" name="gender" value="male" checked> Male<br>
                                                    <input type="radio" name="gender" value="female"> Female<br>
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                    <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required="required">
                                                </div>
                                                <!-- <div class="input-group form-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                        <input type="text" class="form-control" placeholder="User ID" aria-describedby="basic-addon1" required="required">
                                                    </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" placeholder="User Name" aria-describedby="basic-addon1" required="required">
                                                </div> -->
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                                    <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required="required">
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                                    <input type="tel" class="form-control" placeholder="Phone No." aria-describedby="basic-addon1" required="required">
                                                </div>
                                                <!-- <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                    <input type="text" class="form-control" placeholder="Street Address" aria-describedby="basic-addon1" required="required">
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                    <input type="text" class="form-control" placeholder="City" aria-describedby="basic-addon1" required="required">
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                    <input type="text" class="form-control" placeholder="State" aria-describedby="basic-addon1" required="required">
                                                </div>
                                                <div class="input-group form-group">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                                    <input type="tel" class="form-control" placeholder="Emergency Phone No." aria-describedby="basic-addon1" required="required">
                                                </div> -->
                                               
                                                <button class="btn" input type="submit" name="submit" value="submit" onclick="registrationform();">Sign me up!</button>
                                            </form>
                                   
                    </form>
                    <center>
                    <h3>OR</h3>
                    <a href="<?php echo base_url();?>index.php/Welcome/login">Already You have an Account ?</a>
                    </center>
	             </div>
                    

            </div>


    </section>

    <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 block">
                        <div class="footer-block">
                            <h4>Gallery</h4>
                                <div class="user-image"><img src="assets1\img\pic.jpg" alt="user" class="img-responsive" /></div>
                       
                           
                        </div>
                    </div>
    
                    <div class="col-md-3 col-sm-3 col-xs-12 block">
                        <div class="footer-block">
                            <h4>Useful Links</h4>
                            <!-- <hr/> -->
                            <ul class="footer-links">
                            <li><a href="<?php echo base_url();?>index.php/Welcome/home">Home</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Welcome/about">About Us</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Welcome/class_schedule">Class Schedule</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Welcome/contact">Contact Us</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Welcome/login">Sign In</a></li>
                           
                            
                                <!-- <li><a href="login.html">Sign In</a></li> -->
                                <!-- <li><a href="registration.html">Sign Up</a></li> -->
                            </ul>
                        </div>
                    </div>
    
                    
                </ul>
                    <div class="col-md-3 col-sm-3 col-xs-12 block">
                        <div class="footer-block">
                                <h4>Visit Us</h4>
                                <h5>Southern Institute Galle</h5>
                                <h5>Wimalasurendra Mawatha, <br/>Galle 80000, </br>  Sri Lanka</h5>
                                <a href= "https://www.google.com/maps/place/Southern+Educational+Institute/@6.043113,80.2108316,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xb116c9761f2d7d15!8m2!3d6.043113!4d80.2130203">
                                    <img src="assets1\img\map.png">
                                </a>
                                 <!-- <hr/> -->
                            <!-- <ul class="footer-links">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Free Goods</a></li>
                            </ul> -->
                        </div>
                    </div>
    
                    <div class="col-md-3 col-sm-3 col-xs-12 <block></block>">
                        <div class="footer-block">
                            <h4>Recent Posts</h4>
                            <!-- <hr/> -->
                            <ul class="footer-links">
                                <li>
                                    <div class="user-image"><img src="assets1\img\post.jpeg" alt="user" class="img-responsive" /></div>
                       
                                    <!-- <a href="#" class="post">Lorem ipsum dolor sit amet</a>
                                    <p class="post-date">May 25, 2017</p> -->
                                </li>
                                <!-- <li>
                                    <a href="#" class="post">Lorem ipsum dolor sit amet</a>
                                    <p class="post-date">May 25, 2017</p>
                                </li>
                                <li>
                                    <a href="#" class="post">Lorem ipsum dolor sit amet</a>
                                    <p class="post-date">May 25, 2017</p>
                                </li> -->
    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    
    
        </section>
    
        <section id="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 btm-footer-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                        Developed by <a href="#">Team Innoview</a> designed by <a href="#">UCSC</a>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- <div id="panel">
            <div id="panel-admin">
                <div class="panel-admin-box">
                    <div id="tootlbar_colors">
                        <button class="color" style="background-color:#1abac8;" onclick="mytheme(0)"></button>
                        <button class="color" style="background-color:#ff8a00;" onclick="mytheme(1)"> </button>
                        <button class="color" style="background-color:#b4de50;" onclick="mytheme(2)"> </button>
                        <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                        <button class="color" style="background-color:#1abc9c;" onclick="mytheme(4)"> </button>
                        <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                    </div>
                </div>
    
            </div>
            <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
        </div> -->
    </body>
    </html>
    
    
