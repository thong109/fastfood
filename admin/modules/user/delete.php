<?php
    require_once __DIR__. '/../../autoload/autoload.php';

    if($_SESSION['admin_lv'] == 1)
    {
        $_SESSION['error'] = "Bạn không có quyền thay đổi thông tin này!";
        redirectAdmin("user");
    }

    $id = intval(getInput('id'));

    $EditUser = $db->fetchID("users",$id);
    if( empty($EditUser))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("user");
    }

    $num = $db->delete("users",$id);
    if($num > 0)
        {
            $_SESSION['success'] = "Xóa thành công!";
            redirectAdmin("user");
        }
        else
        {
             $_SESSION['error'] = "Xóa thất bại!";
             redirectAdmin("user");
        }

?>