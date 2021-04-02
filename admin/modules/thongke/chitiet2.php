<?php
require_once __DIR__. '/../../autoload/autoload.php';

$sql = "SELECT transaction.amount, transaction.name as nameuser, transaction.updated_at as time,
product.name as nameproduct, product.price as priceproduct, product.thundar as thundarproduct, orders.*
 FROM orders JOIN transaction on transaction.id = orders.transaction_id 
 JOIN product on orders.product_id = product.id" ;

$order = $db->fetchsql($sql);

$sql2 = "SELECT SUM(`amount`) FROM transaction";
$dem2 = $db->total($sql2);

?>

<?php require_once __DIR__. '/../../layouts/header.php'; ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Thống kê đã bán</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="breadcrumb-item active">thống kê sản phẩm đã bán</li>
            </ol>

            <table class="table table-bordered dataTable" id="dataTable" 
                width="100%" cellspacing="0" role="grid" 
                aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="dataTable" 
                            rowspan="1" colspan="1" aria-sort="ascending" 
                            aria-label="Name: activate to sort column descending" 
                            style="width: 5%;">STT</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 25%;">Tên sản phẩm</th>
                            
                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 12%;">Hình Ảnh</th>

                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 18%;">Thông tin</th>
                            

                        </tr>
                    </thead>
                    
                    <tbody>
                        
                        <?php $stt = 1;foreach ($order as $item): ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $item['nameproduct'] ?></td>
                                <td>
                                    <img src="<?php echo uploads() ?>product/<?php echo $item['thundarproduct'] ?>" 
                                    width="80px" height="80px">
                                </td>
                                <td>
                                    <ul>
                                        <li>Giá: <?php echo $item['priceproduct'] ?></li>
                                        <li>Số lượng đã bán: <?php echo $item['qty'] ?></li>
                                        <li>Ngày đặt: <?php echo $item['time'] ?></li>
                                        <li>Người nhận: <?php echo $item['nameuser'] ?></li>
                                    </ul>
                                </td>
                               
                            </tr>
                        <?php $stt++; endforeach ?>
                    </tbody>
                    <tfoot>
		  	<tr>
		      <th colspan="5" style="text-align: center; width: 100%">Tổng số tiền thu được: <span style="color: red"><?php echo $dem2['SUM(`amount`)'] ?> đ</span></th>
		    </tr>
		    
		   </tfoot>
                </table>
        </div>
    </main>
</div>
<?php require_once __DIR__. '/../../layouts/footer.php'; ?>