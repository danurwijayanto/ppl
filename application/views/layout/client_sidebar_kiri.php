<!--<div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>-->
    <div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">
        <?php 
          foreach ($kategori as $kat){
        ?>
          <li id="<?php echo $kat->id;?>" class="odd"><a href="<?php echo base_url();?>home/kategori?id=<?php echo $kat->id;?>"><?php echo $kat->kategori;?></a></li>
        <?php
        }
        ?>
        
      </ul>
<!--
      <div class="title_box">Special Products</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
-->
      <?php
        if ($login == true){
      ?>
        <div class="title_box">Login</div>
      <div class="border_box">
        <form action="<?php echo base_url();?>user_auth/login_client" method="post">
          <input type="text" name="email" class="newsletter_input" value="your email" required/>
          <input type="password" name="password" class="newsletter_input" value="your password" required/>
        <input type="submit" name="login" value="Login" class="btn btn-primary">
        </form>

        <a>Belum Punya Akun ?</a>

        <form><input type="submit" name="daftar" formaction="<?php echo base_url();?>daftar" value="Daftar" class="btn btn-warning"></form>
      </div>
      <?php    
        }
      ?>
      

      
    </div>
    <!-- end of left content -->
    