<?php 
require_once __DIR__."/autoload/autoload.php";
$users = $db->fetchID("users",intval($_SESSION['name_id']));

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $data=
  [
'amount' => $_SESSION['total'],
'users_id' => $_SESSION['name_id']
  ];
$idtran = $db->insert("transaction",$data);
if($idtran > 0)
{
  foreach ($_SESSION['cart'] as $key => $value) 
  {
  $data2 = 
  [
'transaction_id'=> $idtran,
'product_id'=> $key,
'qty'=>$value['qty'],
'price'=>$value['price']
  ];
$id_insert = $db->insert("orders",$data2);
  }
  
$_SESSION['success'] = " Xác nhận mua hàng thành công ! Đơn hàng sẽ được giao đến bạn trong thời gian sớm nhất !!!";
header("location: thong-bao.php");
}

} 

 ?>
<body>
<!-- Form Wrapper -->
<link rel="stylesheet" type="text/css" href="/shop-do-an-nhanh/public/frontend/css/thanh-toan.css">
<script  src="/shop-do-an-nhanh/public/frontend/js/thanh-toan.js"></script>
<form action="" method="POST" id="form-wrapper">
<div id="form-left-wrapper">
<div id="form-tab-menu">
<div class="tab-menu-item current">Thanh toán</div>

</div>
<!-- Body of the Form -->
<div id="form-body">
<div id="shipping-body">
<div id="contact-details">
<div class='form-input input-small'>
<label>Tên khách hàng</label><br/>
<input type='text' readonly="" name="name" placeholder='Họ tên khách hàng' id='name' class='name-input' value="<?php echo $users['name'] ?>">
</div>

<div class='form-input input-small'>
<label>Email</label><br/>
<input type='email' readonly="" name="email" placeholder='Email' id='email' class='email'value="<?php echo $users['email'] ?>">
</div>
</div>
<div class='hr'></div>
<div id="Address-details">
<div class='form-input input-small'>
<label>Số điện thoại</label><br/>
<input type='number' readonly="" name="phone" placeholder='Số điện thoại' id='phone' class='phone' value="<?php echo $users['phone'] ?>" >
</div>
<div class='form-input input-medium'>
<label>Địa chỉ khách hàng</label><br/>
<input type='text' readonly="" name="address" placeholder='Địa chỉ' id='address' class='address'value="<?php echo $users['address'] ?>">
</div>
<div class='form-input input-medium'>
<label>Số tiền phải trả</label><br/>
<input type='text' readonly="" name="address" placeholder='Địa chỉ' id='address' class='address'value="<?php echo formatPrice($_SESSION['total']) ?>">
</div>

<div id="form-submit">
<input type='submit' value='Xác nhận'/>
</div>
</div>
</div>
</div>

</form>
</body>


