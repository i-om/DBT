<?php
    /**************************************************************************
     *                                                                        *
     *  Display Wrapper                                                       *
     *                                                                        *
     **************************************************************************/

    //including Necessary Db files
    $dis_xml_file_path = @$path1. "comm/display/";

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


    include_once @$test_path . 'display_class.php';
    include_once @$test_path . 'display_default_message_class.php';
    include_once @$test_path . 'display_manager_class.php';
    include_once @$test_path . 'display_module_manager_class.php';



    /*!
     *  @brief Function to insert Display Default Message
     *  @param  $testObj        - object            - Display Default Message object
     *  @return $msg            - Int               - Insertion id or set as message
     */
    function addDisplayDefaultMessage($testObj)
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

        if(!display_is_date($dCreatedDate) && !display_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(display_is_user_date($dCreatedDate))
        {
            $dCreatedDate = display_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!display_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }


        $testObj->iMessageNo = insertDisplayDefaultMessageDetails($sName,$sMessage,$iUserNo,$dCreatedDate,$tCreatedTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iMessageNo;

        //Insert in xml file
        if(is_numeric($testObj->iMessageNo))
        {
            $xmlFileInsert = insertDisplayDefaultMessageDetailsXML($msg,$sName,$sMessage,$iUserNo,display_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Update Display Default Message
     *  @param  $testObj        - object            -   Display Default Message object
     *  @return $msg            - String            -   set as message
     */
    function saveDisplayDefaultMessage($testObj)
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

        if(!display_is_date($dLastUpdateDate) && !display_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(display_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = display_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!display_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }


        $testObj->iMessageNo = updateDisplayDefaultMessageDetails($iMessageNo,$sName,$sMessage,$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iMessageNo;

        //Insert in xml file
        if($msg == "M1001")
        {
            $xmlFileInsert = updateDisplayDefaultMessageDetailsXML($iMessageNo,$sName,$sMessage,$iLastUpdateUserId,display_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Remove Display Default Message
     *  @param  $testObj        - object            -   Display Default Message object
     *  @return $msg            - String            -   set as message
     */
    function removeDisplayDefaultMessage($testObj)
    {

        $msg = '';

        $iMessageNo = $testObj->iMessageNo;


        //! Parameter Check
        if(!is_numeric($iMessageNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteDisplayDefaultMessageDetails($iMessageNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteDisplayDefaultMessageDetailsXML($iMessageNo);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All Display Default Message
     *  @return $mData            - Array of Object           -   Data Array
     */
    function retrieveAllDisplayDefaultMessage()
    {
        $msg = '';

        $data = getDisplayDefaultMessageAllXML();

        $mData = array();

        $ii = 0;

        foreach($data as $val)
        {
            $mData[$ii] = new rtCommDefaultDisplayMessage();

            $mData[$ii]->iMessageNo = (int)$val->display_message_no;
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
     *  @brief Function to Retrieve Display Default Message for an Id
     *  @param  $testObj        - object            -   Display Default Message object
     *  @return $mData          - object            -   Data Object
     */
    function retrieveDisplayDefaultMessageFromId($testObj)
    {
        $msg = '';

        $iMessageNo = $testObj->iMessageNo;


        //! Parameter Check
        if(!is_numeric($iMessageNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getDisplayDefaultMessageForIdXML($iMessageNo);

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
     *  @brief Function to Add Display Manager
     *  @param  $testObj        -       object      -   Display Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addDisplayManager($testObj)
    {

        $msg = '';

        $sName = $testObj->sName;
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

        if(!is_numeric($iUserNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!display_is_date($dCreatedDate) && !display_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(display_is_user_date($dCreatedDate))
        {
            $dCreatedDate = display_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!display_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }


        $testObj->iDisplayManagerNo = insertDisplayManagerDetails($sName,$iUserNo,$dCreatedDate,$tCreatedTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iDisplayManagerNo;

        //Insert in xml file
        if(is_numeric($testObj->iDisplayManagerNo))
        {
            $xmlFileInsert = insertDisplayManagerDetailsXML($msg,$sName,$iUserNo,display_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Updated Display Manager
     *  @param  $testObj        -       object      -   Display Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveDisplayManager($testObj)
    {

        $msg = '';

        $iDisplayManagerNo = $testObj->iDisplayManagerNo;
        $sName = $testObj->sName;
        $iLastUpdateUserId = $testObj->iLastUpdateUserId;
        $dLastUpdateDate = $testObj->dLastUpdateDate;
        $tLastUpdateTime = $testObj->tLastUpdateTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        if(!is_numeric($iDisplayManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iLastUpdateUserId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!display_is_date($dLastUpdateDate) && !display_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(display_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = display_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!display_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }


        $msg = updateDisplayManagerDetails($iDisplayManagerNo,$sName,$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);

        //Insert in xml file
        if($msg == "M1001")
        {
            $xmlFileInsert = updateDisplayManagerDetailsXML($iDisplayManagerNo,$sName,$iLastUpdateUserId,display_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Remove Display Manager
     *  @param  $testObj        -       object      -   Display Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeDisplayManager($testObj)
    {

        $msg = '';

        $iDisplayManagerNo = $testObj->iDisplayManagerNo;


        //! Parameter Check
        if(!is_numeric($iDisplayManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteDisplayManagerDetails($iDisplayManagerNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteDisplayManagerDetailsXML($iDisplayManagerNo);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve all Display Manager
     *  @return $mData            -       Array         -   array of object of display manager
     */
    function retrieveAllDisplayManager()
    {
        $msg = '';

        $data = getDisplayManagerAllXML();

        $mData = array();

        $ii = 0;

        foreach($data as $val)
        {
            $mData[$ii] = new rtCommDisplayManager();

            $mData[$ii]->iDisplayManagerNo = (int)$val->manager_no;
            $mData[$ii]->sName = (string)$val->name;
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
     *  @brief Function to Retrieve Display Manager For Id
     *  @param  $testObj        -       object      -   Display Manager object
     *  @return $mData          -       Object      -   Data object
     */
    function retrieveDisplayManagerFromId($testObj)
    {
        $msg = '';

        $iDisplayManagerNo = $testObj->iDisplayManagerNo;


        //! Parameter Check
        if(!is_numeric($iDisplayManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getDisplayManagerForIdXML($iDisplayManagerNo);

        if(isset($data->name))
        {
            $testObj->sName = (string)$data->name;
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
     *  @brief Function to Add Display Module Manager
     *  @param  $testObj        -       object      -   Display Module Manager object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addDisplayModuleManager($testObj)
    {

        $msg = '';

        $sName = $testObj->sName;
        $aDisplayManagerId = $testObj->aDisplayManagerId;
        $iNumDisplayManagerId = count($aDisplayManagerId);
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

        foreach($aDisplayManagerId as $val)
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

        if(!display_is_date($dCreatedDate) && !display_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(display_is_user_date($dCreatedDate))
        {
            $dCreatedDate = display_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!display_is_time($tCreatedTime))
        {
            $tCreatedTime = date("H:i:s");
        }


        $testObj->iDisplayModuleManagerNo = insertDisplayModuleManagerDetails($sName,implode(",",$aDisplayManagerId),implode(",",$aDefaultMessageId),$iUserNo,$dCreatedDate,$tCreatedTime,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iDisplayModuleManagerNo;

        //Insert in xml file
        if(is_numeric($testObj->iDisplayModuleManagerNo))
        {
            $xmlFileInsert = insertDisplayModuleManagerDetailsXML($msg,$sName,$aDisplayManagerId,$aDefaultMessageId,$iUserNo,display_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Update Display Module Manager
     *  @param  $testObj        -       object      -   Display Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function saveDisplayModuleManager($testObj)
    {

        $msg = '';

        $iDisplayModuleManagerNo = $testObj->iDisplayModuleManagerNo;
        $sName = $testObj->sName;
        $aDisplayManagerId = $testObj->aDisplayManagerId;
        $iNumDisplayManagerId = count($aDisplayManagerId);
        $aDefaultMessageId = $testObj->aDefaultMessageId;
        $iNumDefaultMessageId = count($aDefaultMessageId);
        $iLastUpdateUserId = $testObj->iLastUpdateUserId;
        $dLastUpdateDate = $testObj->dLastUpdateDate;
        $tLastUpdateTime = $testObj->tLastUpdateTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;

        //! Parameter Check
        if(!is_numeric($iDisplayModuleManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        foreach($aDisplayManagerId as $val)
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

        if(!display_is_date($dLastUpdateDate) && !display_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(display_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = display_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!display_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }


        $msg = updateDisplayModuleManagerDetails($iDisplayModuleManagerNo,$sName,implode(",",$aDisplayManagerId),implode(",",$aDefaultMessageId),$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);

        //Insert in xml file
        if($msg == "M1001")
        {
            $xmlFileInsert = updateDisplayModuleManagerDetailsXML($iDisplayModuleManagerNo,$sName,$aDisplayManagerId,$aDefaultMessageId,$iLastUpdateUserId,display_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Remove Display Module Manager
     *  @param  $testObj        -       object      -   Display Module Manager object
     *  @return $msg            -       String      -   set as message
     */
    function removeDisplayModuleManager($testObj)
    {

        $msg = '';

        $iDisplayModuleManagerNo = $testObj->iDisplayModuleManagerNo;


        //! Parameter Check
        if(!is_numeric($iDisplayModuleManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteDisplayModuleManagerDetails($iDisplayModuleManagerNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteDisplayModuleManagerDetailsXML($iDisplayModuleManagerNo);
        }

        return $msg;
    }

    /*!
     *  @brief Function to Retrieve All Display Module Manager
     *  @return $mData            -       Array         -   array of object of DMM
     */
    function retrieveAllDisplayModuleManager()
    {
        $msg = '';

        $data = getDisplayModuleManagerAllXML();

        $mData = array();

        $ii = 0;

        foreach($data as $val)
        {
            $mData[$ii] = new rtCommDisplayModuleManager();

            $mData[$ii]->iDisplayModuleManagerNo = (int)$val->module_manager_no;
            $mData[$ii]->sName = (string)$val->name;

            for($iii = 0 ; $iii < count($val->display_manager_no) ; $iii++ )
            {
                if($val->display_manager_no[$iii] != "")
                    $mData[$ii]->aDisplayManagerId[] = (int)$val->display_manager_no[$iii];
            }

            $mData[$ii]->iNumDisplayManagerId = count($mData[$ii]->aDisplayManagerId);

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
     *  @brief Function to Retrieve  Display Module Manager for id
     *  @param  $testObj        -       object      -   Display Module Manager object
     *  @return $mData          -       object      -   Data object
     */
    function retrieveDisplayModuleManagerFromId($testObj)
    {
        $msg = '';

        $iDisplayModuleManagerNo = $testObj->iDisplayModuleManagerNo;


        //! Parameter Check
        if(!is_numeric($iDisplayModuleManagerNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getDisplayModuleManagerForIdXML($iDisplayModuleManagerNo);

        if(isset($data->name))
        {
            $testObj->sName = (string)$data->name;


            for($iii = 0 ; $iii < count($data->display_manager_no) ; $iii++ )
            {
                if($data->display_manager_no[$iii] != "" )
                    $testObj->aDisplayManagerId[] = (int)$data->display_manager_no[$iii];
            }

            $testObj->iNumDisplayManagerId = count($testObj->aDisplayManagerId);

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
     *  @brief Function to Add Display
     *  @param  $testObj        -       object      -   Display object
     *  @return $msg            -       Int         -   Inserted Id or set as message
     */
    function addDisplay($testObj)
    {

        $msg = '';

        $sDisplayToName = $testObj->sDisplayToName;
        $iDisplayToUserId = $testObj->iDisplayToUserId;
        $sTag = $testObj->sTag;
        $sMessage = $testObj->sMessage;
        $dScheduledDate = $testObj->dScheduledDate;
        $tScheduledTime = $testObj->tScheduledTime;
        $sModuleName = $testObj->sModuleName;
        $iModuleId = $testObj->iModuleId;
        $iDisplayManagerId = $testObj->iDisplayManagerId;
        $iCommunicationManagerId = $testObj->iCommunicationManagerId;
        $iUserNo = $testObj->iUserNo;
        $dCreatedDate = $testObj->dCreatedDate;
        $tCreatedTime = $testObj->tCreatedTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        if($sDisplayToName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iDisplayToUserId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sTag == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!display_is_date($dScheduledDate) && !display_is_user_date($dScheduledDate) && $dScheduledDate != '')
        {
            $msg = INVALID_DATA;
            return $msg;
        }
        else if(display_is_user_date($dScheduledDate))
        {
            $dScheduledDate = display_getDateMonthYear($dScheduledDate);
        }
        else
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!display_is_time($tScheduledTime))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sModuleName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iDisplayManagerId))
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

        if(!display_is_date($dCreatedDate) && !display_is_user_date($dCreatedDate) && $dCreatedDate != '')
        {
            $dCreatedDate = date("Y-m-d");
        }
        else if(display_is_user_date($dCreatedDate))
        {
            $dCreatedDate = display_getDateMonthYear($dCreatedDate);
        }
        else
        {
            $dCreatedDate = date("Y-m-d");
        }

        if(!display_is_time($tCreatedTime))
        {   
            $tCreatedTime = date("H:i:s");
        }


        $testObj->iDisplayNo = insertDisplayDetails($sDisplayToName,$iDisplayToUserId,$sTag,$sMessage,$dScheduledDate,$tScheduledTime,$sModuleName,$iModuleId,$iUserNo,$dCreatedDate,$tCreatedTime,$iDisplayManagerId,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);

        $msg = $testObj->iDisplayNo;

        //Insert in xml file
        if(is_numeric($testObj->iDisplayNo))
        {
            $xmlFileInsert = insertDisplayDetailsXML($msg,$sDisplayToName,$iDisplayToUserId,$sTag,$sMessage,display_getDateMonthYear($dScheduledDate),$tScheduledTime,$sModuleName,$iModuleId,$iUserNo,display_getDateMonthYear($dCreatedDate),$tCreatedTime,"","","",$iDisplayManagerId,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);
            echo $xmlFileInsert;
        }

        return $msg;
    }



    /*!
     *  @brief Function to Add Display
     *  @param  $testObj        -       object      -   Display object
     *  @return $msg            -       String      -   set as message
     */
    function saveDisplay($testObj)
    {

        $msg = '';

        $iDisplayNo = $testObj->iDisplayNo;
        $sDisplayToName = $testObj->sDisplayToName;
        $iDisplayToUserId = $testObj->iDisplayToUserId;
        $sTag = $testObj->sTag;
        $sMessage = $testObj->sMessage;
        $dScheduledDate = $testObj->dScheduledDate;
        $tScheduledTime = $testObj->tScheduledTime;
        $sModuleName = $testObj->sModuleName;
        $iModuleId = $testObj->iModuleId;
        $iDisplayManagerId = $testObj->iDisplayManagerId;
        $iCommunicationManagerId = $testObj->iCommunicationManagerId;
        $iLastUpdateUserId = $testObj->iLastUpdateUserId;
        $dLastUpdateDate = $testObj->dLastUpdateDate;
        $tLastUpdateTime = $testObj->tLastUpdateTime;
        $sExtra1 = $testObj->sExtra1;
        $sExtra2 = $testObj->sExtra2;
        $sExtra3 = $testObj->sExtra3;


        //! Parameter Check
        if(!is_numeric($iDisplayNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sDisplayToName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iDisplayToUserId))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sTag == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!display_is_date($dScheduledDate) && !display_is_user_date($dScheduledDate) && $dScheduledDate != '')
        {
            $msg = INVALID_DATA;
            return $msg;
        }
        else if(display_is_user_date($dScheduledDate))
        {
            $dScheduledDate = display_getDateMonthYear($dScheduledDate);
        }
        else
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!display_is_time($tScheduledTime))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if($sModuleName == "")
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        if(!is_numeric($iDisplayManagerId))
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

        if(!display_is_date($dLastUpdateDate) && !display_is_user_date($dLastUpdateDate) && $dLastUpdateDate != '')
        {
            $dLastUpdateDate = date("Y-m-d");
        }
        else if(display_is_user_date($dLastUpdateDate))
        {
            $dLastUpdateDate = display_getDateMonthYear($dLastUpdateDate);
        }
        else
        {
            $dLastUpdateDate = date("Y-m-d");
        }

        if(!display_is_time($tLastUpdateTime))
        {
            $tLastUpdateTime = date("H:i:s");
        }


        $msg = updateDisplayDetails($iDisplayNo,$sDisplayToName,$iDisplayToUserId,$sTag,$sMessage,$dScheduledDate,$tScheduledTime,$sModuleName,$iModuleId,$iLastUpdateUserId,$dLastUpdateDate,$tLastUpdateTime,$iDisplayManagerId,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);


        //Insert in xml file
        if($msg == "M1001")
        {
            $xmlFileInsert = updateDisplayDetailsXML($iDisplayNo,$msg,$sDisplayToName,$iDisplayToUserId,$sTag,$sMessage,display_getDateMonthYear($dScheduledDate),$tScheduledTime,$sModuleName,$iModuleId,$iLastUpdateUserId,display_getDateMonthYear($dLastUpdateDate),$tLastUpdateTime,$iDisplayManagerId,$iCommunicationManagerId,$sExtra1,$sExtra2,$sExtra3);
        }

        return $msg;
    }


    /*!
     *  @brief Function to Retrieve Display  for id
     *  @param  $testObj        -       object      -   Display object
     *  @return $mdata          -       object      -   Display object with data filled in
     */
    function retrieveDisplayFromId($testObj)
    {
        $msg = '';

        $iDisplayNo = $testObj->iDisplayNo;


        //! Parameter Check
        if(!is_numeric($iDisplayNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $data = getDisForDisIdXML($iDisplayNo);
        print_r($data);  exit;
        if(isset($data->tag))
        {
            $testObj->sDisplayToName = (string)$data->display_to->name;
            $testObj->iDisplayToId = (int)$data->display_to->id;
            $testObj->sTag = (string)$data->tag;
            $testObj->sMessage = (string)$data->message;
            $testObj->dScheduledDate = (string)$data->scheduled_date;
            $testObj->tScheduledTime = (string)$data->scheduled_time;
            $testObj->iModuleId = (int)$data->module->id;
            $testObj->sModuleName = (string)$data->module->name;
            $testObj->iUserNo = (int)$data->created->user_no;
            $testObj->dCreatedDate = (string)$data->created->date;
            $testObj->tCreatedTime = (string)$data->created->time;
            $testObj->iLastUpdateUserId = (int)$data->last_updated->user_no;
            $testObj->dLastUpdateDate = (string)$data->last_updated->date;
            $testObj->tLastUpdateTime = (string)$data->last_updated->time;
            $testObj->iDisplayManagerId = (int)$data->display_manager->id;
            $testObj->iCommunicationManagerId = (int)$data->communication_manager_id;
            $testObj->sExtra1 = (string)$data->extra1;
            $testObj->sExtra2 = (string)$data->extra2;
            $testObj->sExtra3 = (string)$data->extra3;
        }

        return $testObj;
    }


    /*!
     *  @brief Function to Retrieve Display  for Scheduled date
     *  @param  $testObj        -       object      -   Display object
     *  @return $mdata          -       object      -   Display object with data filled in
     */
    function retrieveDisplayFromScheduleDate($testObj)
    {
        $msg = '';

        $dScheduledDate = $testObj->dScheduledDate;


        //! Parameter Check
        if(!display_is_date($dScheduledDate) && !display_is_user_date($dScheduledDate) && $dScheduledDate != '')
        {  //echo "aa";
            $msg = INVALID_DATA;
            return $msg;
        }
        else if(display_is_user_date($dScheduledDate))
        {
           // $dScheduledDate = display_getDateMonthYear($dScheduledDate);
        }
        else
        {  //echo "cc";
            $msg = INVALID_DATA;
            return $msg;
        }

        $data1 = getDisForDisScheduledDateXML($dScheduledDate);

        $testObj1 = array();

        $ll = 0;

        foreach($data1 as $data)
        {
            $testObj1[$ll] = new rtCommDisplay();

            $testObj1[$ll]->iDisplayNo = (int)$data->display_no;

            $testObj1[$ll]->sDisplayToName = (string)$data->display_to->name;
            $testObj1[$ll]->iDisplayToId = (int)$data->display_to->id;
            $testObj1[$ll]->sTag = (string)$data->tag;
            $testObj1[$ll]->sMessage = (string)$data->message;
            $testObj1[$ll]->dScheduledDate = (string)$data->scheduled_date;
            $testObj1[$ll]->tScheduledTime = (string)$data->scheduled_time;
            $testObj1[$ll]->iModuleId = (int)$data->module->id;
            $testObj1[$ll]->sModuleName = (string)$data->module->name;
            $testObj1[$ll]->iUserNo = (int)$data->created->user_no;
            $testObj1[$ll]->dCreatedDate = (string)$data->created->date;
            $testObj1[$ll]->tCreatedTime = (string)$data->created->time;
            $testObj1[$ll]->iLastUpdateUserId = (int)$data->last_updated->user_no;
            $testObj1[$ll]->dLastUpdateDate = (string)$data->last_updated->date;
            $testObj1[$ll]->tLastUpdateTime = (string)$data->last_updated->time;
            $testObj1[$ll]->iDisplayManagerId = (int)$data->display_manager->id;
            $testObj1[$ll]->iCommunicationManagerId = (int)$data->communication_manager_id;
            $testObj1[$ll]->sExtra1 = (string)$data->extra1;
            $testObj1[$ll]->sExtra2 = (string)$data->extra2;
            $testObj1[$ll]->sExtra3 = (string)$data->extra3;

            $ll++;
        }

        return $testObj1;
    }

    /*!
     *  @brief Function to Remove Display
     *  @param  $testObj        -       object      -   Display object
     *  @return $msg            -       String      -   set as message
     */
    function removeDisplay($testObj)
    {

        $msg = '';

        $iDisplayNo = $testObj->iDisplayNo;


        //! Parameter Check
        if(!is_numeric($iDisplayNo))
        {
            $msg = INVALID_DATA;
            return $msg;
        }

        $msg = deleteDisplayDetails($iDisplayNo);

        //Insert in xml file
        if($msg == "M1100")
        {
            $xmlFileInsert = deleteDisplayDetailsXML($iDisplayNo);
        }

        return $msg;
    }



    /*!
     *  @brief Function to Check For Valid date
     *  @param  $date           -       String      -   Date
     *  @return $msg            -       Bool        -   True / False
     */
    function display_is_date($date)
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
    function display_is_user_date($date)
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
    function display_is_time($time)
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
    function display_getDateMonthYear($date)
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