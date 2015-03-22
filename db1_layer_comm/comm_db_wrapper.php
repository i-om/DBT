<?php
    /**************************************************************************
     *                                                                        *
     *  Communication Wrapper                                                 *
     *                                                                        *
     **************************************************************************/

    //include_once
    $comm_xml_file_path = @$path1. "comm/comm/";
    $dis_xml_file_path = @$path1. "comm/display/";
    $email_xml_file_path = @$path1. "comm/email/";
    $sms_xml_file_path = @$path1. "comm/sms/";


    include_once @$test_path . 'comm/comm/comm_connection.php';
    include_once @$test_path . 'comm/comm/comm_logging.php';
    include_once @$test_path . 'comm/comm/db1_layer_comm.php';
    include_once @$test_path . 'comm/comm/db1_layer_comm_xml.php';
    include_once @$test_path . 'comm/comm/message_constants.php';

    include_once @$test_path . 'comm/display/db1_layer_display.php';
    include_once @$test_path . 'comm/display/db1_layer_display_xml.php';
    include_once @$test_path . 'comm/display/db1_layer_display_default_message.php';
    include_once @$test_path . 'comm/display/db1_layer_display_default_message_xml.php';
    include_once @$test_path . 'comm/display/db1_layer_display_module_manager.php';
    include_once @$test_path . 'comm/display/db1_layer_display_module_manager_xml.php';
    include_once @$test_path . 'comm/display/db1_layer_display_manager.php';
    include_once @$test_path . 'comm/display/db1_layer_display_manager_xml.php';
    include_once @$test_path . 'comm/display/display_connection.php';
    include_once @$test_path . 'comm/display/display_logging.php';

    include_once @$test_path . 'comm/email/db1_layer_email.php';
    include_once @$test_path . 'comm/email/db1_layer_email_xml.php';
    include_once @$test_path . 'comm/email/db1_layer_email_default_message.php';
    include_once @$test_path . 'comm/email/db1_layer_email_default_message_xml.php';
    include_once @$test_path . 'comm/email/db1_layer_email_module_manager.php';
    include_once @$test_path . 'comm/email/db1_layer_email_module_manager_xml.php';
    include_once @$test_path . 'comm/email/db1_layer_email_manager.php';
    include_once @$test_path . 'comm/email/db1_layer_email_manager_xml.php';
    include_once @$test_path . 'comm/email/email_connection.php';
    include_once @$test_path . 'comm/email/email_logging.php';


    include_once @$test_path . 'comm/sms/db1_layer_sms.php';
    include_once @$test_path . 'comm/sms/db1_layer_sms_xml.php';
    include_once @$test_path . 'comm/sms/db1_layer_sms_default_message.php';
    include_once @$test_path . 'comm/sms/db1_layer_sms_default_message_xml.php';
    include_once @$test_path . 'comm/sms/db1_layer_sms_module_manager.php';
    include_once @$test_path . 'comm/sms/db1_layer_sms_module_manager_xml.php';
    include_once @$test_path . 'comm/sms/db1_layer_sms_manager.php';
    include_once @$test_path . 'comm/sms/db1_layer_sms_manager_xml.php';
    include_once @$test_path . 'comm/sms/sms_connection.php';
    include_once @$test_path . 'comm/sms/sms_logging.php';


    include_once @$test_path . 'communication_manager.php';
    include_once @$test_path . 'display_class.php';
    include_once @$test_path . 'display_default_message_class.php';
    include_once @$test_path . 'display_manager_class.php';
    include_once @$test_path . 'display_module_manager_class.php';
    include_once @$test_path . 'email_class.php';
    include_once @$test_path . 'email_default_message_class.php';
    include_once @$test_path . 'email_manager_class.php';
    include_once @$test_path . 'email_module_manager_class.php';
    include_once @$test_path . 'sms_class.php';
    include_once @$test_path . 'sms_default_message_class.php';
    include_once @$test_path . 'sms_manager_class.php';
    include_once @$test_path . 'sms_module_manager_class.php';

    include_once @$test_path . 'display_db_wrapper.php';
    include_once @$test_path . 'sms_db_wrapper.php';
    include_once @$test_path . 'email_db_wrapper.php';



    /*!
     *  @brief Function to insert Communication Manager
     *  @param  $testObj - object - Communication object
     *  @return $testObj - Object - Insertion id set as message in object
     */
    function addCommunicationManager($testObj)
    {

        $msg = '';

        $sCommunicationType = $testObj->sCommunicationType;
        $aMessageType = $testObj->aMessageType;
        $aMessage = $testObj->aMessage;
        $iNumMessage = count($aMessageType);
        $iFromUserId = $testObj->iFromUserId;
        $sRepeat = $testObj->sRepeat;
        $dScheduleDate = $testObj->dScheduleDate;
        $dExpireDate = $testObj->dExpireDate;
        $iFrequency = $testObj->iFrequency;
        $iUserNo = $testObj->iUserNo;
        $dCreatedDate = $testObj->dCreatedDate;
        $tCreatedTime = $testObj->tCreatedTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        if($sCommunicationType != "COMM_DISPLAY" && $sCommunicationType != "COMM_EMAIL" && $sCommunicationType != "COMM_SMS" && $sCommunicationType != "COMM_DISPLAY_EMAIL" && $sCommunicationType != "COMM_DISPLAY_SMS" && $sCommunicationType != "COMM_EMAIL_SMS" && $sCommunicationType != "COMM_DISPLAY_EMAIL_SMS" )
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($iNumMessage == 0)
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iFromUserId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sRepeat != "no" && $sRepeat != "yes")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($dExpireDate != "")
        {
            if(!comm_is_date($dExpireDate) && !comm_is_user_date($dExpireDate) && $dExpireDate != '')
            {
                $msg = INVALID_DATA;
                return $msg;
            }
            else if(comm_is_user_date($dExpireDate))
            {
                $dExpireDate = comm_getDateMonthYear($dExpireDate);
            }
        }
        else
        {
            $dExpireDate = "0000-00-00";
        }

        if($iFrequency != "")
        {
            if(!is_numeric($iFrequency))
            {
                $msg = INVALID_DATA;
                return $msg;
            }
            else
            {
                if($iFrequency <= 0)
                {
                    $msg = INVALID_DATA;
                    return $msg;
                }
            }
        }

        if(!comm_is_date($dScheduleDate) && !comm_is_user_date($dScheduleDate) && $dScheduleDate != '')
        {
            $msg = INVALID_DATA;
            return $msg;
        }
        else if(comm_is_user_date($dScheduleDate))
        {
            $dScheduleDate = comm_getDateMonthYear($dScheduleDate);
        }

        if(!is_numeric($iUserNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!comm_is_date($dCreatedDate) && !comm_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(comm_is_user_date($dCreatedDate))
        {
            $dCreatedDate = comm_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!comm_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }


        $testObj->iCommunicationManagerNo = insertCommunicationManagerDetails($sCommunicationType,"","",$iFromUserId,$dScheduleDate,$sRepeat,$dExpireDate,$iFrequency,$iUserNo,$dCreatedDate,$tCreatedTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iCommunicationManagerNo;

        //Insert in xml file
        if(is_numeric($testObj->iCommunicationManagerNo))
        {
            $ids = array();

            for($ii = 0 ; $ii < count($aMessage) ; $ii++)
            {

                if($aMessageType[$ii] == "display")
                {
                    $dis_obj = new rtCommDisplay();

                    $dis_obj->sDisplayToName = $aMessage[$ii]->sDisplayToName;
                    $dis_obj->iDisplayToUserId = $aMessage[$ii]->iDisplayToUserId;
                    $dis_obj->sTag = $aMessage[$ii]->sTag;
                    $dis_obj->sMessage = $aMessage[$ii]->sMessage;
                    $dis_obj->dScheduledDate = $aMessage[$ii]->dScheduledDate;
                    $dis_obj->tScheduledTime = $aMessage[$ii]->tScheduledTime;
                    $dis_obj->sModuleName = $aMessage[$ii]->sModuleName;
                    $dis_obj->iModuleId = $aMessage[$ii]->iModuleId;
                    $dis_obj->iDisplayManagerId = $aMessage[$ii]->iDisplayManagerId;
                    $dis_obj->iUserNo = $iUserNo;
                    $dis_obj->dCreatedDate = $dCreatedDate;
                    $dis_obj->tCreatedTime = $tCreatedTime;
                    $dis_obj->iCommunicationManagerId = $msg;

                    $iid = addDisplay($dis_obj);

                    $ids[] = "d-".$iid;
                }

                if($aMessageType[$ii] == "email")
                {
                    $dis_obj = new rtCommEmail();

                    $dis_obj->aEmailToName = $aMessage[$ii]->aEmailToName;
                    $dis_obj->aEmailToEmailId = $aMessage[$ii]->aEmailToEmailId;
                    $dis_obj->sEmailFromName = $aMessage[$ii]->sEmailFromName;
                    $dis_obj->sEmailFromEmailId = $aMessage[$ii]->sEmailFromEmailId;
                    $dis_obj->sSubject = $aMessage[$ii]->sSubject;
                    $dis_obj->sMessage = $aMessage[$ii]->sMessage;
                    $dis_obj->aAttachment = $aMessage[$ii]->aAttachment;
                    $dis_obj->dScheduledDate = $aMessage[$ii]->dScheduledDate;
                    $dis_obj->tScheduledTime = $aMessage[$ii]->tScheduledTime;
                    $dis_obj->sModuleName = $aMessage[$ii]->sModuleName;
                    $dis_obj->iModuleId = $aMessage[$ii]->iModuleId;
                    $dis_obj->sStatus = $aMessage[$ii]->sStatus;
                    $dis_obj->dSentDate = $aMessage[$ii]->dSentDate;
                    $dis_obj->tSentTime = $aMessage[$ii]->tSentTime;
                    $dis_obj->iEmailManagerId = $aMessage[$ii]->iEmailManagerId;
                    $dis_obj->iUserNo = $iUserNo;
                    $dis_obj->dCreatedDate = $dCreatedDate;
                    $dis_obj->tCreatedTime = $tCreatedTime;
                    $dis_obj->iCommunicationManagerId = $msg;

                    $iid = addEmail($dis_obj);

                    $ids[] = "e-".$iid;
                }

                if($aMessageType[$ii] == "sms")
                {
                    $dis_obj = new rtCommSMS();

                    $dis_obj->aSMSToName = $aMessage[$ii]->aSMSToName;
                    $dis_obj->aSMSToMobileNo = $aMessage[$ii]->aSMSToMobileNo;
                    $dis_obj->sSMSFromName = $aMessage[$ii]->sSMSFromName;
                    $dis_obj->sSMSFromMobileNo = $aMessage[$ii]->sSMSFromMobileNo;
                    $dis_obj->sMessage = $aMessage[$ii]->sMessage;
                    $dis_obj->dScheduledDate = $aMessage[$ii]->dScheduledDate;
                    $dis_obj->tScheduledTime = $aMessage[$ii]->tScheduledTime;
                    $dis_obj->sModuleName = $aMessage[$ii]->sModuleName;
                    $dis_obj->iModuleId = $aMessage[$ii]->iModuleId;
                    $dis_obj->sStatus = $aMessage[$ii]->sStatus;
                    $dis_obj->dSentDate = $aMessage[$ii]->dSentDate;
                    $dis_obj->tSentTime = $aMessage[$ii]->tSentTime;
                    $dis_obj->iSMSManagerId = $aMessage[$ii]->iSMSManagerId;
                    $dis_obj->iUserNo = $iUserNo;
                    $dis_obj->dCreatedDate = $dCreatedDate;
                    $dis_obj->tCreatedTime = $tCreatedTime;
                    $dis_obj->iCommunicationManagerId = $msg;

                    $iid = addSMS($dis_obj);

                    $ids[] = "s-".$iid;
                }
            }

            $error = updateCommunicationManagerDetails($msg,$sCommunicationType,implode(",",$ids),"",$iFromUserId,$dScheduleDate,$sRepeat,$dExpireDate,$iFrequency,$iUserNo,$dCreatedDate,$tCreatedTime,$sExtra1,$sExtra2,$sExtra3);

            $xmlFileInsert = insertCommunicationManagerDetailsXML($msg,$sCommunicationType,$ids,$aMessageType,"",$iFromUserId,comm_getDateMonthYear($dScheduleDate),$sRepeat,comm_getDateMonthYear($dExpireDate),$iFrequency,$iUserNo,comm_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$sExtra1,$sExtra2,$sExtra3);
        }
        //print_r($msg);   exit;
        return $msg;
    }


    /*!
     *  @brief Function to Retrieve Communication Manager Communication id
     *  @param  $testObj - object - Communication object
     *  @return $testObj - Object - Insertion id set as message in object
     */
    function retrieveCommunicationManagerForId($testObj)
    {
        $msg = '';

        $iCommunicationManagerNo = $testObj->iCommunicationManagerNo;

        //! Parameter Check

        if(!is_numeric($iCommunicationManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getCommForCommIdXML($iCommunicationManagerNo);


        if(isset($data->type))
        {

            $testObj->sCommunicationType = (string)$data->type;

            for($ii = 0 ; $ii < (int)$data->num_comm_message ; $ii++)
            {
                $aMessage = (string)$data->comm_message[$ii]->id;
                $mm = explode("-",$aMessage);

                $testObj->aMessageType[] = (string)$data->comm_message[$ii]->type;

                if(@$mm[0] == "d")
                {
                    $dis_obj = new rtCommDisplay();

                    $dis_obj->iDisplayNo = @$mm[1];

                    $testObj->aMessage[] = retrieveDisplayFromId($dis_obj);
                }
                if(@$mm[0] == "e")
                {
                    $dis_obj = new rtCommEmail();

                    $dis_obj->iEmailNo = @$mm[1];

                    $testObj->aMessage[] = retrieveEmailFromId($dis_obj);
                }
                if(@$mm[0] == "s")
                {
                    $dis_obj = new rtCommSMS();

                    $dis_obj->iSMSNo = @$mm[1];

                    $testObj->aMessage[] = retrieveSMSFromId($dis_obj);
                }
            }

            $testObj->iNumMessage = (int)$data->num_comm_message;
            $testObj->iFromUserId = (int)$data->from_user_id;
            $testObj->sRepeat = (string)$data->repeat;
            $testObj->dScheduleDate = (string)$data->schedule_date;
            $testObj->dExpireDate = (string)$data->expire_date;
            $testObj->iFrequency = (int)$data->frequency;
            $testObj->iUserNo = (int)$data->created->user_no;
            $testObj->dCreatedDate = (string)$data->created->date;
            $testObj->tCreatedTime = (string)$data->created->time;
            $testObj->iLastUpdateUserId = (int)$data->last_updated->user_no;
            $testObj->dLastUpdateDate = (string)$data->last_updated->date;
            $testObj->tLastUpdateTime = (string)$data->last_updated->time;
            $testObj->sExtra1 = (string)$data->extra1;
            $testObj->sExtra2 = (string)$data->extra2;
            $testObj->sExtra3 = (string)$data->extra3;
        }

        return $testObj;
    }


    /*!
     *  @brief Function to Retrieve Communication Manager Communication Repeat
     *  @param  $testObj - object - Communication object
     *  @return $testObj - Object - Insertion id set as message in object
     */
    function retrieveCommunicationManagerForRepeat($testObj)
    {
        $msg = '';

        $sRepeat = $testObj->sRepeat;

        //! Parameter Check

        $data1 = getCommForCommRepeatXML($sRepeat);

        $testObj1 = array();

        $ll = 0;

        foreach($data1 as $data)
        {
            $testObj1[$ll] = new rtCommunicationManager();

            $testObj1[$ll]->iCommunicationManagerNo = (int)$data->comm_manager_no;

            $testObj1[$ll]->sCommunicationType = (string)$data->type;

            for($ii = 0 ; $ii < (int)$data->num_comm_message ; $ii++)
            {
                $aMessage = (string)$data->comm_message[$ii]->id;
                $mm = explode("-",$aMessage);

                $testObj1[$ll]->aMessageType[] = (string)$data->comm_message[$ii]->type;

                if(@$mm[0] == "d")
                {
                    $dis_obj = new rtCommDisplay();

                    $dis_obj->iDisplayNo = @$mm[1];

                    $testObj1[$ll]->aMessage[] = retrieveDisplayFromId($dis_obj);
                }
                if(@$mm[0] == "e")
                {
                    $dis_obj = new rtCommEmail();

                    $dis_obj->iEmailNo = @$mm[1];

                    $testObj1[$ll]->aMessage[] = retrieveEmailFromId($dis_obj);
                }
                if(@$mm[0] == "s")
                {
                    $dis_obj = new rtCommSMS();

                    $dis_obj->iSMSNo = @$mm[1];

                    $testObj1[$ll]->aMessage[] = retrieveSMSFromId($dis_obj);
                }
            }

            $testObj1[$ll]->iNumMessage = (int)$data->num_comm_message;
            $testObj1[$ll]->iFromUserId = (int)$data->from_user_id;
            $testObj1[$ll]->sRepeat = (string)$data->repeat;
            $testObj1[$ll]->dScheduleDate = (string)$data->schedule_date;
            $testObj1[$ll]->dExpireDate = (string)$data->expire_date;
            $testObj1[$ll]->iFrequency = (int)$data->frequency;
            $testObj1[$ll]->iUserNo = (int)$data->created->user_no;
            $testObj1[$ll]->dCreatedDate = (string)$data->created->date;
            $testObj1[$ll]->tCreatedTime = (string)$data->created->time;
            $testObj1[$ll]->iLastUpdateUserId = (int)$data->last_updated->user_no;
            $testObj1[$ll]->dLastUpdateDate = (string)$data->last_updated->date;
            $testObj1[$ll]->tLastUpdateTime = (string)$data->last_updated->time;
            $testObj1[$ll]->sExtra1 = (string)$data->extra1;
            $testObj1[$ll]->sExtra2 = (string)$data->extra2;
            $testObj1[$ll]->sExtra3 = (string)$data->extra3;

            $ll++;
        }

        return $testObj1;
    }



    /*!
     *  @brief Function to Remove Communication Manager Communication id
     *  @param  $testObj - object - Communication object
     *  @return $testObj - Object - Insertion id set as message in object
     */
    function removeCommunicationManager($testObj)
    {
        $msg = '';

        $iCommunicationManagerNo = $testObj->iCommunicationManagerNo;

        //! Parameter Check

        if(!is_numeric($iCommunicationManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getCommForCommIdXML($iCommunicationManagerNo);

        $error = 0;

        if(isset($data->type))
        {

            for($ii = 0 ; $ii < (int)$data->num_comm_message ; $ii++)
            {
                $aMessage = (string)$data->comm_message[$ii]->id;
                $mm = explode("-",$aMessage);

                if(@$mm[0] == "d")
                {
                    $dis_obj = new rtCommDisplay();

                    $dis_obj->iDisplayNo = @$mm[1];

                    $error = removeDisplay($dis_obj);
                }
                if(@$mm[0] == "e")
                {
                    $dis_obj = new rtCommEmail();

                    $dis_obj->iEmailNo = @$mm[1];

                    $error = removeEmail($dis_obj);
                }
                if(@$mm[0] == "s")
                {
                    $dis_obj = new rtCommSMS();

                    $dis_obj->iSMSNo = @$mm[1];

                    $error = removeSMS($dis_obj);
                }
            }

            $error = deleteCommunicationManagerDetailsXML($iCommunicationManagerNo);

            $error = deleteCommunicationManagerDetails($iCommunicationManagerNo);
        }

        return $error;
    }




    /*!
     *  @brief Function to insert SMS Default Message
     *  @param  $testObj        - object            - SMS Default Message object
     *  @return $msg            - Int               - Insertion id or set as message
     */
    function addCommSMSDefaultMessage($testObj)
    {
        $msg = '';

        $msg = addSMSDefaultMessage($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Update SMS Default Message
     *  @param  $testObj        - object            -   SMS Default Message object
     *  @return $msg            - String            -   set as message
     */
    function saveCommSMSDefaultMessage($testObj)
    {
        $msg = '';

        $msg = saveSMSDefaultMessage($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Remove SMS Default Message
     *  @param  $testObj        - object            -   SMS Default Message object
     *  @return $msg            - String            -   set as message
     */
    function removeCommSMSDefaultMessage($testObj)
    {
        $msg = '';

        $msg = removeSMSDefaultMessage($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All SMS Default Message
     *  @return $mData            - Array of Object           -   Data Array
     */
    function retrieveCommAllSMSDefaultMessage()
    {
        $mData = array();

        $mData = retrieveAllSMSDefaultMessage();

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve SMS Default Message for an Id
     *  @param  $testObj        - object            -   SMS Default Message object
     *  @return $mData          - object            -   Data Object
     */
    function retrieveCommSMSDefaultMessageFromId($testObj)
    {
        $mData = retrieveSMSDefaultMessageFromId($testObj);

        return $mData;
    }

    /*!
     *  @brief Function to Add SMS Manager
     *  @param  $testObj        -       object      -   SMS Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addCommSMSManager($testObj)
    {
        $msg = '';

        $msg = addSMSManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Updated SMS Manager
     *  @param  $testObj        -       object      -   SMS Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveCommSMSManager($testObj)
    {
        $msg = '';

        $msg = saveSMSManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Remove SMS Manager
     *  @param  $testObj        -       object      -   SMS Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeCommSMSManager($testObj)
    {
        $msg = '';

        $msg = removeSMSManager($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve all SMS Manager
     *  @return $mData            -       Array         -   array of object of sms manager
     */
    function retrieveCommAllSMSManager()
    {
        $mData = array();

        $mData = retrieveAllSMSManager();

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve SMS Manager For Id
     *  @param  $testObj        -       object      -   SMS Manager object
     *  @return $mData          -       Object      -   Data object
     */
    function retrieveCommSMSManagerFromId($testObj)
    {
        $mData = retrieveSMSManagerFromId($testObj);

        return $mData;
    }


    /*!
     *  @brief Function to Add SMS Module Manager
     *  @param  $testObj        -       object      -   SMS Module Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addCommSMSModuleManager($testObj)
    {
        $msg = '';

        $msg = addSMSModuleManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Update SMS Module Manager
     *  @param  $testObj        -       object      -   SMS Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveCommSMSModuleManager($testObj)
    {
        $msg = '';

        $msg = saveSMSModuleManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Remove SMS Module Manager
     *  @param  $testObj        -       object      -   SMS Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeCommSMSModuleManager($testObj)
    {
        $msg = '';

        $msg = removeSMSModuleManager($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All SMS Module Manager
     *  @return $mData            -       Array         -   array of object of DMM
     */
    function retrieveCommAllSMSModuleManager()
    {
        $mData = array();

        $mData = retrieveAllSMSModuleManager();

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve  SMS Module Manager for id
     *  @param  $testObj        -       object      -   SMS Module Manager object
     *  @return $mData          -       object      -   Data object
     */
    function retrieveCommSMSModuleManagerFromId($testObj)
    {
        $mData = retrieveSMSModuleManagerFromId($testObj);

        return $mData;
    }




    /*!
     *  @brief Function to Add SMS
     *  @param  $testObj        -       object      -   SMS object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addCommSMS($testObj)
    {
        $msg = '';

        $msg = addSMS($testObj);

        return $msg;
    }



    /*!
     *  @brief Function to Update SMS
     *  @param  $testObj        -       object      -   SMS object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function saveCommSMS($testObj)
    {
        $msg = '';

        $msg = saveSMS($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Retrieve SMS  for id
     *  @param  $testObj        -       object      -   SMS object
     *  @return $mdata          -       object      -   SMS object with data filled in
     */
    function retrieveCommSMSFromId($testObj)
    {
        $mData = retrieveSMSFromId($testObj);

        return $mData;
    }


    /*!
     *  @brief Function to Retrieve Pending SMS
     *  @return $mdata          -       object      -   SMS object with data filled in
     */
    function retrieveCommPendingSMS()
    {
        $mData = array();

        $mData = retrievePendingSMS();

        return $mData;
    }

    /*!
     *  @brief Function to Remove SMS
     *  @param  $testObj        -       object      -   SMS object
     *  @return $msg            -       String      -   set as message
     */
    function removeCommSMS($testObj)
    {
        $msg = '';

        $msg = removeSMS($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to insert Display Default Message
     *  @param  $testObj        - object            - Display Default Message object
     *  @return $msg            - Int               - Insertion id or set as message
     */
    function addCommDisplayDefaultMessage($testObj)
    {
        $msg = '';

        $msg = addDisplayDefaultMessage($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Update Display Default Message
     *  @param  $testObj        - object            -   Display Default Message object
     *  @return $msg            - String            -   set as message
     */
    function saveCommDisplayDefaultMessage($testObj)
    {
        $msg = '';

        $msg = saveDisplayDefaultMessage($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Remove Display Default Message
     *  @param  $testObj        - object            -   Display Default Message object
     *  @return $msg            - String            -   set as message
     */
    function removeCommDisplayDefaultMessage($testObj)
    {
        $msg = '';

        $msg = removeDisplayDefaultMessage($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All Display Default Message
     *  @return $mData            - Array of Object           -   Data Array
     */
    function retrieveCommAllDisplayDefaultMessage()
    {
        $mData = array();

        $mData = retrieveAllDisplayDefaultMessage();

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve Display Default Message for an Id
     *  @param  $testObj        - object            -   Display Default Message object
     *  @return $mData          - object            -   Data Object
     */
    function retrieveCommDisplayDefaultMessageFromId($testObj)
    {
        $mData = retrieveDisplayDefaultMessageFromId($testObj);

        return $mData;
    }

    /*!
     *  @brief Function to Add Display Manager
     *  @param  $testObj        -       object      -   Display Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addCommDisplayManager($testObj)
    {
        $msg = '';

        $msg = addDisplayManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Updated Display Manager
     *  @param  $testObj        -       object      -   Display Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveCommDisplayManager($testObj)
    {
        $msg = '';

        $msg = saveDisplayManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Remove Display Manager
     *  @param  $testObj        -       object      -   Display Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeCommDisplayManager($testObj)
    {
        $msg = '';

        $msg = removeDisplayManager($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve all Display Manager
     *  @return $mData            -       Array         -   array of object of display manager
     */
    function retrieveCommAllDisplayManager()
    {
        $mData = '';

        $mData = retrieveAllDisplayManager();

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve Display Manager For Id
     *  @param  $testObj        -       object      -   Display Manager object
     *  @return $mData          -       Object      -   Data object
     */
    function retrieveCommDisplayManagerFromId($testObj)
    {
        $mData = retrieveDisplayManagerFromId($testObj);

        return $mData;
    }


    /*!
     *  @brief Function to Add Display Module Manager
     *  @param  $testObj        -       object      -   Display Module Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addCommDisplayModuleManager($testObj)
    {
        $msg = '';

        $msg = addDisplayModuleManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Update Display Module Manager
     *  @param  $testObj        -       object      -   Display Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveCommDisplayModuleManager($testObj)
    {
        $msg = '';

        $msg = saveDisplayModuleManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Remove Display Module Manager
     *  @param  $testObj        -       object      -   Display Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeCommDisplayModuleManager($testObj)
    {
        $msg = '';

        $msg = removeDisplayModuleManager($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All Display Module Manager
     *  @return $mData            -       Array         -   array of object of DMM
     */
    function retrieveCommAllDisplayModuleManager()
    {
        $mData = array();

        $mData = retrieveAllDisplayModuleManager();

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve  Display Module Manager for id
     *  @param  $testObj        -       object      -   Display Module Manager object
     *  @return $mData          -       object      -   Data object
     */
    function retrieveCommDisplayModuleManagerFromId($testObj)
    {
        $mData = retrieveDisplayModuleManagerFromId($testObj);

        return $mData;
    }




    /*!
     *  @brief Function to Add Display
     *  @param  $testObj        -       object      -   Display object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addCommDisplay($testObj)
    {
        $msg = '';

        $msg = addDisplay($testObj);

        return $msg;
    }



    /*!
     *  @brief Function to Add Display
     *  @param  $testObj        -       object      -   Display object
     *  @return $msg            -       String      -   set as message
     */
    function saveCommDisplay($testObj)
    {
        $msg = '';

        $msg = saveDisplay($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Retrieve Display  for id
     *  @param  $testObj        -       object      -   Display object
     *  @return $mdata          -       object      -   Display object with data filled in
     */
    function retrieveCommDisplayFromId($testObj)
    {
        $mData = retrieveDisplayFromId($testObj);

        return $mData;
    }


    /*!
     *  @brief Function to Retrieve Display  for Scheduled date
     *  @param  $testObj        -       object      -   Display object
     *  @return $mdata          -       object      -   Display object with data filled in
     */
    function retrieveCommDisplayFromScheduleDate($testObj)
    {
        $mData = retrieveDisplayFromScheduleDate($testObj);

        return $mData;
    }

    /*!
     *  @brief Function to Remove Display
     *  @param  $testObj        -       object      -   Display object
     *  @return $msg            -       String      -   set as message
     */
    function removeCommDisplay($testObj)
    {
        $msg = '';

        $msg = removeDisplay($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to insert Email Default Message
     *  @param  $testObj        - object            - Email Default Message object
     *  @return $msg            - Int               - Insertion id or set as message
     */
    function addCommEmailDefaultMessage($testObj)
    {
        $msg = '';

        $msg = addEmailDefaultMessage($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Update Email Default Message
     *  @param  $testObj        - object            -   Email Default Message object
     *  @return $msg            - String            -   set as message
     */
    function saveCommEmailDefaultMessage($testObj)
    {
        $msg = '';

        $msg = saveEmailDefaultMessage($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Remove Email Default Message
     *  @param  $testObj        - object            -   Email Default Message object
     *  @return $msg            - String            -   set as message
     */
    function removeCommEmailDefaultMessage($testObj)
    {
        $msg = '';

        $msg = removeEmailDefaultMessage($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All Email Default Message
     *  @return $mData            - Array of Object           -   Data Array
     */
    function retrieveCommAllEmailDefaultMessage()
    {
        $mData = array();

        $mData = retrieveAllEmailDefaultMessage();

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve Email Default Message for an Id
     *  @param  $testObj        - object            -   Email Default Message object
     *  @return $mData          - object            -   Data Object
     */
    function retrieveCommEmailDefaultMessageFromId($testObj)
    {
        $mData = retrieveEmailDefaultMessageFromId($testObj);

        return $mData;
    }

    /*!
     *  @brief Function to Add Email Manager
     *  @param  $testObj        -       object      -   Email Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addCommEmailManager($testObj)
    {
        $msg = '';

        $msg = addEmailManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Updated Email Manager
     *  @param  $testObj        -       object      -   Email Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveCommEmailManager($testObj)
    {
        $msg = '';

        $msg = saveEmailManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Remove Email Manager
     *  @param  $testObj        -       object      -   Email Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeCommEmailManager($testObj)
    {
        $msg = '';

        $msg = removeEmailManager($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve all Email Manager
     *  @return $mData            -       Array         -   array of object of email manager
     */
    function retrieveCommAllEmailManager()
    {
        $mData = array();

        $mData = retrieveAllEmailManager();

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve Email Manager For Id
     *  @param  $testObj        -       object      -   Email Manager object
     *  @return $mData          -       Object      -   Data object
     */
    function retrieveCommEmailManagerFromId($testObj)
    {
        $mData = array();

        $mData = retrieveEmailManagerFromId();

        return $mData;
    }


    /*!
     *  @brief Function to Add Email Module Manager
     *  @param  $testObj        -       object      -   Email Module Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addCommEmailModuleManager($testObj)
    {
        $msg = '';

        $msg = addEmailModuleManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Update Email Module Manager
     *  @param  $testObj        -       object      -   Email Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveCommEmailModuleManager($testObj)
    {
        $msg = '';

        $msg = saveEmailModuleManager($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Remove Email Module Manager
     *  @param  $testObj        -       object      -   Email Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeCommEmailModuleManager($testObj)
    {
        $msg = '';

        $msg = removeEmailModuleManager($testObj);

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All Email Module Manager
     *  @return $mData            -       Array         -   array of object of DMM
     */
    function retrieveCommAllEmailModuleManager()
    {
        $mData = array();

        $mData = retrieveAllEmailModuleManager();

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve  Email Module Manager for id
     *  @param  $testObj        -       object      -   Email Module Manager object
     *  @return $mData          -       object      -   Data object
     */
    function retrieveCommEmailModuleManagerFromId($testObj)
    {
        $mData = retrieveEmailModuleManagerFromId($testObj);

        return $mData;
    }




    /*!
     *  @brief Function to Add Email
     *  @param  $testObj        -       object      -   Email object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addCommEmail($testObj)
    {
        $msg = '';

        $msg = addEmail($testObj);

        return $msg;
    }



    /*!
     *  @brief Function to Save Email
     *  @param  $testObj        -       object      -   Email object
     *  @return $msg            -       String      -   set as message
     */
    function saveCommEmail($testObj)
    {
        $msg = '';

        $msg = saveEmail($testObj);

        return $msg;
    }


    /*!
     *  @brief Function to Retrieve Email  for id
     *  @param  $testObj        -       object      -   Email object
     *  @return $mdata          -       object      -   Email object with data filled in
     */
    function retrieveCommEmailFromId($testObj)
    {
        $mData = retrieveEmailFromId($testObj);

        return $mData;
    }


    /*!
     *  @brief Function to Retrieve Pending Mail Email  for id
     *  @return $mdata          -       object      -   Email object with data filled in
     */
    function retrieveCommPendingEmail()
    {
        $mData = array();

        $mData = retrievePendingEmail();

        return $mData;
    }


    /*!
     *  @brief Function to Remove Email
     *  @param  $testObj        -       object      -   Email object
     *  @return $msg            -       String      -   set as message
     */
    function removeCommEmail($testObj)
    {
        $msg = '';

        $msg = removeEmail($testObj);

        return $msg;
    }



    function comm_is_date($date)
    {

      @list($year,$month,$day) = explode('-',$date);
      if(!(is_numeric($year)) || (strlen($year)!= 4))
      {
        return(FALSE);
      } else if(!is_numeric($month) || ($month > 12 || $month < 1) || (strlen($month)!= 2))
      {
          return(FALSE);
      } else if(!is_numeric($day) || ($day < 1) || (strlen($day)!= 2))
       {
          return(FALSE);
       } else if ((($month == '01') || ($month == '03') || ($month == '05') || ($month == '07') || ($month == '08') || ($month == '10') || ($month == '12')) && ($day > 31))
        {
          return(FALSE);
        } else if ((($month == '04') || ($month == '06') || ($month == '09') || ($month == '11')) && ($day > 30))
        {
          return(FALSE);
        } else
        {
          if(((($year % 4 == 0) && ($year % 100 != 0)) || (($year % 4 == 0) && ($year % 100 == 0) && ($year % 400 == 0))))
          {

             if((($month == '02' && $day > 29)))
             {
                return(FALSE);
             }
          } else if ($month == '02' && $day > 28)
          {

             return(FALSE);
          }
        }

      return(TRUE);
 }


 function comm_is_user_date($date)
 {

      @list($day, $month, $year) = explode('-',$date);
      if(!(is_numeric($year)) || (strlen($year)!= 4))
      {
        return(FALSE);
      } else if(!is_numeric($month) || ($month > 12 || $month < 1) || (strlen($month)!= 2))
      {
          return(FALSE);
      } else if(!is_numeric($day) || ($day < 1) || (strlen($day)!= 2))
       {
          return(FALSE);
       } else if ((($month == '01') || ($month == '03') || ($month == '05') || ($month == '07') || ($month == '08') || ($month == '10') || ($month == '12')) && ($day > 31))
        {
          return(FALSE);
        } else if ((($month == '04') || ($month == '06') || ($month == '09') || ($month == '11')) && ($day > 30))
        {
          return(FALSE);
        } else
        {
          if(((($year % 4 == 0) && ($year % 100 != 0)) || (($year % 4 == 0) && ($year % 100 == 0) && ($year % 400 == 0))))
          {

             if((($month == '02' && $day > 29)))
             {
                return(FALSE);
             }
          } else if ($month == '02' && $day > 28)
          {

             return(FALSE);
          }
        }

      return(TRUE);
 }

 function comm_is_time($time)
 {

      @list($hour,$min,$sec) = explode(':',$time);
      if((!is_numeric($hour)) || (strlen($hour)!= 2) || ($hour > 23) || ($hour<0))
      {
        return(FALSE);
      } else if(!is_numeric($min) || ($min > 59 || $min < 0) || (strlen($min)!= 2))
      {
          return(FALSE);
      } else if(!is_numeric($sec) || ($sec < 0) || ($sec > 59) || (strlen($sec)!= 2))
       {
          return(FALSE);
       }

      return(TRUE);
 }

 function comm_getDateMonthYear($date)
 {
    $ee = "";
    $dd = explode("-",$date);
    if(isset($dd[2]))
    {
        $ee = @$dd[2] ."-" . @$dd[1] ."-" . @$dd[0];
    }

    return $ee;
 }

?>