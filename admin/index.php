<?php
    require_once __DIR__. '/autoload/autoload.php';
    $category = $db->fetchAll("category");
    ?>
<?php require_once __DIR__. '/layouts/header.php'; ?>
<div id="layoutSidenav_content">
<main>
<div class="container-fluid">
<h1 class="mt-4">Chào mừng đến với trang quản trị</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item active">admin</li>
</ol>
<div class="reports-dashboard-new">
<div class="ui-layout ui-layout--full-width ui-layout__dashboard">
    <div class="ui-layout__sections">
        <div class="ui-layout__section">
            <div class="ui-layout__item">
                <section class="ui-card">
                    <div class="steps-intro clearfix">
                        <div class="next-grid report-caption">
                            <h2 class="report-caption-h2" style="color:#333333; text-transform:initial; font-weight:500;">Tất cả đã sẵn sàng!Quản lý trang web bán hàng dễ hơn tại đây!!!</h2>
                        </div>
                        <div class="" style="display: flex;margin-bottom:0;border: 1px black solid">
                            <div class="col-md-3 col-sm-6 col-xs-12 step-intro"  style="border: 1px black solid" >
                                <div class="row">
                                    <div class="image-intro">
                                        <p class="intro-title" style="font-weight: bold;margin-left: 5px;">1.Thêm danh sách thư mục</p>
                                        <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/image-intro-setting.png" style="width:80px ;margin-left: 44%;" />
                                    </div>
                                    <div class="intro-detail" style="text-align:center;line-height: 3px;margin-left: 14px;margin-top: 12px;">
                                        <p>Thêm mới và quản lý tồn kho theo</p>
                                        <p>từng phiên bản sản phẩm</p>
                                    </div>
                                    <a class="ui-button intro-btn ui-button--dashboard"style="    margin-left: 70px;" href="<?php echo modules("category/") ?>">
                                    Xem sản phẩm
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 step-intro"  style="border: 1px black solid" >
                                <div class="row">
                                    <div class="image-intro">
                                        <p class="intro-title" style="font-weight: bold;margin-left: 5px;">2. Quản lý danh sách thành viên</p>
                                        <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/intro_add_product_img.png" style="width:80px ;margin-left:39%;" />
                                    </div>
                                    <div class="intro-detail" style="text-align:center;line-height: 3px;margin-left:20px;margin-top: 12px;">
                                        <p>Xem các thành viên đã đăng kí</p>
                                        <p>trang web</p>
                                    </div>
                                    <a class="ui-button intro-btn ui-button--dashboard"style="margin-left: 47px;text-align: center;" href="<?php echo modules("user/") ?>">
                                    Xem danh sách thành viên
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 step-intro"  style="border: 1px black solid" >
                                <div class="row">
                                    <div class="image-intro">
                                        <p class="intro-title" style="font-weight: bold;margin-left: 5px;">3. Quản lý danh sách đặt hàng</p>
                                        <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/pantone.svg" style="width:80px ;margin-left:41%;" />
                                    </div>
                                    <div class="intro-detail" style="text-align:center;line-height: 3px;margin-left:38px;margin-top: 12px;">
                                        <p>Theo dõi các đơn hàng từ</p>
                                        <p>khách hàng đặt mua</p>
                                    </div>
                                    <a class="ui-button intro-btn ui-button--dashboard"style="    margin-left: 43px;" href="/admin/products">
                                    Xem danh sách mua hàng
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 step-intro"  style="border: 1px black solid" >
                                <div class="row">
                                    <div class="image-intro">
                                        <p class="intro-title" style="font-weight: bold;margin-left:5px;">4. Thống kê các đơn hàng</p>
                                        <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/intro_order_image.png" style="width:80px ;margin-left: 48%;" />
                                    </div>
                                    <div class="intro-detail" style="text-align:center;line-height: 3px;margin-left: 14px;margin-top: 12px;">
                                        <p>Theo dõi và tính toán lại</p>
                                        <p>số lượng sản phẩm và doanh thu</p>
                                    </div>
                                    <a class="ui-button intro-btn ui-button--dashboard"style="    margin-left: 80px;" href="/admin/products">
                                    Xem thống kê
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="ui-layout ui-layout--full-width ui-layout__dashboard">
    <div class="ui-layout__sections">
        <div class="ui-layout__section">
            <div class="ui-layout__item">
                <div class="dashboard-left">
                    <section class="panel clearfix">
                        <div class="next-grid report-caption">
                            <h2 class="report-caption-h2">Dành cho người mới bắt đầu</h2>
                        </div>
                        <div class="infomation-for-new-member" >
                            <ul style="list-style: none;">
                                <li><a href="1.php" target="_blank"><i class="fa fa-circle" aria-hidden="true"></i> Hướng dẫn thêm sản phẩm lên website</a></li>
                                <li><a href="https://support.sapo.vn/cai-dat-giao-dien" target="_blank"><i class="fa fa-circle" aria-hidden="true"></i> Cài đặt và thay đổi giao diện website</a></li>
                                <li><a href="https://www.sapo.vn/dang-ky-ten-mien.html" target="_blank"><i class="fa fa-circle" aria-hidden="true"></i> Chọn tên miền cho website</a></li>
                                <li><a href="https://support.sapo.vn/tim-hieu-ve-cau-hinh-van-chuyen" target="_blank"><i class="fa fa-circle" aria-hidden="true"></i> Tích hợp đơn vị vận chuyển cho website</a></li>
                                <li><a href="https://support.sapo.vn/tim-hieu-ve-don-hang" target="_blank"><i class="fa fa-circle" aria-hidden="true"></i> Quản lý đơn hàng trên website</a></li>
                            </ul>
                            <div class="hotline-support">
                                <div class="hotline-support-icon">
                                    <img src="//bizweb.dktcdn.net/assets/admin/images/dasboard/hotline-dashboard-image.png" />
                                </div>
                                <div class="hotline-support-info">
                                    <p>Nếu bạn cần thêm sự hỗ trợ, hãy liên hệ với chúng tôi</p>
                                    <p>Hotline: <a href="tel:18006750">1800 6750</a> hoặc truy cập <a href="https://support.sapo.vn" target="_blank">support.sapo.vn</a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__. '/layouts/footer.php'; ?>