<?php
	require_once __DIR__. '/autoload/autoload.php';
	$data = 
	[
		'email' => postInput("email"),
		'password' => postInput("password")
	];

	if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $error = [];
        if(postInput('email') == '')
        {
            $error['email'] = "Email không được để trống!!";
        }

        if(postInput('password') == '')
        {
            $error['password'] = "Mật khẩu không được để trống!!";
        }
        else
        {
        	$data['password'] = MD5(postInput('password'));
        }

        //dang nhap thanh cong
        
        if(empty($error))
        {     

            $isset = $db->fetchOne("users","email = '".$data['email']."' AND password = '".$data['password']."' ");
            if($isset > 0)
            {
                $path = getInput("path");
                $_SESSION['name_user'] = $isset['name'];
                $_SESSION['name_id'] = $isset['id'];
                echo "<script>alert('Đăng nhập thành công'); location.href='index.php'</script>";
            }
            else
            {
            	 echo "<script>alert('Sai Email hoặc mật khẩu !!! Vui lòng thử lại !!!'); location.href='dang-nhap.php'</script>";
            }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   
    <title>Đăng nhập</title>

    
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
            <?php if(isset($_SESSION['success'])) :?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['success'];unset($_SESSION['success']); ?>
                </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['error'])) :?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error'];unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>
        
        <form action="" method="POST" class="form-horizontal formcustome" role="form">
            <div class="wizard-header text-center">
                                <h3 class="wizard-title">Tạo thông tin đăng nhập của bạn</h3>
                                <p class="category">This information will let us know more about you.</p>
            </div>

                                <div class="wizard-navigation">
                                 
                                            <a href="#about" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </a>
                                       
                                </div>
                               
                                     <div class="tab-pane" id="about">
                            <div class="row">
                                       <h5 class="info-text" style="margin-top: -11px;">Đăng nhập</h5>
                                        <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                   <input type="email" class="form-control" name="email" required >
                                                </div>
                                            </div>  
                               
                            <div class="tab-pane" id="about">
                                        <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Mật khẩu</label>
                                                   <input type="password" class="form-control" name="password" required >
                                                   Nếu chưa có tài khoản . Hãy <a href="dang-ki.php">đăng ký</a> !!!
                                                </div>
                                            </div>  
                           
                            </div>
            <div class="form-group row">
                <div class="col-sm-6 col-sm-offset-3 container-fluid" style="vertical-align: middle; margin-left:40%">
                  <button type="submit" class="btn btn-finish btn-fill btn-warning btn-wd">Đăng nhập</button>
                </div>
            </div>
            </div>
        </div>
        </form>
       
    </div>
</div>
</div>
</div>

</div>
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="assets/js/demo.js" type="text/javascript"></script>
    <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>

