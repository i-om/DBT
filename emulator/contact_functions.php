<?php
/*! Function to retieve record of id = $id */
function getContact($iId, $sLoginId,$sRights)
{
    $objContact = new dbContactDetails("dbt");
    $aResultArray = $objContact->get_contact($iId, $sLoginId,$sRights);

    $aData = array();
     for($pp = 0;$pp<count($aResultArray);$pp++)
     {
         $aData['textFirstName']=stripslashes($aResultArray[$pp]['first_name']);         /*! stripslashes for removing slashes in case of some specail characters */
        $aData['textLastName']=stripslashes($aResultArray[$pp]['last_name']);
        $aData['taAddress']=stripslashes($aResultArray[$pp]['address']);
        $aData['textCityName']=stripslashes($aResultArray[$pp]['city']);
        $aData['textPincode']=stripslashes($aResultArray[$pp]['pincode']);
        $aData['selectState']=stripslashes($aResultArray[$pp]['state']);
        $aData['selectCountry']=stripslashes($aResultArray[$pp]['country']);
        $aData['textPhoneNo']=stripslashes($aResultArray[$pp]['phone_no']);
        $aData['textMobileNo']=stripslashes($aResultArray[$pp]['mobile_no']);
        $aData['textEmail']=stripslashes($aResultArray[$pp]['email']);
     }

     return $aData;
}


?>