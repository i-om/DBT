<?php

include_once("util/class.db1UserInfo.php");

$sLoginId = $_POST['textLoginId'];
//$sRights = $_POST['textRights'];


$sUserPwd = $_POST['textPassword'];

//$sUserType = $_POST['userType'];


$sPageHeader="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
                'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
                <html xmlns='http://www.w3.org/1999/xhtml'>
                <head>
                <title>Books Form</title>
                </head>";

$aArrayResult = array();



$aArrayResult = $oUser -> verify_log($sLoginId, $sUserPwd);

  if(sizeof($aArrayResult)>0)
  {
    session_start();
   $_SESSION['flag1']='1'; 
   $_SESSION["LoginStatus"] = "Login";
   $_SESSION["LoginId"] = $sLoginId;
   $_SESSION["Rights"] = $aArrayResult[0]['rights'];
   $_SESSION["Name"] = $aArrayResult[0]['name'];
   $_SESSION["Email"] = $aArrayResult[0]['email'];
   $_SESSION["Id"] = $aArrayResult[0]['id'];
   $_SESSION["Mobile"] = '9960269988'; //$aArrayResult[0]['mobile'];

   header('location: dashboard.php');

  }
  else
  {
    $sPageBody="<body>

    <br /><br />
    <center>Sorry! Your User ID and Password is Not Valid.<br />
        Please check and Try Again.
        <br /><br />
        <input type = 'submit' value ='Back To Login' id = 'idSubmitButton' class = 'classSubmitButton' onclick=window.location.href='login_page.php' />
    </center>
      </body>
    </html>";
    $sPageContent=$sPageHeader.$sPageBody;
   // echo $sPageContent;
    header('location: index.php?error=1');
  }
?>