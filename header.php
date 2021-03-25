<div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" width="150px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="products.php">SẢN PHẨM</a></li>
                        <div class="dropdown">
                            <li><a href="#" style="font-size: 20px; color: red;">SALE</a>
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
            <div class="row">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                      <div class="numbertext">1 / 2</div>
                      <img src="images/slideshow1.jpg" style="width:100%">
                      <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                      <div class="numbertext">2 / 2</div>
                      <img src="images/slideshow2.jpg" style="width:100%">
                      <div class="text">Caption Two</div>
                    </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <br>
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="trend">
                        <h4>Xu hướng tìm kiếm:</h4>
                        <a href="">coverse</a>
                        <a href="">vans old school</a>
                        <a href="">coverse trắng cổ thấp</a>
                </div>
            </div>
            <div class="row">
                <div class="search">
                    <form>
                        <input type="text" name="search" placeholder="Tìm kiếm ...">
                    </form>
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
</script>