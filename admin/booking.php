<?php

require_once 'admin_header.php';

?>

<!-- <br><br><br><br><br>

<center><h2>Welcome SANUSI OLAYIWOLA</h2></center> -->

<br><br><br><br><br>

    <center><h3 class="cta-title">BOOKINGS</h3></center>
    <!-- <center><?php echo date('D, d M, Y');  ?></center> -->           



    <br><br><br>

    <div class="row justify-content-center">
      <div class="col-md-10">

        <div class="row justify-content-right">
          <div class="col-md-9"></div>
            <div class="col-md-3">
              <form class="form">
                <input type="text" name="search" class="form-group" placeholder="Seach here">
              </form>
            </div>
        </div>

        

      <table class="table table-cover">

      <?php  

        $bookings = $obj_conf->getBookings();
        if (count($bookings) > 0) {

          ?>
        
        <thead>
          <tr>
            <th>Fullname</th>
            <th>Email</th>
            <th>Phone number</th>
            <th></th>
          </tr>
        </thead>

        <tbody>

          <?php
            foreach ($bookings as $key => $value) {

          ?>
        

              <tr>
                <td><?php echo $value['surname']." ".$value['othername'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['phone_num'] ?></td>
                <td><a href="view_booking.php?bk_id=<?php echo $value['bk_id'] ?>" target="_blank" ><input type="submit" class="btn btn-success" value="View Receipt"> </a></td>
              </tr>

            <?php

            }
            
          }
          else
          {
            ?>
              <center>
                <b style='color:#fff; font-size:18px; background: darkgreen; padding: 20px'>There is no booking at the moment </b><br><br>
              </center>

            <?php
          }


          ?>

        </tbody>

      </table>
      
      </div>
    </div>
      

    <br><br><br>
    
<?php

require_once '../footer.php';

?>