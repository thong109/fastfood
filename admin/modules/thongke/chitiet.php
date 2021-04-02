<?php
require_once __DIR__. '/../../autoload/autoload.php';

$dem1 = $db->countTable("phone");

$dem3 = $db->countTable("accessories");


$dem7 = $db->dem("product", "category_id", "category_id = 12");
$dem8 = $db->dem("product", "category_id", "category_id = 13");
$dem9 = $db->dem("product", "category_id", "category_id = 14");
$dem10 = $db->dem("product", "category_id", "category_id = 15");
$dem11 = $db->dem("product", "category_id", "category_id = 16");
$dem12 = $db->dem("product", "category_id", "category_id = 17");
$dem13 = $db->dem("product", "category_id", "category_id = 18");
$dem14 = $db->dem("product", "category_id", "category_id = 19");
$dem15 = $db->dem("product", "category_id", "category_id = 20");

$dem16 = $db->dem("product", "category_id", "category_id = 21");
$dem17 = $db->dem("product", "category_id", "category_id = 22");
$dem18 = $db->dem("product", "category_id", "category_id = 23");
$dem19 = $db->dem("product", "category_id", "category_id = 24");
$dem20 = $db->dem("product", "category_id", "category_id = 25");
?>

<?php require_once __DIR__. '/../../layouts/header.php'; ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Thống kê sản phẩm</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="breadcrumb-item active">Thống kê sản phẩm</li>
            </ol>

            <div class="card mb-4">
                <div class="clearfix"></div>
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

                <table class="table table-bordered dataTable" id="dataTable" 
                width="100%" cellspacing="0" role="grid" 
                aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr role="row">

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%;">Tên mục</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 15%;">Đơn vị</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Thông tin</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 10%;">Chi tiết</th>
                            </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Điện thoại</td>
                            <td><?php echo $dem1 ." sản phẩm" ?></td>
                            <td>
                                <ul>
                                    <li>Gà Rán: <?php echo $dem7 ." sản phẩm" ?></li>
                                    <li>Cơm: <?php echo $dem8 ." sản phẩm" ?></li>
                                    <li>Combo: <?php echo $dem9 ." sản phẩm" ?></li>
                                    
                                    
                                    <li>SuShi: <?php echo $dem11 ." sản phẩm" ?></li>
                                    <li>Đồ Chiên: <?php echo $dem10 ." sản phẩm" ?></li>
                                    
                                    <li>: <?php echo $dem14 ." sản phẩm" ?></li>
                                    <li>: <?php echo $dem15 ." sản phẩm" ?></li>
                                    
                                    
                                    <li>Kem: <?php echo $dem12 ." sản phẩm" ?></li>
                                    
                                    
                                    <li>Nước: <?php echo $dem13 ." sản phẩm" ?></li>
                                    
                                </ul>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-xs btn-info" href="<?php echo modules("product") ?>">Đến</a>
                            </td>
                        </tr>
                        
                        
                        
                        
                    </tbody>
                </table>
            
            </div>
        </div>
    </main>
</div>
<?php require_once __DIR__. '/../../layouts/footer.php';?>
