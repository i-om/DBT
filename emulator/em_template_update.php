<?php
include_once('../util/class.dbTemplate.php');

$txtTitle=addslashes($_REQUEST['txtTitle']);
$taTemplateMessage=addslashes($_REQUEST['taTemplateMessage']);
$selTypeMessage=addslashes($_REQUEST['selTypeMessage']);
$LoginId=addslashes($_REQUEST['hidLoginId']);
$sTemplateId=addslashes($_REQUEST['hidTemplateId']);
//$idTemp = '1';

$objTemplate = new dbTemplate("dbt");

$id = $objTemplate->update_template($txtTitle, $taTemplateMessage, $selTypeMessage, $sTemplateId);
//print_r($id);
header("location:../template_view.php");

?>