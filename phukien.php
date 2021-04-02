<?php require_once __DIR__. '/autoload/autoload.php';

	$the = getInput('the');

	$category = $db->fetchsql("SELECT * FROM category WHERE level=1 AND home=1");

  	if($the == "")
  	{
  	$sqlRated = "SELECT product.* FROM product LEFT JOIN category ON category.id = product.category_id WHERE category.level = 1 ORDER BY rated DESC";
  	}
  	else
  	{
  		$sqlRated = "SELECT product.* FROM product LEFT JOIN category ON category.id = product.category_id WHERE category.level = 1 AND product.slug LIKE'%".$the."%' ";
  	}

    $total = count($db->fetchsql($sqlRated));

    if(isset($_GET['page']))
    {
        $p = $_GET['page'];
    }
    else
    {
        $p = 1;
    }

    $productRated = $db->fetchJones("product",$sqlRated,$total,$p,40,true);

    if(isset($productRated))
    {
        $sotrang = $productRated['page'];
        unset($productRated['page']);
    }

 ?>
<?php require_once __DIR__. '/layouts/header1.php'; ?>
	<h1 style="text-align: center;
    background-color: #4764f6;
    color: white;
    border-radius: 50px;
    transform: translateY(50%); ">Thức uống mỗi ngày</h1>

 <div class="col-md-12 bor" style="border-top: none; border-color: #889cff">

    <div style="margin:50px 0 30px 0;" class="companyMenu group flexContain" >
        <?php foreach ($category as $item): ?>
            <button id="bt2"><a href="danh-muc.php?id=<?php echo $item['id'] ?>"><img src="public/uploads/company/<?php echo $item['images'] ?>"><br><?php echo $item['name'] ?></a></button>
        <?php endforeach ?>
    </div>

                        <!--end Danh mục -->

    <section class="box-main1 clearfix">

        <hr>
        
        <div class="showitem">
          <?php foreach ($productRated as $item): ?>
             <div class="col-md-2dot4 item-product bor">
                <a href="san_pham.php?id=<?php echo $item['id'] ?>">
                    <img src="<?php echo uploads() ?>product/<?php echo $item['thundar'] ?>" class="" width="100%" height="250">
                </a>
                <div class="info-item" style="height: 110px">
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

    <li aria-label="Page navigation" style="text-align: center">
        <ul class="pagination pullright">

          <?php for($i = 1;$i <= $sotrang;$i++) : ?>

          <?php 
          if(isset($_GET['page']))
          {
              $p = $_GET['page'];
          }
          else
          {
              $p = 1;
          }

           ?>
          
          <li class="page-item <?php echo ($i == $p) ? 'active' : '' ?>">
              <a class ="page-link" href="?the=<?php echo $the ?>&&page=<?php echo $i ; ?>"><?php echo $i; ?></a>
          </li>

          <?php endfor; ?>

        </ul>
    </li>

</div>


<?php require_once __DIR__. '/layouts/footer.php'; ?>