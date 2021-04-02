<?php require_once __DIR__. '/autoload/autoload.php';
	$id = $_SESSION['name_id'];
	$sql = "SELECT * FROM transaction WHERE users_id = $id";
    $trans = $db->fetchsql($sql);
 ?>
<?php require_once __DIR__. '/layouts/header.php'; ?>

 <div class="col-md-12 bor">
 	 <section class="box-main1">
        <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> Lịch sử mua hàng </a> </h3>

         <table class="table table-striped table2">
		  <thead>
		    <tr>
		      <th scope="col">Stt</th>
		      <th scope="col">Tên người nhận</th>
		      <th scope="col">Số điện thoại</th>
		      <th scope="col">Địa chỉ</th>
		      <th scope="col">Ngày mua hàng</th>
		      <th scope="col">Số tiền</th>
		      <th scope="col">Chi tiết</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php if (count($trans)>0): ?>
		  		<?php $stt=1;$sum=0 ;foreach ($trans as $item): ?>
			  		<tr>
			      	  <th scope="row"><?php echo $stt ?></th>
				      <td><?php echo $item['name'] ?></td>
				      <td><?php echo $item['phone'] ?> đ</td>
				      <td>
				      	<?php echo $item['address'] ?>
				      </td>
				      <td><?php echo $item['created_at'] ?></td>
				      <td><?php echo formatPrice($item['amount']) ?> đ</td>
				      <td>
				      	<a class="btn btn-info" href="chi-tiet-don-hang.php?id=<?php echo $item['id'] ?>">Xem</a>
				      </td>
				    </tr>
		  		<?php $stt+=1;endforeach?>
		  </tbody>
		   <?php else: ?>
		   	<tr>
		    	<td colspan="7" style="color:#4caf50; text-align:center; font-size: 30px; padding: 0">
		    		Bạn chưa mua sản phẩm nào!!!!!!!
		    	</td>
		    <tr>
		   <?php endif ?>
		</table>
        
       
    </section>

</div>


<?php require_once __DIR__. '/layouts/footer.php'; ?>