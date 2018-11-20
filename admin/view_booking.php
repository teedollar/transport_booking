<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Taksi Transport Service</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

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
require_once '../class/config.php';

$obj_conf = new Config();
$bk_id = $_GET['bk_id'];

$receipt = $obj_conf->view_receipt($bk_id);

?>
<div style="background: #ffffe9; padding: 20px; border-radius: 10px">

  <br>
  <center><h2 style="color: darkblue; font: sans-serif; font-weight: bold">TAKSI TRANSPORT COMPANY</h2></center>
  <center><i style="color: blue">..transport providers for the west</i></center>

      <div class="row justify-content-center">
      <div class="col-md-10">
      <br>
      <center><h4>Transport Booking Analysis</h4></center>

      <?php
          if(isset($_POST['add'])){
            $price = $_POST['amount'];
            $bk_id = $receipt['bk_id'];

            if($obj_conf->addAmount($price, $bk_id))
            {



                  //getting booking details
                  $details = $obj_conf->bookingDetails($bk_id);

                  //getting client details
                  $client_id = $details['client_id'];
                  $client_det = $obj_conf->getClientDetails($client_id);

                  $client_name = $client_det['surname']." ".$client_det['othername'];
                  $client_addr = $client_det['address'];
                  $client_email = $client_det['email'];
                  $client_phone = $client_det['phone_num'];

                  //getting some booking parameteres using bk_id
                  $from = $details['src_name']." (".$details['src_state'].")";
                  $to = $details['dest_name']." (".$details['dest_state'].")";
                  $amount = $details['amount'];

                  $topic = "Payment update on your journey ".$from." - ".$to;

                  $reply = "Dear ".$client_name." (".$client_email.", ".$client_phone.")

                            We received your transport booking with the following details:

                            From: ".$from."
                            To: ".$to."
                            The total amount of your transaction is  ".$amount."


                            Regards...
                            TAKSI TRANSPORT";

                  $obj_conf->replyReceipt($topic, $reply, $client_id);

                  //updating booking

                  $obj_conf->updateBooking($bk_id);


          }

          }

       ?>
      

        <table class="table" style="text-align: center;">
          <tbody>
            <tr>
            <th style="color: blue">Transport Details</th>
          </tr>
          <tr>
            <th>Source name</th><td><?php echo $receipt['src_name'] ?></td> 
          </tr>
          <tr>
            <th>Destination name</th><td><?php echo $receipt['dest_name'] ?></td>
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
    
          </tbody>
                  
        </table>

              
              <form  action="view_booking.php?bk_id=<?php echo $receipt['bk_id'] ?>" method="post">
                <div class="form-group">
                   <input type="text" name="amount" placeholder="Enter the amount" class="form-control">
                </div>
                <div class="form-group" style="text-align: center">
                   <input type="submit" name="add" class="btn btn-success" value="ADD">
                </div>
                
              </form>

      </div>
    </div>
  
</div>

?>
</body>
</html>