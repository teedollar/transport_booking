    <?php

    require_once 'in_header.php';


    ?>

    <br><br>
    <!--==========================
      Contact Section

      -->

    <section id="contact">
       

      <div class="container wow ">
      <div class="form">
        <form action="register.php" method="post">
        <div class="row justify-content-center">   

        <?php
        $n_id = $_GET['n_id'];
          $read_note = $obj_conf->readNotification($n_id);
        ?>       
         
                <div class="col-lg-10 col-md-8">
                
                      <div class="form-group">
                        <input type="text" value="<?php echo $read_note['topic'] ?>" class="form-control" readonly="" />
                      </div>

                      <div class="form-group">
                        <textarea class="form-control"  rows="5" readonly=""> <?php echo $read_note['message'] ?> </textarea>
                      </div>

                  </div>

              </div>
              </form>
              </div>
            </div>

    </section><!-- #contact --><?php

    require_once 'footer.php';

?>