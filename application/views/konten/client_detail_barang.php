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
  <h4><b>Product : <?php echo $nama?><br></b></h4>
  <table style="width:80%">
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
    </tr>
    <tr>
      <td>&nbsp</td>
      <td>
        <a href="<?php echo base_url();?>home/chart?id=<?php echo $id;?>" class="btn btn-info" role="button">Pesan</a>
      </td>
    </tr>
  </table>
    
</div>
