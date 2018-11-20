<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Taksi Transport Service</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
<?php

session_start();
require_once 'class/config.php';

$obj_conf = new Config();
$client_id = $_SESSION['c_id'];

$receipt = $obj_conf->my_receipt($client_id);

?>
<div style="background: #ffffe9; padding: 20px; border-radius: 10px">

  <br>
  <center><h2 style="color: darkblue; font: sans-serif; font-weight: bold">TAKSI TRANSPORT COMPANY</h2></center>
  <center><i style="color: blue">..transport providers for the west</i></center>

      <div class="row justify-content-center">
      <div class="col-md-10">
      <br>
      <center><h4>Transport Booking Analysis</h4></center>
      <table class="table" style="text-align: center;">
          <tbody>
            <tr>
              <th style="color: blue">Personal Information</th>
            </tr>
            <tr>
              <th>NAME</th><td><?php echo $receipt['surname']." ".$receipt['othername'] ?></td>
            </tr>
            <tr>
              <th>Address</th><td><?php echo $receipt['address'] ?></td>
            </tr>
            <tr>
              <th>Email</th><td><?php echo $receipt['email'] ?></td>
            </tr>
            <tr>
              <th>Phone Number</th><td><?php echo $receipt['phone_num'] ?></td>
            </tr>

          </tbody>

        </table>

        <table class="table" style="text-align: center;">
          <tbody>
            <tr>
            <th style="color: blue">Transport Details</th>
          </tr>
          <tr>
            <th>Source name</th><td><?php echo $receipt['src_name'] ?></td> 
          </tr>
          <tr>
            <th>Source address</th><td><?php echo $receipt['src_address'] ?></td>
          </tr>
          <tr>
            <th>Source state</th><td><?php echo $receipt['src_state'] ?></td>
          </tr>
          <tr>
            <th>Destination name</th><td><?php echo $receipt['dest_name'] ?></td>
          </tr>
          <tr>
            <th>Destination address</th><td><?php echo $receipt['dest_address'] ?></td>
          </tr>
          <tr>
            <th>Destination state</th><td><?php echo $receipt['dest_state'] ?></td>
          </tr>
          <tr>
            <th>Trip type</th><td><?php echo $receipt['trip_type'] ?></td>
          </tr>
          <tr>
            <th>Date of trip</th><td><?php echo $receipt['trip_date'] ?></td>
          </tr>
          <tr>
            <th>Vehicle type</th><td><?php echo $receipt['vehicle_want'] ?></td>
          </tr>
          <tr>
            <th>Form of trip</th><td><?php echo $receipt['trip_form'] ?></td>
          </tr>
          <tr>
            <th style="color: darkgreen">Total</th><td>....................</td>
          </tr>
            
          </tbody>
                  
        </table>

        <center><a href="#" onclick="window.print()" >PRINT RECEIPT</a></center>
      </div>
    </div>
  
</div>

?>
</body>
</html>