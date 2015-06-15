<div class="center_content">
       <h1 align="center"><?php echo $title;?></h1><br>
      <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Product</th>
          <th>Qty</th>
          <th>Price</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $i=0;
          foreach ($this->cart->contents() as $items) : 
          $i++;
        ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $items['name'] ?></td>
          <td><?= $items['qty'] ?></td>
          <td align="right"><?= number_format($items['price'],0,',','.') ?></td>
          <td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <td align="right" colspan="4">Total </td>
          <td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
        </tr>
      </tfoot>
    </table>
    <div align="center">
      
      <?= anchor('home/clear_cart','Clear Cart',['class'=>'btn btn-danger']) ?> 
      <?= anchor(base_url(),'Continue Shopping',['class'=>'btn btn-primary']) ?> 
      <?= anchor('order','Check Out',['class'=>'btn btn-success']) ?>
    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->