<?php require_once __DIR__. '/autoload/autoload.php';
	$data = $db->fetchID("users",$_SESSION['name_id']);

	$data2 =
        [
            "name" => postInput('name'),
            "address" => postInput("address"),
            "email" => postInput('email'),
            "phone" => postInput('phone'),
            "password" => postInput('password')
        ];
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $error = [];
        if(postInput('name') == '')
        {
            $error['name'] = "Mời nhập đầy đủ họ tên";
        }
        if(postInput('address') == '')
        {
            $error['address'] = "Mời địa chỉ";
        }
        if(postInput('phone') == '')
        {
            $error['phone'] = "Mời nhập số điện thoại";
        }

        if(postInput('password') == '')
        {
            $error['password'] = "Mật khẩu không được để trống";
        }

        if(postInput('oldpassword') == '')
        {
            $error['oldpassword'] = "Mời nhập lại mật khẩu cũ";
        }

        //dang nhap thanh cong
        if(empty($error))
        {     
            $isset = $db->fetchOne("users","email = '".$data2['email']."' AND password = '".MD5(postInput('oldpassword'))."' ");
            if($isset > 0)
            {
                if($data2['password'] != MD5(postInput('oldpassword')))
                    {
                        $data2['password'] = MD5(postInput('password'));
                    }
                $id_update = $db->update("users",$data2,array("email" => $data2['email']));
                if($id_update>0)
                {
                    $_SESSION['success'] = "Sửa thông tin thành công!";
                   	header("location: thong-tin.php");
                }
                else
                {
                    $_SESSION['error'] = "Thông tin không đổi!";
                    header("location: thong-tin.php");
                   // redirectAdmin("admin");
                }
            }
            else
            {
                $error['oldpassword'] = "Sai mật khẩu!!!";
            }
        }
    }
 ?>
<?php require_once __DIR__. '/layouts/header.php'; ?>

 <div class="col-md-12 bor">
 	 <section class="box-main1">
        <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> Sửa thông tin </a> </h3>

        <form action="" method="POST" style="margin-top: 30px">
        	<div class="col-sm-6">
	            <div class="form-group row">
	                <label class="col-sm-4 text-right" style="margin-top: 10px">Tên</label>
	                <div class="col-sm-8">
	                  <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>">
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
	                  <input type="password" class="form-control" name="password" value="<?php echo $data['password'] ?>">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label class="col-sm-4 text-right" style="margin-top: 10px">Số điện thoại</label>
	                <div class="col-sm-8">
	                  <input type="tel" class="form-control" name="phone" value="<?php echo $data['phone'] ?>">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label class="col-sm-4 text-right" style="margin-top: 10px">Địa chỉ</label>
	                <div class="col-sm-8">
	                  <input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>">
	                </div>
	            </div>

                <div class="form-group row">
                    <label class="col-sm-4 text-right" style="margin-top: 10px">Nhập mật khẩu cũ</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="oldpassword" value="">
                    <?php if (isset($error['oldpassword'])): ?>
                    <br><p class="text-danger"><?php echo $error['oldpassword'] ?></p>
                    <?php endif ?>
                    </div>
                </div>

	            <div class="form-group">
	                <div class="col-sm-2 col-sm-offset-4 container-fluid">
	                  <button type="submit" class="btn btn-success">Lưu</button> 
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