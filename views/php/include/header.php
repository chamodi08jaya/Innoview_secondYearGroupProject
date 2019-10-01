<?php require_once('include/connection.php'); ?>
<?php require_once('include/session.php'); ?>
<header class="navigation">
	<div class="nav">
		<div class="logo">
				

		</div><!--logo-->
		
				
		<div class="bar clearfix">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>	
				<li><a href="class_schedule.php">Class Schedule</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>

		</div><!--bar-->
                
                </ul>

                <ul class="sign">
       
            
			    <?php 
					checkSession();
					if(isset($_SESSION['name'])){
                        	
							if("{$_SESSION['type']}" == '1'){
								echo "<li><a href=\"admin.php\" class=\"sign\">Admin Panel</a></li>";
								echo "<br><li><a href=\"logout.php\" class=\"sign\">Log Out</a></li>";
                                echo "<br><p class=\"sign\">You are Logged in as " . $_SESSION['name']. " (Admin)</p>";
				            }
                            elseif("{$_SESSION['type']}" == '0'){
								echo "<li><a href=\"student.php\" class=\"sign\">Student Dashboard</a></li>";						
								echo "<li><a href=\"logout.php\">Log Out</a></li>";
                                echo "<br><p class=\"sign\">You are Logged in as " . $_SESSION['name']. " (Student)</p>";
				           }
			elseif("{$_SESSION['type']}" == '2'){
								echo "<li><a href=\"receptionist.php\" class=\"sign\">Receptionist Dashboard</a></li>";						
								echo "<li><a href=\"logout.php\">Log Out</a></li>";
                                echo "<br><p class=\"sign\">You are Logged in as " . $_SESSION['name']. " (Receptionist)</p>";
				           }
				elseif("{$_SESSION['type']}" == '3'){
								echo "<li><a href=\"teacher.php\" class=\"sign\">Teacher Dashboard</a></li>";						
								echo "<li><a href=\"logout.php\">Log Out</a></li>";
                                echo "<br><p class=\"sign\">You are Logged in as " . $_SESSION['name']. " (Teacher)</p>";
				           }
							
                        }
					else{
						echo "<li><a class=\"sign\" href=\"login.php\">Login</a></li>";
						echo "<li><a class=\"sign\" href=\"reg.php\">Register</a></li>";
						}
                ?>
                
                </ul>
                
                
            
                
        </div>
    </header>
                
                
            
                
        </div>
	</div>

</header>