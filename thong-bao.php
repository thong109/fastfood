<?php require_once __DIR__. '/autoload/autoload.php'; ?>
<?php require_once __DIR__. '/layouts/header.php'; ?>

 <div class="col-md-12 bor">
 	 <section class="box-main1">
        <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> Thông báo </a> </h3>
        <h1 style="text-align: center;color: red"><?php echo $_SESSION['success'] ; unset($_SESSION['success']) ?> !</h1>
        <a href="http://localhost/webdidong/" class="buyother">Tiếp tục mua hàng</a>
        <a href="dang-xuat.php" class="buyother">Thoát</a>
       
    </section>

</div>


<?php require_once __DIR__. '/layouts/footer.php'; ?>