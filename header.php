<?php 
require_once 'Connect/connection.php';
$query = "SELECT * from categories";
$rs = $conn->query($query);
$categories=array();
while($row =$rs->fetch_assoc()){
    $categories[]=$row;
}
$query_slide = "SELECT * FROM slides";
$rs_slide = $conn->query($query_slide);
$slides = array();
while($row= $rs_slide->fetch_assoc()){
    $slides[]=$row;
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
                            <form method="get" action="">
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
                                            <li><a href="sale.php">10%</a></li>
                                            <li><a href="sale.php">15%</a></li>
                                            <li><a href="sale.php">30%</a></li>
                                            <li><a href="sale.php">50%</a></li>
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
        <br><br><br><br><br><br>   
            <div class="row">
                <div class="slideshow-container">
                    <?php foreach ($slides as $slide) {
                     ?>
                    <div class="mySlides fade">
                      <div class="numbertext">1 / 2</div>
                      <img src="<?=$slide['image']?>" style="width:1000px">
                      <div class="text">HOT PRODUCT</div>
                    </div>
                    <?php } ?>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <br>
                <div style="text-align:center">
                    <?php foreach ($slides as $slide) {
                     ?>
                  <span class="dot" onclick="currentSlide(<?=$slide['id']?>)"></span> 
                    <?php } ?>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";

  }
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

