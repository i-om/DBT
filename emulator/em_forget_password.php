<?php
/*! Collecting values from UI and sending to database */  

    include_once("../util/class.db1UserInfo.php");

    $sLoginId = addslashes($_REQUEST['txtLoginId']);

    $sHintQuestion = addslashes($_REQUEST['sHintQuestion']);

    $sHintAnswer = addslashes($_REQUEST['textAnswer']);

    $sResult = array();

    $sResult = $oUser->user_verify($sLoginId, $sHintQuestion, $sHintAnswer);

    if(sizeof($sResult)>0)
    {
     header("location:../new_password.php?loginId=$sLoginId");
    }
    else
    {
     echo "No Match Found..";
    }

?>