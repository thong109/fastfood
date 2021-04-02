<?php
 	require_once __DIR__. '/autoload/autoload.php';

 	$id = intval(getInput('id'));
 	$category = $db->fetchID("category",$id);

 	$sql = "SELECT * FROM product WHERE category_id = $id ORDER BY id DESC";

	$total = count($db->fetchsql($sql));

 	if(isset($_GET['page']))
 	{
 		$p = $_GET['page'];
 	}
 	else
 	{
 		$p = 1;
 	}

 	$product = $db->fetchJones("product",$sql,$total,$p,12,true);

 	if(isset($product))
 	{
 		$sotrang = $product['page'];
 		unset($product['page']);
 	}
 ?>
<?php require_once __DIR__. '/layouts/header.php'; ?>

 <div class="col-md-12 bor">
 	 <section class="box-main1 clearfix">
        <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> <?php if (!isset($_SESSION['error'])): ?>
          <?php echo $category['name'] ?> </a> </h3>
        <?php endif ?>
        <div class="showitem">

          <?php foreach ($product as $item): ?>
             <div class="col-md-3 item-product bor">
                <a href="san_pham.php?id=<?php echo $item['id'] ?>">
                    <img src="<?php echo uploads() ?>product/<?php echo $item['thundar'] ?>" class="" width="100%" height="270">
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

    <nav aria-label="Page navigation" style="text-align: center">
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
              <a class ="page-link" href="?id=<?php echo $id ?>&&page=<?php echo $i ; ?>"><?php echo $i; ?></a>
          </li>

          <?php endfor; ?>

        </ul>
    </nav>

</div>

<?php require_once __DIR__. '/layouts/footer.php'; ?>