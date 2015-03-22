<?php
    /*! Collecting values from UI and sending to database */
    include_once("../util/class.db1UserInfo.php");

    $sUserName = addslashes($_REQUEST['textName']);

    $sLoginId = addslashes($_REQUEST['textLoginId']);

    $sPassword = addslashes($_REQUEST['textPassword']);

    $sHintQuestion = addslashes($_REQUEST['sHintQuestion']);

    $sHintAnswer = addslashes($_REQUEST['textAnswer']);
    $sEmail = addslashes($_REQUEST['textEmail']);

    $sDepartment = addslashes($_REQUEST['textDept']);

    $sContact = addslashes($_REQUEST['textContact']);

   // $sRights = addslashes($_REQUEST['chkRights']);

    $sRights = addslashes($_REQUEST['selUserType']);

   // $sRights = "general";

    $sResult = $oUser->set_data($sLoginId, $sUserName, $sPassword, $sHintQuestion, $sHintAnswer, $sEmail, $sRights, $sDepartment, $sContact);
    
    header("location:../view_users.php");

?>