<!DOCTYPE html>
<html>
<head>
	<title>Registraton form</title>
	<script src="javascript/registration.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/registration.css">
	<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets1/scss/main.css">
     <link rel="stylesheet" href="<?php echo base_url();?>assets1/scss/skin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
    <!-- <script src="./script/index.js"></script> --> 
	<!-- <script src="../javascript/registration.js"></script>
	
    <link rel="stylesheet" type="text/css" href="../css/registration.css">	 -->
</head> 
<body>
	<div class="registration">
		<img src="..\assets1\img\users.png">
		<form action="" method="post ">
			<table align="center">
					<tr>
							<td>STATUS:</td>
							<td>
							Student<input type="radio" name="Status" value="Student" />
							Teacher <input type="radio" name="Status" value="Teacher" />
							Receptionist<input type="radio" name="Status" value="Teacher" />
							Admin <input type="radio" name="Status" value="Teacher" />
							</td>
					</tr>
				<tr>
					<td>NAME:</td>
					<td><input type="text" id="name" placeholder=" Enter Name With Initials"></td>
				</tr>
				<tr>
						<td>GENDER:</td>
						<td>
						Male <input type="radio" name="Gender" value="Male" />
						Female <input type="radio" name="Gender" value="Female" />
						</td>
				</tr>
				<tr>
						<td>DATE OF BIRTH:</td>
						 
						<td>
						<select name="Birthday_day" id="Birthday_Day">
						<option value="-1">Day:</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						 
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						 
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						 
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						 
						<option value="31">31</option>
						</select>
						 
						<select id="Birthday_Month" name="Birthday_Month">
						<option value="-1">Month:</option>
						<option value="January">Jan</option>
						<option value="February">Feb</option>
						<option value="March">Mar</option>
						<option value="April">Apr</option>
						<option value="May">May</option>
						<option value="June">Jun</option>
						<option value="July">Jul</option>
						<option value="August">Aug</option>
						<option value="September">Sep</option>
						<option value="October">Oct</option>
						<option value="November">Nov</option>
						<option value="December">Dec</option>
						</select>
						 
						<select name="Birthday_Year" id="Birthday_Year">
						 
						<option value="-1">Year:</option>
						<option value="2012">2012</option>
						<option value="2011">2011</option>
						<option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>
						<option value="2006">2006</option>
						<option value="2005">2005</option>
						<option value="2004">2004</option>
						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						 
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						 
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
						</select>
						</td>
				</tr>
				<!-- <tr>
						<td>Date of Birthday:</td>
						<td><input type="text" id="name" placeholder=" Enter the Date of Birthday"></td>
				</tr> -->
				<tr>
						<td>PARENTS' NAME:</td>
						<td><input type="text" id="name" placeholder="If User is a Student"></td>
				</tr>
				<tr>
						<td>ADDRESS <br /><br /><br /></td>
						<td><textarea name="Address" rows="4" cols="30"></textarea></td>
				</tr>
				<tr>
						<td>MOBILE NUMBER</td>
						<td>
						<input type="text" name="Mobile_Number" maxlength="10" />
						</td>
						</tr>
				<tr>
					<td>E-MAIL:</td>
					<td><input type="email" id="email" placeholder="Enter the email"></td>
				</tr>
				<tr>
					<td>PASSWORD:</td>
					<td><input type="password" id="password" placeholder="Enter the password"></td>
				</tr>
				<tr>
						<td>RE PASSWORD:</td>
						<td><input type="password" id="password2" placeholder="Re-Enter the password"></td>
				</tr>
				<!-- <tr>
					 <td>If User is a Student</td> 
				</tr> -->
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="submit" onclick="registrationform();">
					<input type="reset" name="RESET"></td>
				</tr>
				
			</table>
			
		</form>
		<h3>OR</h3>
		<center><a href="login.php">Already You have an Account ?</a></center>
	</div><!--registration-->

</body>
</html>