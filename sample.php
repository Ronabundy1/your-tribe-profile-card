<!DOCTYPE html>
<html lang="en">
<head>
    <title>NerdyGadgets</title>

    <!-- Javascript -->
    <script src="Public/JS/fontawesome.js"></script>
    <script src="Public/JS/jquery.min.js"></script>
    <script src="Public/JS/bootstrap.min.js"></script>
    <script src="Public/JS/popper.min.js"></script>
    <script src="Public/JS/resizer.js"></script>

    <!-- Style sheets-->
    <link rel="stylesheet" href="Public/CSS/style.css" type="text/css">
    <link rel="stylesheet" href="Public/CSS/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Public/CSS/typekit.css">
</head>
<body>
<div class="Background">
    <div class="row" id="Header">
        <div class="col-2"><a href="index.php" id="LogoA">
                <div id="LogoImage"></div>
            </a></div>
        <div class="col-8" id="CategoriesBar">
            <ul id="ul-class">
                <?php
                $HeaderStockGroups = getHeaderStockGroups($databaseConnection);

                foreach ($HeaderStockGroups as $HeaderStockGroup) {
                    ?>
                    <li>
                        <a href="browse.php?category_id=<?php print $HeaderStockGroup['StockGroupID']; ?>"
                           class="HrefDecoration"><?php print $HeaderStockGroup['StockGroupName']; ?></a>

                    </li>
                    <?php
                }
                ?>
                <li>
                    <a href="categories.php" class="HrefDecoration">Alle categorieën</a>
                </li>
            </ul>
        </div>
<!-- code voor US3: zoeken -->

        <ul id="ul-class-navigation">
            <li>
                <!--<a href="browse.php" class="HrefDecoration"><i class="fas fa-search search"></i> Zoeken</a>-->
                <?php
                If(isset($_SESSION['voornaam'])){
                    echo "<a href ='clientAdmin.php'>Admin </a>";
                    echo "<a href ='loguit.php'>Loguit</a>";

                }else{
                ?>
                <a href="loginTest.php">login</a>
                <a href="register.php">Register</a>

                <?php }?>
                <a class="HrefDecoration" href="cart.php"><img src="Public/Img/CartImage.png" id="cartImage"></a>
                <div id="voorthuis">Voor 23:59 Besteld is Morgen in Huis</div>
            </li>
        </ul>
        <div class="IndexStyle">
            <div class="TextMain" style="margin-top:30px">
                <h6>Gratis verzending vanaf 50 euro</h6>
            </div>
        </div>
<!-- einde code voor US3 zoeken -->
    </div>

    <div class="row" id="Content">
        <div class="col-12">
            <div id="SubContent">



