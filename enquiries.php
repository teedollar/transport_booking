<?php

require_once 'in_header.php';

$client_id = $_SESSION['c_id'];

$name = $obj_conf->getClient($client_id);

?>

<br><br>


    <section id="call-to-action">
      <div class="container wow ">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title"><?php  echo $name ?></h3>
            <p class="cta-text"> Have something in your mind you want to let us know? feel free to ask us questions and we'll be ready to reply you in no time </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" >Enquire now</a>
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
          <form  action="enquiries.php" method="post" >
            <div class="row justify-content-center">    

            <!--  #######################################################################  -->

              <?php
                $client_id = $_SESSION['c_id'];
                if(isset($_POST['send']))
                {

                  $topic = $_POST['topic'];
                  $msg = $_POST['msg'];

                  $obj_conf->makeEnquiry($topic, $msg, $client_id);

                  echo "<br><br>";

                }

              ?>

          <!--  #######################################################################  -->      

              <div class="col-lg-10 col-md-10">
                  <div class="form-group">
                    <select class="form-control" name="topic">
                    <option>-- Subject of enquiries --</option>
                    <?php 

                      $subject = $obj_conf->getSubject();
                      foreach ($subject as $key => $value) {
                        ?>
                          <option value="<?php echo $value['body'] ?>"> <?php echo $value['body'] ?> </option>
                        <?php
                      }
                    ?>
                    </select>
                  </div>


                  <div class="form-group">
                    <textarea class="form-control" name="msg" rows="5" placeholder="Type here ..."></textarea>
                  </div>

                  <div class="text-center"><button type="submit" name="send">SEND</button></div>

              </div>
            </div>
          </form>
        </div>
      </div>
      <br><br><br>
    
<?php

require_once 'footer.php';

?>