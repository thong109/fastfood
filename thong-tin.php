<?php require_once __DIR__. '/autoload/autoload.php';
	$data = $db->fetchID("users",$_SESSION['name_id']);
 ?>
<?php require_once __DIR__. '/layouts/header1.php'; ?>

 <div class="col-md-12 bor">
 	 <section class="box-main1">
        <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> Thông tin khách hàng </a> </h3>
        <?php if(isset($_SESSION['success'])) :?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['success'];unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>

        <?php if(isset($_SESSION['error'])) :?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['error'];unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <form style="margin-top: 30px">
        	<div class="col-sm-6">
	            <div class="form-group row">
	                <label class="col-sm-4 text-right" style="margin-top: 10px">Tên</label>
	                <div class="col-sm-8">
	                  <input type="text" readonly="" class="form-control" name="name" value="<?php echo $data['name'] ?>">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label class="col-sm-4 text-right" style="margin-top: 10px">Email</label>
	                <div class="col-sm-8">
	                  <input type="email" readonly="" class="form-control" name="email"value="<?php echo $data['email'] ?>">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label class="col-sm-4 text-right" style="margin-top: 10px">Mật khẩu</label>
	                <div class="col-sm-8">
	                  <input type="password" readonly="" class="form-control" name="password" value="<?php echo $data['password'] ?>">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label class="col-sm-4 text-right" style="margin-top: 10px">Số điện thoại</label>
	                <div class="col-sm-8">
	                  <input type="tel" readonly="" class="form-control" name="phone" value="<?php echo $data['phone'] ?>">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label class="col-sm-4 text-right" style="margin-top: 10px">Địa chỉ</label>
	                <div class="col-sm-8">
	                  <input type="text" readonly="" class="form-control" name="address" value="<?php echo $data['address'] ?>">
	                </div>
	            </div>

	            <div class="form-group">
	                <div class="col-sm-2 col-sm-offset-4 container-fluid">
	                  <a href="sua-thong-tin.php" class="btn btn-info">chỉnh sửa</a>
	                </div>
	            </div>
	            <div class="col-sm-offset-8 form-group">
	                <div class=" container-fluid">
	                  <a href="ls-mua-hang.php" class="btn btn-info">lịch sử đặt hàng</a>
	                </div>
	            </div>
        	</div>
            <div class="form-group">
            	<div class="col-sm-offset-7 container-fluid">
            		<img src="img/user.png">
            	</div>
            </div>
        </form>
        
       
    </section>

</div>


<?php require_once __DIR__. '/layouts/footer.php'; ?>