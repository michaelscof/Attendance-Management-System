 <!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      include_once 'dbconnect.php';

      //execute the SQL query and return records
      $result = $conn->query("SELECT * FROM Mca ");
     
      ?>
      <table border="5" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>RegNo</th>
          <th>Name</th>
          <th>SubId</th>
          <th>%Age</th>
          <th>Sem</th>
          <td>Total</td>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = $result->fetch_assoc() ){
            echo
            "<tr>
              <td>{$row['RegNo']}</td>
              <td>{$row['Name']}</td>
              <td>{$row['SubId']}</td>
              <td>{$row['%Age']}</td>
              <td>{$row['Sem']}</td>
              <td>{$row['Total']}</td> 
            </tr>";
          }
        ?>
      </tbody>
    </table>
    <?php mysqli_close($conn);?>
    </body>
    </html>