<?php
    /**************************************************************************
     *                                                                        *
     *  Email Wrapper                                                       *
     *                                                                        *
     **************************************************************************/

    //including Necessary Db files
    $email_xml_file_path = @$path1. "comm/email/";

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


    include_once @$test_path . 'email_class.php';
    include_once @$test_path . 'email_default_message_class.php';
    include_once @$test_path . 'email_manager_class.php';
    include_once @$test_path . 'email_module_manager_class.php';



    /*!
     *  @brief Function to insert Email Default Message
     *  @param  $testObj        - object            - Email Default Message object
     *  @return $msg            - Int               - Insertion id or set as message
     */
    function addEmailDefaultMessage($testObj)
    {

        $msg = '';

        $sName = $testObj->sName;
        $sSubject = $testObj->sSubject;
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

        if($sSubject == "")
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

        if(!email_is_date($dCreatedDate) && !email_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(email_is_user_date($dCreatedDate))
        {
            $dCreatedDate = email_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!email_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }


        $testObj->iMessageNo = insertEmailDefaultMessageDetails($sName,$sSubject,$sMessage,$iUserNo,$dCreatedDate,$tCreatedTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iMessageNo;

        //Insert in xml file
        if(is_numeric($testObj->iMessageNo))
        {
            $xmlFileInsert = insertEmailDefaultMessageDetailsXML($msg,$sName,$sSubject,$sMessage,$iUserNo,email_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Update Email Default Message
     *  @param  $testObj        - object            -   Email Default Message object
     *  @return $msg            - String            -   set as message
     */
    function saveEmailDefaultMessage($testObj)
    {

        $msg = '';

        $iMessageNo = $testObj->iMessageNo;
        $sName = $testObj->sName;
        $sSubject = $testObj->sSubject;
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

        if($sSubject == "")
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

        if(!email_is_date($dLastUpdateDate) && !email_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(email_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = email_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!email_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }


        $testObj->iMessageNo = updateEmailDefaultMessageDetails($iMessageNo,$sName,$sSubject,$sMessage,$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iMessageNo;

        //Insert in xml file
        if($msg == "M1001")
        {
            $xmlFileInsert = updateEmailDefaultMessageDetailsXML($iMessageNo,$sName,$sSubject,$sMessage,$iLastUpdateUserId,email_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Remove Email Default Message
     *  @param  $testObj        - object            -   Email Default Message object
     *  @return $msg            - String            -   set as message
     */
    function removeEmailDefaultMessage($testObj)
    {

        $msg = '';

        $iMessageNo = $testObj->iMessageNo;


        //! Parameter Check
        if(!is_numeric($iMessageNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteEmailDefaultMessageDetails($iMessageNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteEmailDefaultMessageDetailsXML($iMessageNo);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All Email Default Message
     *  @return $mData            - Array of Object           -   Data Array
     */
    function retrieveAllEmailDefaultMessage()
    {
        $msg = '';

        $data = getEmailDefaultMessageAllXML();

        $mData = array();

        $ii = 0;

        foreach($data as $val)
        {
            $mData[$ii] = new rtCommDefaultEmailMessage();

            $mData[$ii]->iMessageNo = (int)$val->email_message_no;
            $mData[$ii]->sName = (string)$val->name;
            $mData[$ii]->sSubject = (string)$val->subject;
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
     *  @brief Function to Retrieve Email Default Message for an Id
     *  @param  $testObj        - object            -   Email Default Message object
     *  @return $mData          - object            -   Data Object
     */
    function retrieveEmailDefaultMessageFromId($testObj)
    {
        $msg = '';

        $iMessageNo = $testObj->iMessageNo;


        //! Parameter Check
        if(!is_numeric($iMessageNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getEmailDefaultMessageForIdXML($iMessageNo);

        if(isset($data->name))
        {
            $testObj->sName = (string)$data->name;
            $testObj->sSubject = (string)$data->subject;
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
     *  @brief Function to Add Email Manager
     *  @param  $testObj        -       object      -   Email Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addEmailManager($testObj)
    {

        $msg = '';

        $sName = $testObj->sName;
        $sEmailId = $testObj->sEmailId;
        $sEmailPassword = $testObj->sEmailPassword;
        $sEmailName = $testObj->sEmailName;
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

        if($sEmailId == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sEmailPassword == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sEmailName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iUserNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!email_is_date($dCreatedDate) && !email_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(email_is_user_date($dCreatedDate))
        {
            $dCreatedDate = email_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!email_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }


        $testObj->iEmailManagerNo = insertEmailManagerDetails($sName,$sEmailId,$sEmailPassword,$sEmailName,$iUserNo,$dCreatedDate,$tCreatedTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iEmailManagerNo;

        //Insert in xml file
        if(is_numeric($testObj->iEmailManagerNo))
        {
            $xmlFileInsert = insertEmailManagerDetailsXML($msg,$sName,$sEmailId,$sEmailPassword,$sEmailName,$iUserNo,email_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Updated Email Manager
     *  @param  $testObj        -       object      -   Email Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveEmailManager($testObj)
    {

        $msg = '';

        $iEmailManagerNo = $testObj->iEmailManagerNo;
        $sName = $testObj->sName;
        $sEmailId = $testObj->sEmailId;
        $sEmailPassword = $testObj->sEmailPassword;
        $sEmailName = $testObj->sEmailName;
        $iLastUpdateUserId = $testObj->iLastUpdateUserId;
        $dLastUpdateDate = $testObj->dLastUpdateDate;
        $tLastUpdateTime = $testObj->tLastUpdateTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        if(!is_numeric($iEmailManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sEmailId == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sEmailPassword == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sEmailName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iLastUpdateUserId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!email_is_date($dLastUpdateDate) && !email_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(email_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = email_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!email_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }


        $msg = updateEmailManagerDetails($iEmailManagerNo,$sName,$sEmailId,$sEmailPassword,$sEmailName,$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);

        //Insert in xml file
        if($msg == "M1001")
        {
            $xmlFileInsert = updateEmailManagerDetailsXML($iEmailManagerNo,$sName,$sEmailId,$sEmailPassword,$sEmailName,$iLastUpdateUserId,email_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Remove Email Manager
     *  @param  $testObj        -       object      -   Email Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeEmailManager($testObj)
    {

        $msg = '';

        $iEmailManagerNo = $testObj->iEmailManagerNo;


        //! Parameter Check
        if(!is_numeric($iEmailManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteEmailManagerDetails($iEmailManagerNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteEmailManagerDetailsXML($iEmailManagerNo);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve all Email Manager
     *  @return $mData            -       Array         -   array of object of email manager
     */
    function retrieveAllEmailManager()
    {
        $msg = '';

        $data = getEmailManagerAllXML();

        $mData = array();

        $ii = 0;

        foreach($data as $val)
        {
            $mData[$ii] = new rtCommEmailManager();

            $mData[$ii]->iEmailManagerNo = (int)$val->manager_no;
            $mData[$ii]->sName = (string)$val->name;
            $mData[$ii]->sEmailId = (string)$val->email_id;
            $mData[$ii]->sEmailPassword = (string)$val->email_password;
            $mData[$ii]->sEmailName = (string)$val->email_name;
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
     *  @brief Function to Retrieve Email Manager For Id
     *  @param  $testObj        -       object      -   Email Manager object
     *  @return $mData          -       Object      -   Data object
     */
    function retrieveEmailManagerFromId($testObj)
    {
        $msg = '';

        $iEmailManagerNo = $testObj->iEmailManagerNo;


        //! Parameter Check
        if(!is_numeric($iEmailManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getEmailManagerForIdXML($iEmailManagerNo);

        if(isset($data->name))
        {
            $testObj->sName = (string)$data->name;
            $testObj->sEmailId = (string)$data->email_id;
            $testObj->sEmailPassword = (string)$data->email_password;
            $testObj->sEmailName = (string)$data->email_name;
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
     *  @brief Function to Add Email Module Manager
     *  @param  $testObj        -       object      -   Email Module Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addEmailModuleManager($testObj)
    {

        $msg = '';

        $sName = $testObj->sName;
        $aEmailManagerId = $testObj->aEmailManagerId;
        $iNumEmailManagerId = count($aEmailManagerId);
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

        foreach($aEmailManagerId as $val)
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

        if(!email_is_date($dCreatedDate) && !email_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(email_is_user_date($dCreatedDate))
        {
            $dCreatedDate = email_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!email_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }


        $testObj->iEmailModuleManagerNo = insertEmailModuleManagerDetails($sName,implode(",",$aEmailManagerId),implode(",",$aDefaultMessageId),$iUserNo,$dCreatedDate,$tCreatedTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iEmailModuleManagerNo;

        //Insert in xml file
        if(is_numeric($testObj->iEmailModuleManagerNo))
        {
            $xmlFileInsert = insertEmailModuleManagerDetailsXML($msg,$sName,$aEmailManagerId,$aDefaultMessageId,$iUserNo,email_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Update Email Module Manager
     *  @param  $testObj        -       object      -   Email Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveEmailModuleManager($testObj)
    {

        $msg = '';

        $iEmailModuleManagerNo = $testObj->iEmailModuleManagerNo;
        $sName = $testObj->sName;
        $aEmailManagerId = $testObj->aEmailManagerId;
        $iNumEmailManagerId = count($aEmailManagerId);
        $aDefaultMessageId = $testObj->aDefaultMessageId;
        $iNumDefaultMessageId = count($aDefaultMessageId);
        $iLastUpdateUserId = $testObj->iLastUpdateUserId;
        $dLastUpdateDate = $testObj->dLastUpdateDate;
        $tLastUpdateTime = $testObj->tLastUpdateTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;

        //! Parameter Check
        if(!is_numeric($iEmailModuleManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        foreach($aEmailManagerId as $val)
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

        if(!email_is_date($dLastUpdateDate) && !email_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(email_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = email_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!email_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }


        $msg = updateEmailModuleManagerDetails($iEmailModuleManagerNo,$sName,implode(",",$aEmailManagerId),implode(",",$aDefaultMessageId),$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);

        //Insert in xml file
        if($msg == "M1001")
        {
            $xmlFileInsert = updateEmailModuleManagerDetailsXML($iEmailModuleManagerNo,$sName,$aEmailManagerId,$aDefaultMessageId,$iLastUpdateUserId,email_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Remove Email Module Manager
     *  @param  $testObj        -       object      -   Email Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeEmailModuleManager($testObj)
    {

        $msg = '';

        $iEmailModuleManagerNo = $testObj->iEmailModuleManagerNo;


        //! Parameter Check
        if(!is_numeric($iEmailModuleManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteEmailModuleManagerDetails($iEmailModuleManagerNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteEmailModuleManagerDetailsXML($iEmailModuleManagerNo);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All Email Module Manager
     *  @return $mData            -       Array         -   array of object of DMM
     */
    function retrieveAllEmailModuleManager()
    {
        $msg = '';

        $data = getEmailModuleManagerAllXML();

        $mData = array();

        $ii = 0;

        foreach($data as $val)
        {
            $mData[$ii] = new rtCommEmailModuleManager();

            $mData[$ii]->iEmailModuleManagerNo = (int)$val->module_manager_no;
            $mData[$ii]->sName = (string)$val->name;

            for($iii = 0 ; $iii < count($val->email_manager_no) ; $iii++ )
            {
                if($val->email_manager_no[$iii] != "")
                    $mData[$ii]->aEmailManagerId[] = (int)$val->email_manager_no[$iii];
            }

            $mData[$ii]->iNumEmailManagerId = count($mData[$ii]->aEmailManagerId);

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
     *  @brief Function to Retrieve  Email Module Manager for id
     *  @param  $testObj        -       object      -   Email Module Manager object
     *  @return $mData          -       object      -   Data object
     */
    function retrieveEmailModuleManagerFromId($testObj)
    {
        $msg = '';

        $iEmailModuleManagerNo = $testObj->iEmailModuleManagerNo;


        //! Parameter Check
        if(!is_numeric($iEmailModuleManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getEmailModuleManagerForIdXML($iEmailModuleManagerNo);

        if(isset($data->name))
        {
            $testObj->sName = (string)$data->name;


            for($iii = 0 ; $iii < count($data->email_manager_no) ; $iii++ )
            {
                if($data->email_manager_no[$iii] != "")
                    $testObj->aEmailManagerId[] = (int)$data->email_manager_no[$iii];
            }

            $testObj->iNumEmailManagerId = count($testObj->aEmailManagerId);

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
     *  @brief Function to Add Email
     *  @param  $testObj        -       object      -   Email object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addEmail($testObj)
    {

        $msg = '';

        $aEmailToName = $testObj->aEmailToName;
        $aEmailToEmailId = $testObj->aEmailToEmailId;
        $iNumEmailTo = count($aEmailToEmailId);
        $sEmailFromName = $testObj->sEmailFromName;
        $sEmailFromEmailId = $testObj->sEmailFromEmailId;
        $sSubject = $testObj->sSubject;
        $sMessage = $testObj->sMessage;
        $aAttachment = $testObj->aAttachment;
        $iNumAttachment = count($aAttachment);
        $dScheduledDate = $testObj->dScheduledDate;
        $tScheduledTime = $testObj->tScheduledTime;
        $sModuleName = $testObj->sModuleName;
        $iModuleId = $testObj->iModuleId;

        $sStatus = $testObj->sStatus;
        $dSentDate = $testObj->dSentDate;
        $tSentTime = $testObj->tSentTime;

        $iEmailManagerId = $testObj->iEmailManagerId;
        $iCommunicationManagerId = $testObj->iCommunicationManagerId;
        $iUserNo = $testObj->iUserNo;
        $dCreatedDate = $testObj->dCreatedDate;
        $tCreatedTime = $testObj->tCreatedTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        foreach($aEmailToName as $val)
        {
            if($val == "")
            {   
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        foreach($aEmailToEmailId as $val)
        {
            if($val == "")
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if($sEmailFromName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sEmailFromEmailId == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sSubject == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sMessage == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!email_is_date($dScheduledDate) && !email_is_user_date($dScheduledDate) && $dScheduledDate != '')
        {
            $msg = INVALID_DATA;
            return $msg;
        }
        else if(email_is_user_date($dScheduledDate))
        {
            $dScheduledDate = email_getDateMonthYear($dScheduledDate);
        }
        else
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!email_is_time($tScheduledTime))
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
            if(!email_is_date($dSentDate) && !email_is_user_date($dSentDate) && $dSentDate != '')
            {
                $msg = INVALID_DATA;
                return $msg;
            }
            else if(email_is_user_date($dSentDate))
            {
                $dSentDate = email_getDateMonthYear($dSentDate);
            }
            else
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if($tSentTime != "")
        {
            if(!email_is_time($tSentTime))
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if(!is_numeric($iEmailManagerId))
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

        if(!email_is_date($dCreatedDate) && !email_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(email_is_user_date($dCreatedDate))
        {
            $dCreatedDate = email_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!email_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }

        $testObj->iEmailNo = insertEmailDetails(implode(",",$aEmailToName),implode(",",$aEmailToEmailId),$sEmailFromName,$sEmailFromEmailId,$sSubject,$sMessage,implode(",",$aAttachment),$sStatus,$dScheduledDate,$tScheduledTime,$dSentDate,$tSentTime,$sModuleName,$iModuleId,$iUserNo,$dCreatedDate,$tCreatedTime,$iEmailManagerId,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iEmailNo;

        //Insert in xml file
        if(is_numeric($testObj->iEmailNo))
        {
            $email_manager_name = "";
            $email_manager_email = "";
            $email_manager_password = "";
            $email_manager_email_name = "";

            $new_obj = new rtCommEmailManager();

            $new_obj->iEmailManagerNo = $iEmailManagerId;

            $new_obj1 = retrieveEmailManagerFromId($new_obj);

            $email_manager_name = $new_obj1->sName;
            $email_manager_email = $new_obj1->sEmailId;
            $email_manager_password = $new_obj1->sEmailPassword;
            $email_manager_email_name = $new_obj1->sEmailName;


            $xmlFileInsert = insertEmailDetailsXML($msg,$aEmailToName,$aEmailToEmailId,$sEmailFromName,$sEmailFromEmailId,$sSubject,$sMessage,$aAttachment,$sStatus,email_getDateMonthYear($dScheduledDate),$tScheduledTime,email_getDateMonthYear($dSentDate),$tSentTime,$sModuleName,$iModuleId,$iUserNo,email_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$iEmailManagerId,$email_manager_name,$email_manager_email,$email_manager_password,$email_manager_email_name,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }



    /*!
     *  @brief Function to Save Email
     *  @param  $testObj        -       object      -   Email object
     *  @return $msg            -       String      -   set as message
     */
    function saveEmail($testObj)
    {
        $msg = '';

        $iEmailNo = $testObj->iEmailNo;
        $aEmailToName = $testObj->aEmailToName;
        $aEmailToEmailId = $testObj->aEmailToEmailId;
        $iNumEmailTo = count($aEmailToEmailId);
        $sEmailFromName = $testObj->sEmailFromName;
        $sEmailFromEmailId = $testObj->sEmailFromEmailId;
        $sSubject = $testObj->sSubject;
        $sMessage = $testObj->sMessage;
        $aAttachment = $testObj->aAttachment;
        $iNumAttachment = count($aAttachment);
        $dScheduledDate = $testObj->dScheduledDate;
        $tScheduledTime = $testObj->tScheduledTime;
        $sModuleName = $testObj->sModuleName;
        $iModuleId = $testObj->iModuleId;

        $sStatus = $testObj->sStatus;
        $dSentDate = $testObj->dSentDate;
        $tSentTime = $testObj->tSentTime;

        $iEmailManagerId = $testObj->iEmailManagerId;
        $iCommunicationManagerId = $testObj->iCommunicationManagerId;
        $iLastUpdateUserId = $testObj->iLastUpdateUserId;
        $dLastUpdateDate = $testObj->dLastUpdateDate;
        $tLastUpdateTime = $testObj->tLastUpdateTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        if(!is_numeric($iEmailNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        foreach($aEmailToName as $val)
        {
            if($val == "")
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        foreach($aEmailToEmailId as $val)
        {
            if($val == "")
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if($sEmailFromName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sEmailFromEmailId == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sSubject == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sMessage == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!email_is_date($dScheduledDate) && !email_is_user_date($dScheduledDate) && $dScheduledDate != '')
        {
            $msg = INVALID_DATA;
            return $msg;
        }
        else if(email_is_user_date($dScheduledDate))
        {
            $dScheduledDate = email_getDateMonthYear($dScheduledDate);
        }
        else
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!email_is_time($tScheduledTime))
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
            if(!email_is_date($dSentDate) && !email_is_user_date($dSentDate) && $dSentDate != '')
            {
                $msg = INVALID_DATA;
                return $msg;
            }
            else if(email_is_user_date($dSentDate))
            {
                $dSentDate = email_getDateMonthYear($dSentDate);
            }
            else
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if($tSentTime != "")
        {
            if(!email_is_time($tSentTime))
            {
                $msg = INVALID_DATA;
                return $msg;
            }
        }

        if(!is_numeric($iEmailManagerId))
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

        if(!email_is_date($dLastUpdateDate) && !email_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(email_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = email_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!email_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }

        $msg = updateEmailDetails($iEmailNo,implode(",",$aEmailToName),implode(",",$aEmailToEmailId),$sEmailFromName,$sEmailFromEmailId,$sSubject,$sMessage,implode(",",$aAttachment),$sStatus,$dScheduledDate,$tScheduledTime,$dSentDate,$tSentTime,$sModuleName,$iModuleId,$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$iEmailManagerId,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);

        //Insert in xml file
        if($msg == "M1001")
        {
            $email_manager_name = "";
            $email_manager_email = "";
            $email_manager_password = "";
            $email_manager_email_name = "";

            $new_obj = new rtCommEmailManager();

            $new_obj->iEmailManagerNo = $iEmailManagerId;

            $new_obj1 = retrieveEmailManagerFromId($new_obj);

            $email_manager_name = $new_obj1->sName;
            $email_manager_email = $new_obj1->sEmailId;
            $email_manager_password = $new_obj1->sEmailPassword;
            $email_manager_email_name = $new_obj1->sEmailName;


            $xmlFileInsert = updateEmailDetailsXML($iEmailNo,$aEmailToName,$aEmailToEmailId,$sEmailFromName,$sEmailFromEmailId,$sSubject,$sMessage,$aAttachment,$sStatus,email_getDateMonthYear($dScheduledDate),$tScheduledTime,email_getDateMonthYear($dSentDate),$tSentTime,$sModuleName,$iModuleId,$iLastUpdateUserId,email_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$iEmailManagerId,$email_manager_name,$email_manager_email,$email_manager_password,$email_manager_email_name,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Retrieve Email  for id
     *  @param  $testObj        -       object      -   Email object
     *  @return $mdata          -       object      -   Email object with data filled in
     */
    function retrieveEmailFromId($testObj)
    {
        $msg = '';

        $iEmailNo = $testObj->iEmailNo;


        //! Parameter Check
        if(!is_numeric($iEmailNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getEmailForEmailIdXML($iEmailNo);

        if(isset($data->subject))
        {

            for($ii = 0 ; $ii < count($data->email_to) ; $ii++)
            {
                if($data->email_to[$ii]->email_id != "")
                {
                    $testObj->aEmailToName[] = (string)$data->email_to[$ii]->name;
                    $testObj->aEmailToEmailId[] = (string)$data->email_to[$ii]->email_id;
                }
            }

            $testObj->iNumEmailTo = count($testObj->aEmailToEmailId);
            $testObj->sEmailFromName = (string)$data->email_from->name;
            $testObj->sEmailFromEmailId = (string)$data->email_from->email_id;
            $testObj->sSubject = (string)$data->subject;
            $testObj->sMessage = (string)$data->message;

            for($ii = 0; $ii < count($data->attachment) ; $ii++)
            {
                if($data->attachment[$ii] != "")
                    $testObj->aAttachment = (string)$data->attachment[$ii];
            }

            $testObj->iNumAttachment = count($testObj->aAttachment);
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
            $testObj->iEmailManagerId = (int)$data->email_manager->id;
            $testObj->iCommunicationManagerId = (int)$data->communication_manager_id;
            $testObj->sExtra1 = (string)$data->extra1;
            $testObj->sExtra2 = (string)$data->extra2;
            $testObj->sExtra3 = (string)$data->extra3;
        }

        return $testObj;
    }


    /*!
     *  @brief Function to Retrieve Pending Mail Email  for id
     *  @return $mdata          -       object      -   Email object with data filled in
     */
    function retrievePendingEmail()
    {
        $msg = '';

        $sStatus = "pending";

        $data1 = getEmailForStatusXML($sStatus);

        $testObj = array();

        $ll = 0;
        foreach($data1 as $data)
        {
            $testObj[$ll] = new rtCommEmail();

            $testObj[$ll]->iEmailNo = (int)$data->email_no;

            for($ii = 0 ; $ii < count($data->email_to) ; $ii++)
            {
                if($data->email_to[$ii]->email_id != "")
                {
                    $testObj[$ll]->aEmailToName[] = (string)$data->email_to[$ii]->name;
                    $testObj[$ll]->aEmailToEmailId[] = (string)$data->email_to[$ii]->email_id;
                }
            }

            $testObj[$ll]->iNumEmailTo = count($testObj[$ll]->aEmailToEmailId);
            $testObj[$ll]->sEmailFromName = (string)$data->email_from->name;
            $testObj[$ll]->sEmailFromEmailId = (string)$data->email_from->email_id;
            $testObj[$ll]->sSubject = (string)$data->subject;
            $testObj[$ll]->sMessage = (string)$data->message;

            for($ii = 0; $ii < count($data->attachment) ; $ii++)
            {
                if($data->attachment[$ii] != "")
                    $testObj[$ll]->aAttachment = (string)$data->attachment[$ii];
            }

            $testObj[$ll]->iNumAttachment = count($testObj[$ll]->aAttachment);
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
            $testObj[$ll]->iEmailManagerId = (int)$data->email_manager->id;
            $testObj[$ll]->iCommunicationManagerId = (int)$data->communication_manager_id;
            $testObj[$ll]->sExtra1 = (string)$data->extra1;
            $testObj[$ll]->sExtra2 = (string)$data->extra2;
            $testObj[$ll]->sExtra3 = (string)$data->extra3;

            $ll++;
        }
        return $testObj;
    }


    /*!
     *  @brief Function to Remove Email
     *  @param  $testObj        -       object      -   Email object
     *  @return $msg            -       String      -   set as message
     */
    function removeEmail($testObj)
    {

        $msg = '';

        $iEmailNo = $testObj->iEmailNo;


        //! Parameter Check
        if(!is_numeric($iEmailNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteEmailDetails($iEmailNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteEmailDetailsXML($iEmailNo);
        }

        return $msg;
    }



    /*!
     *  @brief Function to Check For Valid date
     *  @param  $date           -       String      -   Date
     *  @return $msg            -       Bool        -   True / False
     */
    function email_is_date($date)
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
    function email_is_user_date($date)
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
    function email_is_time($time)
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
    function email_getDateMonthYear($date)
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