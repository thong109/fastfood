<?php 
	require_once __DIR__. '/autoload/autoload.php';
    if(!isset($_SESSION['name_id']))
    {
        $_SESSION['error_cm']= "Đăng nhập để viết đánh giá của bạn!";
        header("location:san_pham.php?id=".getInput('id'));
    }
    else
    {
	   $data =
        [
            "id_users" => $_SESSION['name_id'],
            "id_product" => intval(getInput('id')),
            "comment" => getInput('comment'),
            "rated" => intval(getInput('star'))
        ];
     
        if(getInput('star') == '')
        {
            $_SESSION['error_cm'] = "Bạn chưa đánh giá số sao!";
        }
        else
        if(getInput('comment') == '')
        {
            $_SESSION['error_cm'] = "Hãy viết suy nghĩ của bạn!";
        }
        else
        {
        	$id_insert = $db->insert("rated",$data);
        	if($id_insert>0)
        	{
        		 $_SESSION['success'] = "Đánh giá thành công!";
        	}
        }
        header("location:san_pham.php?id=".$data['id_product']);
    }
 ?>