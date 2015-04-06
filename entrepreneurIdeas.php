<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
//Set this session variable so that pages can know the referrer
$_SESSION['ideas'] = true;
include_once 'FiftyNineDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ventures</title>
    </head>
    <body class="browse-header">
        <div id ="entrepreneurIdeasPage" data-role="page" >
            <link href="CSS/bootstrap.min.css" rel="stylesheet" media="screen">
            <link rel="stylesheet" type="text/css" href="CSS/entrepreneurIdeas.css" />
            <link rel="stylesheet" href="themes/59Th.min.css" />
            <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
            <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />

            <script src="http://code.jquery.com/jquery.js"></script>
            <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
            <script src="JS/bootstrap.min.js"></script>
            <script src="JS/jquery.coverflow.js"></script>
            <script src="JS/entrepreneurIdeas.js"></script>

            <div data-role="header" data-position="inline" data-theme="b">
                <a href="/59SecondPitch/entrepreneurHome.php" rel="external" data-icon="home" >Home</a>
                <h1>Ventures</h1>
                <div data-role="navbar">
                    <ul>
                        <li><a href="/59SecondPitch/manageProfile.php" rel='external'>Manage Profile</a></li>
                        <li><a href="/59SecondPitch/entrepreneurIdeas.php" rel='external'>My Ventures</a></li>
                        <li><a href="/59SecondPitch/entrepreneurMatches.php" rel='external'>Matches</a></li>
                        <li><a href="/59SecondPitch/entrepreneurStatistics.php" rel='external'>Statistics</a></li>
                        <li><a href="/59SecondPitch/login.php" rel='external'>Logout</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div>
            <div data-role="content">
                <!--Profile Container-->
                <div id="profileContainer" class="container-fluid1">
                    <img src="IMG/city3.jpg">
                    <div  class="row-fluid">
                        <div id ="profile" class ="coverflow  text-center"></div>
                    </div>
                </div>

                <!--Button Container-->
                <div class="container-fluid buttonContainer" >
                    <div  class="row-fluid">
                        <div  class ="centered text-center" >
                            <button type="button" id ="newIdea" class="ph-button ph-btn-red">New Idea</button>
                            <button type="button" id ="deleteIdea" class="ph-button ph-btn-red">Delete Idea</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
