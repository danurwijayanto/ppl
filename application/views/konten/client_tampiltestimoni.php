<div class="center_content">
      <h2><b>Testimoni Pelanggan</b></h2><br><br>
  
                                            <?php
                                                foreach ($testi as $testi) { //ngabsen data
                                            ?>
                                                <blockquote>
                                                <p><?php echo $testi->testimoni; ?> </p>
                                                <footer>
                                                Author { <?php echo $testi->nama; ?>, <?php echo $testi->kota; ?> }
                                                </footer>
                                               </blockquote><br><br>
                                            <?php 
                                              }
                                            ?>
    
      <form>
        <button type="submit" formaction="<?php echo base_url();?>testimoni/addtestimoni" class="btn btn-primary">Tulis Testimoni
      </form>

    <!-- end of center content -->
   
    <!-- end of right content -->
  </div>
  <!-- end of main content -->