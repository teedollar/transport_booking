<?php

require_once 'admin_header.php';

$admin_id = $_SESSION['a_id'];
$admin = $obj_conf->selectAdminName($admin_id);

?>

<!-- <br><br><br><br><br>

<center><h2>Welcome SANUSI OLAYIWOLA</h2></center> -->

<br><br><br><br><br>

    <center><h3 class="cta-title">Welcome  <?php echo $admin ?></h3></center>
    <center><?php echo date('D, d M, Y');  ?></center>           

    <br><br><br>

    <div class="row justify-content-center">
      <div class="col-md-5 col-lg-5">
        <img src="../img/portfolio/sc2.jpg">
      </div>

      <div class="col-md-5">

        <center><h3> NEW BOOKINGS</h3></center>

        <p>There are sevaral new bookings that have been made by our clients. Check them out in the booking section.</p>

        <center><h3> FEEDBACK</h3></center>

        <p>Remember to respond to the enquiries our clients have made. This will provide them with more knowledge and understanding of the services we provide.</p>
      
      </div>
    </div>
      

    <br><br><br>
    
<?php

require_once '../footer.php';

?>