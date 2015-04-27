<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include_once 'FiftyNineDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile Browser</title>
    </head>
    <body>
        <div id ="browsePage" data-role="page" >     

            <link rel="stylesheet" href="themes/59Th.min.css" />
            <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
            <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
            <link rel="stylesheet" type="text/css" href="CSS/browseStyles.css" />  

            <script src="http://code.jquery.com/jquery.js"></script>
            <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
            <script src="JS/browseMobile.js"></script>

            <div data-role="header">
                <a href="/59SecondPitch/investorHome.php" rel="external" data-icon="home">Home</a>
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
            <div data-role="content">
                <div class = "cover" id ="1">
                    <div class = "ui-grid-a" >
                        <div class="ui-block-a" id="profileInfo">
                        </div>
                        <div class="ui-block-b" id="profilePicture">
                        </div>
                    </div>
                    <div class = "ui-grid-solo" id="profileVideo">
                    </div>
                </div>
            </div>
            <div data-role="footer" data-position="fixed">
                <div class = "ui-grid-c" >
                    <div class="ui-block-a">
                        <figure><img id="leftIMG" style="width: 100%;" src="IMG/redLeft.png" alt="Profile Picture missing" class="swipePicture"></figure>
                    </div>
                    <div class="ui-block-b">
                        <p>Swipe left to view another</p>
                    </div>
                    <div class="ui-block-c">
                        <p>Swipe right to favorite</p>
                    </div>
                    <div class="ui-block-d">
                        <figure><img id="rightIMG" style="width: 100%;" src="IMG/greenRight.png" alt="Profile Picture missing" class="swipePicture"></figure>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
