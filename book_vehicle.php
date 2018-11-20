<?php

require_once 'in_header.php';

$client_id = $_SESSION['c_id'];

$name = $obj_conf->getClient($client_id);

?>

<br><br>jnjnjnjnj


    <section id="call-to-action">
      <div class="container wow ">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title"><?php  echo $name ?></h3>
            <p class="cta-text"> Book your traveling hours with us by filling the form below with appropriate information </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" >Book now</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->
    <!--==========================
      booking Section
    ============================-->

    <br><br><br>

    <div class="container wow ">
      <div class="form">

      <?php

                /////////////////////////////////////////////////////////////////

              if(isset($_POST['book_now'])) 
              {
                  $src_name = $_POST['src_name'];
                  $src_address = $_POST['src_address'];
                  $src_state = $_POST['src_state'];
                  $dest_name = $_POST['dest_name'];
                  $dest_address = $_POST['dest_address'];
                  $dest_state = $_POST['dest_state'];
                  $trip_type = $_POST['trip_type'];
                  $day = $_POST['day'];
                  $month = $_POST['month'];
                  $year = $_POST['year'];
                  $vehicle_want = $_POST['vehicle_want'];
                  $trip_form = $_POST['trip_form'];

                  $client_id = $_SESSION['c_id'];

                  $trip_date = $day."-".$month."-".$year;



                  $obj_conf->book_vehicle($src_name, $src_address, $src_state, $dest_name, $dest_address, $dest_state, $trip_type, $trip_date, $day, $month, $year, $vehicle_want, $trip_form, $client_id);

                  echo "<br>";

              }

              ///////////////////////////////////////////////////////////////

              ?>      
        <form  action="book_vehicle.php" method="post">
        <div class="row justify-content-center">    

            

              <div class="col-lg-5 col-md-8">
                <h4>From (Source)</h4>
              
                <div class="form-group">
                  <input type="text" name="src_name" class="form-control"  placeholder="Name of village / town / city"  value="<?php if (isset($_POST['src_name'])) {
                    echo $_POST['src_name'];
                  } ?>" />
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="src_address" rows="5" placeholder="Address"><?php if (isset($_POST['src_address'])) {
                    echo $_POST['src_address'];
                  } ?> </textarea>
                </div>

                <div class="form-group">
                    <select class="form-control" name="src_state" value="<?php if (isset($_POST['src_state'])) {
                    echo $_POST['src_state'];
                  } ?>" >
                      <option value="">-- Name of state --</option>
                      <option value="Ekiti"> Ekiti</option>
                      <option value="Kwara"> Kwara </option>
                      <option value="Lagos"> Lagos </option>
                      <option value="Ondo">Ondo</option>
                      <option value="Osun">Osun</option>
                      <option value="Oyo"> Oyo </option>
                    </select>
                </div>

                

               </div>

                <div class="col-lg-5 col-md-8">
                  <h4>To (Destination)</h4>
                    <div class="form-group">
                      <input type="text" name="dest_name" class="form-control" placeholder="Name" value="<?php if (isset($_POST['dest_name'])) {
                    echo $_POST['dest_name'];
                  } ?>"  />
                    </div>

                    <div class="form-group">
                      <textarea class="form-control" name="dest_address" rows="5" placeholder="Address"> <?php if (isset($_POST['dest_address'])) {
                    echo $_POST['dest_address'];
                  } ?></textarea>
                    </div>

                    <div class="form-group">
                      <select class="form-control" name="dest_state" value="<?php if (isset($_POST['dest_state'])) {
                    echo $_POST['dest_state'];
                  } ?>" >
                        <option value="">-- Name of state --</option>
                        <option value="Ekiti"> Ekiti</option>
                        <option value="Kwara"> Kwara </option>
                        <option value="Lagos"> Lagos </option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo"> Oyo </option>
                     </select>
                    </div>
                  </div>

                  <div class="col-lg-10 col-md-10">

                    <div class="form-group">
                      <select class="form-control" name="trip_type" value="<?php if (isset($_POST['trip_type'])) {
                    echo $_POST['trip_type'];
                  } ?>" >
                        <option value="">-- Type of trip --</option>
                        <option value="One Time Trip"> One Time Trip</option>
                        <option value="Round Trip"> Round Trip </option>
                      </select>
                    </div>

                    <!-- <div class="form-group">


                      <input type="text" name="trip_date" id="trip_date" class="form-control" data-provide="datepicker" placeholder="Trip Date" value="<?php // if (isset($_POST['trip_date'])) {
                    // echo $_POST['trip_date'];
                  //} ?>"   />
                    </div>

                    <div class="form-group input-append date form_datetime">
                      <input type="text" name="trip_time" class="form-control" placeholder="Trip Time" value="<?php // if (isset($_POST['trip_time'])) {
                    // echo $_POST['trip_time'];
                  //} ?>"  />
                  <span class="add-on"><i class="icon-th"></i></span>
                    </div>
 -->

                    <div class="row">
                      
                      <div class="form-group">
                        <div class="col-md-1">
                          <label>Day</label>
                        </div>
                        <div class="col-md-3">
                          <select name="day">
                            <option value="">--day--</option>
                            <?php

                              for ($i=1; $i < 31; $i++) { 
                                ?>
                                  <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php
                              }
                            ?>
                            
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-1">
                          <label>Month</label>
                        </div>
                          <select name="month">
                            <option value="">--month--</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <div class="col-md-1">
                          <label>Year</label>
                        </div>
                          <select name="year">
                          <option value="">--year--</option>
                            <?php
                              for ($i=2018; $i < 2020; $i++) { 
                                ?>
                                  <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php
                              }
                            ?>
                          </select>
                      </div>

                    </div>

                    
                    <div class="form-group">
                        <select class="form-control" name="vehicle_want" value="<?php if (isset($_POST['vehicle_want'])) {
                    echo $_POST['vehicle_want'];
                  } ?>" >
                          <option value="">-- Which vehicle do you want ? --</option>
                          <option value="Car"> Car</option>
                          <option value="Bus"> Bus </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="trip_form" value="<?php if (isset($_POST['trip_form'])) {
                    echo $_POST['trip_form'];
                  } ?>" >
                          <option value="">-- Which form of trip ? --</option>
                          <option value="Personal"> Personal</option>
                          <option value="Group"> Group </option>
                        </select>
                    </div>

                    <div class="form-group">
                      <div class="text-center btn"><input type="submit" name="book_now" value="BOOK NOW" class="form-control"></div>
                      </div>

                   </div>

                      
                      
                 

              </div>
              </form>
              </div>
            </div>


              <br><br><br>
    
<?php

require_once 'footer.php';

?>

<script type="text/javascript">
    /*$(document).ready(function ()
    {
      var date_input = $( 'input[name="trip_date"]');
      var options = {
        format: 'mm/dd/yyyy',
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    });*/

    $(".form_datetime").datetimepicker({
      format: "dd MM yyyy"
    })
  </script>