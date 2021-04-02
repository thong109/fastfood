<?php
    require_once __DIR__. '/../../autoload/autoload.php';

    if($_SESSION['admin_lv'] == 1)
    {
        $_SESSION['error'] = "Bạn không có quyền thay đổi thông tin này!";
        redirectAdmin("product");
    }

    $id = intval(getInput('id'));

    $EditProduct = $db->fetchID("product",$id);
    if( empty($EditProduct))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("product");
    }

    $num2 = $db->delete("phone",$id);
    $num = $db->delete("product",$id);
    if($num > 0)
        {
            $_SESSION['success'] = "Xóa thành công!";
            redirectAdmin("product");
        }
        else
        {
             $_SESSION['error'] = "Xóa thất bại!";
             redirectAdmin("product");
        }

?>