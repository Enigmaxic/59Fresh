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
        <title>Profile Browser</title>
    </head>
    <div id ="browsePage" data-role="page" >
        <link href="CSS/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="CSS/browseStyles.css" />      
        <link rel="stylesheet" type="text/css" href="CSS/feedback.css" />
        <link rel="stylesheet" href="themes/59Th.min.css" />
        <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="JS/bootstrap.min.js"></script>
        <script src="JS/jquery.coverflow.js"></script>
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
            <!--Profile Container-->
            <div id="profileContainer" class="container-fluid1">
                <img id="browseBackground" src="IMG/city3.jpg">
                <div  id = "profiles"class="row-fluid">
                    <div id ="profile" class ="coverflow  text-center"   >

                    </div>
                </div>
                <div id ="fullProfile" class ="row-fluid" style="display: none;">
                    <div id ="fullProfileDisplay" class ="text-center">
                        <div id ="f1" style ="display: none;" ></div>
                    </div>
                </div>
            </div>
            
            <div id="dialog" class="web_dialog">
                <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">
                    <tr>
                        <td class="web_dialog_title">Feedback</td>
                        <td class="web_dialog_title align_right">
                            <a href="#" id="btnClose">Close</a>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left: 15px;">
                            <b>Entrepreneurs appreciate your feedback. </b>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left: 15px;">
                            <form>
                                <input id="feed1"  type="radio" name ="feedback"  value="interest" checked/> Not interested in product<br>
                                <input id="feed2" type="radio" name ="feedback"  value="realistic" /> Unrealistic <br>
                                <input id="feed3"  type="radio" name ="feedback"   value="refine" /> Needs refinement<br>
                                <input id ="feed4" value = ""  name ="feedback" type="text" /> Other<br>
                                <input id="btnSubmit" style ="text-align: center"type="button"  value="Submit" />
                            </form>
                        </td>
                    </tr>
                    <tr><td colspan="2" style="text-align: center;"></td></tr>
                </table>
            </div>
        </div>
    </body>
</html>
