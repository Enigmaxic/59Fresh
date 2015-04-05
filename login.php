<!DOCTYPE html>
<?php
session_start();
include_once 'ChromePhp.php';
?>
<html>
    <head>
        <title>59SecondPitch Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <link href="CSS/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="themes/59Th.min.css" />
        <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
        <link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css">
        <link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" >
        <link href="CSS/loginStyles.css" rel="stylesheet">

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="JS/bootstrap.min.js"></script>
        <script src="JS/login.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <?php
        //
        // define variables and set to empty values
        $firstnameErr = $lastnameErr = $emailErr = $passwordErr = $repasswordErr = $typeErr = $uploadErr = "";
        $name = $email = $password = $lastname = $firstname = $repassword = $age = $almamater = $city = $type = "";
        $valid = true;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            switch ($_POST['submit']) {
                case 'login':
                    break;
                case 'create':
                    if (empty($_POST["firstname"])) {
                        $firstnameErr = "First name is required";
                        $valid = false;
                    } else {
                        $firstname = $_POST["firstname"];
                        if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
                            $firstnameErr = "Only letters and white space allowed";
                            $valid = false;
                        }
                    }

                    if (empty($_POST["email"])) {
                        $emailErr = "Email is required";
                        $valid = false;
                    } else {
                        $email = $_POST["email"];
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailErr = "Invalid email format";
                            $valid = false;
                        }
                    }

                    if (empty($_POST["password"])) {
                        $passwordErr = "Password is required";
                        $valid = false;
                    } else {
                        $password = $_POST["password"];
                        $repassword = $_POST["repassword"];
                        if ($password != $repassword) {
                            $passwordErr = "Passwords do not match.";
                            $valid = false;
                        }
                    }

                    if (empty($_POST["lastname"])) {
                        $lastnameErr = "Last name is required";
                        $valid = false;
                    } else {
                        $lastname = $_POST["lastname"];
                        if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
                            $lastnameErr = "Only letters and white space allowed";
                            $valid = false;
                        }
                    }
                    if (empty($_POST["type"])) {
                        $typeErr = "Profile type is required.";
                        $valid = false;
                    } else {
                        $type = $_POST["type"];
                    }
                    $age = $_POST["age"];
                    $almamater = $_POST["almamater"];
                    $city = $_POST["city"];


                    //--------------Profile Picture Validation---------------------
                    $target_dir = "PROFILE_PICTURES/";
                    $target_file = $target_dir . basename($_FILES["profilePictureUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                    ChromePhp::log('isset: ' . isset($_FILES));
                    ChromePhp::log('empty: ' . empty($_FILES));
                    ChromePhp::log('var_dump: ' . var_dump($_FILES));
                    ChromePhp::log('print_r: ' . print_r($_FILES,true));
                    ChromePhp::log('php.ini location: ' . php_ini_loaded_file());
                    ChromePhp::log('php version: ' . phpversion());
                    ChromePhp::log('post max size: '. ini_get('post_max_size'));
                    ChromePhp::log('file_uploads: '. ini_get('file_uploads'));
                    ChromePhp::log('upload_tmp_dir: '. ini_get('upload_tmp_dir'));
                    ChromePhp::log('upload_max_filesize: '. ini_get('upload_max_filesize'));
                    ChromePhp::log('max_file_uploads: '. ini_get('max_file_uploads'));

                    // Check if image file is a actual image or fake image
                    $check = getimagesize($_FILES["profilePictureUpload"]["tmp_name"]);
                    if ($check !== false) {
                        $uploadErr = "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }


                    // Check if file already exists
                    if (file_exists($target_file)) {
                        $uploadErr = "Sorry, file already exists.";
                        $uploadOk = 0;
                    }

                    // Check file size
                    if ($_FILES["profilePictureUpload"]["size"] > 500000) {
                        $uploadErr = "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }

                    // Allow certain file formats
                    if (strcasecmp($imageFileType, "jpg") && strcasecmp($imageFileType, "png") && strcasecmp($imageFileType, "jpeg") && strcasecmp($imageFileType, "gif")) {
                        $uploadErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . $imageFileType . "finsihing it off";
                        $uploadOk = 0;
                    }

                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        //$uploadErr = "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                    } else {

                        if (move_uploaded_file($_FILES["profilePictureUpload"]["tmp_name"], $target_file)) {
                            echo "The file " . basename($_FILES["profilePictureUpload"]["name"]) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }



                    if ($valid && $uploadOk == 1) {
                        $_SESSION['firstname'] = $firstname;
                        $_SESSION['lastname'] = $lastname;
                        $_SESSION['type'] = $type;
                        $_SESSION['email'] = $email;
                        $_SESSION['age'] = $age;
                        $_SESSION['password'] = $password;
                        $_SESSION['almamater'] = $almamater;
                        $_SESSION['city'] = $city;
                        $profileFile = new SplFileInfo($target_file);
                        $extension = $profileFile->getExtension();
                        $_SESSION['profilepicture'] = $target_file;
                        $_SESSION['extension'] = $extension;
                        header('Location: http://localhost/59SecondPitch/addUpdate59Profile.php');
                        exit();
                    }
                    break;
            }
        }
        ?>


        <div data-role="page" data-theme="b">

            <div data-role="header">
                <h1>59 Second Pitch Login</h1>
            </div>

            <div data-role="main" class="ui-content">
                <div data-role="tabs" id="tabs">
                    <div data-role="navbar">
                        <ul>
                            <li><a href="#login" class="ui-btn-active">Login</a></li>
                            <li><a href="#signup">Create an Account</a></li>
                        </ul>
                    </div>
                    <div id="login" class="ui-body-d ui-content">
                        <form class="form-horizontal" action="loginVerify.php" method="POST" enctype='multipart/form-data' data-ajax='false'>
                            <?php
                            if (isset($_SESSION['loginError']) && !empty($_SESSION['loginError'])) {
                                echo "<font color='red'>" . $_SESSION['loginError'] . "</font>";
                            }
                            ?>
                            <label for="email" class="ui-hidden-accessible">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email" >

                            <!-- Password-->
                            <label for="password" class="ui-hidden-accessible">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password">

                            <!-- Button -->
                            <button type="submit" name="submit" value="login">Login</button>
                        </form>
                    </div>
                    <div id="signup">
                        <!--Form action is set to this page to perform checks on the fields-->
                        <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype='multipart/form-data' data-ajax='false'>

                            <label for="email"  class="ui-hidden-accessible">Email:</label>
                            <input type="text" id="email" name="email" placeholder="Email" value = "<?php echo $email; ?>"> 
                            <span class="error"><?php if (!empty($emailErr)) {
                                echo "*" . $emailErr;
                            } ?></span>

                            <label for="password" class="ui-hidden-accessible">Password:</label>
                            <input type="password" id="password" name="password" placeholder="Password"value = "<?php echo $password; ?>">
                            <span class="error"><?php if (!empty($passwordErr)) {
                                echo "*" . $passwordErr;
                            } ?></span>

                                <label for="repassword" class="ui-hidden-accessible">Re-Enter Password:</label>
                                <input type="password" id="repassword" name="repassword" placeholder="Re-Enter Password" value = "<?php echo $repassword; ?>">

                                <label for="firstname" class="ui-hidden-accessible">First Name:</label>
                                <input type="text" id="firstname" name="firstname" placeholder="First Name" method ="post" value = "<?php echo $firstname; ?>">
                                <span class="error"><?php if (!empty($firstnameErr)) {
                                echo "*" . $firstnameErr;
                            } ?></span>

                                <label for="lastname" class="ui-hidden-accessible">Last Name:</label>
                                <input type="text" id="lastname" name="lastname" placeholder="Last Name"value = "<?php echo $lastname; ?>">
                                <span class="error"><?php if (!empty($lastnameErr)) {
                                echo "*" . $lastnameErr;
                            } ?></span>

                                <label for="age" class="ui-hidden-accessible">Age:</label>
                                <input type="text" id="age" name="age" placeholder="Age" value = "<?php echo $age; ?>">

                                <label for="almamater" class="ui-hidden-accessible">University/Alma Mater:</label>
                                <input type="text" id="almamater" name="almamater" placeholder="University/Alma Mater" value = "<?php echo $almamater; ?>">

                                <label for="city" class="ui-hidden-accessible">City/Metro Area:</label>
                                <input type="text" id="city" name="city" placeholder="City/Metro Area" value = "<?php echo $city; ?>">

                                <label for="profilePictureUpload" >Profile Picture:</label>
                                <input type="hidden" name="MAX_FILE_SIZE" value="30000" >
                                <input type="file" name="profilePictureUpload" id="profilePictureUpload">
                                <span class="error"><?php if (!empty($uploadErr)) {
                                echo "*" . $uploadErr;
                            } ?></span>

                                <div data-role="fieldcontain">
                                    <fieldset data-role="controlgroup">
                                        <input type="radio" name="type" id="entrepreneurRadio" value="Entrepreneur">
                                        <label for="entrepreneurRadio">Entrepreneur</label>

                                        <input type="radio" name="type" id="investorRadio" value="Investor">
                                        <label for="investorRadio">Investor</label>
                                        <span class="error"><?php if (!empty($typeErr)) {
                                            echo "*" . $typeErr;
                                        } ?>
                                        </span>

                                    </fieldset>
                                </div>
                                <button type="submit" name="submit" value="create">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


