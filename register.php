    <?php

    require_once 'g_header.php';


    ?>

    <br><br>
    <!--==========================
      Contact Section
    ============================-->

        <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow ">
        <div class="section-header">
          <h3 class="section-title">REGISTER</h3>
          <p class="section-description"></p>
        </div>
      </div>

      <?php

      /////////////////////////////////////////////////////////////////

    if(isset($_POST['registers'])) 
    {
        $s_name = $_POST['sname'];
        $o_name = $_POST['oname'];
        $email = $_POST['email'];
        $p_num = $_POST['p_num'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $nok_sname = $_POST['nok_sname'];
        $nok_oname = $_POST['nok_oname'];
        $nok_email = $_POST['nok_email'];
        $nok_p_num = $_POST['nok_p_num'];
        $nok_reln = $_POST['nok_reln'];
        $nok_address = $_POST['nok_address'];

        //$obj_conf->echos($s_name);

        $obj_conf->register($s_name, $o_name, $email, $password, $p_num, $address, $nok_sname, $nok_oname, $nok_email, $nok_p_num, $nok_reln, $nok_address);

        echo "<br>";

    }

    ///////////////////////////////////////////////////////////////

    ?>
      

      <div class="container wow ">
      <div class="form">
        <form action="register.php" method="post">
        <div class="row justify-content-center">          
         

              <div class="col-lg-5 col-md-8">
                <h4>Personal Information</h4>
              
                <div class="form-group">
                  <input type="text" name="sname" class="form-control"  placeholder="Surname" value="<?php if (isset($_POST['sname'])) {
                    echo $_POST['sname'];
                  } ?>" />
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="oname" placeholder="Othername" value="<?php if (isset($_POST['oname'])) {
                    echo $_POST['oname'];
                  } ?>" />
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" value="<?php if (isset($_POST['email'])) {
                    echo $_POST['email'];
                  } ?>" />
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="p_num" placeholder="Phone number" value="<?php if (isset($_POST['p_num'])) {
                    echo $_POST['p_num'];
                  } ?>" />
                </div>

                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Choose a password" value="<?php if (isset($_POST['password'])) {
                    echo $_POST['password'];
                  } ?>" />
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="address" rows="5" placeholder="Home address"><?php if (isset($_POST['address'])) {
                    echo $_POST['address'];
                  } ?> </textarea>
                </div>

               </div>

                <div class="col-lg-5 col-md-8">
                  <h4>Next of Kin (NOK) Information</h4>
                      <div class="form-group">
                        <input type="text" name="nok_sname" class="form-control" placeholder="Surname"  value="<?php if (isset($_POST['nok_sname'])) {
                    echo $_POST['nok_sname'];
                  } ?>" />
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" name="nok_oname" placeholder="Othername" value="<?php if (isset($_POST['nok_oname'])) {
                    echo $_POST['nok_oname'];
                  } ?>" />
                      </div>

                      <div class="form-group">
                        <input type="email" class="form-control" name="nok_email"  placeholder="Email" value="<?php if (isset($_POST['nok_email'])) {
                    echo $_POST['nok_email'];
                  } ?>" >
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" name="nok_p_num"  placeholder="Phone number" value="<?php if (isset($_POST['nok_p_num'])) {
                    echo $_POST['nok_p_num'];
                  } ?>" >
                      </div>

                      <div class="form-group">
                        <select class="form-control" name="nok_reln" value="<?php if (isset($_POST['nok_reln'])) {
                    echo $_POST['nok_reln'];
                  } ?>" >
                        <option value="">-- Your relationship with next of kin --</option>
                        <option value="Parent"> Parent </option>
                        <option value="Sibling"> Sibling </option>
                        <option value="Cousin"> Cousin </option>
                        <option value="Nephew"> Nephew </option>
                        <option value="Niece"> Niece </option>
                        <option value="Friend"> Friend </option>
                        </select>
                      </div>

                      <div class="form-group">
                        <textarea class="form-control" name="nok_address" rows="5" placeholder="Address of next of kin"> <?php if (isset($_POST['nok_address'])) {
                    echo $_POST['nok_address'];
                  } ?> </textarea>
                      </div>

                      <div class="text-center btn"><input type="submit" name="registers" value="CREATE ACCOUNT" class="btn btn-success"></div>
                      
                  </div>

              </div>
              </form>
              </div>
            </div>

    </section><!-- #contact --><?php

    require_once 'footer.php';

?>