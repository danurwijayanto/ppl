<?php
    foreach($status as $status)
    { 
        $id=$status->id;
        $alamat=$status->alamat;
        $provinsi=$status->provinsi;
        $kota=$status->kota;
        $kecamatan=$status->kecamatan;
        $kelurahan=$status->kelurahan;
        $kelurahan=$status->kelurahan;
        $bp=$status->pengiriman;
        $total=$status->total_harga;
        $nama=$status->product_name;
        $qty=$status->qty;
        $ukuran=$status->options;

       
    }
?>
<!-- main page -->
<div id="page-wrapper">
    <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Status Penjualan
                        </h1>
                    </div>
                    <div class="col-lg-12">
                     <form name="form_name" action="<?php echo base_url();?>adminadmin/set_status_penjualan?id=<?php echo $id;?>" method="post">   
                        <table id="myTable" class="table">
                                           <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Alamat</th>
                                                <th>Barang yang Dibeli</th>
                                                <th>Ukuran</th>
                                                <th>Jumlah</th>
                                                <th>Harga</th>
                                                <th>Biaya Pengiriman</th>
                                                <th>Total Harga</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                            <?php
                                                //foreach ($daftar_barang as $daftar) { //ngabsen data
                                            ?>
                                           
                                            <tr>
                                                <td><?php echo $id;?></td>
                                                <td>
                                                    <?php echo $alamat ."<br> ". $kelurahan." ". $kecamatan."<br> ".$kota. " " .$provinsi;?>
                                                </td>
                                                 <td><?php echo $nama; ?></td>
                                                 <td><?php echo $ukuran; ?></td>
                                                <td><?php echo $qty; ?></td>
                                                <td><?php echo $status->price; ?></td>
                                                <td><input type="text" id="bp" name="bp" value="<?php if (empty($bp)){}else{echo $bp;}?>"></td>
                                                <td><input type="text" id="t" name="t" value="<?php if (empty($bp)){}else{echo $total;}?>"></td>
                                                <td>
                                                 <select name='kategori'>
                                                    <option value="unpaid">Unpaid</option>
                                                    <option value="paid">Paid</option>
                                                    <option value="pengiriman">Pengiriman</option>
                                                    <option value="batal">Batal</option>
                                                    <option value="confirmed">confirmed</option>
                                                    <option value="unconfirmed">unconfirmed</option>
                                                <?php 
                                               // foreach($query as $row)
                                                //{ 
                                                 //echo '<option value="'.$row->id.'">'.$row->kategori.'</option>';
                                                 //}
                                                 ?>
                                                 </select>
                                                 </td>
                                            </tr>
                                            <!--<tr>
                                                <td><?php echo $daftar->id; ?></td> 
                                                <td><img alt="Thumbnail image" src="<?php echo base_url();?>uploads/<?php echo $daftar->gambar?>" class="img-thumbnail" width="150" height="200"></td>
                                                <td><?php echo $daftar->kategori;?></td> 
                                                <td><?php echo $daftar->nama_barang; ?></td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>S</td>
                                                            <td>M</td>
                                                            <td>L</td>
                                                            <td>XL</td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo $daftar->s; ?></td>
                                                            <td><?php echo $daftar->m; ?></td>
                                                            <td><?php echo $daftar->l; ?></td>
                                                            <td><?php echo $daftar->xl; ?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td><?php echo $daftar->berat; ?></td> 
                                                <td><?php echo $daftar->harga; ?></td>
                                                 <td><?php echo $daftar->deskripsi; ?></td> 
                                                <td>
                                                   <a href="<?php echo base_url();?>kelbar/delete_barang?id=<?php echo $daftar->id; ?>">delete</a>
                                                    <a href="<?php echo base_url();?>adminadmin/edit_barang?id=<?php echo $daftar->id; ?>">edit</a>
                                                    
                                                </td>
                                            </tr>-->
                                            <?php
                                                //}
                                            ?>   
                                    </table>
                            <input type="submit" value="Simpan" class="btn btn-primary" >
                            
                             
                       
                    
                     </div><!-- ./col -->
                </div>
                </div>
</div>
            <!-- /.container-fluid -->