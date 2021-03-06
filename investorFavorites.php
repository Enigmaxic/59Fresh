<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="CSS/dark-glass/sidebar.css" />
        <link href="CSS/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="CSS/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="CSS/entrepreneurMatches.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">    
    </head>
    <body>
        <div data-role="page" data-theme="b">
            <script src="http://code.jquery.com/jquery.js"></script>
            <script src="JS/bootstrap.min.js"></script>
            <script src="JS/jquery-ui.min.js" type="text/javascript"></script>
            <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
            <script type="text/javascript" src="JS/jquery.sidebar.js"></script>

            <script src="JS/investorFavorites.js"></script>

            <div data-role="header">
                <a href="/59SecondPitch/investorHome.php" rel="external" data-icon="home">Home</a>
                <h1>Favorites</h1>
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

            <div data-role="content" id="matches" style="background:'#000000'">	
                <div data-role="collapsible-set" data-theme="b" data-content-theme="b" id="set">

                </div>
            </div>

            <div data-role="footer">
                <img id="logo" src="IMG/59SecondPitchLogo.png" style="display:block;margin:1em auto 0;width:75%">
            </div>
        </div>
    </body>
</html>