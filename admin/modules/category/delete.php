<?php
    require_once __DIR__. '/../../autoload/autoload.php';

    if($_SESSION['admin_lv'] == 1)
    {
        $_SESSION['error'] = "Bạn không có quyền thay đổi thông tin này!";
        redirectAdmin("category");
    }

    $id = intval(getInput('id'));

    $EditCategory = $db->fetchID("category",$id);
    if( empty($EditCategory))
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("category");
    }

    $is_product = $db->fetchOne("product"," category_id = $id ");

    if($is_product == NULL)
    {
        $num = $db->delete("category",$id);
    if($num > 0)
        {
            $_SESSION['success'] = "Xóa thành công!";
            redirectAdmin("category");
        }
        else
        {
             $_SESSION['error'] = "Xóa thất bại!";
             redirectAdmin("category");
        }
    }
    else
    {
        $_SESSION['error'] = "Danh mục đang có sản phẩm! Không được xóa";
        redirectAdmin("category");
    }

?>