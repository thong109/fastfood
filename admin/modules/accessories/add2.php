<?php
    require_once __DIR__. '/../../autoload/autoload.php';
    $id_ac = getInput('id_cate');
    $accessories = $db->fetchID("category",$id_ac);
    $data =
        [
            "id" => getInput('id'),
            "performance" => postInput('performance'),
            "capacity" => postInput('capacity'),
            "input" => postInput('input'),
            "output" => postInput('output'),
            "slot" => postInput('slot'),
            "longs" => postInput('longs'),
            "speed" => postInput('speed'),
            "rs" => postInput('rs'),
            "ws" => postInput('ws'),
            "compatible" => postInput('compatible'),
            "core" => postInput('core'),
            "extensions" => postInput('extensions'),
            "size" => postInput('size'),
            "weight" => postInput('weight'),
            "made" => postInput('made'),
        ];

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //dang nhap thanh cong
                $id_insert = $db->insert("accessories",$data);
                if($id_insert>0)
                {
                    $_SESSION['success'] = "Thêm mới thành công!";
                    redirectAdmin("accessories");
                }
                else
                {
                    $_SESSION['error'] = "Thêm mới thất bại!";
                    redirectAdmin("accessories");
                }
    }

?>
<?php require_once __DIR__. '/../../layouts/header.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Thêm thông tin <?php echo $accessories["name"] ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Phụ kiện</li>
                        </ol>

                        <div class="clearfix"></div>
                            <?php if(isset($_SESSION['error'])) :?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION['error'];unset($_SESSION['error']); ?>
                                </div>
                            <?php endif; ?>

                        <div class="card mb-4">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <?php if ($accessories['slug'] == "sac-du-phong"): ?>
                                    <div class="form-group row">
                                        <label for="input1" class="col-sm-3 text-right">Hiệu suất</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="input1" name="performance" value="<?php echo $data['performance'] ?>">
                                        </div>
                                    </div>    
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong" || $accessories['slug'] == "the-nho"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Dung lượng</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="capacity" value="<?php echo $data['capacity'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Đầu vào</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="input" value="<?php echo $data['input'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong" || $accessories['slug'] == "adapter-sac" || $accessories['slug'] == "cap-sac"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Đầu ra</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="output" value="<?php echo $data['output'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "tai-nghe"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Đầu cắm/Cổng</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="slot" value="<?php echo $data['slot'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "cap-sac"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Độ dài dây</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="longs" value="<?php echo $data['longs'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "the-nho"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Tốc độ chuẩn</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="speed" value="<?php echo $data['speed'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "the-nho"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Tốc độ đọc</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="rs" value="<?php echo $data['rs'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "the-nho"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Tốc độ ghi</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="ws" value="<?php echo $data['ws'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "tai-nghe"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Tương thích</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="compatible" value="<?php echo $data['compatible'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Lõi</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="core" value="<?php echo $data['core'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong" && $accessories['slug'] == "adapter-sac"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Tiện ích</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="extensions" value="<?php echo $data['extensions'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Kích thước</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="size" value="<?php echo $data['size'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Trọng lượng</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="weight" value="<?php echo $data['weight'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Sản xuất</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="made" value="<?php echo $data['made'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 container-fluid">
                                      <button type="submit" class="btn btn-success">Lưu</button>
                                    </div>
                                </div>

                            </form>
                        </div>
<?php require_once __DIR__. '/../../layouts/footer.php'; ?>

