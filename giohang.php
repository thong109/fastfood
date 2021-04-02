<?php 
require_once __DIR__."/autoload/autoload.php";
$sum=0;
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
if( ! isset($_SESSION['cart']) || count($_SESSION['cart']) == 0)
{
  echo "<script>alert('Bạn chưa có gì trong giỏ hàng');location.href='index.php'</script>";
}
 ?>
<?php require_once __DIR__. '/layouts/header1.php'; ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/bootstrap.min.css">
        
        <script  src="<?php echo base_url() ?>public/frontend/js/jquery-3.2.1.min.js"></script>
        <script  src="<?php echo base_url() ?>public/frontend/js/bootstrap.min.js"></script>
        <!---->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick-theme.css"/>
        <!--slide-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style.css">
<h2 class="text-center">Giỏ hàng của bạn</h2>
<div class="container"> 
  <?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success">
      <strong style="color: #3c763d">Success</strong>
      <?php echo $_SESSION['success'] ; unset($_SESSION['success']) ?>
    </div>
  <?php endif ?>
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
  <th >STT</th> 
    <th >Tên sản phẩm</th> 
    <th >Hình ảnh</th> 
    <th style="width:8%">Số lượng</th>
    <th >Giá tiền</th> 
    <th >Tổng tiền</th> 
    <th>Thao tác</th>
   </tr> 
  </thead> 
  <tbody>
<?php $stt = 1; 
      foreach ($_SESSION['cart'] as $value): ?>
        <tr>
            <td><?php echo $stt ?></td>
            <td><?php echo $value['name'] ?></td>
            <td>
              <img src="<?php echo uploads() ?>product/<?php echo $value['thunbar'] ?>" width="80pc" height="80px">
            </td>
            <td>
              <input type="number" name="qty" value="<?php echo $value['qty'] ?>" class="form-control qty" min="0" id="qty" oninput="this.value = Math.abs(this.value)">
            </td>
            <td><?php echo formatPrice($value['price']) ?></td>
            <td><?php echo formatPrice($value['price'] *$value['qty']) ?></td>
            <td>
              <a href="xoa.php?id=<?php echo $value['id'] ?>&return_url=<?php echo $current_url?>" class="btn btn-xs btn-danger xoa"><i class="fa fa-remove"></i>Xóa</a>
              <a href="#" class="btn btn-xs btn-info updatecart" data-key="<?php echo $value['id'] ?>" ><i class="fa fa-refresh"></i>Cập Nhật</a>
            </td>
        </tr>
<?php $sum += $value['price'] * $value['qty'] ;
$_SESSION['tongtien'] = $sum; ?>
<?php $stt++; endforeach ?>
 
</tbody>
 </table>

 <div class="col-md-5 pull-right">
   <ul class="list-group">
     <li class="list-group-item">
      <h3>Thông tin đơn hàng</h3>
     </li>
     <li class="list-group-item">
       <span class="badge"><?php echo formatPrice($_SESSION['tongtien'])?></span> Số tiền
     </li>
       <li class="list-group-item">
         <span class="badge">5%</span>
         Phí dịch vụ 
       </li>
       
   <li class="list-group-item">
     <span class="badge"><?php $_SESSION['total'] = $_SESSION['tongtien'] * 105/100 ; echo formatPrice($_SESSION['total'])?></span>
     Tổng tiền thanh toán
   </li>
   <li class="list-group-item">
    <a href="dathang.php" class="btn btn-success center-block">Thanh toán</a>
   </li>
   </ul>
 </div>
<a href="index.php" class="btn btn-success">Tiếp tục mua hàng</a>
</div>
<?php require_once __DIR__."/layouts/footer.php"; ?>