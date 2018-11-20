<?php

require_once 'admin_header.php';

?>

<br><br><br><br><br>

    <center><h3 class="cta-title">Add Subjects on Enquiries</h3></center>   
    <br>

    <div class="row justify-content-center">

        <!--  #################################################  -->

          <?php
            if(isset($_POST['subject']))
            {

              $body = $_POST['body'];

              $obj_conf->addSubject($body);

            }

          ?>

          <!--  #######################################################################  -->
      <div class="col-md-10">
      
        <div class="col-md-12">

              <div>
                <div class="form">
                  
                  <form action="add_subject.php" method="post">
                    

                    <div class="form-group">
                      <input type="text" name="body" placeholder="Enter subject here" class="form-control">
                    </div>

                    <div class="form-group">
                      <center><input type="submit" name="subject" value="ADD SUBJECT" class="btn btn-success"></center>
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