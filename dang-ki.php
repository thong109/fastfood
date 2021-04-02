<?php
    require_once __DIR__. '/autoload/autoload.php';
    if(isset($_SESSION['name_id']))
    {
        echo "<script>location.href='index.php'</script>";
    }
    $data =
        [
            "avatar" =>postInput('avatar'),
            "name" => postInput('name'),
            "address" => postInput("address"),
            "email" => postInput('email'),
            "phone" => postInput('phone'),
            "password" => postInput('password')
        ];

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $error = [];
        if(postInput('name') == '')
        {
            $error['name'] = "Mời nhập đầy đủ họ tên";
        }
        if(postInput('address') == '')
        {
            $error['address'] = "Mời địa chỉ";
        }
        if(postInput('email') == '')
        {
            $error['email'] = "Email không được để trống!!!";
        }
        if(postInput('phone') == '')
        {
            $error['phone'] = "Mời nhập số điện thoại";
        }

        if(postInput('password') == '')
        {
            $error['password'] = "Mời nhập mật khẩu";
        }
        else
        {
            $data['password'] = MD5(postInput('password'));
        }

        //dang nhap thanh cong
        if(empty($error))
        {     
            $isset = $db->fetchOne("users","email = '".$data['email']."' ");
            if($isset > 0)
            {
                $error['email'] = "Email đã đã tồn tại!";
            }
            else
            {

                $id_insert = $db->insert("users",$data);
                if($id_insert>0)
                {
                    echo "<script>alert('Đăng ký thành công , hãy đăng nhập');location.href='dang-nhap.php'</script>";
                }
                else
                {
                    $_SESSION['error'] = "Đăng kí thất bại!";
                   // redirectAdmin("admin");
                }
            }
        }
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   
    <title>Đăng ký thành viên</title>

    
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    
    <!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="image-container set-full-height" style="background-image: url('assets/img/paper-1.jpeg')">
    <a href="">
        <div class="logo-container">
            <div class="logo">
                <img src="assets/img/new_logo.png">
                </div>
                <div class="brand">
                    Fast Food
                </div>
                </div>
            </a>
        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--      Wizard container        -->
                    <div class="wizard-container">

                        <div class="card wizard-card" data-color="orange" id="wizardProfile">
                            <form action="" method="POST" class="form-horizontal formcustome" role="form" style="margin-top: 20px">
                        <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

                                <div class="wizard-header text-center">
                                    <h3 class="wizard-title">Tạo thông tin đăng nhập của bạn</h3>
                                <p class="category">This information will let us know more about you.</p>
                                </div>
                                <div class="wizard-navigation">
                                    <div class="progress-with-circle">
                                         <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#about" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-user"></i>
                                                </div>
                                                Thông tin cơ bản
                                            </a>
                                        </li>
                                          <li>
                                            <a href="#address" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-map"></i>
                                                </div>
                                                Địa chỉ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#account" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-settings"></i>
                                                </div>
                                                Công việc
                                            </a>
                                        </li>
                                      
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <div class="row">
                                            <h5 class="info-text">Hãy cho chúng tôi biết thêm về bạn</h5>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
                                                        <input type="file" id="wizard-picture" name="avatar" value="<?php echo $data['avatar'] ?>">
                                                    </div>
                                                    <h6>Chọn hình đại diện</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Họ và Tên</label>
                                                     <input type="text" class="form-control" name="name" maxlength="20" value="<?php echo $data['name'] ?>">
                  <?php if (isset($error['name'])): ?>
                    <br><p class="text-danger">Tên không được để trống!!!</p>
                <?php endif ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Địa chỉ email</label>
                                                     <input type="email" class="form-control" maxlength="30" name="email"value="<?php echo $data['email'] ?>">
                  <?php if (isset($error['email'])): ?>
                    <br><p class="text-danger"><?php echo $error['email'] ?></p>
                <?php endif ?>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <span style="margin-left: 293px;">Nếu đã có tài khoản , vui lòng nhấn <a href="dang-nhap.php">vào đây</a> để đăng nhập !!!</span>
                                    <div class="tab-pane" id="address">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="info-text">Bạn đang sống ở đâu?</h5>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>">
                  <?php if (isset($error['address'])): ?>
                    <br><p class="text-danger">Địa chỉ không được để trống!!!</p>
                <?php endif ?>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Số điện thoại</label>
                                                    <input type="tel" class="form-control" name="phone" value="<?php echo $data['phone'] ?>">
                  <?php if (isset($error['phone'])): ?>
                    <br><p class="text-danger">Số điện thoại không được để trống!!!</p>
                <?php endif ?>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <h5 class="info-text">Xác nhận mật khẩu</h5>
                                        <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Mật khẩu</label>
                                                   <input type="password" maxlength="16" class="form-control" name="password" value="<?php echo $data['password'] ?>">
                  <?php if (isset($error['password'])): ?>
                    <br><p class="text-danger">Mật khẩu không được để trống!!!</p>
                <?php endif ?>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Kế tiếp' />
                                        <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Đăng kí' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Trước đó' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

       
        
    </div>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="assets/js/demo.js" type="text/javascript"></script>
  <script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

    <!--  More information about jquery.validate here: https://jqueryvalidation.org/     -->
    <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>
