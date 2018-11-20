<?php

require_once 'in_header.php';

$client_id = $_SESSION['c_id'];

$name = $obj_conf->getClient($client_id);

?>

<!-- <br><br><br><br><br>

<center><h2>Welcome SANUSI OLAYIWOLA</h2></center> -->

<br><br>



    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title"><?php  echo $name ?></h3>
            <p class="cta-text"> Read the responses to your enquiries about us and our services here. Click "notification" and a the messages in it. </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" >Read now</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->
    <!--==========================
      booking Section
    ============================-->

    <br>

    <div class="row justify-content-center">
      <div class="col-md-10">
      <center><h4>My notifications</h4></center>
        <table class="table" style="text-align: center;">
          <tbody>
          <?php
            $note = $obj_conf->getNotification($client_id);

            if(count($note) > 0)
            {
              foreach ($note as $key => $value) {
                ?>

                  <tr>
                    <td><a href="read_note.php?n_id=<?php echo $value['n_id'] ?>" > <?php echo $value['topic'] ?> </a></td>
                  </tr>

                <?php
              }
            }
            else{
              ?>

              <center>
                <b style='color:#fff; font-size:18px; background: darkgreen; padding: 20px'>You do not have any unread notification </b><br><br>
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

require_once 'footer.php';

?>