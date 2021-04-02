<?php
    require_once __DIR__. '/../../autoload/autoload.php';

    if($_SESSION['admin_lv'] == 1 && $_SESSION['admin_id'] != getInput('id'))
    {
        $_SESSION['error'] = "Bạn không có quyền thay đổi thông tin này!";
        redirectAdmin("admin");
    }

    $id = intval(getInput('id'));

    $Editadmin = $db->fetchID("admin",$id);
    if( empty($Editadmin))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("admin");
    }

    $data =
        [
            "name" => postInput('name'),
            "address" => postInput("address"),
            "phone" => postInput('phone'),
            "password" => postInput('password'),
            "level" => postInput('level')
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
            $error['password'] = "Mời nhập mật khẩu";
        }


        //dang nhap thanh cong
        
        if(empty($error))
        {     

            $isset = $db->fetchOne("admin","email = '".$Editadmin['email']."' AND password = '".MD5(postInput('re_password'))."' ");
            if($isset > 0)
            {
                if($data['password'] != MD5(postInput('re_password')))
                    {
                        $data['password'] = MD5(postInput('password'));
                    }
                $id_update = $db->update("admin",$data,array("id" => $id));
                if($id_update>0)
                {
                    $_SESSION['success'] = "Cập nhật thành công!";
                    redirectAdmin("admin");
                }
                else
                {
                    $_SESSION['error'] = "Dữ liệu không đổi!";
                    redirectAdmin("admin");
                }
            }
            else
            {
                $error['re_password'] = "Sai mật khẩu";
            }
        }
    }

?>
<?php require_once __DIR__. '/../../layouts/header.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Sửa thông tin admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ol>

                        <div class="clearfix"></div>
                            <?php if(isset($_SESSION['error'])) :?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION['error'];unset($_SESSION['error']); ?>
                                </div>
                            <?php endif; ?>

                        <div class="card mb-4">

                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label for="input1" class="col-sm-2 text-right">Họ và Tên</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="input1" name="name" placeholder="Nguyên Văn A" value="<?php echo $Editadmin['name'] ?>">
                                      <?php if (isset($error['name'])): ?>
                                            <p class="text-danger"> <?php echo $error['name']; ?> </p>
                                      <?php endif ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="input2" class="col-sm-2 text-right">Địa chỉ</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="input2" name="address" placeholder="12 Trần Phú" value="<?php echo $Editadmin['address'] ?>">
                                      <?php if (isset($error['address'])): ?>
                                            <p class="text-danger"> <?php echo $error['address']; ?> </p>
                                      <?php endif ?>
                                     </div>
                                 </div>

                                <div class="form-group row">
                                    <label for="input3" class="col-sm-2 text-right">Số điện thoại</label>
                                    <div class="col-sm-8">
                                      <input type="tel" class="form-control" id="input3" name="phone" placeholder="0123456789" value="<?php echo $Editadmin['phone'] ?>">
                                      <?php if (isset($error['phone'])): ?>
                                            <p class="text-danger"> <?php echo $error['phone']; ?> </p>
                                      <?php endif ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="input2" class="col-sm-2 text-right">Password</label>
                                    <div class="col-sm-8">
                                      <input type="password" class="form-control" id="input2" name="password" placeholder="******" value="<?php echo $Editadmin['password'] ?>">
                                      <?php if (isset($error['password'])): ?>
                                            <p class="text-danger"> <?php echo $error['password']; ?> </p>
                                      <?php endif ?>
                                     </div>
                                 </div>

                                 <div class="form-group row">
                                    <label for="input2" class="col-sm-2 text-right">Old Password</label>
                                    <div class="col-sm-8">
                                      <input type="password" class="form-control" id="input2" name="re_password" placeholder="******" value="" required>
                                      <?php if (isset($error['re_password'])): ?>
                                            <p class="text-danger"> <?php echo $error['re_password']; ?> </p>
                                      <?php endif ?>
                                     </div>
                                 </div>

                                <div class="form-group row">
                                    <label for="input2" class="col-sm-2 text-right">Level</label>
                                    <div class="col-sm-8">
                                      <select class="form-control" name="level">
                                          <option value="1" <?php echo isset($data['level']) && $Editadmin['level'] == 1 ? "selected = 'selected'" : "" ?>>CTV</option>
                                          <?php if ($_SESSION['admin_lv'] == 2): ?>
                                            <option value="2" <?php echo isset($data['level']) && $Editadmin['level'] == 2 ? "selected = 'selected'" : "" ?>>Admin</option>
                                          <?php endif ?>

                                      </select>
                                     </div>
                                 </div>

                                <div class="form-group row">
                                    <div class="col-sm-8 container-fluid">
                                      <button type="submit" class="btn btn-success">Lưu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
<?php require_once __DIR__. '/../../layouts/footer.php'; ?>

