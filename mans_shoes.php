<?php
session_start();
?>
<script>
    function includeHTML() {
        var z, i, elmnt, file, xhttp;
        z = document.getElementsByTagName("*");
        for (i = 0; i < z.length; i++) {
            elmnt = z[i];
            file = elmnt.getAttribute("w3-include-html");
            if (file) {
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4) {
                        if (this.status == 200) {
                            elmnt.innerHTML = this.responseText;
                        }
                        if (this.status == 404) {
                            elmnt.innerHTML = "Page not found.";
                        }
                        elmnt.removeAttribute("w3-include-html");
                        includeHTML();
                    }
                }
                xhttp.open("GET", file, true);
                xhttp.send();
                return;
            }
        }
    }
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Man's Shoes </title>
    <link rel="stylesheet" type="text/css" href="shirts.css">
    <style>
        .Row {
            background-color: #ffb934;
            padding: 20px 50px 20px 50px;
            display: flex;
            width: 100%;
            margin-left: 0px;
        }
    </style>
</head>

<body>

    <body>
        <?php
        if (empty($_SESSION['logged_in'])) {
            echo "<div w3-include-html='nav2.html'></div>";
        } else {
            echo "<div w3-include-html='nav.html'></div>";
        }
        ?>
        </div>
        </div>
        </div>
        <div class="container1">
            <div class="container2">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best Shoes for you. No need to hunt around, we
                    have all in one place.</p>
            </div>
        </div>
        <div class="Row">
            <div class=" one">
                <img src="m_shoes12.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>Men Premium Shoes</h3>
                    <p>Price:Rs.30000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 1">
                    <input type="hidden" name="Price" value="30000">
                </form>
            </div>
            <div class=" one">
                <img src="m_shoes8.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>Men Premium Shoes</h3>
                    <p>Price:Rs.40000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 2">
                    <input type="hidden" name="Price" value="40000">
                </form>
            </div>
            <div class=" one">
                <img src="m_shoes1.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>Men Premium Shoes</h3>
                    <p>Price:Rs.40000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 3">
                    <input type="hidden" name="Price" value="40000">
                </form>
            </div>
            <div class=" one">
                <img src="m_shoes2.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>Men Premium Shoes</h3>
                    <p>Price:Rs.80000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 4">
                    <input type="hidden" name="Price" value="80000">
                </form>
            </div>

        </div>
        <div class="Row">
            <div class=" one">
                <img src="m_shoes3.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>Men Premium Shoes</h3>
                    <p>Price:Rs.30000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 5">
                    <input type="hidden" name="Price" value="30000">
                </form>
            </div>
            <div class=" one">
                <img src="m_shoes4.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>MMen Premium Shoes</h3>
                    <p>Price:Rs.40000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 6">
                    <input type="hidden" name="Price" value="40000">
                </form>
            </div>
            <div class=" one">
                <img src="m_shoes5.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>Men Premium Shoes</h3>
                    <p>Price:Rs.40000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 7">
                    <input type="hidden" name="Price" value="40000">
                </form>
            </div>
            <div class=" one">
                <img src="m_shoes6.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>Men Premium Shoes</h3>
                    <p>Price:Rs.80000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 8">
                    <input type="hidden" name="Price" value="80000">
                </form>
            </div>

        </div>

        </div>
        <div class="Row">
            <div class=" one">
                <img src="m_shoes7.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>Men Premium Shoes</h3>
                    <p>Price:Rs.30000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 9">
                    <input type="hidden" name="Price" value="30000">
                </form>
            </div>
            <div class=" one">
                <img src="m_shoes12.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>Men Premium Shoes</h3>
                    <p>Price:Rs.40000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 10">
                    <input type="hidden" name="Price" value="40000">
                </form>
            </div>
            <div class=" one">
                <img src="m_shoes9.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>Men Premium Shoes</h3>
                    <p>Price:Rs.40000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 11">
                    <input type="hidden" name="Price" value="40000">
                </form>
            </div>
            <div class=" one">
                <img src="m_shoes10.jpeg" alt="Responsive image">
                <div class="two">
                    <h3>Men Premium Shoes</h3>
                    <p>Price:Rs.80000.00</p>
                </div>
                <form action="manage_Cart.php" method="post">
                    <button type="submit" name="Add" class="button">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Man Shoes 12">
                    <input type="hidden" name="Price" value="80000">
                </form>
            </div>

        </div>
        <div class="Next">
            <div class="btn-1">
                <button class="next-btn">Next Page</button>
            </div>
        </div>
        <div class="directory">
            <div class="in">
                <p><b>Top Stories:Brand Directory</b> <br> <br>
                    <b>MOST SEARCHED FOR ON LIFESTYLE STORE:</b> iPhone 13iPhone 13 ProiPhone 13 Pro MaxiPhone 13 MiniTV &
                    Appliances Big Billion Days
                    Salelifestyle store Pay Later EMIBig Billion Dayslifestyle store Motor Vehicle Insurancelifestyle store
                    QuickEd A Mamma ClothingBookslifestyle store
                    Electronics: TV & Home Appliances SaleGrand Kitchen & Home Appliances SaleAuto Accessories StoreStreak
                    SunglassesGold
                    CoinsBGM Big Billion Day SaleHome BBD Dhamaka Salelifestyle store Pluslifestyle store Super
                    Coinlifestyle store COVID-19 Insurancelifestyle store
                    Help Centrelifestyle store Track Orderslifestyle store Manage Orderslifestyle store Return
                    Orderslifestyle store Gift Cards StoreSareeslifestyle store Axis
                    Bank Credit Cardlifestyle store Pay LaterJewelleryWatchesGold CoinMangalsutraSunglassesMi
                    SunglassesBackpacksRay Ban Sunglasses
                </p>
                <br><br>
                <p><b>CLOTHING:</b> Men ShirtsKurta PajamaKurtasMen T-ShirtsJeansCrop TopsRaincoatMen SuitsMen TrousersMens
                    BlazersSareeDressesBaby
                    girl dressesFloral DressesSkirtsKids DressesDesigner Salwar SuitsBraDesigner KurtisTrack PantMen
                    KurtasGym WearParty
                    DressesPalazzo SuitsBoys ClothingGlovesNightyMaxi DressesAnarkaliIndo Western
                    DressGownsCulottesSherwaniGirls
                    ClothesSalwar SuitsTopsLehengaDress MaterialsIndo western for menKurtisDesigner SareesSummer
                    DressesLeggingsDesigner
                    BlousesBlouse DesignsBanarasi SareesSilk SareesTissue SareesCotton SareesShortsBlouseLong
                    SkirtsPalazzoWinter
                    JacketsJoggersMini DressesNight SuitsBanarsi SuitInnerwearSports WearCapChanderi SareesLinen
                    SareesPaithani SareesOff
                    the shoulder topsPantiesGirls ShortsShrugsSalwarGirls DressesBikiniPajamasKids WearManyavar KurtasWomens
                    TrousersJacketsWestern WearLevis JacketsSleepwearShawlsCardigansPulloverStolesDenim
                    JacketsFrocksClothingKids
                    ClothingWinter WearScarvesSports JacketsGeorgette SareesEthnic WearBriefs & TrunksSweatshirts</p>
                <br><br><br>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="inside">
                    <div class="f">
                        <div class="l1">
                            <p style="color: #65717e;"> ABOUT</p>
                            <ul>
                                <li><a href="about1.html">About us</a></li>
                                <li><a href="contact.php"> Contact us</a></li>
                                <li><a href="wholesale.html"> LifeStyle Wholesale</a></li>
                                <li><a href="ourStory.html"> Our Story</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="f">
                        <div class="l1">
                            <p style="color: #65717e">POLICIES</p>
                            <ul>
                                <li><a href="ourStory.html">Return Policy</a></li>
                                <li><a href="ourStory.html">Security</a></li>
                                <li><a href="ourStory.html">Privacy</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="f">
                        <div class="l1">
                            <p style="color: #65717e"> MAIL US AT</p>
                            <a style="color:#95a4b3" href="smrati4567@gmail.com">lifestyle@gmail.com</a>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <center> <br><br>
                <p>Content is “Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000”.</p>
            </center>
        </footer>
    </body>

</html>

<script>
    includeHTML();
</script>