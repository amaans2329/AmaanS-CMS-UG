<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Complaint History</title>
    <?php include('partials.php') ?>

  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('img/img4.jpg');">
  <div class="container" style="border: 1px solid lightgrey; border-radius: 5px;">

    <div class="text-center my-3">
      <h2>Available Complaint</h2>
    </div>
  
    <?php
      $query = "SELECT * FROM complaint ";
      $result = mysqli_query($db, $query);
    ?>
      <table class="table">
      <thead>
          <tr>
          <th>Complaint Id</th>
          <th>Complaint Title</th>
          <th>Complaint Type</th>
          <th>status</th>
          <th>View Details</th>
          <th>Last Updation Date</th>
  
          </tr>
      </thead>
      <tbody>
          <?php
          if( mysqli_num_rows( $result )==0 ){
              echo '<tr><td colspan="4">No complaints Found</td></tr>';
          }else{
              while( $row = mysqli_fetch_assoc( $result ) ){
                  $id = $row['complaintid'];
              echo "<tr><td>{$row['complaintid']}</td><td>{$row['title']}</td><td>{$row['type']}</td><td>{$row['status']}</td>
              <td><a href='details.php?cid=$id'>View Details</td><td>{$row['updationdate']}</td></tr>\n";
              }
              
          }
          ?>
      </tbody>
      </table>
      <div class="my-3">

        <a href="login.php?logout='1'" class="btn btn-danger">logout</a>
        </div>
  </div>
</body>
</html>