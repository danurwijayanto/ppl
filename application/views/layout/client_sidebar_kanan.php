<div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title"><a href="<?php echo base_url();?>home/checkout">Total Belanja</a></div>
        <div class="cart_details"> <?php echo $this->cart->total_items() . " Items ";?> <br />
          <span class="border_cart"></span> Total harga:  <span class=""><?php echo $this->cart->total(); ?><br></span> </div>
       
      </div>
<!--
      <div class="title_box">What’s new</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="<?php// echo base_url(); ?>assets/images/p2.gif" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
-->
      <div class="title_box">Testimoni</div>
      <ul class="left_menu">
        <?php
                                                foreach ($testi1 as $testi1) { //ngabsen data
                                            ?>
                                          
                                                <p><?php echo $testi1->testimoni; ?><br><br>
                                                Author { <?php echo $testi1->nama; ?>, <?php echo $testi1->kota; ?> }
                                                </p><br><br>
                                            <?php 
                                              }
                                            ?>
      </ul>
</div> 

    <!-- end of right content -->
</div>
  <!-- end of main content -->