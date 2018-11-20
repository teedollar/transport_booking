<?php

require_once 'admin_header.php';

?>

<!-- <br><br><br><br><br>

<center><h2>Welcome SANUSI OLAYIWOLA</h2></center> -->

<br><br><br><br><br>

    <center><h3 class="cta-title">FEEDBACK</h3></center>
    <!-- <center><?php echo date('D, d M, Y');  ?></center> -->           



    <br>

    <div class="row justify-content-center">
      <div class="col-md-10">
      
        <div class="col-md-12">

        <?php
        
          $enq = $obj_conf->getEnquiries();

          if(count($enq) > 0)
          {
            foreach ($enq as $key => $value) {
              ?>
                  <div style="text-align: center">
                    <div class="fa fa-road"></div> 
                    <div style="color: black; font-size: 21px;"> &nbsp;&nbsp;&nbsp;
                      <a href="reply.php?e_id=<?php echo $value['e_id']?>&client_id=<?php echo $value['client_id']?>">
                        <?php echo $value['topic']; ?>
                      </a>
                    </div>
                    <br>
                  </div>
              <?php
            }
          }
        ?>
              

        
        </div>
      
      </div>
    </div>
      

    <br><br><br>
    
<?php

require_once '../footer.php';

?>