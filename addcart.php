<?php 
require_once __DIR__."/autoload/autoload.php";
if(!isset($_SESSION['name_id']))
		{

		echo "<script>alert('Bạn phải đăng nhập mới thực hiện được chức năng này');location.href='2.php'</script>";
		}
$id = intval(getInput('id'));


//chi tiết sản phẩm
$product = $db->fetchID("product",$id);


if( ! isset($_SESSION['cart'][$id]))
{
	$_SESSION['cart'][$id]['id']=$product['id'];
	$_SESSION['cart'][$id]['name'] = $product['name'];
	$_SESSION['cart'][$id]['thunbar'] = $product['thunbar'];
	
	$_SESSION['cart'][$id]['qty'] = 1;
	$_SESSION['cart'][$id]['price'] = ((100 - $product['sale']) * $product['price']) /100;
}
else
{
	$_SESSION['cart'][$id]['qty'] += 1;
}
echo "<script>alert('Thêm vào giỏ hàng thành công');location.href='gio-hang.php'</script>";

?>



