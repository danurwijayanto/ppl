
<div class="center_content">
      <div class="prod_box">
      <form name="login" action="<?php echo base_url();?>user_auth/user_login" method="post" role="form" class="form-signin">

          <h1 align="center"><?php echo $title;?></h1><br>
          
          <?php
            if (isset($message)){ 
              echo $message;
            }
          ?>
          <label for="inputEmail" >User Name</label>
          <input type="Email" id="inputEmail" name="email" class="form-control" placeholder="Masukkan Email anda" required>
          <label for="password">Password</label>
          <input type="Password" id="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
            <a href="forgotpassword.php" style="color:red">Forgot Password ?</a> 
            <br>
            <a href="<?php echo base_url();?>daftar" style="color:red">Daftar ?</a> 
          <br>
            <input type="submit" name="loginklik" value="Login" class="btn btn-primary">
        
    </form>   
        
      </div>
</div>
    <!-- end of center content -->
