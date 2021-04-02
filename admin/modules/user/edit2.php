<?php
    require_once __DIR__. '/../../autoload/autoload.php';

    $id = intval(getInput('id'));

    $data =
        [
            "password" => postInput('password'),
        ];

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $error = [];
        if(postInput('password') == '')
        {
            $error['password'] = "Mật khẩu không được để trống";
        }
        else
        {
             $data['password'] = MD5(postInput('password'));
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
                        <h1 class="mt-4">Đổi mật khẩu</h1>
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
                                    <label for="input1" class="col-sm-2 text-right">Nhập mật khẩu mới</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="input1" name="password" placeholder="******" value="">
                                      <?php if (isset($error['password'])): ?>
                                            <p class="text-danger"> <?php echo $error['password']; ?> </p>
                                      <?php endif ?>
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

