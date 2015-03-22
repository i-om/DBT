<?php
    /*! Collecting values from UI and sending to database */
    include_once("../util/class.db1UserInfo.php");

    $sUserName = addslashes($_REQUEST['txtName']);

    $sLoginId = addslashes($_REQUEST['txtLoginId']);

    $sPassword = addslashes($_REQUEST['txtPassword']);

    $sEmail = addslashes($_REQUEST['txtEmail']);

    $sDepartment = addslashes($_REQUEST['txtDepartment']);

    $sContact = addslashes($_REQUEST['txtContact']);

     $sRights = addslashes($_REQUEST['selUserType']);

    $sResult = $oUser->update_user($sLoginId, $sUserName, $sPassword, $sEmail, $sDepartment, $sContact,$sRights);

    header("location:../view_users.php");

?>