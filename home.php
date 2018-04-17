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

	
	
	
    <title>attendance portal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

  </head>

  <body>

   
   <!--student login modal-->

    <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
					<h4 class="modal-title"> Student Login</h4>                      
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                               
                                
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="student.php" accept-charset="UTF-8">
                                    <input id="RegNo" class="form-control" type="text" placeholder="RegNo" name="RegNo">
                                    <input id="Password" class="form-control" type="password" placeholder="Password" name="Password">
                                    <input class="btn btn-default btn-login" type="submit" value="Login" name='slogin'>
                                    </form>
                                </div>
                             </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            
                        </div>
                   
                    </div>        
    		      </div>
		      </div>
		 </div>   
   
 <!--teacher login modal-->

    <div class="modal fade login" id="tloginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
					 <h4 class="modal-title">Teacher Login</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                               
                                
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="faculty_login.php" accept-charset="UTF-8">
                                    <input id="text" class="form-control" type="text" placeholder="T_ID" name="T_ID">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="submit" value="Login" name='tlogin'>
                                    
                                    </form>
                                </div>
                             </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            
                        </div>
                      <!--  <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>-->
                    </div>        
    		      </div>
		      </div>
		 </div>   
  
  
  
   <!--admin login modal-->

    <div class="modal fade login" id="aloginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
					 <h4 class="modal-title"> Admin Login</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                               
                                
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post"  action='admin.php' accept-charset="UTF-8">
                                    <input id="username" class="form-control" type="text" placeholder="UserName" name="UserName">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="Password">
                                    <input class="btn btn-default btn-login" type="submit"  name='login' >
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            
                        </div>
                      <!--  <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>-->
                    </div>        
    		      </div>
		      </div>
		 </div>   
  
  
  
  
   <!--student signup  modal-->

   <!-- <div class="modal fade login" id="ssignupModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
					 <h4 class="modal-title"> Student Signup</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                               
                                
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="/login" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
									<input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                    <input class="btn btn-default btn-login" type="button" value="Create account" name="commit">
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
  -->
  
  
  
   <!--faculty signup  modal-->

    <div class="modal fade login" id="fsignupModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
					 <h4 class="modal-title"> Faculty Signup</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                               
                                
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="home.php" accept-charset="UTF-8">
                                    <input id="T_ID" class="form-control" type="text" placeholder="T_ID" name="T_ID">
                                    <input id="name" class="form-control" type="text" placeholder="name" name="Name">
                                    <input id="name" class="form-control" type="text" placeholder="Gender" name="Gender">
                                    <input id="Designation" class="form-control" type="text" placeholder="Designation" name="Designation">
									<input id="password" class="form-control" type="password" placeholder="Password" name="Password">
                                    <input class="btn btn-default btn-login" type="submit" name='Teacher' value='sign'>
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
	  <font size=4>
        <a class="navbar-brand" href="#">MNNIT ALLAHABAD</a></font>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
			
			
			<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Login
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#"  class="nav-link"  data-toggle="modal" data-target="#loginModal" >Student</a>
        <a class="dropdown-item" href="#" class="nav-link"  data-toggle="modal" data-target="#tloginModal">Faculty</a>
        <a class="dropdown-item" href="#" class="nav-link"  data-toggle="modal" data-target="#aloginModal">Admin</a>
      </div>
    </li>
		<!--	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Signup
      </a>
      <div class="dropdown-menu">
       <a class="dropdown-item" href="#"  class="nav-link"  data-toggle="modal" data-target="#ssignupModal" >Student</a>
        <a class="dropdown-item" href="#" class="nav-link"  data-toggle="modal" data-target="#fsignupModal">Faculty</a>
        <a class="dropdown-item" href="#" class="nav-link"  data-toggle="modal" data-target="#aloginModal">Admin</a>
      </div>
    </li>-->
		
			
            
          </ul>
        </div>
      </div>
    </nav>
	</font>
		
	
	


    <header>
		
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   <!--        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
		 <!-- <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>-->
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Classroom </h3>
              <p>This is situated in Lecture hall .</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>laboratory</h3>
              <p>This is situated in CC.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <!--<div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <section class="py-4">
      <div class="container">
	  <font size=4>
        <h1>Attendance Portal</h1>
        <p>connecting students and teachers</p>
		</font
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">MCA 2016 Initiative</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

