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
            <h3 class="cta-title">Welcome <?php  echo $name ?></h3>
            <p class="cta-text"> You can check the movement hours of our cars and buses to different locations within the south western part of the country below..</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" >Check below</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".monday" ><b>Monday</b></li>
              <li data-filter=".tuesday"><b>Tuesday</b></li>
              <li data-filter=".wednesday"><b>Wednesday</b></li>
              <li data-filter=".thursday"><b>Thursday</b></li>
              <li data-filter=".friday"><b>Friday</b></li>
              <li data-filter=".weekend"><b>Weekend</b></li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-md-4 portfolio-item monday">
            <a href="">
              <img src="img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>1</h4>
                <span>Monday</span>
              </div>
            </a>
          </div>

          <div class="col-md-8 portfolio-item monday">
          <center><b>Monday</b></center><br>
            <table class="table table-striped">
            	<thead>
            		<tr>
            			<td>Location</td>
            			<td>Hours</td>
            		</tr>
            	</thead>
            	<tbody>
	              <tr>
	                <td>Ikirun - Ikere</td><td>08:25 AM</td>
	              </tr>
	              <tr>
	                <td>Ibadan - Ilorin</td><td>08:47 AM</td>
	              </tr>
	              <tr>
	                <td>Akure - Lagos</td><td>09:13 AM</td>
	              </tr>
	              

            	</tbody>
            	
            </table>
          </div>

          <div class="col-md-4 portfolio-item tuesday">
            <a href="">
              <img src="img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>2</h4>
                <span>Tuesday</span>
              </div>
            </a>
          </div>

          <div class="col-md-8 portfolio-item tuesday">
          <center><b>Tuesday</b></center><br>
            <table class="table table-striped">
            	<thead>
            		<tr>
            			<td>Location</td>
            			<td>Hours</td>
            		</tr>
            	</thead>
            	<tbody>
	              <tr>
	                <td>Ikirun - Ikere</td><td>08:25 AM</td>
	              </tr>
	              <tr>
	                <td>Ibadan - Ilorin</td><td>08:47 AM</td>
	              </tr>
	              <tr>
	                <td>Akure - Lagos</td><td>09:13 AM</td>
	              </tr>
	              <tr>
	                <td>Ado Ekiti - Ojota</td><td>09:15 AM</td>
	              </tr>

            	</tbody>
            	
            </table>
          </div>

         <div class="col-md-4 portfolio-item wednesday">
            <a href="">
              <img src="img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>3</h4>
                <span>Wednesday</span>
              </div>
            </a>
          </div>

          <div class="col-md-8 portfolio-item wednesday">
          <center><b>Wednesday</b></center><br>
            <table class="table table-striped">
            	<thead>
            		<tr>
            			<td>Location</td>
            			<td>Hours</td>
            		</tr>
            	</thead>
            	<tbody>
	              <tr>
	                <td>Ikirun - Ikere</td><td>08:25 AM</td>
	              </tr>
	              <tr>
	                <td>Ibadan - Ilorin</td><td>08:47 AM</td>
	              </tr>
	              <tr>
	                <td>Akure - Lagos</td><td>09:13 AM</td>
	              </tr>
	              

            	</tbody>
            	
            </table>
          </div>

          <div class="col-md-4 portfolio-item thursday">
            <a href="">
              <img src="img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>4</h4>
                <span>Thursday</span>
              </div>
            </a>
          </div>

          <div class="col-md-8 portfolio-item thursday">
          <center><b>Thursday</b></center><br>
            <table class="table table-striped">
            	<thead>
            		<tr>
            			<td>Location</td>
            			<td>Hours</td>
            		</tr>
            	</thead>
            	<tbody>
	              <tr>
	                <td>Ikirun - Ikere</td><td>08:25 AM</td>
	              </tr>
	              <tr>
	                <td>Ibadan - Ilorin</td><td>08:47 AM</td>
	              </tr>
	              <tr>
	                <td>Akure - Lagos</td><td>09:13 AM</td>
	              </tr>
	              

            	</tbody>
            	
            </table>
          </div>

          <div class="col-md-4 portfolio-item friday">
            <a href="">
              <img src="img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>5</h4>
                <span>Fridayr</span>
              </div>
            </a>
          </div>

          <div class="col-md-8 portfolio-item friday">
          <center><b>Friday</b></center><br>
            <table class="table table-striped">
            	<thead>
            		<tr>
            			<td>Location</td>
            			<td>Hours</td>
            		</tr>
            	</thead>
            	<tbody>
	              <tr>
	                <td>Ikirun - Ikere</td><td>08:25 AM</td>
	              </tr>
	              <tr>
	                <td>Ibadan - Ilorin</td><td>08:47 AM</td>
	              </tr>
	              <tr>
	                <td>Akure - Lagos</td><td>09:13 AM</td>
	              </tr>
	              

            	</tbody>
            	
            </table>
          </div>

          <div class="col-md-4 portfolio-item weekend">
            <a href="">
              <img src="img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>6</h4>
                <span>Weekend</span>
              </div>
            </a>
          </div>

          <div class="col-md-8 portfolio-item weekend">
          <center><b>Weekend</b></center><br>
            <table class="table table-striped">
            	<thead>
            		<tr>
            			<td>Location</td>
            			<td>Hours</td>
            		</tr>
            	</thead>
            	<tbody>
	              <tr>
	                <td>Ikirun - Ikere</td><td>08:25 AM</td>
	              </tr>
	              <tr>
	                <td>Ibadan - Ilorin</td><td>08:47 AM</td>
	              </tr>
	              <tr>
	                <td>Akure - Lagos</td><td>09:13 AM</td>
	              </tr>
	           

            	</tbody>
            	
            </table>
          </div>





        </div>

      </div>
    </section><!-- #portfolio -->
<?php

require_once 'footer.php';

?>