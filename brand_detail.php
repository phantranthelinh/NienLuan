<?php 
require_once 'Connect/connection.php';
$id = $_GET['id'];
$query = "SELECT * FROM products
 WHERE products.pro_category_id ='".$id."'";
$products=array();
$rs = $conn->query($query);
while($row=$rs->fetch_assoc()){
    $products[]=$row;
}
$name = $_GET['name'];
$query_cate = "SELECT c_name FROM categories 
                where categories.id = '".$id."'";

$cate = $conn->query($query_cate)->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm Theo Nhãn Hiệu - GreenStore</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'header_small.php'; ?>
    <div class="small-container">

        <div class="row row-2">
            <h2><?=$name?></h2>
            <select>
                <option>Default Shop</option>
                <option>Short by price</option>
                <option>Short by popularity</option>
                <option>Short by Sale</option>
            </select>
        </div>

        <div class="row">
            <?php foreach ($products as $pro) { ?>
                <div class="col-4">
                    <a href="product_detail.php?id=<?=$pro['id']?>"><img src="<?=$pro['pro_view']?>"></a>
                    <h4><?=$pro['pro_name']?></h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p style="color: red;text-align: right;"><?=$pro['pro_price']?></p>
                </div>
            <?php } ?>
        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>
    <!-- ------------footer----------- -->
<div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-2">
                    <a href="index.php"><img src="images/logo-footer.png"></a>
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sneaker Accessible to the Many
</p>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="Copyright">Copyright 2021 - By TheLinh</p>
        </div>
    </div>

</body>
</html>
</body>

</html>