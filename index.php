<?php 
require_once 'Connect/connection.php';
$q_new = "SELECT * FROM products 
order BY products.created_at DESC limit 4";
$pro_new=array();
$rs_new = $conn->query($q_new);
while($row=$rs_new->fetch_assoc()){
    $pro_new[]=$row;
}
$q_hot = "SELECT * FROM products 
where products.pro_hot =1
LIMIT 8";
$pro_hot=array();
$rs_hot= $conn->query($q_hot);
while ($row=$rs_hot->fetch_assoc()) {
    $pro_hot[]=$row;
}
$q_over = "SELECT * FROM products 
where products.pro_number <=2
LIMIT 4";
$pro_over = array();
$rs_over = $conn->query($q_over);
while($row=$rs_over->fetch_assoc()){
    $pro_over[]=$row;
}
$q_sale = "SELECT * FROM products 
where products.pro_sale != 0
LIMIT 4";
$pro_sale = array();
$rs_sale = $conn->query($q_sale);
while($row=$rs_sale->fetch_assoc()){
    $pro_sale[]=$row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Store - Thế giới giày của bạn</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body  >
    <!-- <div class="load">
        <img src="loader.gif">
    </div> -->
  
    <?php include 'header.php'; ?>
    <!-- ------------- featured categorries ---------------- -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg">
                </div>

            </div>
        </div>

    </div>
    <!-- ------------- featured products ---------------- -->
    <div class="small-container">
        <h2 class="title">SẢN PHẨM KHUYỄN MÃI</h2>
        <div class="row">
            <?php foreach ($pro_sale as $sale) {
            ?>
            <div class="col-4">
                <a href="product_detail.php?id=<?=$sale['id']?>"><img src="<?=$sale['pro_view']?>"></a>
                <a href="product_detail.php?id=<?=$sale['id']?>"><h4><?=$sale['pro_name']?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p style="color: red; text-align: right;"><?=$sale['pro_price']?></p>
            </div>
            <?php } ?>
        </div>
        <h2 class="title">SẢN PHẨM MỚI</h2>
        <div class="row">
            <?php foreach ($pro_new as $new) {
            ?>
                <div class="col-4">
                    <a href="product_detail.php?id=<?=$new['id']?>"><img src="<?=$new['pro_view']?>"></a>
                    <a href="product_detail.php?id=<?=$new['id']?>"><h4><?=$new['pro_name']?></h4></a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p style="text-align: right; color: red;"><?=$new['pro_price']?></p>
                </div>
            <?php } ?>
        </div>
        <h2 class="title">SẢN PHẨM HOT</h2>
        <div class="row">
            <?php foreach ($pro_hot as $hot) {
            ?>
            <div class="col-4">
                <a href="product_detail.php?id=<?=$hot['id']?>"><img src="<?=$hot['pro_view']?>"></a>
                <a href="product_detail.php?id=<?=$hot['id']?>"><h4><?=$hot['pro_name']?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p style="color: red; text-align: right;"><?=$hot['pro_price']?></p>
            </div>
            <?php } ?>
        </div>
        <h2 class="title">SẢN PHẨM SẮP HẾT</h2>
        <div class="row">
            <?php foreach ($pro_over as $over) {
             ?>
                <div class="col-4">
                    <a href="product_detail.php?id=<?=$over['id']?>"><img src="<?=$over['pro_view']?>"></a>
                    <a href="product_detail.php?id=<?=$over['id']?>"><h4><?=$over['pro_name']?></h4></a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    <p style="color: red; text-align: right;"><?=$over['pro_price']?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- brands -->
    <?php include 'brand.php'; ?>
    <!-- ------------footer----------- -->
    <?php include 'footer.php'; ?>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/js.js" ></script>
</body>
</html>