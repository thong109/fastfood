<?php
    require_once __DIR__. '/../../autoload/autoload.php';

    if($_SESSION['admin_lv'] == 1 && $_SESSION['admin_id'] != getInput('id'))
    {
        $_SESSION['error'] = "Bạn không có quyền thay đổi thông tin này!";
        redirectAdmin("user");
    }

    $id = intval(getInput('id'));

    $Edituser = $db->fetchID("users",$id);
    if( empty($Edituser))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("user");
    }

    $data =
        [
            "name" => postInput('name'),
            "address" => postInput("address"),
            "phone" => postInput('phone'),
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

        //dang nhap thanh cong
        
        if(empty($error))
        {     
                $id_update = $db->update("users",$data,array("id" => $id));
                if($id_update>0)
                {
                    $_SESSION['success'] = "Cập nhật thành công!";
                    redirectAdmin("user");
                }
                else
                {
                    $_SESSION['error'] = "Dữ liệu không đổi!";
                    redirectAdmin("user");
                }
        }
    }

?>
<?php require_once __DIR__. '/../../layouts/header.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Sửa thông tin khách hàng</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">khách hàng</li>
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
                                      <input type="text" class="form-control" id="input1" name="name" placeholder="Nguyên Văn A" value="<?php echo $Edituser['name'] ?>">
                                      <?php if (isset($error['name'])): ?>
                                            <p class="text-danger"> <?php echo $error['name']; ?> </p>
                                      <?php endif ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="input2" class="col-sm-2 text-right">Địa chỉ</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="input2" name="address" placeholder="12 Trần Phú" value="<?php echo $Edituser['address'] ?>">
                                      <?php if (isset($error['address'])): ?>
                                            <p class="text-danger"> <?php echo $error['address']; ?> </p>
                                      <?php endif ?>
                                     </div>
                                 </div>

                                <div class="form-group row">
                                    <label for="input3" class="col-sm-2 text-right">Số điện thoại</label>
                                    <div class="col-sm-8">
                                      <input type="tel" class="form-control" id="input3" name="phone" placeholder="0123456789" value="<?php echo $Edituser['phone'] ?>">
                                      <?php if (isset($error['phone'])): ?>
                                            <p class="text-danger"> <?php echo $error['phone']; ?> </p>
                                      <?php endif ?>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-8 container-fluid">
                                      <button type="submit" class="btn btn-success">Lưu</button>
                                      <a href="edit2.php?id=<?php echo $Edituser['id'] ?>" class="btn btn-info"?>
                                      Đổi mật khẩu
                                      </a>
                                    </div>

                                </div>
                            </form>
                        </div>
<?php require_once __DIR__. '/../../layouts/footer.php'; ?>

