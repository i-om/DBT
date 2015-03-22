<?php
$path1 = '../db1_layer_comm/';
include_once("../db1_layer_comm/comm_db_wrapper.php");

   $txtTo=addslashes($_REQUEST['txtTo']);
   $hidId=addslashes($_REQUEST['hidId']);

    $txtSubject=addslashes($_REQUEST['txtSubject']);
    $taMessage=addslashes($_REQUEST['taMessage']);
    $sName=addslashes($_REQUEST['txtFromName']);
    $sFromMobile=addslashes($_REQUEST['txtFromMobile']);
    $sToName=addslashes($_REQUEST['txtToName']);
    $sms_name[0] = $sToName;
    $sms_to_id[0] = $txtTo;


    $objCommSMS = new rtCommunicationSMS();
        //! Array of receivers Name
         $objCommSMS->aSMSToName = array($sToName);

        //! Array of receivers ID
         $objCommSMS->aSMSToId = array(1);

        //! Number of receivers
         $objCommSMS->iNumSMSTo = 1;

        //! Array of receivers Mobile Number
         $objCommSMS->aSMSToMobileNo = array($txtTo);

        //! SMS From Name
         $objCommSMS->sSMSFromName = $sName;

        //! SMS From Mobile Number
         $objCommSMS->sSMSFromMobileNo = $sFromMobile;

        //! Message
         $objCommSMS->sMessage = $taMessage;

        //! Scheduled Date
         $objCommSMS->dScheduledDate = '24-02-2010';

        //! Scheduled Time
         $objCommSMS->tScheduledTime = '12:00:00';

        //! Module Name From Where it was initialted
         $objCommSMS->sModuleName = 'test';

        //! SMS Module Manager Id
         $objCommSMS->iModuleId = 1;

        //! SMS Manager Id
         $objCommSMS->iSMSManagerId = 1;


        //! SMS Status
         $objCommSMS->sStatus = 'send';

        //! SMS Sent date
         $objCommSMS->dSentDate = '24-02-2010';

        //! SMS Sent Time
         $objCommSMS->tSentTime = '12:00:00';

    $objComm = new rtCommunicationManager();


    $objComm->sCommunicationType='COMM_SMS';

        //! Array Of Message Type : (sms , email , display)
    $objComm->aMessageType = array('sms');

        //! Array Of object Message Id : s-1,e-3,d-4 (s -> sms , e -> email ,
        //! d -> display)
      $objComm->aMessage = array($objCommSMS);

        //! Number of message Ids
     // $objComm->iNumMessage= 1;

        //! From User Id (Initiating the communication)
     $objComm->iFromUserId= 1;

        //! Repeat set (yes , no)
     $objComm->sRepeat='no';

        //! Scheduled date for the communcation
       $objComm->dScheduleDate='24-02-2010';

        //! Expire Date for the repeat (Only used for the repeat communication
        //! else leave it blank)
    $objComm->dExpireDate='';

        //! Frequency of the repeat (only used for the repeat communication)
       $objComm->iFrequency= 1;

        //! User Id Who initiated the communication
      $objComm->iUserNo = 1;

        //! Communication inititated date
    $objComm->dCreatedDate = '24-02-2010';

        //! Communication initiated time
      $objComm->tCreatedTime='12:00:00';

        //! Communication last updateded user no
     $objComm->iLastUpdateUserId = 1;

        //! Communication last updated date
    $objComm->dLastUpdateDate='24-02-2010';

        //! Communication last updated time
      $objComm->tLastUpdateTime='12:00:00';

        //! Extra 1 used for future changes
    $objComm->sExtra1='';

        //! Extra 2 used for future changes
      $objComm->sExtra2='';

        //! Extra 3 used for future changes
    $objComm->sExtra3='';

  $id = addCommunicationManager($objComm);

header("location:../contact_view.php?id=$hidId");
?>