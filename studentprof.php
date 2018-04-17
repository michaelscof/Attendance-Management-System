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

  
   
   
   <!--feedback  modal-->

    <!-- <div class="modal fade login" id="fModal">
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
		 </div>   -->
  
   
   
  
    <!-- Navigation -->
	<font size=3>
	
	
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
	  <img src="logo.png">
	  <font size=5>
        <a class="navbar-brand" href="studentprof.php"><br>MNNIT ALLAHABAD</a></font>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
	
			<!-- <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#fModal">Feedback</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="home.php">Logout</a>
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
        <?php

  echo"<table class=\"table\">";
    $RegNo = $_SESSION['RegNo'];
    $Name="";
    $Sem="";
    $Course="";
    $Branch="";
    $query="SELECT * FROM `stud` WHERE `RegNo`='$RegNo'";
    $result=$conn->query($query);
    if ($result->num_rows > 0) 
    {
       while($row = $result->fetch_assoc()) 
        {
           $Course=$row['course'];
           $Sem=$row['sem'];
           $Name=$row['name'];
           $Branch=$row['branch'];
        }
    }
    echo"<tbody>
      <tr >
        <td>Name</td>
        <td>".$Name."</td>
        
      </tr>
      <tr>
        <td>Registration Number</td>
        <td>".$RegNo."</td>
       </tr>
	  <tr>
        <td>Semester</td>
        <td>".$Sem."</td>
       </tr>
	   <tr>
        <td>Course</td>
        <td>".$Course."</td>
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
</font>


	
<br>
	<font size=4>
	<div class=\"container\">
  
  <div class=\"panel-group\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">Attendance</div>
      <div class=\"panel-body\">
	  Search by :
	  <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Subject Name\"><br><br>

<div class=\"container\">
  
  <table class=\"table table-striped\" id=\"myTable\">
    <thead>
      <tr>
        <th>Subject Name</th>
        <th>Subject Code</th>
        <th>Present</th>
		<th>Total Classes</th>
		<th>Percentage</th>
      </tr>
    </thead>
    <tbody>";
      $Name="";
      $S_Code="";
      $query="SELECT S_Code,Name FROM `subject` WHERE Course='$Course' and Sem='$Sem'";
      $result=$conn->query($query);
      if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
          $Name=$row['Name'];
          $S_Code=$row['S_Code'];
          $Present=0;
          $Total=0;
          $query1="SELECT * FROM `mca` WHERE SubId='$S_Code' and RegNo='$RegNo'";
           $result1=$conn->query($query1);
            if($result1->num_rows>0){
             while($row1=$result1->fetch_assoc()){
                $Present=$row1['Present'];
                $Total=$row1['Total'];
           }
         }
        echo"<td>";echo $Name;echo"</td>
        <td>";echo $S_Code;echo"</td>
        <td>";echo $Present;echo "</td>
        <td>";echo $Total;echo "</td>
        <td>";if($Total==0)
          $Percentage=0;
          else
            $Percentage=($Present*100)/$Total;
          echo round($Percentage,2);
        echo"</td>
      </tr>
        ";
      }
    }
     echo"    </tbody>
  </table>
</div>";?>
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
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
