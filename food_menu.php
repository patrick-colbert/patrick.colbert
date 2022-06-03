<?php


require_once "1621ICTDb.php";

$menu = getMenu();
//echo "<pre>";
//print_r($menu);
//echo "</pre>";

?>


<!DOCTYPE html>
    <html lang='en'>

        <head>

            <meta charset="utf-8"/>
            <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css" />

            <title>La Confesseur</title>
            <link rel="shortcut icon" href="images/favicon.jpg"/>

        </head>


        <header>

            <nav class="pageNav">
                <li id="navImage"><image id="image1" src="images/favicon.jpg" alt="placeholder"/></li>
                <li id="blueLi"><a href="index.html">Home</a></li>
                <li id="blueLi"><a href="food_menu.php">Menu</a></li>
                <li id="whiteLi"><a href="about.html">About Us</a></li>
                <li id="redLi"><a href="reservation.html">Reservations</a></li>
                <li id="redLi"><a href="contact.html">Contact Us</a></li>
            </nav>

            <div class="headerIntro">
                <image id="headerImage" src="images/header_front_of_restaurant.jpg"/>
                <div class="headerText"><h1>Menus</h1></div>
            </div>

        </header>

        <body>
            <div class="bodyContents">

                <!--Uses Flex Vertical Type One-->
                <div class="flex-container-vertical">

                    <div class="flexVertTypeOne" id="vertMenu">

                        
                        <form id="menuForm" method="post" action="#menuSelect">

                                <br><h1 class="vertFlexText" id="menuSelect"> Choose a menu!</h1><br> 

                                <input class="menuButton" type="submit" name="Brisbane" value="Brisbane Restaurant"/>
                                <input class="menuButton" type="submit" name="Sydney" value="Sydney Restaurant "/>
                                <input class="menuButton" type="submit" name="Melbourne" value="Melbourne Restaurant"/>
                                
                                <!-- PHP code is checking if a button has been posted
                                If so, then a fully formatted menu will be displayed will content from a
                                custom table from the database will be displayed depending on the city.
                                Otherwise, no content will be displayed regarding the menu. -->
                                <?php
                                    if(isset($_POST['Brisbane'])){
                                        
                                        echo "<h1>Brisbane Restaurant</h1><br>
                                        --------------------------------<br> <h1> Starters </h1> <br>";
                                        foreach ($menu as $items){
                                            if ($items["RESTAURANTKEY"] == 1 && $items["COURSE"] == 1){
                                                echo "<h4>".$items["ITEMNAME"]."</h4>";
                                                echo "<p>".$items["ITEMPRICE"]."</p>";}}
                                        echo "<br>--------------------------------<br><h1> Mains </h1><br>";
                                        foreach ($menu as $items){
                                            if ($items["RESTAURANTKEY"] == 1 && $items["COURSE"] == 2){
                                                echo "<h4>".$items["ITEMNAME"]."</h4>";
                                                echo "<p>".$items["ITEMPRICE"]."</p>";}}
                                        echo "<br>--------------------------------<br><h1> Dessert </h1><br>";
                                        foreach ($menu as $items){
                                            if ($items["RESTAURANTKEY"] == 1 && $items["COURSE"] == 3){
                                                echo "<h4>".$items["ITEMNAME"]."</h4>";
                                                echo "<p>".$items["ITEMPRICE"]."</p>";}}}
                                    if(isset($_POST['Sydney'])){
                                        echo "<h1>Sydney Restaurant</h1><br>
                                        --------------------------------<br><h1> Starters </h1><br>";
                                        foreach ($menu as $items){
                                            if ($items["RESTAURANTKEY"] == 2 && $items["COURSE"] == 1){
                                                echo "<h4>".$items["ITEMNAME"]."</h4>";
                                                echo "<p>".$items["ITEMPRICE"]."</p>";}}
                                        echo "<br>--------------------------------<br><h1> Mains </h1><br>";
                                        foreach ($menu as $items){
                                            if ($items["RESTAURANTKEY"] == 2 && $items["COURSE"] == 2){
                                                echo "<h4>".$items["ITEMNAME"]."</h4>";
                                                echo "<p>".$items["ITEMPRICE"]."</p>";}}
                                        echo "<br>--------------------------------<br><h1> Dessert </h1><br>";
                                        foreach ($menu as $items){
                                            if ($items["RESTAURANTKEY"] == 3 && $items["COURSE"] == 3){
                                                echo "<h4>".$items["ITEMNAME"]."</h4>";
                                                echo "<p> $".$items["ITEMPRICE"]."</p>";}}}
                                    if(isset($_POST['Melbourne'])){
                                        echo "<h1>Melbourne Restaurant</h1><br>
                                        --------------------------------<br><h1> Starters </h1><br>";
                                        foreach ($menu as $items){
                                            if ($items["RESTAURANTKEY"] == 3 && $items["COURSE"] == 1){
                                                echo "<h4>".$items["ITEMNAME"]."</h4>";
                                                echo "<p>".$items["ITEMPRICE"]."</p>";}}
                                        echo "<br>--------------------------------<br><h1> Mains </h1><br>";
                                        foreach ($menu as $items){
                                            if ($items["RESTAURANTKEY"] == 2 && $items["COURSE"] == 2){
                                                echo "<h4>".$items["ITEMNAME"]."</h4>";
                                                echo "<p>".$items["ITEMPRICE"]."</p>";}}
                                        echo "<br>--------------------------------<br><h1> Dessert </h1><br>";
                                        foreach ($menu as $items){
                                            if ($items["RESTAURANTKEY"] == 3 && $items["COURSE"] == 3){
                                                echo "<h4>".$items["ITEMNAME"]."</h4>";
                                                echo "<p>".$items["ITEMPRICE"]."</p>";}}}
                                    echo "<br>--------------------------------<br>";

                                    ?>
                            </form>
                            
                            <!--Set of PHP Code is checking if $_POST has been set by a button. If so, then a button appears
                            with the dowload link for the respective menu. Otherwise, nothing happens. -->             
                            <?php
                                if (isset($_POST['Melbourne']) or isset($_POST['Brisbane']) or isset($_POST['Sydney'])){ //try and make it so that if there is nothing selected, dont show button
                                    echo "<a href=";
                                    if(isset($_POST['Melbourne'])){
                                        echo "'images/melbourneMenu.png'"."download="."'La Confesseur Melbourne Menu'";
                                    }
                                    if(isset($_POST['Brisbane'])){
                                        echo "'images/brisbaneMenu.png'"."download="."'La Confesseur Brisbane Menu'";
                                    }
                                    if(isset($_POST['Sydney'])){
                                        echo "'images/sydneyMenu.png'"."download="."'La Confesseur Sydney Menu'";
                                    }
                                    echo "><button id='menuDownload' type='button'>Download Menu</button></a>";
                                }
                            ?>

                    </div>



                    <!--<div class="flexVertTypeOne"><image class="vertFlexImage" src="images/about_us_small.jpg" /></div>-->

                </div>
            </div>                                

                <!--Footer-->
                <div class="mainfooter">
                    <footer>
                            <p>© 2021 – Patrick Colbert</p>
                    </footer>
                </div>

        </body>
        
    </html>