<?php

    include("headerNavbar.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skateshop || Home</title>
</head>
<body>
    <div class="navbar-text d-flex justify-content-around">
        <p class="bi bi-telephone-fill"> 2106954093</p>
        <p class="bi bi-truck"> ΔΩΡΕΑΝ ΜΕΤΑΦΟΡΙΚΑ ΜΕ ΑΓΟΡΕΣ ΠΑΝΩ ΑΠΟ 80€</p>
        <p>Greek</p>
    </div>
    <div class="d-flex justify-content-center m-4">
        <div class="supercontainer d-flex flex-column justify-content-center align-items-center w-50">
            <!--img slider starts-->
            <div class="slider">
                <div class="slides">
                    <!--radiobtn start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <!--radiobtn end-->
                    <!--slides start-->
                    <div class="slide first">
                        <img src="images/NIKE-SB-Shane-Wear-Test-Review-Unboxing-04.jpg" alt="girl">
                    </div>
                    <div class="slide">
                        <img src="images/baker-skateboards-og-banner.jpg" alt="cp">
                    </div>
                    <div class="slide">
                        <img src="images/16152_Comp_J_2_Image.jpg" alt="goddes">
                    </div>
                    <!--slides end-->
                    <!--autoslides start-->
                    <div class="nav-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                    <!--autoslides end-->   
                </div>
                <!--manualslides start-->
                <div class="nav-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
                <!--manualslides end-->
            </div>
            <div class="containermain pt-2">
                <div class="row">
                    <div class="col">
                        <a href="#"><img src="images/fcb614c5592cf73b40b885d3e1444812.jpg"></a>
                        <div class="hovertext"><h1><span>SHOP</span> CARHART HOODIES</h1></div>
                    </div>
                    <div class="col">
                        <a href="#"><img src="images/3fc4dbf30f6635602f358d54bb6f987e.jpg"></a>
                        <div class="hovertext"><h1><span>SHOP</span> SKATEBOARD DECKS</h1></div>
                    </div>
                    <div class="col">
                        <a href="#"><img src="images/f31da3ac1ca35ba170ea63ac697e8ea3.jpg"></a>
                        <div class="hovertext"><h1><span>SHOP</span> INDEPENTENT TRUCKS</h1></div>
                    </div>
                    <div class="col">
                        <a href="#"><img src="images/46a162f98cc7b631a7655cea1a8feffb.jpg"></a>
                        <div class="hovertext"><h1><span>SHOP</span> SPITFIRE WHEELS</h1></div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/sled.js"></script>
</body>
</html>