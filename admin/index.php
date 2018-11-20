    <?php

    require_once 'a_header.php';

    ?>

    <br><br><br><br>
    <!--==========================
      Contact Section
    ============================-->

    <section id="contact">
    <center><h3 style="color: #0F1E33; font-weight: bold">ADMIN LOG IN</h3></center>
      <div class="container wow fadeInUp">
        <div class="row justify-content-center">

          <div class="col-lg-5 col-md-8">

      <!--  #######################################################################  -->

          <?php
            if(isset($_POST['login']))
            {

              $email = $_POST['email'];
              $password = $_POST['password'];

              $obj_conf->admin_login($email, $password);

            }

          ?><br>

          <!--  #######################################################################  -->
            <div class="form">
              <form action="index.php" method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Your Email"  />
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password"  placeholder="Password"  />
                </div>
                <div class="text-center"><button type="submit" name="login">LOGIN</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->
