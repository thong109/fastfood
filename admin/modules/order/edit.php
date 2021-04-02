<?php
require_once __DIR__. '/../../autoload/autoload.php';

if($_SESSION['admin_lv'] == 1 && $_SESSION['admin_id'] != getInput('id'))
{
    $_SESSION['error'] = "Bạn không có quyền thay đổi thông tin này.";
    redirectAdmin("order");
}

$id = intval(getInput('id'));


$sql = "SELECT transaction.amount ,product.name as nameproduct, product.price as priceproduct, product.thundar as thundarproduct, orders.*
 FROM orders JOIN transaction on transaction.id = orders.transaction_id 
 JOIN product on orders.product_id = product.id WHERE ".$id." = transaction.id" ;

$order = $db->fetchsql($sql);

$EditOrder = $db->fetchID("transaction",$id);



if(empty($EditOrder))
{
    $_SESSION['error'] = "Dữ liệu không tồn tại";
    redirectAdmin("order");
}
$data =
    [
        "status" => postInput('status'),
    ];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //dang nhap thanh cong
    if(empty($error))
    {

        $id_update = $db->update("transaction",$data,array("id" => $id));
        if($id_update > 0 )
        {
   
            $_SESSION['success'] = "Cập nhật thành công!";
            redirectAdmin("order");
        }
        else
        {
            $_SESSION['error'] = "Dữ liệu không đổi!";
            redirectAdmin("order");
        }
    }
}

?>

<?php require_once __DIR__. '/../../layouts/header.php'; ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Chi tiết đơn hàng</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="index.php">Bảng điều khiển</a>
                </li>
                <li class="breadcrumb-item active">Xử lý đơn hàng</li>
            </ol>

            <div class="clearfix"></div>
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
                                        <li>Giá:<?php echo $item['priceproduct'] ?></li>
                                        <li>Số lượng:<?php echo $item['qty'] ?></li>
                                    </ul>
                                </td>
                               
                            </tr>
                        <?php $stt++; endforeach ?>
                    </tbody>
                    <tfoot>
		  	<tr>
		      <th colspan="5" style="text-align: center; width: 100%">Tổng số tiền : <span style="color: red"><?php echo $item['amount'] ?> đ</span></th>
		    </tr>
		    
		   </tfoot>
                </table>

            <form action="" method="POST" enctype="multipart/form-data">
                

                <div class="form-group row">
                    <label for="input1" class="col-sm-2 text-right">Trạng thái</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="status">
                    <option value="1" <?php echo isset($data['status']) && $EditOrder['status'] == 1 ? "selected = 'selected'" : "" ?>>
                            Đang chờ
                        </option>
                        <option value="2" <?php echo isset($data['status']) && $EditOrder['status'] == 2 ? "selected = 'selected'" : "" ?>>
                            Đã kết thúc
                        </option>
                        <option value="3" <?php echo isset($data['status']) && $EditOrder['status'] == 3 ? "selected = 'selected'" : "" ?>>
                            Bị hủy
                        </option>
                        <?php if (isset($error['status'])): ?>
                            <p class="text-danger"> <?php echo $error['status']; ?> </p>
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
        </div>
    </main>
</div>
<?php require_once __DIR__. '/../../layouts/footer.php'; ?>