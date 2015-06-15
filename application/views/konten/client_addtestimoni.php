<div class="center_content">
      <h2><b>Form Testimoni</b></h2><br><br>
      <form name='testimoni' id='testimoni' action='<?php echo base_url();?>testimoni/addtestimoni1' enctype="multipart/form-data" method='post'> 
         Nama :<br>
         <input type="text" id="nama1" name="nama" required><br>
         Kota :<br>
         <input type="text" id="kota1" name="kota" required><br>
         Testimoni :<br>
         <textarea rows="4" cols="50" name="txttestimoni" form="testimoni">Tulis testimoni anda.. </textarea><br><br>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
      </form>

    <!-- end of center content -->

    <!-- end of right content -->
  </div>
  <!-- end of main content -->