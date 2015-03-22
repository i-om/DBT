<?php
include_once('../util/class.dbTemplate.php');

$txtTitle=addslashes($_REQUEST['txtTitle']);
$taTemplateMessage=addslashes($_REQUEST['taTemplateMessage']);
$selTypeMessage=addslashes($_REQUEST['selTypeMessage']);
$LoginId=addslashes($_REQUEST['hidLoginId']);
//$idTemp = '1';

$objTemplate = new dbTemplate("dbt");

$id = $objTemplate->set_template($txtTitle, $taTemplateMessage, $selTypeMessage,$LoginId);
//print_r($id);
header("location:../template_view.php");

?>