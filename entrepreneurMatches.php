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
                <a href="/59SecondPitch/entrepreneurHome.php" rel="external" data-icon="home">Home</a>
                <h1>Matches</h1>					
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
            
            <div data-role="content" id="matches" style="background:'#000000'">	
                <div data-role="collapsible-set" data-theme="b" data-content-theme="b" id="set"></div>
            </div>

            <div data-role="footer">
                <img id="logo" src="IMG/59SecondPitchLogo.png" style="display:block;margin:1em auto 0;width:75%">
            </div>    
        </div>
    </body>
</html>
    