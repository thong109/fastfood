<?php require_once __DIR__. '/../../autoload/autoload.php';

if(isset($_GET['page']))
{
    $p = $_GET['page'];
    if($p == 0) $p = 1;
}
else
{
    $p = 1;
}

$sql = "SELECT transaction.* FROM transaction";

$transaction = $db->fetchJone('transaction',$sql,$p,10,true);

if(isset($transaction['page']))
{
    $sotrang = $transaction['page'];
    unset($transaction['page']);
}
if($sotrang < $p) $p = $sotrang;

?>

<?php require_once __DIR__. '/../../layouts/header.php';?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Danh sách đặt hàng</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="breadcrumb-item active">Đặt hàng</li>
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
                            <th class="sorting_asc" tabindex="0" aria-controls="dataTable" 
                            rowspan="1" colspan="1" aria-sort="ascending" 
                            aria-label="Name: activate to sort column descending" 
                            style="width: 5%;">STT</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 15%;">Người nhận</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 15%;">Số Điện Thoại</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%;">Địa chỉ</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%;">Ngày đặt hàng</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 15%;">Trạng thái</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 20%;">Nút</th>
                            </tr>
                    </thead>

                    <tbody>
                        <?php $stt = 1;foreach ($transaction as $item): ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $item['name'] ?></td>
                                <td><?php echo $item['phone'] ?></td>
                                <td><?php echo $item['address'] ?></td>
                                <td><?php echo $item['created_at'] ?></td>
                                <td>
                                    <?php if($item['status'] == 3):?>
                                        <div style="
                                        color: black;
                                        height: 35px;
                                        background: #ff0000;
                                        line-height: 30px;
                                        padding: 0 0 0 35%;
                                        font-weight: 700;">Bị Hủy</div>
                                    <?php elseif ($item['status'] == 2):?>
                                        <div style="
                                        color: black;
                                        height: 35px;
                                        background: #baffc5;
                                        line-height: 30px;
                                        padding: 0 0 0 24%;
                                        font-weight: 500;">Hoàn thành</div>
                                        <div style="
                                        color: black;
                                        height: 35px;
                                        background: #007bff6b;
                                        line-height: 30px;
                                        padding: 0 0 0 20%;
                                        font-weight: 500;
                                        margin-top: 10px;">Đã thanh toán</div>
                                    <?php elseif ($item['status'] == 1 && $item['status_tt'] == 1):?>
                                        <div style="
                                        color: black;
                                        height: 35px;
                                        background: #ffbaba;
                                        line-height: 30px;
                                        padding: 0 0 0 24%;
                                        font-weight: 500;">Đang chờ</div>
                                        <div style="
                                        color: black;
                                        height: 35px;
                                        background: #ffdaba;
                                        line-height: 30px;
                                        padding: 0 0 0 10%;
                                        font-weight: 500;
                                        margin-top: 10px;">Chưa thanh toán</div>
                                    <?php elseif ($item['status'] == 1 && $item['status_tt'] == 2):?>
                                        <div style="
                                        color: black;
                                        height: 35px;
                                        background: #ffbaba;
                                        line-height: 30px;
                                        padding: 0 0 0 24%;
                                        font-weight: 500;">Đang chờ</div>
                                        <div style="
                                        color: black;
                                        height: 35px;
                                        background: #007bff6b;
                                        line-height: 30px;
                                        padding: 0 0 0 24%;
                                        font-weight: 500;
                                        margin-top: 10px;">Đã thanh toán</div>
                                    <?php endif?>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $item['id'] ?>">
                                        Chi tiết
                                    </a>
                                    <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>"><i class="fa fa-times"></i>Xóa</a>
                                </td>
                            </tr>
                        <?php $stt++; endforeach ?>
                    </tbody>
                </table>
                <nav aria-label="Page navgation">
                    <ul class="pagination pullright">
                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo --$p ?>">Trước</a>
                        </li>
                        <?php for($i = 1;$i <= $sotrang;$i++) : ?>
                            <?php
                            if(isset($_GET['page']))
                            {
                                $p = $_GET['page'];
                                if($p == 0) $p = 1;
                            }
                            else
                            {
                                $p = 1;
                            }
                            if($sotrang < $p) $p = $sotrang;
                            ?>

                        <li class="page-item <?php echo ($i == $p) ? 'active' : '' ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>">
                                <?php echo $i; ?>
                            </a>
                        </li>
                        <?php endfor; ?>

                        <li class="page-item">
                            <a class="page-link" href="?page=<?php echo ++$p ?>">Sau</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
</div>

<?php require_once __DIR__. '/../../layouts/footer.php';?>