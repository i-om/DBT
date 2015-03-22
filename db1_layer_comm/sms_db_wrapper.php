<?php
    /**************************************************************************
     *                                                                        *
     *  SMS Wrapper                                                       *
     *                                                                        *
     **************************************************************************/

    //including Necessary Db files
    $sms_xml_file_path = @$path1. "comm/sms/";

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


    include_once @$test_path . 'sms_class.php';
    include_once @$test_path . 'sms_default_message_class.php';
    include_once @$test_path . 'sms_manager_class.php';
    include_once @$test_path . 'sms_module_manager_class.php';



    /*!
     *  @brief Function to insert SMS Default Message
     *  @param  $testObj        - object            - SMS Default Message object
     *  @return $msg            - Int               - Insertion id or set as message
     */
    function addSMSDefaultMessage($testObj)
    {

        $msg = '';

        $sName = $testObj->sName;
        $sMessage = $testObj->sMessage;
        $iUserNo = $testObj->iUserNo;
        $dCreatedDate = $testObj->dCreatedDate;
        $tCreatedTime = $testObj->tCreatedTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        if($sName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sMessage == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iUserNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_date($dCreatedDate) && !sms_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(sms_is_user_date($dCreatedDate))
        {
            $dCreatedDate = sms_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!sms_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }


        $testObj->iMessageNo = insertSMSDefaultMessageDetails($sName,$sMessage,$iUserNo,$dCreatedDate,$tCreatedTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iMessageNo;

        //Insert in xml file
        if(is_numeric($testObj->iMessageNo))
        {
            $xmlFileInsert = insertSMSDefaultMessageDetailsXML($msg,$sName,$sMessage,$iUserNo,sms_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Update SMS Default Message
     *  @param  $testObj        - object            -   SMS Default Message object
     *  @return $msg            - String            -   set as message
     */
    function saveSMSDefaultMessage($testObj)
    {

        $msg = '';

        $iMessageNo = $testObj->iMessageNo;
        $sName = $testObj->sName;
        $sMessage = $testObj->sMessage;
        $iLastUpdateUserId = $testObj->iLastUpdateUserId;
        $dLastUpdateDate = $testObj->dLastUpdateDate;
        $tLastUpdateTime = $testObj->tLastUpdateTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        if(!is_numeric($iMessageNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sMessage == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iLastUpdateUserId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_date($dLastUpdateDate) && !sms_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(sms_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = sms_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!sms_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }


        $testObj->iMessageNo = updateSMSDefaultMessageDetails($iMessageNo,$sName,$sMessage,$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iMessageNo;

        //Insert in xml file
        if($msg == "M1001")
        {
            $xmlFileInsert = updateSMSDefaultMessageDetailsXML($iMessageNo,$sName,$sMessage,$iLastUpdateUserId,sms_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Remove SMS Default Message
     *  @param  $testObj        - object            -   SMS Default Message object
     *  @return $msg            - String            -   set as message
     */
    function removeSMSDefaultMessage($testObj)
    {

        $msg = '';

        $iMessageNo = $testObj->iMessageNo;


        //! Parameter Check
        if(!is_numeric($iMessageNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteSMSDefaultMessageDetails($iMessageNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteSMSDefaultMessageDetailsXML($iMessageNo);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All SMS Default Message
     *  @return $mData            - Array of Object           -   Data Array
     */
    function retrieveAllSMSDefaultMessage()
    {
        $msg = '';

        $data = getSMSDefaultMessageAllXML();

        $mData = array();

        $ii = 0;

        foreach($data as $val)
        {
            $mData[$ii] = new rtCommDefaultSMSMessage();

            $mData[$ii]->iMessageNo = (int)$val->sms_message_no;
            $mData[$ii]->sName = (string)$val->name;
            $mData[$ii]->sMessage = (string)$val->message;
            $mData[$ii]->iUserNo = (int)$val->created->user_no;
            $mData[$ii]->dCreatedDate = (string)$val->created->date;
            $mData[$ii]->tCreatedTime = (string)$val->created->time;
            $mData[$ii]->iLastUpdateUserId = (int)$val->last_updated->user_no;
            $mData[$ii]->dLastUpdateDate = (string)$val->last_updated->date;
            $mData[$ii]->tLastUpdateTime = (string)$val->last_updated->time;
            $mData[$ii]->sExtra1 = (string)$val->extra1;
            $mData[$ii]->sExtra2 = (string)$val->extra2;
            $mData[$ii]->sExtra3 = (string)$val->extra3;

            $ii++;
        }

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve SMS Default Message for an Id
     *  @param  $testObj        - object            -   SMS Default Message object
     *  @return $mData          - object            -   Data Object
     */
    function retrieveSMSDefaultMessageFromId($testObj)
    {
        $msg = '';

        $iMessageNo = $testObj->iMessageNo;


        //! Parameter Check
        if(!is_numeric($iMessageNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getSMSDefaultMessageForIdXML($iMessageNo);

        if(isset($data->name))
        {
            $testObj->sName = (string)$data->name;
            $testObj->sMessage = (string)$data->message;
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
     *  @brief Function to Add SMS Manager
     *  @param  $testObj        -       object      -   SMS Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addSMSManager($testObj)
    {

        $msg = '';

        $sName = $testObj->sName;
        $sPlus91SMSId = $testObj->sPlus91SMSId;
        $sMobileNo = $testObj->sMobileNo;
        $sSenderId = $testObj->sSenderId;
        $sOrganizationName = $testObj->sOrganizationName;
        $iUserNo = $testObj->iUserNo;
        $dCreatedDate = $testObj->dCreatedDate;
        $tCreatedTime = $testObj->tCreatedTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        if($sName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sPlus91SMSId == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sMobileNo == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sSenderId == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iUserNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_date($dCreatedDate) && !sms_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(sms_is_user_date($dCreatedDate))
        {   
            $dCreatedDate = sms_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!sms_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }


        $testObj->iSMSManagerNo = insertSMSManagerDetails($sPlus91SMSId,$sName,$sMobileNo,$sSenderId,$sOrganizationName,$iUserNo,$dCreatedDate,$tCreatedTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iSMSManagerNo;

        //Insert in xml file
        if(is_numeric($testObj->iSMSManagerNo))
        {
            $xmlFileInsert = insertSMSManagerDetailsXML($msg,$sName,$sMobileNo,$sSenderId,$sPlus91SMSId,$sOrganizationName,$iUserNo,sms_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Updated SMS Manager
     *  @param  $testObj        -       object      -   SMS Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveSMSManager($testObj)
    {

        $msg = '';

        $iSMSManagerNo = $testObj->iSMSManagerNo;
        $sName = $testObj->sName;
        $sPlus91SMSId = $testObj->sPlus91SMSId;
        $sMobileNo = $testObj->sMobileNo;
        $sSenderId = $testObj->sSenderId;
        $sOrganizationName = $testObj->sOrganizationName;
        $iLastUpdateUserId = $testObj->iLastUpdateUserId;
        $dLastUpdateDate = $testObj->dLastUpdateDate;
        $tLastUpdateTime = $testObj->tLastUpdateTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        if(!is_numeric($iSMSManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sPlus91SMSId == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sMobileNo == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sSenderId == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iLastUpdateUserId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_date($dLastUpdateDate) && !sms_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(sms_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = sms_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!sms_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }


        $msg = updateSMSManagerDetails($iSMSManagerNo,$sPlus91SMSId,$sName,$sMobileNo,$sSenderId,$sOrganizationName,$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);

        //Insert in xml file
        if($msg == "M1001")
        {
            $xmlFileInsert = updateSMSManagerDetailsXML($iSMSManagerNo,$sName,$sMobileNo,$sSenderId,$sPlus91SMSId,$sOrganizationName,$iLastUpdateUserId,sms_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Remove SMS Manager
     *  @param  $testObj        -       object      -   SMS Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeSMSManager($testObj)
    {

        $msg = '';

        $iSMSManagerNo = $testObj->iSMSManagerNo;


        //! Parameter Check
        if(!is_numeric($iSMSManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteSMSManagerDetails($iSMSManagerNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteSMSManagerDetailsXML($iSMSManagerNo);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve all SMS Manager
     *  @return $mData            -       Array         -   array of object of sms manager
     */
    function retrieveAllSMSManager()
    {
        $msg = '';

        $data = getSMSManagerAllXML();

        $mData = array();

        $ii = 0;

        foreach($data as $val)
        {
            $mData[$ii] = new rtCommSMSManager();

            $mData[$ii]->iSMSManagerNo = (int)$val->manager_no;
            $mData[$ii]->sName = (string)$val->name;
            $mData[$ii]->sPlus91SMSId = (string)$val->plus91_sms_id;
            $mData[$ii]->sMobileNo = (string)$val->mobile_no;
            $mData[$ii]->sSenderId = (string)$val->sender_id;
            $mData[$ii]->sOrganizationName = (string)$val->organization_name;
            $mData[$ii]->iUserNo = (int)$val->created->user_no;
            $mData[$ii]->dCreatedDate = (string)$val->created->date;
            $mData[$ii]->tCreatedTime = (string)$val->created->time;
            $mData[$ii]->iLastUpdateUserId = (int)$val->last_updated->user_no;
            $mData[$ii]->dLastUpdateDate = (string)$val->last_updated->date;
            $mData[$ii]->tLastUpdateTime = (string)$val->last_updated->time;
            $mData[$ii]->sExtra1 = (string)$val->extra1;
            $mData[$ii]->sExtra2 = (string)$val->extra2;
            $mData[$ii]->sExtra3 = (string)$val->extra3;

            $ii++;
        }

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve SMS Manager For Id
     *  @param  $testObj        -       object      -   SMS Manager object
     *  @return $mData          -       Object      -   Data object
     */
    function retrieveSMSManagerFromId($testObj)
    {
        $msg = '';

        $iSMSManagerNo = $testObj->iSMSManagerNo;


        //! Parameter Check
        if(!is_numeric($iSMSManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getSMSManagerForIdXML($iSMSManagerNo);

        if(isset($data->name))
        {
            $testObj->sName = (string)$data->name;
            $testObj->sPlus91SMSId = (string)$data->plus91_sms_id;
            $testObj->sMobileNo = (string)$data->mobile_no;
            $testObj->sSenderId = (string)$data->sender_id;
            $testObj->sOrganizationName = (string)$data->organization_name;
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
     *  @brief Function to Add SMS Module Manager
     *  @param  $testObj        -       object      -   SMS Module Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addSMSModuleManager($testObj)
    {

        $msg = '';

        $sName = $testObj->sName;
        $aSMSManagerId = $testObj->aSMSManagerId;
        $iNumSMSManagerId = count($aSMSManagerId);
        $aDefaultMessageId = $testObj->aDefaultMessageId;
        $iNumDefaultMessageId = count($aDefaultMessageId);
        $iUserNo = $testObj->iUserNo;
        $dCreatedDate = $testObj->dCreatedDate;
        $tCreatedTime = $testObj->tCreatedTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        if($sName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        foreach($aSMSManagerId as $val)
        {
            if(!is_numeric($val))
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        foreach($aDefaultMessageId as $val)
        {
            if(!is_numeric($val))
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if(!is_numeric($iUserNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_date($dCreatedDate) && !sms_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(sms_is_user_date($dCreatedDate))
        {
            $dCreatedDate = sms_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!sms_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }


        $testObj->iSMSModuleManagerNo = insertSMSModuleManagerDetails($sName,implode(",",$aSMSManagerId),implode(",",$aDefaultMessageId),$iUserNo,$dCreatedDate,$tCreatedTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iSMSModuleManagerNo;

        //Insert in xml file
        if(is_numeric($testObj->iSMSModuleManagerNo))
        {
            $xmlFileInsert = insertSMSModuleManagerDetailsXML($msg,$sName,$aSMSManagerId,$aDefaultMessageId,$iUserNo,sms_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Update SMS Module Manager
     *  @param  $testObj        -       object      -   SMS Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveSMSModuleManager($testObj)
    {

        $msg = '';

        $iSMSModuleManagerNo = $testObj->iSMSModuleManagerNo;
        $sName = $testObj->sName;
        $aSMSManagerId = $testObj->aSMSManagerId;
        $iNumSMSManagerId = count($aSMSManagerId);
        $aDefaultMessageId = $testObj->aDefaultMessageId;
        $iNumDefaultMessageId = count($aDefaultMessageId);
        $iLastUpdateUserId = $testObj->iLastUpdateUserId;
        $dLastUpdateDate = $testObj->dLastUpdateDate;
        $tLastUpdateTime = $testObj->tLastUpdateTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;

        //! Parameter Check
        if(!is_numeric($iSMSModuleManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        foreach($aSMSManagerId as $val)
        {
            if(!is_numeric($val))
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        foreach($aDefaultMessageId as $val)
        {
            if(!is_numeric($val))
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if(!is_numeric($iLastUpdateUserId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_date($dLastUpdateDate) && !sms_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(sms_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = sms_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!sms_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }


        $msg = updateSMSModuleManagerDetails($iSMSModuleManagerNo,$sName,implode(",",$aSMSManagerId),implode(",",$aDefaultMessageId),$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);

        //Insert in xml file
        if($msg == "M1001")
        {
            $xmlFileInsert = updateSMSModuleManagerDetailsXML($iSMSModuleManagerNo,$sName,$aSMSManagerId,$aDefaultMessageId,$iLastUpdateUserId,sms_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Remove SMS Module Manager
     *  @param  $testObj        -       object      -   SMS Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeSMSModuleManager($testObj)
    {

        $msg = '';

        $iSMSModuleManagerNo = $testObj->iSMSModuleManagerNo;


        //! Parameter Check
        if(!is_numeric($iSMSModuleManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteSMSModuleManagerDetails($iSMSModuleManagerNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteSMSModuleManagerDetailsXML($iSMSModuleManagerNo);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All SMS Module Manager
     *  @return $mData            -       Array         -   array of object of DMM
     */
    function retrieveAllSMSModuleManager()
    {
        $msg = '';

        $data = getSMSModuleManagerAllXML();

        $mData = array();

        $ii = 0;

        foreach($data as $val)
        {
            $mData[$ii] = new rtCommSMSModuleManager();

            $mData[$ii]->iSMSModuleManagerNo = (int)$val->module_manager_no;
            $mData[$ii]->sName = (string)$val->name;

            for($iii = 0 ; $iii < count($val->sms_manager_no) ; $iii++ )
            {
                if($val->sms_manager_no[$iii] != "")
                    $mData[$ii]->aSMSManagerId[] = (int)$val->sms_manager_no[$iii];
            }

            $mData[$ii]->iNumSMSManagerId = count($mData[$ii]->aSMSManagerId);

            for($iii = 0 ; $iii < count($val->default_message_no) ; $iii++ )
            {
                if($val->default_message_no[$iii] != "")
                    $mData[$ii]->aDefaultMessageId[] = (int)$val->default_message_no[$iii];
            }

            $mData[$ii]->iNumDefaultMessageId = count($mData[$ii]->aDefaultMessageId);

            $mData[$ii]->iUserNo = (int)$val->created->user_no;
            $mData[$ii]->dCreatedDate = (string)$val->created->date;
            $mData[$ii]->tCreatedTime = (string)$val->created->time;
            $mData[$ii]->iLastUpdateUserId = (int)$val->last_updated->user_no;
            $mData[$ii]->dLastUpdateDate = (string)$val->last_updated->date;
            $mData[$ii]->tLastUpdateTime = (string)$val->last_updated->time;
            $mData[$ii]->sExtra1 = (string)$val->extra1;
            $mData[$ii]->sExtra2 = (string)$val->extra2;
            $mData[$ii]->sExtra3 = (string)$val->extra3;

            $ii++;
        }

        return $mData;
    }

    /*!
     *  @brief Function to Retrieve  SMS Module Manager for id
     *  @param  $testObj        -       object      -   SMS Module Manager object
     *  @return $mData          -       object      -   Data object
     */
    function retrieveSMSModuleManagerFromId($testObj)
    {
        $msg = '';

        $iSMSModuleManagerNo = $testObj->iSMSModuleManagerNo;


        //! Parameter Check
        if(!is_numeric($iSMSModuleManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getSMSModuleManagerForIdXML($iSMSModuleManagerNo);

        if(isset($data->name))
        {
            $testObj->sName = (string)$data->name;


            for($iii = 0 ; $iii < count($data->sms_manager_no) ; $iii++ )
            {
                if($data->sms_manager_no[$iii] != "")
                    $testObj->aSMSManagerId[] = (int)$data->sms_manager_no[$iii];
            }

            $testObj->iNumSMSManagerId = count($testObj->aSMSManagerId);

            for($iii = 0 ; $iii < count($data->default_message_no) ; $iii++ )
            {
                if($data->default_message_no[$iii] != "")
                    $testObj->aDefaultMessageId[] = (int)$data->default_message_no[$iii];
            }

            $testObj->iNumDefaultMessageId = count($testObj->aDefaultMessageId);

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
     *  @brief Function to Add SMS
     *  @param  $testObj        -       object      -   SMS object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addSMS($testObj)
    {

        $msg = '';

        $aSMSToName = $testObj->aSMSToName;
        $aSMSToMobileNo = $testObj->aSMSToMobileNo;
        $iNumSMSTo = count($aSMSToName);
        $sSMSFromName = $testObj->sSMSFromName;
        $sSMSFromMobileNo = $testObj->sSMSFromMobileNo;
        $sMessage = $testObj->sMessage;
        $dScheduledDate = $testObj->dScheduledDate;
        $tScheduledTime = $testObj->tScheduledTime;
        $sModuleName = $testObj->sModuleName;
        $iModuleId = $testObj->iModuleId;

        $sStatus = $testObj->sStatus;
        $dSentDate = $testObj->dSentDate;
        $tSentTime = $testObj->tSentTime;

        $iSMSManagerId = $testObj->iSMSManagerId;
        $iCommunicationManagerId = $testObj->iCommunicationManagerId;
        $iUserNo = $testObj->iUserNo;
        $dCreatedDate = $testObj->dCreatedDate;
        $tCreatedTime = $testObj->tCreatedTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;

        //! Parameter Check
        foreach($aSMSToName as $val)
        {
            if($val == "")
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        foreach($aSMSToMobileNo as $val)
        {
            if(strlen($val) != 10)
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if($sSMSFromName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(strlen($sSMSFromMobileNo) != 10)
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sMessage == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_date($dScheduledDate) && !sms_is_user_date($dScheduledDate) && $dScheduledDate != '')
        {
            $msg = INVALID_DATA;
            return $msg;
        }
        else if(sms_is_user_date($dScheduledDate))
        {
            $dScheduledDate = sms_getDateMonthYear($dScheduledDate);
        }
        else
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_time($tScheduledTime))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sModuleName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($dSentDate != "")
        {
            if(!sms_is_date($dSentDate) && !sms_is_user_date($dSentDate) && $dSentDate != '')
            {
                $msg = INVALID_DATA;
                return $msg;
            }
            else if(sms_is_user_date($dSentDate))
            {
                $dSentDate = sms_getDateMonthYear($dSentDate);
            }
            else
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if($tSentTime != "")
        {
            if(!sms_is_time($tSentTime))
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if(!is_numeric($iSMSManagerId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iCommunicationManagerId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iUserNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_date($dCreatedDate) && !sms_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(sms_is_user_date($dCreatedDate))
        {
            $dCreatedDate = sms_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!sms_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }


        $sSenderId = "";
        $sPlus91SMSId = "";
        $sSMSManagerName = "";
        $sOrganization = "";

        $new_obj = new rtCommSMSManager();

        $new_obj->iSMSManagerNo = $iSMSManagerId;

        $new_obj1 = retrieveSMSManagerFromId($new_obj);

        $sSenderId = $new_obj1->sSenderId;
        $sPlus91SMSId = $new_obj1->sPlus91SMSId;
        $sSMSManagerName = $new_obj1->sName;
        $sOrganization = $new_obj1->sOrganizationName;


        $testObj->iSMSNo = insertSMSDetails(implode(",",$aSMSToName),implode(",",$aSMSToMobileNo),$sSMSFromName,$sSMSFromMobileNo,$sMessage,$sStatus,$dScheduledDate,$tScheduledTime,$dSentDate,$tSentTime,$sModuleName,$iModuleId,$iUserNo,$dCreatedDate,$tCreatedTime,$sSenderId,$sPlus91SMSId,$iSMSManagerId,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iSMSNo;

        //Insert in xml file
        if(is_numeric($testObj->iSMSNo))
        {
            $xmlFileInsert = insertSMSDetailsXML($msg,$aSMSToName,$aSMSToMobileNo,$sSMSFromName,$sSMSFromMobileNo,$sMessage,$sStatus,sms_getDateMonthYear($dScheduledDate),$tScheduledTime,sms_getDateMonthYear($dSentDate),$tSentTime,$sModuleName,$iModuleId,$iUserNo,sms_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$sSenderId,$sPlus91SMSId,$iSMSManagerId,$sSMSManagerName,$sOrganization,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }



    /*!
     *  @brief Function to Update SMS
     *  @param  $testObj        -       object      -   SMS object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function saveSMS($testObj)
    {

        $msg = '';

        $iSMSNo = $testObj->iSMSNo;
        $aSMSToName = $testObj->aSMSToName;
        $aSMSToMobileNo = $testObj->aSMSToMobileNo;
        $iNumSMSTo = count($aSMSToName);
        $sSMSFromName = $testObj->sSMSFromName;
        $sSMSFromMobileNo = $testObj->sSMSFromMobileNo;
        $sMessage = $testObj->sMessage;
        $dScheduledDate = $testObj->dScheduledDate;
        $tScheduledTime = $testObj->tScheduledTime;
        $sModuleName = $testObj->sModuleName;
        $iModuleId = $testObj->iModuleId;

        $sStatus = $testObj->sStatus;
        $dSentDate = $testObj->dSentDate;
        $tSentTime = $testObj->tSentTime;

        $iSMSManagerId = $testObj->iSMSManagerId;
        $iCommunicationManagerId = $testObj->iCommunicationManagerId;
        $iLastUpdateUserId = $testObj->iLastUpdateUserId;
        $dLastUpdateDate = $testObj->dLastUpdateDate;
        $tLastUpdateTime = $testObj->tLastUpdateTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;

        //! Parameter Check
        if(is_numeric($iSMSNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        foreach($aSMSToName as $val)
        {
            if($val == "")
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        foreach($aSMSToMobileNo as $val)
        {
            if(strlen($val) != 10)
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if($sSMSFromName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(strlen($sSMSFromMobileNo) != 10)
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sMessage == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_date($dScheduledDate) && !sms_is_user_date($dScheduledDate) && $dScheduledDate != '')
        {
            $msg = INVALID_DATA;
            return $msg;
        }
        else if(sms_is_user_date($dScheduledDate))
        {
            $dScheduledDate = sms_getDateMonthYear($dScheduledDate);
        }
        else
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_time($tScheduledTime))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sModuleName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($dSentDate != "")
        {
            if(!sms_is_date($dSentDate) && !sms_is_user_date($dSentDate) && $dSentDate != '')
            {
                $msg = INVALID_DATA;
                return $msg;
            }
            else if(sms_is_user_date($dSentDate))
            {
                $dSentDate = sms_getDateMonthYear($dSentDate);
            }
            else
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if($tSentTime != "")
        {
            if(!sms_is_time($tSentTime))
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if(!is_numeric($iSMSManagerId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iCommunicationManagerId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iLastUpdateUserId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!sms_is_date($dLastUpdateDate) && !sms_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(sms_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = sms_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!sms_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }


        $sSenderId = "";
        $sPlus91SMSId = "";
        $sSMSManagerName = "";
        $sOrganization = "";

        $new_obj = new rtCommSMSManager();

        $new_obj->iSMSManagerNo = $iSMSManagerId;

        $new_obj1 = retrieveSMSManagerFromId($new_obj);

        $sSenderId = $new_obj1->sSenderId;
        $sPlus91SMSId = $new_obj1->sPlus91SMSId;
        $sSMSManagerName = $new_obj1->sName;
        $sOrganization = $new_obj1->sOrganizationName;


        $msg = updateSMSDetails($iSMSNo,implode(",",$aSMSToName),implode(",",$aSMSToMobileNo),$sSMSFromName,$sSMSFromMobileNo,$sMessage,$sStatus,$dScheduledDate,$tScheduledTime,$dSentDate,$tSentTime,$sModuleName,$iModuleId,$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$sSenderId,$sPlus91SMSId,$iSMSManagerId,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);

        //Insert in xml file
        if($msg == "M1001")
        {
            $xmlFileInsert = updateSMSDetailsXML($iSMSNo,$aSMSToName,$aSMSToMobileNo,$sSMSFromName,$sSMSFromMobileNo,$sMessage,$sStatus,sms_getDateMonthYear($dScheduledDate),$tScheduledTime,sms_getDateMonthYear($dSentDate),$tSentTime,$sModuleName,$iModuleId,$iLastUpdateUserId,sms_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$sSenderId,$sPlus91SMSId,$iSMSManagerId,$sSMSManagerName,$sOrganization,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Retrieve SMS  for id
     *  @param  $testObj        -       object      -   SMS object
     *  @return $mdata          -       object      -   SMS object with data filled in
     */
    function retrieveSMSFromId($testObj)
    {
        $msg = '';

        $iSMSNo = $testObj->iSMSNo;


        //! Parameter Check
        if(!is_numeric($iSMSNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getSMSForSMSIdXML($iSMSNo);

        if(isset($data->message))
        {

            for($ii = 0 ; $ii < count($data->sms_to) ; $ii++)
            {
                if($data->sms_to[$ii]->mobile_no != "")
                {
                    $testObj->aSMSToName[] = (string)$data->sms_to[$ii]->name;
                    $testObj->aSMSToMobileNo[] = (string)$data->sms_to[$ii]->mobile_no;
                }
            }

            $testObj->iNumSMSTo = count($testObj->aSMSToMobileNo);
            $testObj->sSMSFromName = (string)$data->sms_from->name;
            $testObj->sSMSFromMobileNo = (string)$data->sms_from->mobile_no;
            $testObj->sMessage = (string)$data->message;
            $testObj->sStatus = (string)$data->status;
            $testObj->dScheduledDate = (string)$data->scheduled_date;
            $testObj->tScheduledTime = (string)$data->scheduled_time;
            $testObj->dSentDate = (string)$data->sent_date;
            $testObj->tSentTime = (string)$data->sent_time;
            $testObj->iModuleId = (int)$data->module->id;
            $testObj->sModuleName = (string)$data->module->name;
            $testObj->iUserNo = (int)$data->created->user_no;
            $testObj->dCreatedDate = (string)$data->created->date;
            $testObj->tCreatedTime = (string)$data->created->time;
            $testObj->iLastUpdateUserId = (int)$data->last_updated->user_no;
            $testObj->dLastUpdateDate = (string)$data->last_updated->date;
            $testObj->tLastUpdateTime = (string)$data->last_updated->time;
            $testObj->iSMSManagerId = (int)$data->sms_manager->id;
            $testObj->sSenderId = (string)$data->sms_manager->sender_id;
            $testObj->sPlus91SMSId = (string)$data->sms_manager->plus91_sms_id;
            $testObj->iCommunicationManagerId = (int)$data->communication_manager_id;
            $testObj->sExtra1 = (string)$data->extra1;
            $testObj->sExtra2 = (string)$data->extra2;
            $testObj->sExtra3 = (string)$data->extra3;
        }

        return $testObj;
    }


    /*!
     *  @brief Function to Retrieve Pending SMS
     *  @return $mdata          -       object      -   SMS object with data filled in
     */
    function retrievePendingSMS()
    {
        $msg = '';

        $sStatus = "pending";

        $data1 = getSMSForStatusXML($sStatus);

        $testObj = array();

        $ll = 0;

        foreach($data1 as $data)
        {
            $testObj[$ll] = new rtCommSMS();

            $testObj[$ll]->iSMSNo = (int)$data->sms_no;

            for($ii = 0 ; $ii < count($data->sms_to) ; $ii++)
            {
                if($data->sms_to[$ii]->mobile_no != "")
                {
                    $testObj[$ll]->aSMSToName[] = (string)$data->sms_to[$ii]->name;
                    $testObj[$ll]->aSMSToMobileNo[] = (string)$data->sms_to[$ii]->mobile_no;
                }
            }

            $testObj[$ll]->iNumSMSTo = count($testObj[$ll]->aSMSToMobileNo);
            $testObj[$ll]->sSMSFromName = (string)$data->sms_from->name;
            $testObj[$ll]->sSMSFromMobileNo = (string)$data->sms_from->mobile_no;
            $testObj[$ll]->sMessage = (string)$data->message;
            $testObj[$ll]->sStatus = (string)$data->status;
            $testObj[$ll]->dScheduledDate = (string)$data->scheduled_date;
            $testObj[$ll]->tScheduledTime = (string)$data->scheduled_time;
            $testObj[$ll]->dSentDate = (string)$data->sent_date;
            $testObj[$ll]->tSentTime = (string)$data->sent_time;
            $testObj[$ll]->iModuleId = (int)$data->module->id;
            $testObj[$ll]->sModuleName = (string)$data->module->name;
            $testObj[$ll]->iUserNo = (int)$data->created->user_no;
            $testObj[$ll]->dCreatedDate = (string)$data->created->date;
            $testObj[$ll]->tCreatedTime = (string)$data->created->time;
            $testObj[$ll]->iLastUpdateUserId = (int)$data->last_updated->user_no;
            $testObj[$ll]->dLastUpdateDate = (string)$data->last_updated->date;
            $testObj[$ll]->tLastUpdateTime = (string)$data->last_updated->time;
            $testObj[$ll]->iSMSManagerId = (int)$data->sms_manager->id;
            $testObj[$ll]->sSenderId = (string)$data->sms_manager->sender_id;
            $testObj[$ll]->sPlus91SMSId = (string)$data->sms_manager->plus91_sms_id;
            $testObj[$ll]->iCommunicationManagerId = (int)$data->communication_manager_id;
            $testObj[$ll]->sExtra1 = (string)$data->extra1;
            $testObj[$ll]->sExtra2 = (string)$data->extra2;
            $testObj[$ll]->sExtra3 = (string)$data->extra3;

            $ll++;
        }

        return $testObj;
    }

    /*!
     *  @brief Function to Remove SMS
     *  @param  $testObj        -       object      -   SMS object
     *  @return $msg            -       String      -   set as message
     */
    function removeSMS($testObj)
    {

        $msg = '';

        $iSMSNo = $testObj->iSMSNo;


        //! Parameter Check
        if(!is_numeric($iSMSNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteSMSDetails($iSMSNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteSMSDetailsXML($iSMSNo);
        }

        return $msg;
    }



    /*!
     *  @brief Function to Check For Valid date
     *  @param  $date           -       String      -   Date
     *  @return $msg            -       Bool        -   True / False
     */
    function sms_is_date($date)
    {
        @list($year,$month,$day) = explode('-',$date);

        //! Year Check
        if(!(is_numeric($year)) || (strlen($year)!= 4))
        {
            return(FALSE);
        }
        else if(!is_numeric($month) || ($month > 12 || $month < 1) || (strlen($month)!= 2)) //! Month Check
        {
            return(FALSE);
        }
        else if(!is_numeric($day) || ($day < 1) || (strlen($day)!= 2))      //! Day Check
        {
            return(FALSE);
        }
        else if ((($month == '01') || ($month == '03') || ($month == '05') || ($month == '07') || ($month == '08') || ($month == '10') || ($month == '12')) && ($day > 31))     //! No. of Days Check for (31 days)
        {
            return(FALSE);
        }
        else if ((($month == '04') || ($month == '06') || ($month == '09') || ($month == '11')) && ($day > 30))       //! No. of Days Check for (30 days)
        {
            return(FALSE);
        }
        else
        {
            if(((($year % 4 == 0) && ($year % 100 != 0)) || (($year % 4 == 0) && ($year % 100 == 0) && ($year % 400 == 0))))        //! Check for Leap Year
            {
                if((($month == '02' && $day > 29)))
                {
                    return(FALSE);
                }
            }
            else if ($month == '02' && $day > 28)
            {
                return(FALSE);
            }
        }

        return(TRUE);
    }

    /*!
     *  @brief Function to Check For Valid User provided date
     *  @param  $date           -       String      -   Date
     *  @return $msg            -       Bool        -   True / False
     */
    function sms_is_user_date($date)
    {
        @list($day, $month, $year) = explode('-',$date);
        if(!(is_numeric($year)) || (strlen($year)!= 4))
        {
            return(FALSE);
        }
        else if(!is_numeric($month) || ($month > 12 || $month < 1) || (strlen($month)!= 2))
        {
            return(FALSE);
        }
        else if(!is_numeric($day) || ($day < 1) || (strlen($day)!= 2))
        {
            return(FALSE);
        }
        else if ((($month == '01') || ($month == '03') || ($month == '05') || ($month == '07') || ($month == '08') || ($month == '10') || ($month == '12')) && ($day > 31))
        {
            return(FALSE);
        }
        else if ((($month == '04') || ($month == '06') || ($month == '09') || ($month == '11')) && ($day > 30))
        {
            return(FALSE);
        }
        else
        {
            if(((($year % 4 == 0) && ($year % 100 != 0)) || (($year % 4 == 0) && ($year % 100 == 0) && ($year % 400 == 0))))
            {
                if((($month == '02' && $day > 29)))
                {
                    return(FALSE);
                }
            }
            else if ($month == '02' && $day > 28)
            {
                return(FALSE);
            }
        }

        return(TRUE);
    }

    /*!
     *  @brief Function to Check For Valid time
     *  @param  $time           -       String      -   time
     *  @return $msg            -       Bool        -   True / False
     */
    function sms_is_time($time)
    {
        @list($hour,$min,$sec) = explode(':',$time);

        if((!is_numeric($hour)) || (strlen($hour)!= 2) || ($hour > 23) || ($hour<0))      //! Check for hours
        {
            return(FALSE);
        }
        else if(!is_numeric($min) || ($min > 59 || $min < 0) || (strlen($min)!= 2))         //! Check for minites
        {
            return(FALSE);
        }
        else if(!is_numeric($sec) || ($sec < 0) || ($sec > 59) || (strlen($sec)!= 2))       //! Check for Seconds
        {
            return(FALSE);
        }

        return(TRUE);
    }

    /*!
     *  @brief Function to Reverse Data Format
     *  @param  $date           -       String      -   Date
     *  @return $ee             -       String      -   Date Reverse Format
     */
    function sms_getDateMonthYear($date)
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