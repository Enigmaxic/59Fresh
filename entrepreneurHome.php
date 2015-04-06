
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
        <title>Entrepreneur Home</title>
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
            <script src="JS/entrepreneurHome.js"></script>

            <?php
            $_SESSION['type'] = "Entrepreneur";
            $_SESSION['last_visited'] = "entrepreneurHome";
            ?>

            <div data-role="header" data-position="inline" data-theme="b">
                <a href="/59SecondPitch/entrepreneurHome.php" rel="external" data-icon="home">Home</a>
                <h1>Entrepreneur Home</h1>
                <a data-role="none">
                    <label for="navMenu" class="ui-hidden-accessible">Menu</label>
                    <select name="navMenu" id="navMenu" data-icon="bars">
                        <option selected disabled>Menu</option>
                        <option value="/59SecondPitch/manageProfile.php">Manage Profile</option>
                        <option value="/59SecondPitch/entrepreneurIdeas.php">My Ventures</option>
                        <option value="/59SecondPitch/entrepreneurMatches.php">Matches</option>
                        <option value="/59SecondPitch/entrepreneurStatistics.php">Statistics</option>
                        <option value="/59SecondPitch/login.php">Logout</option>
                    </select>
                </a>
            </div><!-- /header -->

            <div data-role="body" data-theme="none">
                <div>
                    <p id="quote">"A man may die, nations may rise and fall, but an idea lives on." -JFK</p>
                </div>
                <div id="optionsDiv" class="marketing">
                    <!-- Three columns of text below the carousel -->
                    <div class="row">
                        <img class="img-circle" src="IMG/Matches.GIF" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                        <h2>Matches</h2>
                        <p>Find out who wants to start a conversation.</p>
                        <p><a data-role="button" rel="external" href="/59SecondPitch/entrepreneurMatches.php" >View Matches »</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="row">
                        <img class="img-circle" src="IMG/Brain.gif" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                        <h2>Ventures</h2>
                        <p>You're a genius and we both know it.  Let's show the world what you're made of.</p>
                        <p><a data-role="button" rel="external" href="/59SecondPitch/entrepreneurIdeas.php" >View Ideas »</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="row">
                        <img class="img-circle" src="IMG/Statistics.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                        <h2>Statistics</h2>
                        <p>Numbers speak louder than words.</p>
                        <p><a data-role="button" rel="external" href="/59SecondPitch/entrepreneurStatistics.php" >View Statistics »</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div>
        </div>
    </div>
</body>
</html>
