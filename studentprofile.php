<?php
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

   
   <!--student change password modal-->
<!-- 
    <div class="modal fade login" id="changepasswordModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
					<h4 class="modal-title">Change Password</h4>                      
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                               
                                
                                <div class="error"></div>
                                <div class="form loginBox">
                                  <form method="post" action="student_change_password.php" accept-charset="UTF-8">
                                    <input id="password" class="form-control" type="text" placeholder="RegNo" name="RegNo">
									<input id="password" class="form-control" type="text" placeholder="enter password" name="name">
                                    <input class="btn btn-default btn-login" type="button" name="submit" value="Confirm" >
                                    </form>
                                </div>
                             </div>
                        </div>
                        
                    </div>
                       
    		      </div>
		      </div>
		 </div>   
   
    -->
   
   
   
   <!--feedback  modal-->

     <div class="modal fade login" id="fModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
					 <h4 class="modal-title"> Feedback</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                               
                                
                                <div class="error"></div>
                                <div class="form loginBox">
                                     <div class="form-group">
									<textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"  placeholder="Enter feedback here"></textarea>
									</div>
									<input class="btn btn-default btn-login" type="button" value="Submit" name="submit">
                                    </form>
                                </div>
                             </div>
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
    		      </div>
		      </div>
		 </div>   
  
   
   
  
    <!-- Navigation -->
	<font size=3>
	
	
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
	  <img src="logo.png">
	  <font size=5>
        <a class="navbar-brand" href="http://localhost/login/dbms/main/mains/home.html"><br>MNNIT ALLAHABAD</a></font>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
		<!-- 	
			<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Settings
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#"  class="nav-link"  data-toggle="modal" data-target="#changepasswordModal" >Change Password</a>
        </div>
    </li>
				 -->
			<li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#fModal">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/login/dbms/main/mains/home.html">Logout</a>
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
	  
  <div class="container">
  <table class="table">
    <thead>
      <th>
        Registration No
      </th>
      <th>
        Name
      </th>
      <th>
        Course
      </th>
      <th>
        Branch
      </th>
      <th>
        Semester
      </th>
      <th>
        Email
      </th>
    </thead>
        <tbody>
    <?php
    if (isset($_POST['login'])) {
    $RegNo = $_POST['RegNo'];
    $Name = $_POST['Name'];
    // echo $Name;
    // $password = hash('sha256', $upass); // password hashing using SHA256
    
    $query="SELECT * FROM `stud` WHERE `RegNo`='$RegNo' ";
    $result=$conn->query($query);
    if ($result->num_rows > 0) 
    {
    // output data of each row
       $course;
       $sem;

       while($row = $result->fetch_assoc()) 
        {

          $course=$row['course'];
           $sem=$row['sem'];
            echo "<tr>";
            echo "<td>".$row['RegNo']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['course']."</td>";
            echo "<td>".$row['branch']."</td>";
            echo "<td>".$row['sem']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "</tr>";
        }
    }
    ?>
  </tbody>
</table>
</div>
<!-- 
  <div class="container">
  <table class="table">

    <tbody>
      <tr >
        <td>Name</td>
        <td>$Name</td>
        
      </tr>
      <tr>
        <td>Registraition Number</td>
        <td>$RegNo</td>
       </tr>
      <tr>
        <td>Session</td>
        <td>2016-19</td>
      </tr> -->
    <!-- <tr>
        <td>Semester</td>
        <td>IV</td>
       </tr>
     <tr>
        <td>Course</td>
        <td>MCA</td>
       </tr>
     <tr>
        <td>Department</td>
        <td>CSED</td>
       </tr> -->
   
  <!--   </tbody>
  </table>
</div> -->
  


	  
	  <!--Panel Content-->
		  
	  </div>
    </div>
</font>


	
<br>
	<font size=4>
	<div class="container">
  
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Attendance</div>
      <div class="panel-body">
	  Search by :
	  <select class="form-control" id="dropdownSubject" name="Subject">
                      
                        <option>Choose your Branch</option>
                        <option>Computer Science</option>
                        <option>Information technology</option>
                        <option>NA</option>
                      

                            </select>

<div class="container">
  
  <table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th>Subject Name</th>
        <th>Subject Code</th>
        <th>Present</th>
		<th>Absent</th>
		<th>Total classes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
		<td>Doe</td>
		<td>Doe</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
		<td>Doe</td>
		<td>Doe</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
		<td>Doe</td>
		<td>Doe</td>
      </tr>
    </tbody>
  </table>
</div>

	  </div>
    </div>
	<font>
	<br>

	
	<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>