<?php require_once __DIR__. '/autoload/autoload.php';

	$id = intval(getInput('id'));
	$sql = "SELECT product.name,product.thundar,orders.price,orders.qty FROM orders LEFT JOIN product ON orders.product_id = product.id WHERE orders.transaction_id = $id";
    $order = $db->fetchsql($sql);
 ?>
<?php require_once __DIR__. '/layouts/header1.php'; ?>

 <div class="col-md-12 bor">
 	 <section class="box-main1">
        <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> Chi tiết đơn hàng </a> </h3>

        <table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Stt</th>
		      <th scope="col">Tên sản phẩm</th>
		      <th scope="col">Hình ảnh</th>
		      <th scope="col">Giá</th>
		      <th scope="col">Số lượng</th>
		      <th scope="col">Thành tiền</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if (count($order)>0): ?>
		  		<?php $stt=1;$sum=0 ;foreach ($order as $item): ?>
			  		<tr>
			      	  <th scope="row"><?php echo $stt ?></th>
				      <td><?php echo $item['name'] ?></td>
				      <td style="padding: 0">
				      	<img src="<?php echo uploads() ?>product/<?php echo $item['thundar'] ?>" width="80px" height="80px">
				      </td>
				      <td><?php echo formatPrice($item['price']) ?> đ</td>
				      <td>
				      	<?php echo $item['qty'] ?>
				      </td>
				      <td><?php echo formatPrice($item['price']*$item['qty']) ?> đ</td>
				    </tr>
		  		<?php $stt+=1;$sum+=$item['price']*$item['qty']; endforeach ; $_SESSION['amount']=$sum?>
		  </tbody>
		  <tfoot>
		  	<tr>
		      <th colspan="5" style="text-align: center">Tổng số tiền</th>
		      <th scope="col" style="color: red"><?php echo formatPrice($sum) ?> đ</th>
		    </tr>
		   </tfoot>
		   <?php else: ?>
		   	<tr>
		    	<td colspan="7" style="color:#4caf50; text-align:center; font-size: 30px; padding: 0">
		    		Giỏ hàng trống!!!!!!!
		    	</td>
		    <tr>
		   <?php endif ?>
		</table>
        
       
    </section>

</div>


<?php require_once __DIR__. '/layouts/footer.php'; ?>