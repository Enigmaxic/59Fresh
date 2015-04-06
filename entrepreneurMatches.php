<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Entrepreneur Matches</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    </head>
    <body > 
        <div id ="matchPage" data-role="page" data-theme="b">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="JS/entrepreneurMatches.js"></script>
            <div data-role="header"> 
                <a href="/59SecondPitch/entrepreneurHome.php" rel="external" data-icon="home" >Home</a>
                <h1>Matches</h1>
                <div data-role="navbar">
                    <ul>
                        <li><a href="/59SecondPitch/manageProfile.php" rel='external' style='white-space: normal'>Manage Profile</a></li>
                        <li><a href="/59SecondPitch/entrepreneurIdeas.php" rel='external' style='white-space: normal'>My Ventures</a></li>
                        <li><a href="/59SecondPitch/entrepreneurMatches.php" rel='external' style='white-space: normal'>Matches</a></li>
                        <li><a href="/59SecondPitch/entrepreneurStatistics.php" rel='external' style='white-space: normal'>Statistics</a></li>
                        <li><a href="/59SecondPitch/login.php" rel='external' style='white-space: normal'>Logout</a></li>
                    </ul>
                </div><!-- /navbar -->
            </div><!-- /header -->
            
            <div data-role="content" id="matches" style="background:'#000000'">	
                <div data-role="collapsible-set" data-theme="b" data-content-theme="b" id="set"></div>
            </div>

            <div data-role="footer">
                <img id="logo" src="IMG/59SecondPitchLogo.png" style="display:block;margin:1em auto 0;width:75%">
            </div>    
        </div>
    </body>
</html>
    