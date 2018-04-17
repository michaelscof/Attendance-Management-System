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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
  
  <div class="panel-group">
    <div class="panel panel-default">
       <form type='post' action='facultyprofile.php'>
      <div class="panel-heading">
        <input type='submit' class="btn btn-primary" name='Back' value='Back' style="margin-left: 700px;width:150px;font-size: 14px"/></div>
      </form>
      <div class="panel-heading">Take Attendance</div>
      <div class="panel-body">
   Search by: 
    <input type="text" pattern="^[A-Za-z][a-zA-Z0-9-_\.]{5,12}$"  id="myInput" onkeyup="myFunction()" placeholder=" Registration Number "><br><br>
<div class="container">
 <?php
 
echo "<form method=\"post\" action=\"prem.php\" accept-charset=\"UTF-8\">
<table class=\"table table-striped\" id=\"myTable\">
    <thead>
      <tr>
    <th>S.no.</th>
        <th>Registration no.</th>
        <th>Name</th>
        <th>Lecture</th>
    <th>Total Present</th>
    <th>Total Classes</th>
    <th>Attendance Percentage</th> 
      </tr>
    </thead>
    <tbody>";
    $p;
    $var2;
    if(isset($_REQUEST['Add'])){
          $chk=$_REQUEST["chk"];
          $a=implode(",", $chk);
          $Total;
          for($i=0;$i<count($chk);$i++)
          {
              $result = $conn->query("SELECT Present,Total FROM mca where RegNo='$chk[$i]'");
              $Present=0;
              $Total=0;
              if($result->num_rows>0){
              while($row = $result->fetch_assoc() ){
                   $Present=$row['Present'];
                   $Total=$row['Total'];
             }}
             $Present++;
             $query="Update mca set Present='$Present' where RegNo='$chk[$i]'";
                       $result=$conn->query($query);
          }
          if(count($chk)!=0)
          {
            $Total++;
            $query="Update mca set Total='$Total'";
            $result=$conn->query($query);
          }
          else
          {
              $result = $conn->query("SELECT Total FROM mca");
              if($result->num_rows>0){
              while($row = $result->fetch_assoc()){
                   $Total=$row['Total'];
             }}
             $Total++;
            $query="Update mca set Total='$Total'";
             $result=$conn->query($query);
          }
        }
        $S_Code;
        $var;
        if(isset($_POST['submit']))
        {
            $S_Code=$_POST['Subject'];
            $_SESSION['SCode']=$S_Code;
            $var=$_POST['x'];
            $_SESSION['var1']=$var;
            if($var=='BTECH_CSE')
               $result = $conn->query("SELECT * FROM BTECH_CSE where SubId='$S_Code' order by RegNo ASC");
             if($var=='BTECH_IT')
              $result = $conn->query("SELECT * FROM BTECH_IT where SubId='$S_Code' order by RegNo ASC");
            if($var=='MCA')
             $result = $conn->query("SELECT * FROM MCA where SubId='$S_Code' order by RegNo ASC");
        }
        $p=$_SESSION['SCode'];
        $var2=$_SESSION['var1'];
        if($var2=='BTECH_CSE')
               $result = $conn->query("SELECT * FROM BTECH_CSE where SubId='$p' order by RegNo ASC");
             if($var2=='BTECH_IT')
              $result = $conn->query("SELECT * FROM BTECH_IT where SubId='$p' order by RegNo ASC");
            if($var2=='MCA')
             $result = $conn->query("SELECT * FROM MCA where SubId='$p' order by RegNo ASC");
        $count=0;
        while( $row = $result->fetch_assoc() ){
            $count=$count+1;
            $RegNo=$row['RegNo'];
            $prem=$row["Present"];
            $ar_reg[$count]=$row['RegNo'];
            if($row['Total']==0)
              $percentage=0;
            else
            $percentage=($row["Present"]*100)/($row["Total"]);
            echo
            '
            <tr>
             <td>'.$count.'</td>
              <td>'.$row["RegNo"].'</td>
              <td>'.$row["Name"].'</td>
              <td><input type="checkbox" name="chk[]" value="'.$RegNo.'" </td>
              <td>'.$row["Present"].'</td>
              <td>'.$row["Total"].'</td>
              <td>'.round($percentage,2).'</td> 
            </tr>
            '
            ;
        }
      echo"</tbody>
  </table>";
         ?>
         <input class="btn btn-success" type="submit" name="Add" value="Submit Attendance" style="margin-left: 700px;width:150px;font-size: 14px"></input>
         </form>
       </div>
     </div>
   </div>
 </div>
</div>
         <br/>
         <br/>


<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
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