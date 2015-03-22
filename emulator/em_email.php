<?php
$path1 = '../db1_layer_comm/';
//include_once("../db1_layer_comm/email_db_wrapper.php");
include_once("../db1_layer_comm/comm_db_wrapper.php");
   $hidId=addslashes($_REQUEST['hidId']);
   $txtTo=addslashes($_REQUEST['txtTo']);
    //$txtAddCc=addslashes($_REQUEST['txtAddCc']);
    $txtSubject=addslashes($_REQUEST['txtSubject']);
    $taMessage=addslashes($_REQUEST['taMessage']);
    $sName=addslashes($_REQUEST['txtFromName']);
    $sFromId=addslashes($_REQUEST['txtFromId']);
    $sToName=addslashes($_REQUEST['txtToName']);
    $email_name[0] = $sToName;
    $email_to_id[0] = $txtTo;


    $objCommEmail = new rtCommunicationEmail();

        $objCommEmail->iEmailNo = 1;

        //! Email To Names
          $objCommEmail->aEmailToName = $email_name;

        //! Email To Id
         $objCommEmail->aEmailToId = $email_to_id;

        //! Email To Email Ids
         $objCommEmail->aEmailToEmailId = $email_to_id;

        //! Number of Email To
         $objCommEmail->iNumEmailTo = 1;

        //! Email From Name
         $objCommEmail->sEmailFromName = $sName;

        //! Email From Email Id
         $objCommEmail->sEmailFromEmailId = $sFromId;

        //! Email Subject
         $objCommEmail->sSubject = $txtSubject;

        //! Email Message
         $objCommEmail->sMessage = $taMessage;

        //! Attachment File Name
         $objCommEmail->aAttachment = array('em_register_now.php');

        //! Number of Attachment
         $objCommEmail->iNumAttachment = 1;

        //! Email Scheduled Date
         $objCommEmail->dScheduledDate = '24-02-2010';

        //! Email Scheduled time
         $objCommEmail->tScheduledTime= '12:00:00';

        //! Module Name From where email was triggered
         $objCommEmail->sModuleName = 'test';

        //! The corresponding module record id
         $objCommEmail->iModuleId = 1;

        //! Email Manager Id
         $objCommEmail->iEmailManagerId = 1;

        //! Email Status
       //  $objCommEmail->sStatus = 'sent';

        //! Email Sent date
         $objCommEmail->dSentDate = '24-02-2010';

        //! Email Sent Time
         $objCommEmail->tSentTime = '12:00:00';

    $objComm = new rtCommunicationManager();


      $objComm->sCommunicationType='COMM_EMAIL';

        //! Array Of Message Type : (sms , email , display)
    $objComm->aMessageType = array('email');

        //! Array Of object Message Id : s-1,e-3,d-4 (s -> sms , e -> email ,
        //! d -> display)
      $objComm->aMessage = array($objCommEmail);

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