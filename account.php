<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printd T-Shirt - Green Store</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo_thumbnail.png" width="150px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="products.php">SẢN PHẨM</a></li>
                        <li><a href="sale.php" class="sale">SALE</a></li>
                        <div class="dropdown">
                            <li><a href="#">NHÃN HIỆU</a>
                                <div class="dropdown-content">
                                    <ul>
                                        <li><a href="#">Converse</a></li>
                                        <li><a href="#">Vans</a></li>
                                        <li><a href="#">Addidas</a></li>
                                        <li><a href="#">Nike</a></li>
                                    </ul>
                                </div>
                            </li>
                        </div>
                            <li><a href="account.php">TÀI KHOẢN</a></li>
                            </li>
                     
                    </ul>

                </nav>
                <div class="cart">
                    <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
                </div>
                <img src="images/menu.png" class="menu-icon" 
                onclick="menutoggle()">
            </div>

        </div>  
        </div>
    </div>
    <!-- ------------Account-page------------------- -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="lv">
                        <img src="images/luotvan.gif">
                    </div>
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" action="login.php" method="POST">
                            <input type="text" placeholder="Username" name="user">
                            <input type="password" placeholder="Password" name="pass">
                            <button type="submit" class="btn">Login</button>
                            <a href="forgot_pwd.php">Forgot password</a>
                        </form>

                        <form id="RegForm" action="reg.php" method="POST">
                            <input type="text" placeholder="Username" name="user">
                            <input type="email" placeholder="Email" name="email">
                            <input type="password" placeholder="Password" name="pass">
                            <button type="submit" class="btn">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------footer----------- -->
    <?php include 'footer.php'; ?>
</body>

        <!-- ------------------- js for Account form-------------- -->

        <script>
            var LoginForm = document.getElementById("LoginForm");
            var RegForm = document.getElementById("RegForm");
            var Indicator = document.getElementById("Indicator");

            function register() {
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(80px)";

            }
            function login() {
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(-42px)";
            }
        </script>

</body>

</html>