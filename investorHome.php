
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include_once 'fiftynineDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Investor Home</title>
    </head>
    <body>
        <div id ="entrepreneurHomePage" data-role="page" >
            <link href="CSS/bootstrap.min.css" rel="stylesheet" media="screen">
            <link href="CSS/carousel.css" rel="stylesheet">
            <link rel="stylesheet" href="themes/59Th.min.css" />
            <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
            <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />

            <script src="http://code.jquery.com/jquery.js"></script>
            <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
            <script src="JS/bootstrap.min.js"></script>
            <script src="JS/investorHome.js"></script>

            <?php
            $_SESSION['type'] = "Investor";
            $_SESSION['last_visited'] = "entrepreneurHome";
            ?>
            <div data-role="header" data-position="inline" data-theme="b">
                <h1>Home</h1>
                <div data-role="navbar">
                    <ul>
                        <li><a href="/59SecondPitch/manageProfile.php" rel='external'>Manage Profile</a></li>
                        <li><a href="/59SecondPitch/browse.php" rel='external'>Browse Ventures</a></li>
                        <li><a href="/59SecondPitch/investorFavorites.php" rel='external'>Favorites</a></li>
                        <li><a href="/59SecondPitch/investorTracking.php" rel='external'>Tracking</a></li>
                        <li><a href="/59SecondPitch/login.php" rel='external'>Logout</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div>

            <div data-role="body" data-theme="none">
                <div>
                    <p id="quote">"How many millionaires do you know who have become wealthy by investing in savings accounts? I rest my case." -Robert G. Allen</p>
                </div>
                <div id="optionsDiv" class="marketing">
                    <!-- Three columns of text below the carousel -->
                    <div class="row">
                        <img class="img-circle" src="IMG/magnifyingGlass.jpeg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                        <h2>Browse</h2>
                        <p>Find out who wants to start a conversation.</p>
                        <p><a id="browseBtn" data-role="button" rel="external" href="/59SecondPitch/browse.php" >Go Browsing »</a></p>
                    </div>
                    <div class="row">
                        <img class="img-circle" src="IMG/questionmark.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                        <h2>Tracking</h2>
                        <p>Review profiles that you didn't want to commit to but found worth saving.</p>
                        <p><a id="trackingBtn" data-role="button" rel="external" href="/59SecondPitch/investorTracking.php" >View Tracked Profiles »</a></p>
                    </div>
                    <div class="row">
                        <img class="img-circle" src="IMG/check.jpeg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                        <h2>Favorites</h2>
                        <p>Review the profiles that you gave your contact information to.</p>
                        <p><a id="favoritesButton" data-role="button" rel="external" href="/59SecondPitch/investorFavorites.php" >View Favorite Profiles »</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
