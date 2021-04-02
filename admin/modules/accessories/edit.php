<?php
    require_once __DIR__. '/../../autoload/autoload.php';

    if($_SESSION['admin_lv'] == 1)
    {
        $_SESSION['error'] = "Bạn không có quyền thay đổi thông tin này!";
        redirectAdmin("accessories");
    }

     $category = $db->fetchsql("SELECT * FROM category WHERE level=1");

    $id = intval(getInput('id'));

    $EditProduct = $db->fetchID("product",$id);
    $EditProduct2 = $db->fetchID("accessories",$id);
    $id_ac = $EditProduct['category_id'];
    $accessories = $db->fetchID("category",$id_ac);
    if( empty($EditProduct))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("product");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $data =
        [
            "name" => postInput('name'),
            "slug" => to_slug(postInput("name")),
            "category_id" => postInput('category_id'),
            "price" => postInput('price'),
            "content" => postInput('content'),
            "number" => postInput('number'),
            "sale" => postInput('sale'),
        ];
        $data2 =
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
            "made" => postInput('made')
        ];
        
        $error = [];
        if(postInput('name') == '')
        {
            $error['name'] = "Mời nhập đầy đủ tên";
        }
        if(postInput('category_id') == '')
        {
            $error['category_id'] = "Mời chọn loại phụ kiện";
        }
        if(postInput('price') == '')
        {
            $error['price'] = "Mời nhập giá phụ kiện";
        }
        if(postInput('content') == '')
        {
            $error['content'] = "Mời nhập nội dung phụ kiện";
        }

        if(postInput('number') == '')
        {
            $error['number'] = "Mời nhập số lượng phụ kiện";
        }

        //dang nhap thanh cong
        
        if(empty($error))
        {
           
                    $file_name = $_FILES['thundar']['name'];
                    $file_tmp = $_FILES['thundar']['tmp_name'];
                    $file_type = $_FILES['thundar']['type'];
                    $file_error = $_FILES['thundar']['error'];

                    if($file_error == 0)
                    {
                        $part = ROOT . "product/";
                        $data['thundar'] = $file_name;
                    }
                

            $isset = $db->fetchOne("product","name = '".$data['name']."' ");
            if(count($isset) > 0 && $EditProduct['name'] != $data['name'])
            {
                $_SESSION['error'] = "Tên sản phẩm đã tồn tại!";
            }
            else
            {

                $id_update = $db->update("product",$data,array("id" => $id));
                $id_update2 = $db->update("accessories",$data2,array("id" => $id));
                if($id_update>0 || $id_update2>0)
                {
                    move_uploaded_file($file_tmp, $part.$file_name);
                    $_SESSION['success'] = "Cập nhật thành công!";
                    redirectAdmin("accessories");
                }
                else
                {
                    $_SESSION['error'] = "Dữ liệu không đổi!";
                    redirectAdmin("accessories");
                }
            }
        }
    }

?>
<?php require_once __DIR__. '/../../layouts/header.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Cập nhật phụ kiện</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Sản phẩm</li>
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
                                    <label for="input2" class="col-sm-2 text-right">Loại sản phẩm</label>
                                    <div class="col-sm-8">
                                      <select class="form-control" name="category_id">
                                        <option value="">-Chọn loại sản phẩm-</option>
                                        <?php foreach ($category as $item): ?>
                                            <option value="<?php echo $item['id'] ?>" <?php echo $EditProduct['category_id'] == $item['id'] ? "selected = 'selected'" : "" ?>><?php echo $item['name'] ?></potion>
                                        <?php endforeach ?>
                                      </select>
                                      <?php if (isset($error['category_id'])): ?>
                                            <p class="text-danger"> <?php echo $error['category_id']; ?> </p>
                                      <?php endif ?>
                                     </div>
                                </div>

                                <div class="form-group row">
                                    <label for="input1" class="col-sm-2 text-right">Tên sản phẩm</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="input1" name="name" value="<?php echo $EditProduct['name'] ?>">
                                      <?php if (isset($error['name'])): ?>
                                            <p class="text-danger"> <?php echo $error['name']; ?> </p>
                                      <?php endif ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="input2" class="col-sm-2 text-right">Giá</label>
                                    <div class="col-sm-8">
                                      <input type="number" class="form-control" id="input2" name="price" value="<?php echo $EditProduct['price'] ?>">
                                      <?php if (isset($error['price'])): ?>
                                            <p class="text-danger"> <?php echo $error['price']; ?> </p>
                                      <?php endif ?>
                                     </div>
                                 </div>

                                 <div class="form-group row">
                                    <label for="input2" class="col-sm-2 text-right">Số lượng</label>
                                    <div class="col-sm-8">
                                      <input type="number" class="form-control" id="input2" name="number" value="<?php echo $EditProduct['number'] ?>">
                                      <?php if (isset($error['number'])): ?>
                                            <p class="text-danger"> <?php echo $error['number']; ?> </p>
                                      <?php endif ?>
                                     </div>
                                 </div>

                                <div class="form-group row">
                                    <label for="input3" class="col-sm-2 text-right">Giảm giá</label>
                                    <div class="col-sm-3">
                                      <input type="number" class="form-control" id="input3" name="sale" placeholder="10%" value="<?php echo $EditProduct['sale'] ?>">
                                    </div>

                                    <label for="input4" class="col-sm-2 text-right">Hình ảnh</label>
                                    <div class="col-sm-3">
                                      <input type="file" class="form-control" id="input4" name="thundar" value="">
                                      <img src="<?php echo uploads(); ?>product/<?php echo $EditProduct['thundar'] ?>" width="50px" height="50px">
                                      <?php if (isset($error['thundar'])): ?>
                                            <p class="text-danger"> <?php echo $error['thundar']; ?> </p>
                                      <?php endif ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="input5" class="col-sm-2 text-right">Nội dung</label>
                                    <div class="col-sm-8">
                                      <textarea class="form-control" name="content" rows="4"><?php echo $EditProduct['content'] ?></textarea>
                                      <?php if (isset($error['price'])): ?>
                                            <p class="text-danger"> <?php echo $error['price']; ?> </p>
                                      <?php endif ?>
                                     </div>
                                 </div>

                                <?php if ($accessories['slug'] == "sac-du-phong"): ?>
                                    <div class="form-group row">
                                        <label for="input1" class="col-sm-3 text-right">Hiệu suất</label>
                                        <div class="col-sm-6">
                                          <input type="text" class="form-control" id="input1" name="performance" value="<?php echo $EditProduct2['performance'] ?>">
                                        </div>
                                    </div>    
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong" || $accessories['slug'] == "the-nho"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Dung lượng</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="capacity" value="<?php echo $EditProduct2['capacity'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Đầu vào</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="input" value="<?php echo $EditProduct2['input'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong" || $accessories['slug'] == "adapter-sac" || $accessories['slug'] == "cap-sac"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Đầu ra</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="output" value="<?php echo $EditProduct2['output'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "tai-nghe"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Đầu cắm/Cổng</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="slot" value="<?php echo $EditProduct2['slot'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "cap-sac"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Độ dài dây</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="longs" value="<?php echo $EditProduct2['longs'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "the-nho"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Tốc độ chuẩn</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="speed" value="<?php echo $EditProduct2['speed'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "the-nho"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Tốc độ đọc</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="rs" value="<?php echo $EditProduct2['rs'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "the-nho"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Tốc độ ghi</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="ws" value="<?php echo $EditProduct2['ws'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "tai-nghe"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Tương thích</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="compatible" value="<?php echo $EditProduct2['compatible'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Lõi</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="core" value="<?php echo $EditProduct2['core'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong" && $accessories['slug'] == "adapter-sac"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Tiện ích</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="extensions" value="<?php echo $EditProduct2['extensions'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Kích thước</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="size" value="<?php echo $EditProduct2['size'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <?php if ($accessories['slug'] == "sac-du-phong"): ?>
                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Trọng lượng</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="weight" value="<?php echo $EditProduct2['weight'] ?>">
                                    </div>
                                </div>
                                <?php endif ?>

                                <div class="form-group row">
                                    <label for="input1" class="col-sm-3 text-right">Sản xuất</label>
                                    <div class="col-sm-6">
                                      <input type="text" class="form-control" id="input1" name="made" value="<?php echo $EditProduct2['made'] ?>">
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

