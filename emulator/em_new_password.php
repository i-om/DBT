<?php
    /*! Collecting values from UI and sending to database */  
     include_once("../util/class.db1UserInfo.php");

     $sNewPassword = addslashes($_REQUEST['textNewPassword']);
     $sLoginId = $_REQUEST['loginId'];

     $iResult = $oUser->update_pwd($sNewPassword,$sLoginId);

     header("location:../login_page.php");


?>