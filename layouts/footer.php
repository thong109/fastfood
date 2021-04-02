</div>
</div>
<div class="container">
                    <div class="col-md-4 bottom-content">
                        <a><img src="images/free-shipping.png"></a>
                    </div>
                    <div class="col-md-4 bottom-content">
                        <a><img src="images/guaranteed.png"></a>
                    </div>
                    <div class="col-md-4 bottom-content">
                        <a><img src="images/deal.png"></a>
                    </div>
                </div>
                <div class="container-pluid">
                <section id="footer-button">
                    <div class="container-pluid">
                        <div class="container">
                            <div class="col-md-6" id="ft-about">
                                
                                <p style="font-family:sans-serif;font-weight:bold;">Vì số lượng hàng trong kho có thể không đủ nên vui lòng gọi trước nếu đặt số lượng lớn . Cảm ơn !!!</p>
                            </div>
                            
                            <div class="col-md-6" id="footer-support">
                                <h3 class="tittle-footer"> Liên hệ</h3>
                                <ul>
                                    <li>
                                    <p><i class="sp-ic fa fa-mobile" style="font-size: 22px;padding-right: 5px;"></i>Gọi mua hàng: <strong>1800.2712</strong> (7:30 - 22:00)</p>
                    <p><i class="sp-ic fa fa-mobile" style="font-size: 22px;padding-right: 5px;"></i>Gọi khiếu nại: <strong>1800.2701</strong> (8:00 - 21:30)</p>
                    <p><i class="fa fa-mobile" style="font-size: 22px;padding-right: 5px;"></i>Kỹ thuật: <strong>1800.1999</strong> (7:30 - 22:00)</p>
                    <p><i class="fa fa-home" style="font-size: 16px;padding-right: 5px;"></i>Địa chỉ:  05 XXX, Hòa Khánh Bắc, Liên Chiểu, Đà Nẵng </p>
                    <p><i class="sp-ic fa fa-envelope" style="font-size: 13px;padding-right: 5px;"></i>Email: myloan@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="ft-bottom">
                    <p class="text-center">Copyright © 2020 !!! </p>
                </section>
            </div>
        </div>      
    </div>
            </div>      
        </div>
    </body>
        
</html>
<script type="text/javascript">
    $(function() {
        $hidenitem = $(".hidenitem");
        $itemproduct = $(".item-product");
        $itemproduct.hover(function(){
            $(this).children(".hidenitem").show(100);
        },function(){
            $hidenitem.hide(500);
        })
    })
     $(function(){
        $updatecart = $(".updatecart");
        $updatecart.click(function(e) {
            e.preventDefault();
            $qty = $(this).parents("tr").find("#qty").val();

            $key = $(this).attr("data-key");

            
            $.ajax({
                url: 'update.php',
                type: 'GET',
                data: {'qty': $qty, 'key':$key},
                success:function(data)
                {
                    if (data == 1) 
                    {
                        
                        location.href='giohang.php';
                    }
                    else
                    {
                        alert('Xin lỗi! Số lượng bạn mua vượt quá số lượng hàng có trong kho!');
                        location.href='giohang.php';
                    }
                }
            });
            
        })
    })  
    
</script>