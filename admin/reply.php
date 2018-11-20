<?php

require_once 'admin_header.php';

?>

<br><br><br><br><br>

      <?php

        $e_id = $_GET['e_id'];
        $read_enq = $obj_conf->readEnquiries($e_id);
      ?>

    <div class="row justify-content-center">
      <div class="col-md-10">

      
      
        <div class="col-md-12">

              <div class="form">
                <form action="register.php" method="post">
                    <div class="row justify-content-center"> 
                    <div class="col-lg-12 col-md-12">
                    
                          <div class="form-group">
                            <input type="text" value="<?php echo $read_enq['topic'] ?>" class="form-control" readonly="" />
                          </div>

                          <div class="form-group">
                            <textarea class="form-control"  rows="5" readonly=""> <?php echo $read_enq['message'] ?> </textarea>
                          </div>

                      </div>

                  </div>
                  </form>
                  </div>

                  <div>

              <center>
                <?php 
                  if (isset($_POST['send'])) {
                    $topic = $read_enq['topic'];
                    $reply = $_POST['reply'];
                    $client_id = $read_enq['client_id'];

                    $obj_conf->replyEnquiries($e_id, $topic, $reply, $client_id);
                  }
                ?>
              </center>
              
                <div class="form">
                  
                  <form action="reply.php?e_id=<?php echo $e_id?>&client_id=<?php echo $client_id?>" method="post">
                    

                    <div class="form-group">
                      <textarea class="form-control" name="reply" rows="5" cols="6"  placeholder="Reply here"></textarea>
                    </div>

                    <div class="form-group">
                      <center><input type="submit" name="send" value="Send Reply" class="btn btn-success"></center>
                    </div>


                  </form>

                </div>
              </div>





        </div>
      
      </div>
    </div>
      

    <br><br><br>
    
<?php

require_once '../footer.php';

?>