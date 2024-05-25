<script>
    function includeHTML() {
        var z, i, elmnt, file, xhttp;
        z = document.getElementsByTagName("*");
        for (i = 0; i < z.length; i++) {
            elmnt = z[i];
            file = elmnt.getAttribute("w3-include-html");
            if (file) {
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4) {
                        if (this.status == 200) { elmnt.innerHTML = this.responseText; }
                        if (this.status == 404) { elmnt.innerHTML = "Page not found."; }
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

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lifestyle Store </title>
    <style>
        .banner {
            /* position: relative; */
            width: 100%;
            background-color: rgb(42, 41, 41);
            height: 130px;
            display: inline-block;
            margin: 51px 0px 0px 0px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .banner ul {
            /* align-items: center; */
            display: inline;
            overflow: auto;
            /* width: 80%; */
        }

        .banner li {
            float: left;
            list-style: none;
            /* margin: 143px -38px; */
            /* margin-right: 184px; */
            display: inline-block;
            /* margin-left: 43px; */
        }

        .B {
            margin-left: 2px;
        }

        .D {
            display: flex;
            margin: 10px;
            width: 80%;
            height: 90%;
        }



        .item {
            display: inline-block;
            margin: 5px 20px 0px 80px;
            text-decoration: none;
        }

        .image {
            height: 60%;
            width: 60%;
        }

        .item a {
            color: #D9D9D9;
            text-decoration: none;
        }

        .item a :hover {
            color: #c5bebe;
        }

        .rows {
            display: flex;
            margin: auto;
            padding: 12px 290px;
            width: 100%;
            /* background-color: transparent; */
            background-color: #c2d4d4;
            /* background-image: linear-gradient(rgb(122, 211, 203), rgb(186, 78, 194)); */
        }

        .out {

            margin: 110px 0px;
        }

        .col1 {
            border: 1px solid rgb(7, 6, 5);
            border-right: none;
            display: block;
            /* margin: auto; */
            width: 55%;
            max-height: 322px;
            max-width: 449px;
            background-color: rgba(95, 158, 160, 0.479);
            box-shadow: -18px 2px 13px 0px #444;
        }


        .col2 {
            /* display: inline-flex; */
            /* margin: auto;
            width: 37%; */
            border: 1px solid rgb(7, 6, 5);
            border-left: none;
            display: block;
            /* margin: auto; */
            width: 55%;
            max-height: 322px;
            max-width: 449px;
            background-color: rgba(95, 158, 160, 0.479);
            box-shadow: 15px 2px 20px 0px #444;


        }

        .col2 img {
            height: 100%;
            width: 65%;
            margin: 0px 78px;
        }

        .col1 h1 {
            size: 20px;
        }

        .container {
            display: block;
            text-decoration: none;
        }

        .inside {
            display: flex;
            margin: 13px 233px;
        }

        .f {
            display: flex;
            margin: 0px 59px;
        }

        .l1 li {
            list-style: none;

        }

        .l1 ul {
            /* list-style: none; */

        }

        .l1 li a {
            color: #95a4b3;
            text-decoration: none;
        }

        .l1 a {
            text-decoration: none;
        }

        body {
            background-color: rgba(213, 235, 235, 0.431);
        }

        .in p {
            padding: 10px;
            color: rgb(75, 78, 71);
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff;
        }

        #banner_image {
            padding-top: 75px;
            padding-bottom: 50px;
            text-align: center;
            color: #f8f8f8;
            background: url(intro-bg_1.jpg) no-repeat center center;
            background-size: cover;
            background-color: #629986;
            text-decoration: none;
        }

        #banner_content {
            /* position: relative;*/
            padding-top: 1%;
            padding-bottom: 1%;
            margin: auto;
            /* margin-top: 12%;
    margin-bottom: 12%;  */
            background-color: rgba(0, 0, 0, 0.7);
            max-width: 660px;
            text-decoration: none;
        }

        .t {
            text-decoration: none;
        }

        #banner_content a {}

        footer {
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0;
            width: 100%;
        }

        .directory {
            background-image: linear-gradient(to right, #8e8e8e4a, #b6b6b6);
        }
    </style>
</head>

<body>
    <?php
    if(empty($_SESSION['logged_in'])){
        echo "<div w3-include-html='nav2.html'></div>";
    }
    else{
        echo "<div w3-include-html='nav.html'></div>";
    }
    ?>
    <div class="banner">

        <ul class="C">
            <center>
                <div class="D">
                    <div class="item"><a href="man's_watches.php">
                            <img class="image" src="MW.png" alt="">
                            <div class="E">
                                Men's watches
                            </div>
                        </a>
                    </div>
                    <div class="item"><a href="purses.php">
                            <img class="image" src="WP.png" alt="">
                            <div class="E">
                                woman's Purse
                            </div>
                        </a>
                    </div>
                    <div class="item"><a href="mans_shoes.php">
                            <img class="image" src="MS.png" alt="">
                            <div class="E">
                                Men's Shoes
                            </div>
                        </a>
                    </div>
                    <div class="item"><a href="woman_watchees.php">
                            <img class="image" src="WW.png" alt="">
                            <div class="E">
                                Women's Watches
                            </div>
                        </a>
                    </div>
                    <div class="item"><a href="shirts.php">
                            <img class="image" src="MSh.png" alt="">
                            <div class="E">
                                Men's Shirt
                            </div>
                        </a>
                    </div>
                    <div class="item"><a href="womans_shoe.php">
                            <img class="image" src="WS.png" alt="">
                            <div class="E">
                                Women's Shoes
                            </div>
                        </a>
                    </div>
                </div>
            </center>

        </ul>
    </div>

    <div class="container">
        <center>
            <div id="banner_image">
                <div id="banner_content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p><br>
                </div>
            </div>
        </center>
    </div>
    <div id="middle">
        <div class="rows">

            <div class="col1">
                <center>
                    <div class="out">

                        <h1>We sell Luxury Purses.</h1>
                        <p>Flat 40% OFF on premium brands</p><br>

                    </div>
                </center>
            </div>
            <div class="col2">

                <a href="purses.php">
                    <img src="purseD.png" alt="">
                </a>

            </div>
        </div>
        <div class="rows">
            <div class="col1">
                <center>
                    <div class="out">

                        <h1>Top Styles for men.</h1>
                        <p>upto 70% off</p>

                    </div>
                </center>
            </div>
            <div class="col2">

                <a href="shirts.php">
                    <img src="shirtDemo.png" alt="">
                </a>

            </div>
        </div>
        <div class="rows">
            <div class="col1">
                <center>
                    <div class="out">

                        <h1>Shop from Top brands From across the globe.</h1>


                    </div>
                </center>
            </div>
            <div class="col2">

                <a href="purses.php">
                    <img src="logoDemo.png" alt="">
                </a>

            </div>
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