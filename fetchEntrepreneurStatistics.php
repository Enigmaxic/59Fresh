<?php

include_once 'FiftyNineDAO.php';
session_start();
$profileID = $_SESSION['profileid'];

$dao = new FiftyNineDAO();

if (isset($_SESSION['last_visited']) && $_SESSION['last_visited'] == "entrepreneurHome"){
    $profiles = $dao->getStatistics($profileID);
    //die(count($profiles);
    echo json_encode($profiles);
    
    
    
    
    
    //ffdksfmslfkdn
}
?>

