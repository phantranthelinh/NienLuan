<?php 
require_once 'Connect/connection.php';
$query = "SELECT * From products ";
$rs = $conn->query($query);
$products=array();
while($row=$rs->fetch_assoc()){
    $products[]=$row;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm - GreenStore</title>
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
            <h2>All Products</h2>
            <select>
                <option>Default Shop</option>
                <option>Short by price</option>
                <option>Short by popularity</option>
                <option>Male</option>
                <option>Female</option>
                <option>Short by Sale</option>
            </select>
        </div>

        <div class="row">
            <?php foreach ($products as $pro ) { ?>
            <div class="col-4">
                <a href="product_detail.php?id=<?=$pro['id']?>"><img src="<?=$pro['pro_view']?>"></a>
                <h4><?=$pro['pro_name']?></h4>
 <!--                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div> -->
                <p style="text-align: right; color:red;"><?=$pro['pro_price']?></p>
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
    <?php include 'footer.php' ?>

</body>
</html>
</body>

</html>