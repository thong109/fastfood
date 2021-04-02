<?php
require_once __DIR__. '/../../autoload/autoload.php';

if(isset($_GET['page']))
{
    $p = $_GET['page'];
    if($p == 0) $p = 1;
}
else
{
    $p = 1;
}

$sql = "SELECT COUNT(`id`) FROM product";
$dem = $db->total($sql);

$sql2 = "SELECT SUM(`qty`) FROM orders";
$dem2 = $db->total($sql2);


$product = $db->fetchJone('product',$sql,$p,10,true);

if(isset($product['page']))
{
    $sotrang = $product['page'];
    unset($product['page']);
}
if($sotrang < $p)$p = $sotrang;

?>

<?php require_once __DIR__. '/../../layouts/header.php'; ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Thống kê</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="breadcrumb-item active">Thống kê</li>
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

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30%;">Đơn vị</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 20%;">Nút</th>
                            </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Số lượng sản phẩm</td>
                            <td><?php echo $dem['COUNT(`id`)'] ." sản phẩm" ?></td>
                            <td class="text-center">
                                <a class="btn btn-xs btn-info" href="chitiet.php">Chi tiết</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Số lượng sản phẩm đã bán</td>
                            <td><?php echo $dem2['SUM(`qty`)'] ." sản phẩm" ?></td>
                            <td class="text-center">
                                <a class="btn btn-xs btn-info" href="chitiet2.php">Chi tiết</a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                
            </div>
        </div>
    </main>
</div>
<?php require_once __DIR__. '/../../layouts/footer.php';?>
