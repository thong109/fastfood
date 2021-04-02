<?php 
require_once __DIR__."/autoload/autoload.php";
// if(isset($_SESSION['product'])&&isset($_GET['xoa']))
if(isset($_GET["id"])&& isset($_GET["return_url"]) && isset($_SESSION["cart"]))
	{
		$id=$_GET['id'];
		$return_url= base64_decode($_GET["return_url"]);
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id']!= $id){
				$product[]=array('name'=>$cart_item['name'],'id'=>$cart_item['id'],'number'=>$cart_item['number'],'price'=>$cart_item['price'],
					'thunbar'=>$cart_item['thunbar'],
					'qty'=>$cart_item['qty']);
			}

		$_SESSION['cart']=$product;
		
		
		}
		header('Location:'.$return_url);
		// header('location:gio-hang.php');
	} 
	?>
