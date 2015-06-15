<div class="center_content">

<?php 
  if ($slider == true){ ?>
        <div id='gamesHolder'>
      <div class='coin-slider' id='coin-slider'>
        
          <img src='<?php echo base_url(); ?>uploads/gbr_20150511000324.png' >
          <span>
            Description for img01
          </span>
        
  ......
  ......
        
          <img src='<?php echo base_url(); ?>uploads/gbr_20150511004103.jpg' >
          <span>
           Description for imgN
          </span>

          <img src='<?php echo base_url(); ?>uploads/gbr_20150524174451.jpg' >
          <span>
           Description for imgN
          </span>
       gbr_20150524174451.jpg
      </div>
    </div>



<?php
  }
?>
    

      <div class="center_title_bar">
        <?php 
          if (isset($name_kategori)){
            foreach ($name_kategori as $kat)
              {
                echo $kat->kategori; 
              }
            } else {
            echo $kat;
            }
        ?>
      </div>
      <?php
        foreach ($barang as $bar){
      ?>
        <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html"><?php echo $bar->nama_barang;?></a></div>
          <div class="product_img"><a href="details.html"><img src="<?php echo base_url();?>uploads/<?php echo $bar->gambar; ?>" alt="" border="0" width="94" height="92" /></a></div>
          <div class="prod_price"><span class="price">Rp <?php echo $bar->harga;?></span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="<?php echo base_url();?>home/detail_barang?id=<?php echo $bar->id?>" class="prod_details">Detail</a> </div>
      </div>
      <?php      
        }
      ?>

<!--      <div class="center_title_bar">Recommended Products</div>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
          <div class="product_img"><a href="details.html"><img src="<?php echo base_url(); ?>assets/images/laptop.gif" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="#" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="<?php echo base_url(); ?>assets/images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="details.html" class="prod_details">details</a> </div>
      </div>
-->      
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#coin-slider').coinslider({ width: 565, navigation: true, delay: 5000, height: 290 });
  });
</script>