<?php
$path1 = '../db1_layer_comm/';
//include_once("../db1_layer_comm/display_db_wrapper.php");
include_once("../db1_layer_comm/comm_db_wrapper.php");

$txtAlertFor=addslashes($_REQUEST['txtAlertFor']);
$txtDate=addslashes($_REQUEST['txtDate']);
$txtAlertTo=addslashes($_REQUEST['txtAlertTo']);
$txtAlertToLoginId=addslashes($_REQUEST['txtAlertToLoginId']);
$txtAlertToId=addslashes($_REQUEST['txtAlertToId']);
$txtMessage=addslashes($_REQUEST['txtMessage']);


//header("location: ../add_alert.php?displayNo=$id");

$objCommDisplay = new rtCommunicationDisplay();

 $objCommDisplay->iDisplayNo = 1;

        //! Array of Display To Names
         $objCommDisplay->sDisplayToName = $txtAlertTo;

        //! Display to Ids
         $objCommDisplay->iDisplayToId = (int)$txtAlertToId;

        //! Array of Display To User ids
         $objCommDisplay->iDisplayToUserId = (int)$txtAlertToId;

        //! Tag line for the display (Schedule , followup ...)
         $objCommDisplay->sTag = 'Schedule';

        //! Complete Message of the Display
         $objCommDisplay->sMessage = $txtMessage;

        //! Scheduled Date For the display
         $objCommDisplay->dScheduledDate = $txtDate;

        //! Scheduled Time for the display
         $objCommDisplay->tScheduledTime = '12:00:00';

        //! Module name From where it was Initiated
         $objCommDisplay->sModuleName = 'test';

        //! Record of that particular Module (which entry it belongs to in the
        //! module)
         $objCommDisplay->iModuleId = 1;

        //! Display Manager Id
         $objCommDisplay->iDisplayManagerId = 1;


 $objComm = new rtCommunicationManager();


      $objComm->sCommunicationType='COMM_DISPLAY';

        //! Array Of Message Type : (sms , email , display)
    $objComm->aMessageType = array('display');

        //! Array Of object Message Id : s-1,e-3,d-4 (s -> sms , e -> email ,
        //! d -> display)
      $objComm->aMessage = array($objCommDisplay);

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

  header("location: ../add_alert.php");
?>