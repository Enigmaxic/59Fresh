<?php

include_once 'ChromePhp.php';
include_once 'FiftyNineDAO.php';
session_start();
$profileID = $_SESSION['profileid'];

$dao = new FiftyNineDAO();

$info = $dao->getInvestorAC($profileID);

//$sql1 = "SELECT  59profileid,business_id from entrepreneur where business_id not in(select business_id from matching where 59profileid=".$profileID.")limit 5";
$algorithmMatch = "SELECT  59profileid,business_id 
from entrepreneur 
where 59profileid in(select 59profileid from 59profile where almamater = '".$info[0]."' or city = '".$info[1]."') 
and business_id not in (select business_id from matching where 59profileid=".$profileID.")
order by rand() limit 1";

ChromePhp::log($algorithmMatch);
$algorithmResult = $dao->executeSQL($algorithmMatch);
$list = array();

if (!($row = mysqli_fetch_array($algorithmResult))){
    $normalMatch = "SELECT  59profileid,business_id 
                    from entrepreneur 
                    where business_id not in (select business_id from matching where 59profileid=".$profileID.")
                    order by rand() limit 1";
    ChromePhp::log($normalMatch);
    $normalResult = $dao->executeSQL($normalMatch);
    $row = mysqli_fetch_array($normalResult);
}
$profileid = $row['59profileid'];
$business_id = $row['business_id'];
 
$sql = "SELECT firstname,lastname,almamater,city,business_type,business_name , profilepicture, business_video " .
       "FROM entrepreneur,59profile " .
       "WHERE 59profile.59profileid = " . $profileid .
       " AND business_id = " . $business_id;

ChromePhp::log($sql);
$result2 = $dao->executeSQL($sql);
$row2 = mysqli_fetch_array($result2);
$list[0] = array('profileid' => $profileid,'business_id' => $business_id, 'business_name' => $row2{'business_name'}, 'business_type' => $row2{'business_type'}, 'firstname' => $row2{'firstname'}, 'lastname' => $row2{'lastname'}, 'almamater' => $row2{'almamater'}, 'city' => $row2{'city'}, 'profilepicture' => $row2{'profilepicture'}, 'business_video' => $row2{'business_video'});

echo json_encode($list);


