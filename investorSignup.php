
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$_SESSION['last_visited'] = "investorSignup";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>59SecondPitch</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>     
        <script src="JS/investorSignup.js"></script>

    </head>
    <body>

        <?php
        $userTypeerr = $contactTypeerr = $contactPreferr = "";
        $userType = $contactType = $contactPref = "";
        $valid = true;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["usertype"])) {
                $userTypeerr = "User Type is required.";
                $valid = false;
            } else {
                $userType = $_POST["usertype"];
            }



            if (empty($_POST["contacttype"])) {
                $contactTypeerr = "Contact type is required.";
                $valid = false;
            } else {
                $contactType = $_POST["contacttype"];
            }


            if (empty($_POST["contactpref"])) {
                $contactPreferr = "Please provide contact preferences.";
                $valid = false;
            } else {
                $contactPref = $_POST["contactpref"];
            }

            if ($valid) {
                $_SESSION['contactType'] = $contactType;
                $_SESSION['userType'] = $userType;
                $_SESSION['contactPref'] = $contactPref;
                if (empty($_POST["phoneNumber"])) {
                    $_SESSION['phoneNumber'] = null;
                } else {
                    $_SESSION['phoneNumber'] = $_POST['phoneNumber'];
                }

                header('Location: http://localhost/59SecondPitch/addUpdateInvestorProfile.php');
                exit();
            }
        }
        ?>
        <div data-role="page" data-theme="a">

            <div data-role="header">
                <h1>Investor Sign Up</h1>
            </div>

            <div data-role="main" class="ui-content">
                <form id="investorForm" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <label for="userType" class="select">Classification:</label>
                    <select name="userType" id="userType">
                        <option value="Investor">Investor</option>
                        <option value="Advisor">Advisor</option>
                        <option value="Helping Hand">Helping Hand</option>
                    </select>

                    <label for="contacttype" class="select">Method of Contact:</label>
                    <select name="contacttype" id="contacttype">
                        <option value="Email">Email</option>
                        <option value="Phone">Phone</option>
                        <option value="Either">Both</option>
                    </select>
                    <div class="control-group" style="visibility:hidden" id="phoneNumber">
                        <label for="phoneNumber">Phone Number: </label>
                        <input type="text" name="phoneNumber">
                    </div>
                    <span class="error"><?php
                        if (!empty($contactTypeerr)) {
                            echo "*" . $contactTypeerr;
                        }
                        ?></span>

                    <label for="contactpref">What are your contact preferences?(days,times,etc.)</label>
                    <textarea name ="contactpref" value =""rows="4" cols="50"></textarea>
                    <span class="error"><?php
                        if (!empty($contactPreferr)) {
                            echo "*" . $contactPreferr;
                        }
                        ?></span>

                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
    </body>
