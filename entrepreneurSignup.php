
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>59SecondPitch</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    </head>
    <body>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <?php
        $workType = $workName = $workDesc = $business_video = "";
        $workTypeerr = $workNameerr = $workDescerr = $businessVideoerr = "";
        $valid = true;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["workType"])) {
                $workTypeerr = "Work Type is required.";
                $valid = false;
            } else {
                $workType = $_POST["workType"];
            }

            if (empty($_POST["workName"])) {
                $workNameerr = "Work Name is required.";
                $valid = false;
            } else {
                $workName = $_POST["workName"];
            }

            if (empty($_POST["business_video"])) {
                $workDescerr = "Please provide a video URL";
                $valid = false;
            } else {
                $business_video = $_POST["business_video"];
            }

            if ($valid) {
                $_SESSION['workType'] = $workType;
                $_SESSION['workName'] = $workName;
                $_SESSION['business_video'] = $business_video;
                $_SESSION['last_visited'] = "entrepreneurSignup";
                header('Location: http://localhost/59SecondPitch/addUpdateDeleteEntrepreneurProfile.php');
                exit();
            }
        }
        ?>

        <div class="container">
            <!--form setup taken from tutorial for twitter bootstrap-->
            <form id="entrepreneurForm" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <label for="businessType" class="select">Classification:</label>
                <select name="businessType" id="businessType">
                    <option value="Company">Company</option>
                    <option value="Startup">Startup</option>
                    <option value="Project">Project</option>
                    <option value="Idea">Idea</option>
                </select>

                <label for="workName">Venture Name:</label>
                <input type="text" id="workName" name="workName" value = "<?php
                if (isset($_POST['business_name'])) {
                    echo $_POST['business_name'];
                } else if (isset($_POST['workName'])) {
                    echo $_POST['workName'];
                }
        ?>"> 
                <span class="error"><?php if (!empty($workNameerr)) {echo "*" . $workNameerr;} ?>
                    
                <label for="businessVideo">Pitch Video Vimeo ID:</label>
                <input type="text" id="businessVideo" name="businessVideo" value = "<?php if (isset($_POST['business_video'])) {
                    echo $_POST['business_video'];
                }; ?>"> 
                <span class="error"><?php if (!empty($businessVideoerr)) {echo "*" . $businessVideoerr;} ?>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </body>
