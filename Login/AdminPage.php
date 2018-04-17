<!DOCTYPE html>
<html>
<head>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




	<title></title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="image/mnnit.png" alt="logo" style="width:40px; margin-left: 50px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
   
    <li class="nav-item">
      <a class="nav-link" style="color: white;" >MNNIT ALLAHABAD</a>
    </li>
    <li class="nav-item">
      <a href="http://localhost/login/dbms/main/mains/home.php" class="nav-link" style="margin-left: 900px; color: white;">Logout</a>
    </li>
  </ul>
  </nav>


  <!--content-->
  <div class="col-md-12" >
						<!-- <div class=""> -->
								 	<div >
								  <h2></h2>
								  <div >
								    <div class="panel panel-default">								
								      <div class="card bg-info text-white">
								      	<div class="card-body">Teacher Profile</div>
								      </div>
								      <div class="panel-body">
									  
									  
									  
									  <!--Panel Content-->
											<div >
												<form method="post" action="AdminPage.php" accept-charset="UTF-8">
								  <table class="table" style="border: solid;">
								    
								    <tbody>

								      <tr >

								        <td>Name</td>
								        <td><input type="text" name="Name"  class="form-control" required></td>
								       
								        <td>Gender</td>
								         <td> 
								          <select class="form-control chosen" name="Gender" id="sel1" required>
								        <option>male </option>
								        <option>female</option>
								      </select>
								  </td>
								     
								      <tr>
								        <td>Designation</td>
								        <td>  <select class="form-control" id="sel1" name='Designation' required>
								        <option>Professor </option>
								        <option>Associate Professor</option>
								         <option>Assistant Professor</option>
								          <option>Guest faculty</option>
								      </select></td>
								      </tr>
								      <td>T_ID</td>
								        <td><input type="text" name="T_ID"  class="form-control" required></td>
									  <tr>
								        <td>Password</td>
								       <td><input type="password" name="Password" class="form-control" required></td>
								       
								        <td>Confirm password</td>
								        <td><input type="password" name="ConfirmPassword" class="form-control" required></td>
   								       </tr>
	                                 <tr>
	                                 	<td colspan="2">

	               <button type="submit" style="margin-left: 600px;" name='Teacher' class="btn btn-info" >Add Teacher</button>
	                                 	</td>
	                                 </tr>
  
									 
									  </table>
									 	
									 </div>
									</div>
									</div>
									</div>
									</div>
					</div>
								</form>

					<div class="col-md-12">
								 	<div >
								  <h2></h2>
								  <div >
								    <div class="panel panel-default">
								      <!-- <h1 class="display-4" style=" box-shadow: 5px"> My profile</h1> -->
								      <div class="card bg-info text-white">
								      	<div class="card-body">Student Profile</div>
								      </div>
								      <div class="panel-body">
									  
									  
									  
									  <!--Panel Content-->
											<div >
												<form method="post" action="student.php" accept-charset="UTF-8">
								  <table class="table" style="border: solid;">
								    
								    <tbody>

								      <tr >
								        <td>Name</td>
								   <td><input type="text" name="Name" class="form-control" required ></td>
								   
								        <td>Registration number</td>
								     <td><input type="text" name="RegNo" class="form-control" required></td>
								       </tr>
								      <tr>
								        <td>Course Name</td>
								        <td>  <select class="form-control" id="sel1" name="Course" required>
								        <option>B.tech</option>
								        <option>MCA</option>
								      </select></td>
								      
								        <td>Branch</td>
								        <td>
								        	  <select class="form-control" id="sel1" name="Branch" required>
								        
								        <option>Computer Science</option>
								        <option>Information technology</option>
								        <option>NA</option>
								      </select>
								        </td>
								       </tr>
									  
									   <tr>
								       <td>Gender</td>
								         <td> 
								          <select class="form-control" id="sel1" name="Gender" required>
								       
								        <option>male </option>
								        <option>female</option>
								      </select>
								       <tr >
								        <td>E-mail</td>
								        <td><input type="text" name="Email" class="form-control" required ></td>
								        <td>Semester</td>
								        <td> 
								        	<select class="form-control" id="sel1" name="Sem" required>
								       
								        <option>1st</option>
								        <option>2nd</option>
								         <option>3rd</option>
								          <option>4th</option>
								           <option>5th</option>
								            <option>6th</option>
								             <option>7th</option>
								              <option>8th</option>
								      </select></td>
								    </tr>
								  </td>
								       </tr>
								       <tr>
	                                 	<td colspan="2">

	               <button type="submit" style="margin-left: 600px;" name="Student" value="submit" class="btn btn-info" reduired >Add Student</button>
	                                 	</td>
	                                 </tr>
	 
									    </tbody>
									  </table>
									 	
									 </div>
									</div>
									</div>
									</div>
									</div>
					</div>
										</form>

<div class="col-md-12">
								 	<div >
								  <h2></h2>
								  <div >
								    <div class="panel panel-default">
								      <!-- <h1 class="display-4" style=" box-shadow: 5px"> My profile</h1> -->
								      <div class="card bg-info text-white">
								      	<div class="card-body">Subject</div>
								      </div>
								      <div class="panel-body">
									  
									  
									  <!--Panel Content-->
											<div >
												<form method="post" action="subject.php" accept-charset="UTF-8">
								  <table class="table" style="border: solid;">
								    
								    <tbody>
								    		
								      <tr >
								        <td>Subject Name</td>
								        <td><input type="text" name="Name" class="form-control" required></td>
								        <td>Subject Code</td>
								        <td><input type="text" name="S_code" class="form-control" required></td>
								      </tr>
								      <tr>
								        <!-- <td>Subject Code</td>
								        <td><input type="text" name="txt" class="form-control" ></td> -->
								       </tr>
								       <tr>
								        <td>Semester</td>
								        <td><input type="text" name="Sem" class="form-control" required></td>
								        <td>Course</td>
								        <td><input type="text" name="Course" class="form-control" required></td>
								       </tr>
								        <tr >
								        <td>Teacher Name</td>
								        <td><input type="text" name="TeacherName" class="form-control" required></td>
								        <td>Designation</td>
								        <td>  <select class="form-control" id="sel1" name='Designation' required>
								        <option>Professor </option>
								        <option>Associate Professor</option>
								         <option>Assistant Professor</option>
								          <option>Guest faculty</option>
								      </select></td>
								  </tr>
								      </tr>
								      </tr>
								     <tr>
	                                 	<td colspan="2">

	               <button type="submit" style="margin-left: 600px;" class="btn btn-info" name='Subject' >Assign Subject</button>
	                                 	</td>
	                                 </tr>
	 
									    </tbody>
									  </table>
									 	
									 </div>
									</div>
									</div>
									</div>
									</div>
					</div>


   
 
<script type="text/javascript">
	$(".chosen").chosen()
</script>
</body>
</html>
<?php
include_once 'dbconnect.php';
if(isset($_POST['Teacher'])){
	$name=trim($_POST['Name']);
	$gender=trim($_POST['Gender']);
	$Designation=trim($_POST['Designation']);
	$T_ID=trim($_POST['T_ID']);
	$password=trim($_POST['Password']);
    $query="INSERT INTO teacher(T_ID,Name,Gender,Designation,Password)VALUES('$T_ID','$name','$gender','$Designation','$password')";
	$result=$conn->query($query);
	if($result==True){
		 header("Location:AdminPage.php");
	}
else
	echo 'hello';
}
?>