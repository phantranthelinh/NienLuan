<?php 
require_once 'Connect/connection.php';
$query = "SELECT * from categories";
$rs = $conn->query($query);
$categories=array();
while($row =$rs->fetch_assoc()){
    $categories[]=$row;
}
 ?>
<div class="header">
    <header>
        <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" width="150px"></a>
                    </div>
                    <div class="search">
                            <form>
                                <input type="text" name="search" placeholder="Tìm kiếm ...">
                                <span><i class="fas fa-search"></i></span>
                            </form>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="index.php">TRANG CHỦ</a></li>
                            <li><a href="products.php">SẢN PHẨM</a></li>
                            <div class="dropdown">
                                <li><a href="sale.php" class="sale">SALE</a>
                                    <div class="dropdown-content">
                                        <ul>
                                            <li><a href="#">10%</a></li>
                                            <li><a href="#">15%</a></li>
                                            <li><a href="#">30%</a></li>
                                            <li><a href="#">50%</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </div>
                            <div class="dropdown">
                                <li><a href="#">NHÃN HIỆU</a>
                                    <div class="dropdown-content">
                                        <ul>
                                            <?php foreach ($categories as $cate) {
                                            ?>
                                            <li><a href="brand_detail.php?id=<?=$cate['id']?>&name=<?=$cate['c_name']?>"><?=$cate['c_name']?></a></li>
                                            <?php } ?>
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
    </header>
</div>

<br><br><br>  
            
        
</div>
<script>

          var MenuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    window.addEventListener("scroll",function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky",window.scrollY >0);
    })
</script>

