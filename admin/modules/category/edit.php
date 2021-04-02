<?php
    require_once __DIR__. '/../../autoload/autoload.php';

    if($_SESSION['admin_lv'] == 1)
    {
        $_SESSION['error'] = "Bạn không có quyền thay đổi thông tin này!";
        redirectAdmin("category");
    }

    $id = intval(getInput('id'));

    $EditCategory = $db->fetchID("category",$id);
    if( empty($EditCategory))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("category");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $data =
        [
            "name" => postInput('name'),
            "slug" => to_slug(postInput("name"))
        ];
        
        $error = [];
        if(postInput('name') == '')
        {
            $error['name'] = "Mời nhập đầy đủ họ và tên";
        }

        if( ! isset($_FILES['images']))
        {
            $error['images'] = "Mời nhập hình ảnh";
        }

        if(empty($error))
        {

            $file_name = $_FILES['images']['name'];
            $file_tmp = $_FILES['images']['tmp_name'];
            $file_type = $_FILES['images']['type'];
            $file_error = $_FILES['images']['error'];

            if($file_error == 0)
            {
                $part = ROOT . "company/";
                $data['images'] = $file_name;
            }

            $isset = $db->fetchOne("category","name = '".$data['name']."' ");
            if(count($isset) > 0 && $EditCategory['name'] != $data['name'])
            {
                $_SESSION['error'] = "Tên danh mục đã tồn tại!";
            }
            else
            {
                $id_update = $db->update("category",$data,array("id"=>$id));
                if($id_update>0)
                {
                    move_uploaded_file($file_tmp, $part.$file_name);
                    $_SESSION['success'] = "Cập nhật thành công!";
                    redirectAdmin("category");
                }
                else
                {
                    $_SESSION['error'] = "Dữ liệu không thay đổi!";
                    redirectAdmin("category");
                }
            }
        }
    }

?>
<?php require_once __DIR__. '/../../layouts/header.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Cập nhật danh mục</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Static Navigation</li>
                        </ol>
                        <div class="clearfix">
                            <?php if(isset($_SESSION['error'])) :?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION['error'];unset($_SESSION['error']); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card mb-4">
                        <form action="" method="POST" enctype="multipart/form-data">
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Danh mục</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="inputEmail3" name="name" value="<?php echo $EditCategory['name']; ?>">
                              <?php if (isset($error['name'])): ?>
                                    <p class="text-danger"> <?php echo $error['name']; ?> </p>
                              <?php endif ?>
                            </div>
                          </div>

                          <div class="form-group row">
                                    <label for="input4" class="col-sm-2 text-right">Hình ảnh</label>
                                    <div class="col-sm-3">
                                      <input type="file" class="form-control" id="input4" name="images">
                                      <?php if (isset($error['images'])): ?>
                                            <p class="text-danger"> <?php echo $error['images']; ?> </p>
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

