<?php
/*! Collecting values from UI and sending to database */
/* Include the file for using database functions*/
include_once('../util/class.dbContactDetails.php');
session_start();
$sLoginId = $_SESSION["LoginId"];

$sFirstName=addslashes($_REQUEST['textFirstName']);             /*! addslashes for adding slashes in case of special characters*/
$sLastName=addslashes($_REQUEST['textLastName']);

$iPhoneCounter=addslashes($_REQUEST['hidPhoneCounter']);
$iMobileCounter=addslashes($_REQUEST['hidMobileCounter']);
$iAddressCounter=addslashes($_REQUEST['hidAddressCounter']);

$PhoneArray = array();

for($ii=0;$ii<$iPhoneCounter;$ii++)
{
   $PhoneArray[]= addslashes($_REQUEST['textPhoneNo'][$ii]);
}

$iPhoneNo = implode("::",$PhoneArray);
//$iPhoneNo=addslashes($_REQUEST['textPhoneNo']);

$MobileArray = array();

for($jj=0;$jj<$iMobileCounter;$jj++)
{
   $MobileArray[]= addslashes($_REQUEST['textMobileNo'][$jj]);
}

$iMobileNo = implode("::",$MobileArray);
//$iMobileNo=addslashes($_REQUEST['textMobileNo']);

$AddressArray = array();
$CityArray = array();
$PincodeArray = array();
$StateArray = array();
$CountryArray = array();

for($jj=0;$jj<$iAddressCounter;$jj++)
{
   $AddressArray[]= addslashes($_REQUEST['taAddress'][$jj]);
   $CityArray[]= addslashes($_REQUEST['textCityName'][$jj]);
   $PincodeArray[]= addslashes($_REQUEST['textPincode'][$jj]);
   $StateArray[]= addslashes($_REQUEST['selectState'][$jj]);
   $CountryArray[]= addslashes($_REQUEST['selectCountry'][$jj]);
}

$sAddress = implode("::",$AddressArray);
$sCityName = implode("::",$CityArray);
$iPincode = implode("::",$PincodeArray);
$sState = implode("::",$StateArray);
$sCountry = implode("::",$CountryArray);


$sEmail=addslashes($_REQUEST['textEmail']);

$objContact = new dbContactDetails("dbt");
/*! Function to insert a record into the database.
It returns Id of last inserted record */
$id=$objContact->set_contact($sFirstName,$sLastName,$sAddress,$sCityName ,$iPincode ,$sState ,$sCountry ,$iPhoneNo , $iMobileNo,$sEmail,$sLoginId);
/*! Redirectiong to the view page */
header("location: ../contact_view.php?id=$id");
?>