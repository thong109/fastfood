<?php 
    require_once __DIR__. '/../autoload/autoload.php';
    $name = getInput('keywork');
    
    if(getInput('keywork') != '')
        {
            $name = to_slug($name);
            $item = $db->fetchOne('product',"slug LIKE '%".$name."%' ");
            if(isset($item) && count($item)>0)
            {
                $cate = $db->fetchOne('category',"id ='".$item['category_id']."'");
                if($cate['level'] == 0)
                {
                header("location:dienthoai.php?the=".$name);
                }
                else
                {
                header("location:phukien.php?the=".$name); 
                }
            }
            else
            {
                $_SESSION['error_s']="Không tìm thấy sản phẩm!";
            }
        }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Web bán hàng online</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/chitietsanpham.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/bootstrap.min.css">
        <!-- Jquery -->
        <script  src="<?php echo base_url() ?>public/frontend/js/jquery-3.2.1.min.js"></script>
        <script  src="<?php echo base_url() ?>public/frontend/js/bootstrap.min.js"></script>
        <!---->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/slick-theme.css"/>
        <!--slide-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/css/style.css">
        <!-- owl carousel libraries -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/lib/owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/frontend/lib/owlcarousel/owl.theme.default.min.css">
        <script src="<?php echo base_url() ?>public/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body>
        <div id="wrapper">
        <div id="menunav">
            <div class="container">
                <nav style="background-color: black">
                    <div class="brand">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="dienthoai.php?the=hot">Thức ăn</a></li>
                            <li><a href="phukien.php">Nước uống</a></li>
                            <li><a href="giohang.php"></i> Giỏ hàng </a></li>
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="text" name="keywork" placeholder=" Bạn tìm gì ..." class="form-control" style="margin-top:-10px;">
                                    <button type="submit" class="btn btn-default" style="margin-top:-10px;"><i class="fa fa-search"></i></button>
                                </div>
                                <?php if(isset($_SESSION['error_s'])) :?>
                                <div style="color: red;margin-top: -53px;">
                                    <?php echo $_SESSION['error_s'];unset($_SESSION['error_s']); ?>
                                </div>
                                <?php endif; ?>
                            </form>
                        </ul>
                    </div>
                    <div id="header-nav-top">
                        <ul class="list-inline pull-right" id="headermenu" style="color: white;font-size: 20px;line-height: 75px;">
                            <?php if (isset($_SESSION['name_user'])): ?>
                            Xin chào <?php echo $_SESSION['name_user'] ?>
                            <li>
                                <a href=""><i class="fa fa-user"  style="color:#fff;"></i> Tài khoản <i class="fa fa-caret-down"  style="color:#fff;"></i></a>
                                <ul id="header-submenu">
                                    <li><a href="thong-tin.php"><i class="fa fa-info"></i> Thông tin</a></li>
                                    <li><a href="giohang.php"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                    <li><a href="dang-xuat.php"><i class="fa fa-sign-out"></i>Thoát</a></li>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li>
                                <a href="dang-ki.php"><i class="fa fa-user" style="color:#fff;"></i> Đăng kí</a>
                            </li>
                            <li>
                                <a href="dang-nhap.php?path=<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] ?>"><i class="fa fa-unlock" style="color:#fff;"></i> Đăng nhập</a>
                            </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </nav>
                <section class="section1"></section>
              
                    
                </style>
                   
                </div>
                <style>
                    .top-highlight {
                    max-width: 520px;
                    background-color: #fff;
                    margin: 0 auto;
                    -webkit-border-top-left-radius: 20px;
                    -webkit-border-top-right-radius: 20px;
                    -moz-border-radius-topleft: 20px;
                    -moz-border-radius-topright: 20px;
                    border-top-left-radius: 20px;
                    border-top-right-radius: 20px;
                    display: block;
                    zoom: 1;
                    box-shadow: 0 4px 8px rgb(0 0 0 / 15%);
                    -webkit-box-shadow: 0 4px 8px rgb(0 0 0 / 15%);
                    padding: 25px 0;
                    position: relative;
                    z-index: 1;
                    margin-top: -60px;
                    }
                    section.section1{
                    width: 100%;
                    height: 100vh;
                    box-sizing: border-box;
                    background: url(https://res.cloudinary.com/dn4nxz7f0/image/upload/v1603170394/navigation_trong_suot/pexels-life-of-pix-7919_zydtt2.jpg);
                    background-size: cover;
                    }
                    body{
                    margin: 0;
                    padding: 0;
                    font-family: 'Roboto', sans-serif;
                    }
                    nav{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 80px;
                    background: rgba(0,0,0,0.4);
                    padding: 0 100px ;
                    box-sizing: border-box;
                    box-shadow: 0 1px 1px rgba(0,0,0,0.12),
                    0 2px 2px rgba(0,0,0,0.12),
                    0 4px 4px rgba(0,0,0,0.12),
                    0 8px 8px rgba(0,0,0,0.12),
                    0 16px 16px rgba(0,0,0,0.12);
                    }
                    nav .brand{
                    float: left;
                    height: 100%;
                    line-height: 80px;
                    }
                    nav .brand h2{
                    margin: 0;
                    padding: 0;
                    color: #fff;
                    }
                    nav ul{
                    float: right;
                    display: flex;
                    margin:0;
                    padding: 0;
                    }
                    nav ul li{
                    list-style: none;
                    }
                    nav ul li a{
                    position: relative;
                    display: block;
                    height: 80px;
                    line-height: 80px;
                    padding: 0 20px;
                    box-sizing: border-box;
                    color: #fff;
                    text-decoration: none;
                    text-transform: uppercase;
                    transition: 0.5s
                    }
                    nav ul li a:before{
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: #EBD6D6;
                    transform-origin: right;
                    z-index: -1;
                    transform: scaleX(0);
                    transition:  transform 0.5s;
                    }
                    nav ul li a:hover:before{
                    transform-origin: left;
                    transform: scaleX(1);
                    }
                    nav ul li a:hover{
                    color: #262626;
                    }
                    }
                </style>
            </div>
        </div>
        <!--ENDMENUNAV-->
        <div id="maincontent">
        <div class="container">