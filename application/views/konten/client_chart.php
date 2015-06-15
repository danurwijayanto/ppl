<?php
foreach($barang as $barang)
    { 
        $id=$barang->id;
        $kategori=$barang->kategori;
        $nama=$barang->nama_barang;
        $s=$barang->s;
        $m=$barang->m;
        $l=$barang->l;
        $xl=$barang->xl;
        $berat=$barang->berat;
        $harga=$barang->harga;
        $gambar=$barang->gambar;
        $deskripsi=$barang->deskripsi;
    }
?>
<div class="center_content">
  <h4><b><?php echo $title?><br></b></h4>
  <form name="login" action="<?php echo base_url();?>home/add_to_cart?id=<?php echo $id;?>" method="post" role="form" class="form-signin">
  <table style="width:80%">
    <tr>
      <th>Pesanan</th>
      <th>&nbsp</th>
      <th>Ukuran</th>
      <th>Kuantitas</th>
    </tr>
    <tr>
      <td><img class="img-thumbnail" src="<?php echo base_url();?>uploads/<?php echo $gambar; ?>" alt="" border="5" width="200" height="200" /> </td>
    
      <td>
        Kategori : <?php echo $kategori?><br>
        Stok : <br>
        &nbsp S : <?php echo $s;?><br>
        &nbsp m : <?php echo $m?><br>
        &nbsp l : <?php echo $l?><br>
        &nbsp xl : <?php echo $xl;?><br>
        Harga : <?php echo $harga;?>
        
      </td>
      <td>
           <input type="text" id="ukuran" name="ukuran" size="1" required>
      </td>
      <td>
           <input type="text" id="quantity" name="quantity" size="1" required>
      </td>
    </tr>
    <tr>
      <td>&nbsp</td>
      <td>
          <input type="submit" name="Pesan" value="Pesan" class="btn btn-primary">
      </td>
    </tr>
  </table>
</form>
    
</div>
