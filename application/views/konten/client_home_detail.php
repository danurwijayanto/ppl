<?php
    foreach($detail as $detail)
    { 
        $id=$detail->id;
        $harga=$detail->price;
        $total=$detail->total_harga;
        $pengiriman=$detail->pengiriman;
        $nama=$detail->product_name;
        $options=$detail->options;
        $qty=$detail->qty;
        $date=$detail->date;
        $status=$detail->status;
        $hargasatuan=$detail->harga;

    }
    $phpdate = strtotime($date);
    $date = date( 'd-m-Y', $phpdate );
?>

<div class="center_content">
      <h4><b>Tanggal Pemesanan : <?php echo $date;?></b></h4><br>
      <h4><b><span style="color:red">STATUS : <?php echo $status;?></span></b></h4><br>
      <p style="color:red"><b>Alamat Pengiriman</b></p><br>
      <?php echo $username;?><br>
      <?php echo $alamat. " " . $kelurahan . " " . $kecamatan;?><br>
      <?php echo $kota . " " . $provinsi ;?><br>
      <?php echo $hp;?>
      <hr width="100%" ><br>
      <p style="color:red"><b>Metode Pembayaran</b></p><br>
      Transfer Bank<br>
      <h4>Mandiri</h4>
      no.rek :<br>
      Atas nama : <br>

      <b>Silahkan melakukan pembayaran dalam waktu <span style="color:red">1 x 24 jam</span><br>
      <hr width="100%" ><br>
      <table class="table">
        <thead>
          <tr>
          <th>ID Pesan</th>
          <th>Nama Produk</th>
          <th>Ukuran</th>
          <th>Kuantitas</th>
          <th>Harga</th>
          <th>Total</th>
          </tr>
        <thead>
        <tbody>
          <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $nama;?></td>
            <td><?php echo $options;?></td>
            <td><?php echo $qty;?></td>
            <td><?php echo $hargasatuan; ?></td>
            <td> <?php echo $harga?></td>
          </tr>
          <tr>           
            <td colspan="6" align="right">Subtotal : <?php echo $harga?></td>
          </tr>
          
          <tr>           
            <td colspan="6" align="right"><img src="<?php echo base_url();?>assets/images/jne.png" alt="" border="0" width="94" height="92" /> Semarang - Jawa Timur / Surabaya :  <?php echo $pengiriman?></td>
          </tr>
           <tr>           
            <td colspan="6"></td>
          </tr>
          <tr>           
            <td colspan="6" align="right"><b>Total : <?php echo $total?></b></td>
          </tr>
         </tbody> 

      </table>


  </div>
  <!-- end of main content -->