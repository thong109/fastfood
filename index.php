<?php require_once __DIR__. '/autoload/autoload.php';
    //_debug($_SESSION['cart']);
   // unset($_SESSION['cart']);
    $category = $db->fetchsql("SELECT * FROM category WHERE level=0 AND home=1");
    $sqlRated = "SELECT product.* FROM product LEFT JOIN category ON category.id = product.category_id WHERE category.level = 0 ORDER BY rated DESC LIMIT 5";
    $productRated = $db->fetchsql($sqlRated);
    $sqlNew = "SELECT product.* FROM product LEFT JOIN category ON category.id = product.category_id WHERE category.level = 0 ORDER BY id DESC LIMIT 5";
    $productNew = $db->fetchsql($sqlNew);
    $sqlSale = "SELECT product.* FROM product LEFT JOIN category ON category.id = product.category_id WHERE category.level = 0 ORDER BY sale DESC LIMIT 5";
    $productSale = $db->fetchsql($sqlSale);
    $sqlCheap = "SELECT product.* FROM product LEFT JOIN category ON category.id = product.category_id WHERE category.level = 0 ORDER BY price LIMIT 5";
    $productCheap = $db->fetchsql($sqlCheap);
    $sqlAcc = "SELECT product.* FROM product LEFT JOIN category ON category.id = product.category_id WHERE category.level = 1 ORDER BY price LIMIT 5";
    $productAcc = $db->fetchsql($sqlAcc);
 ?>

<?php require_once __DIR__. '/layouts/header.php'; ?>

                    <div class="col-md-12 bor">
                        <!--Banner -->
                        

                        <!--Danh mục -->

                        <div class="companyMenu group flexContain">
                            <?php foreach ($category as $item): ?>
                                <button><a href="danh-muc.php?id=<?php echo $item['id'] ?>"><img src="public/uploads/company/<?php echo $item['images'] ?>"></a></button>
                            <?php endforeach ?>
                        </div>

                        <!--end Danh mục -->

                        <section class="box-main1 clearfix">
                            <a href="dienthoai.php?the=hot" style="float: right; line-height: 50px">>>Xem tất cả</a>
                            <h3 class="title-main tt" style=""><a href="javascript:void(0)"> Nổi bật </a> </h3>
                            <div class="showitem">
                              <?php foreach ($productRated as $item): ?>
                                 <div class="col-md-2dot4 item-product bor">
                                    <a href="san_pham.php?id=<?php echo $item['id'] ?>">
                                        <img src="<?php echo uploads() ?>product/<?php echo $item['thundar'] ?>" class="" width="100%" height="250">
                                        <label class="hot">
                                          Hot!!!!
                                        </label>
                                    </a>
                                    <div class="info-item">
                                        <a href="san_pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                        <p>
                                          <?php if ($item['sale'] > 0): ?>
                                            <strike class="sale"><?php echo formatPrice($item['price']) ?> đ</strike>
                                          <?php endif ?>
                                          
                                          <b class="price"><?php echo formatPrice(formatSale($item['price'],$item['sale'])) ?> đ</b>
                                        </p> 

                                        <div class="ratingresult">
                                            <i class="fa fa-star<?php if ($item['rated']<1): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<2): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<3): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<4): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<5): ?>-o<?php endif ?>"></i>
                                            <span> <?php echo $item['comment'] ?> đánh giá </span>
                                        </div>

                                    </div>
                                    <div class="hidenitem">
                                        <p><a href="san_pham.php?id=<?php echo $item['id'] ?>"><i class="fa fa-search"></i></a></p>
                                        
                                        <p><a href="cart.php?id=<?php echo $item['id'] ?>"><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div> 
                              <?php endforeach ?>
                            </div>
                        </section>

                        <section class="box-main1 clearfix">
                            <a href="dienthoai.php?the=new" style="float: right; line-height: 50px">>>Xem tất cả</a>
                            <h3 class="title-main tt" style="" id="order"><a href="javascript:void(0)"> Sản phẩm mới </a> </h3>
                            
                            <div class="showitem">
                              <?php foreach ($productNew as $item): ?>
                                 <div class="col-md-2dot4 item-product bor">
                                    <a href="san_pham.php?id=<?php echo $item['id'] ?>">
                                        <img src="<?php echo uploads() ?>product/<?php echo $item['thundar'] ?>" class="" width="100%" height="250">
                                        <label class="new">
                                          Mới ra mắt
                                        </label>
                                    </a>
                                    <div class="info-item">
                                        <a href="san_pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                        <p>
                                          <?php if ($item['sale'] > 0): ?>
                                            <strike class="sale"><?php echo formatPrice($item['price']) ?> đ</strike>
                                          <?php endif ?>
                                          
                                          <b class="price"><?php echo formatPrice(formatSale($item['price'],$item['sale'])) ?> đ</b>
                                        </p>
                                        <div class="ratingresult">
                                            <i class="fa fa-star<?php if ($item['rated']<1): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<2): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<3): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<4): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<5): ?>-o<?php endif ?>"></i>
                                            <span> <?php echo $item['comment'] ?> đánh giá </span>
                                        </div>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href="san_pham.php?id=<?php echo $item['id'] ?>"><i class="fa fa-search"></i></a></p>
                                        
                                        <p><a href="cart.php?id=<?php echo $item['id'] ?>"><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div> 
                              <?php endforeach ?>
                            </div>
                        </section>

                        <section class="box-main1 clearfix">
                            <a href="dienthoai.php?the=sale" style="float: right; line-height: 50px">>>Xem tất cả</a>
                            <h3 class="title-main tt" style=""><a href="javascript:void(0)"> Siêu giảm giá </a> </h3>
                            
                            <div class="showitem">
                              <?php foreach ($productSale as $item): ?>
                                 <div class="col-md-2dot4 item-product bor">
                                    <a href="san_pham.php?id=<?php echo $item['id'] ?>">
                                        <img src="<?php echo uploads() ?>product/<?php echo $item['thundar'] ?>" class="" width="100%" height="250">
                                        <label class="giamgia">
                                          Giảm giá <?php echo$item['sale'] ?>%
                                        </label>
                                    </a>
                                    <div class="info-item">
                                        <a href="san_pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                        <p>
                                          <?php if ($item['sale'] > 0): ?>
                                            <strike class="sale"><?php echo formatPrice($item['price']) ?> đ</strike>
                                          <?php endif ?>
                                          
                                          <b class="price"><?php echo formatPrice(formatSale($item['price'],$item['sale'])) ?> đ</b>
                                        </p>
                                        <div class="ratingresult">
                                            <i class="fa fa-star<?php if ($item['rated']<1): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<2): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<3): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<4): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<5): ?>-o<?php endif ?>"></i>
                                            <span> <?php echo $item['comment'] ?> đánh giá </span>
                                        </div>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href="san_pham.php?id=<?php echo $item['id'] ?>"><i class="fa fa-search"></i></a></p>
                                        
                                        <p><a href="cart.php?id=<?php echo $item['id'] ?>"><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div> 
                              <?php endforeach ?>
                            </div>
                        </section>

                        <section class="box-main1 clearfix">
                            <a href="dienthoai.php?the=cheap" style="float: right; line-height: 50px">>>Xem tất cả</a>
                            <h3 class="title-main tt" style=""><a href="javascript:void(0)">Sản phẩm bán chạy</a> </h3>
                            
                            <div class="showitem">
                              <?php foreach ($productCheap as $item): ?>
                                 <div class="col-md-2dot4 item-product bor">
                                    <a href="san_pham.php?id=<?php echo $item['id'] ?>">
                                        <img src="<?php echo uploads() ?>product/<?php echo $item['thundar'] ?>" class="" width="100%" height="250">
                                        <label class="giare">
                                          Siêu giảm giá
                                        </label>
                                    </a>
                                    <div class="info-item">
                                        <a href="san_pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                        <p>
                                          <?php if ($item['sale'] > 0): ?>
                                            <strike class="sale"><?php echo formatPrice($item['price']) ?> đ</strike>
                                          <?php endif ?>
                                          
                                          <b class="price"><?php echo formatPrice(formatSale($item['price'],$item['sale'])) ?> đ</b>
                                        </p>
                                        <div class="ratingresult">
                                            <i class="fa fa-star<?php if ($item['rated']<1): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<2): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<3): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<4): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<5): ?>-o<?php endif ?>"></i>
                                            <span> <?php echo $item['comment'] ?> đánh giá </span>
                                        </div>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href="san_pham.php?id=<?php echo $item['id'] ?>"><i class="fa fa-search"></i></a></p>
                                        
                                        <p><a href="cart.php?id=<?php echo $item['id'] ?>"><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div> 
                              <?php endforeach ?>
                            </div>
                        </section>

                        <section class="box-main1 clearfix">
                            <a href="phukien.php" style="float: right; line-height: 50px">>>Xem tất cả</a>
                            <h3 class="title-main tt" style=""><a href="javascript:void(0)">Thức uống</a> </h3>
                            
                            <div class="showitem">
                              <?php foreach ($productAcc as $item): ?>
                                 <div class="col-md-2dot4 item-product bor">
                                    <a href="san_pham.php?id=<?php echo $item['id'] ?>">
                                        <img src="<?php echo uploads() ?>product/<?php echo $item['thundar'] ?>" class="" width="100%" height="250">
                                        <label class="phukien">
                                          Phụ kiện
                                        </label>
                                    </a>
                                    <div class="info-item" style="height: 120px">
                                        <a href="san_pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                        <p>
                                          <?php if ($item['sale'] > 0): ?>
                                            <strike class="sale"><?php echo formatPrice($item['price']) ?> đ</strike>
                                          <?php endif ?>
                                          
                                          <b class="price"><?php echo formatPrice(formatSale($item['price'],$item['sale'])) ?> đ</b>
                                        </p>
                                        <div class="ratingresult">
                                            <i class="fa fa-star<?php if ($item['rated']<1): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<2): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<3): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<4): ?>-o<?php endif ?>"></i>
                                            <i class="fa fa-star<?php if ($item['rated']<5): ?>-o<?php endif ?>"></i>
                                            <span> <?php echo $item['comment'] ?> đánh giá </span>
                                        </div>
                                    </div>
                                    <div class="hidenitem">
                                        <p><a href="san_pham.php?id=<?php echo $item['id'] ?>"><i class="fa fa-search"></i></a></p>
                                        
                                        <p><a href="cart.php?id=<?php echo $item['id'] ?>"><i class="fa fa-shopping-basket"></i></a></p>
                                    </div>
                                </div> 
                              <?php endforeach ?>
                            </div>
                        </section>
                    </div>

               
<?php require_once __DIR__. '/layouts/footer.php'; ?>