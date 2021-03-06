<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenStore</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
    <?php include 'header_small.php'; ?>

    <!-- -----------------cart item details------------------- -->
    <div class="small-container cart-page">
        <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <?php if(isset($_SESSION['cart'])) : ?>
                    <?php foreach ($_SESSION['cart'] as $cart ) : ?>
                        <tr>
                            <td>
                                <div class="cart-info">
                                    <img src="<?=$cart['view']?>">
                                    <div>
                                        <p><?=$cart['name']?></p>
                                        <small><?=number_format($cart['price'])." VND";?></small>
                                        <br>
                                        <a href="remove.php?id=<?=$cart['id']?>">Remove</a>
                                    </div>
                                </div>
                            </td>
                            <td><input type="number" value="<?=$cart['sl']?>"></td>
                            <td><?=$cart['price']?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else :?>
                <p>Kh??ng t???n t???i gi??? h??ng</p>
                <?php endif; ?>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>175.000$</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>25.00$</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>200.000$</td>
                </tr>
            </table>

        </div>
        <div class="ok">
            <a href="#"><button class="btn">Thanh To??n</button></a>
        </div>
    </div>

    <!-- ------------footer----------- -->
    <?php include 'footer.php'; ?>
   
</body>
</html>
</body>

</html>