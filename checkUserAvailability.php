<?php

 include('util/class.db1UserInfo.php');

 $sLoginID = addslashes($_GET["userLoginId"]);

 $aArray = array();

 $aArray = $oUser-> search_userLog($sLoginID);


 if(sizeof($aArray)>0)
 {
 echo "User Id not Available";
 }
 else
 echo "";



?>