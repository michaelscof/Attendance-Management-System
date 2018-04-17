<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<style>body{padding-top: 60px;}</style>
	

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
 
	<link href="login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	
	<script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<script src="login-register.js" type="text/javascript"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	
	
	
    <title>attendance portal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

  </head>

  <body>
	<font size=3>
	
	
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
	  <img src="logo.png">
	  <font size=5>
        <a class="navbar-brand" href="#"><br>MNNIT ALLAHABAD</a></font>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
			
			<!--<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Settings
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="faculty_change_password.php"  class="nav-link"  data-toggle="modal" data-target="#changepasswordModal" >Change Password</a>
        </div>
    </li>-->
				
		<!--	<li class="nav-item">
              <a class="nav-link" href="#" class="nav-link"  data-toggle="modal" data-target="#fModal">Feedback</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/login/dbms/main/mains/home.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	</font>
		
	

<br>
 <font size=3>
<div class="container">
  <h2></h2>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">My profile</div>
      <div class="panel-body">
	  
	  
	  <!--Panel Content-->
			<div class="container">
  <table class="table">
    
    <tbody>
<?php
$Name="";
$T_ID="";
$Designation="";
$S_Code="";
$T_ID=$_SESSION['T_ID'];
    $query="SELECT * FROM `teacher` WHERE `T_ID`='$T_ID' ";
    $result=$conn->query($query);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
          $Name=$row['Name'];
          $Designation=$row['Designation'];
            $Gender=$row['Gender'];
    }
} else {
    echo "0 results";
}

    
      echo"<tr >
        <td>Name</td>
        <td>";echo $Name;echo"</td>
        
      </tr>
      <tr>
        <td>Faculty id</td>
        <td>";echo $T_ID;echo"</td>
       </tr>
	  <tr>
        <td>Designation</td>
        <td>";echo $Designation;echo "</td>
       </tr>
	   <tr>
        <td>Department</td>
        <td>CSED</td>
       </tr>
    </tbody>
  </table>
</div>
	  
	  </div>
    </div>
</font>;


	
<br>
	<font size=4>
	<div class=\"container\">
  
  <div class=\"panel-group\">
    <div class=\"panel panel-default\">

      <div class=\"panel-heading\">Take Attendance</div>
      <div class=\"panel-body\">
         <form method=\"post\" action=\"facultyprofile.php\" accept-charset=\"UTF-8\">
          Course:<select class=\"form-control\" name=\"Course\" style=\"width: 150px;height:30px;\">
          <option value=\"BTECH_IT\">BTECH(IT)</option>
          <option value=\"BTECH_CSE\">BTECH(CSE)</option>
          <option value=\"MCA\">MCA</option>
          </select>
          <input type=\"submit\" class=\"btn btn-danger\" value=\"Display Courses\" placeholder=\"Course\" name='submit_course' style=\"display:inline-block;\">
          </form>";
           if(isset($_POST['submit_course']))
                       {
                        $Course=$_POST['Course'];
                        // echo $Course;
                        $query="Select Name,S_Code from subject where T_ID='$T_ID' and Course='$Course'";
                       $result=$conn->query($query);
                       echo"<form method=\"post\" action=\"prem.php\" accept-charset=\"UTF-8\">";           
                        echo"<br>Subject:<select class=\"form-control\" name=\"Subject\" style=\"width: 150px;height:30px; required\">
                       ";
                       if($result->num_rows > 0){
                        while($row=$result->fetch_assoc()){
                          $Name=$row['Name'];
                          $S_Code=$row['S_Code'];
                          echo 'Hello'.$Name.'!';
                          echo "<option value='".$S_Code;echo"'>";echo $Name;echo"</option>";
                        }
                       }
                       echo"</select>";
                        echo"<input type=\"submit\" class=\"btn btn-danger\" value=\"Submit\" placeholder=\"Course\" name='submit'>";
                        echo"<input type=\"text\" value=\"$Course\"  name='x' style=\"display:none\"/>
                       
          
         </form>
	  <br><br>
    <tbody> 
      </div>
    </div>
  <font>
  <br>
  </body>
</html>
     ";}
             ?>