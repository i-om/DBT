<?php
    /**************************************************************************
     *                                                                        *
     *  SMS Module Manager XML layer                                      *
     *                                                                        *
     **************************************************************************/



    /*!
     *  @brief Function to get All SMS Module Manager details
     *  @return $data                   -       ARRAY       -       SMS data
     */
    function getSMSModuleManagerAllXML()
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $sms_xml_file_path;

        $filename = "sms_module_manager";

        $path = @$sms_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            sms_message_log("XML File Found. :: $xFile ::");

            //! Create Xml Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->module);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                $data[] = $doc->module[$iii];
            }

            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);

            return $data;
        }
        else            //! else -> Return File Not Found
        {
            //! Message Loggin
            sms_message_log("XML File Not Found. :: $xFile ::");

            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }
    }


    /*!
     *  @brief Function to get SMS Module Manager details according to the SMS Module Manager id provided from XML
     *  @param  $id                     -       Int         -       SMS Module Manager Id
     *  @return $data                   -       ARRAY       -       SMS data
     */
    function getSMSModuleManagerForIdXML($id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        global $sms_xml_file_path;

        $filename = "sms_module_manager";

        $path = @$sms_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            sms_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->module);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the smsunication id is found in the xml
                if($id == $doc->module[$iii]->module_manager_no)
                {
                    //! Message Loggin
                    sms_message_log('End of Function : '. __FUNCTION__);

                    return $doc->module[$iii];
                }
            }
        }
        else
        {
            //! Message Loggin
            sms_message_log("XML File Not Found. :: $xFile ::");
            sms_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        sms_message_log("No Record Found.");
        sms_message_log('End of Function : '. __FUNCTION__);
    }

    /*!
     *  @brief Function to get SMS Module Manager details according to the Module Name provided from XML
     *  @param  $name                   -       String      -       Module name
     *  @return $data                   -       ARRAY       -       SMS data
     */
    function getSMSModuleManagerForNameXML($name)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $sms_xml_file_path;

        $filename = "sms_module_manager";

        $path = @$sms_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            sms_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->module);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the  name is found in the xml
                if($name == $doc->module[$iii]->name)
                {
                    $data[] = $doc->module[$iii];
                }
            }

            //! Check if any records found
            if(count($data) == 0)
            {
                //! Message Loggin
                sms_message_log("No Record Found.");
            }
        }
        else
        {
            //! Message Loggin
            sms_message_log("XML File Not Found. :: $xFile ::");
            sms_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        sms_message_log('End of Function : '. __FUNCTION__);

        return $data;
    }


    /*!
     *  @brief Function to Insert SMS Module Manager details in XML
     *  @param  $id                 -       Int             -   SMS Id
     *  @param  $name               -       String          -   Module Name
     *  @param  $sms_manager_no -       Array           -   SMS Manager No
     *  @param  $default_message_no -       Array           -   Default Message No
     *  @param  $user_id            -       Int             -   Creation User Id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function insertSMSModuleManagerDetailsXML($id,$name,$sms_manager_no,$default_message_no,$user_id,$date,$time,$update_user_id,$update_date,$update_time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        global $sms_xml_file_path;

        $filename = "sms_module_manager";

        $path = @$sms_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            sms_message_log("XML File Not Found. :: $xFile ::");
            sms_message_log("Creating New XML File. :: $xFile ::");
            file_put_contents($xFile,'<?xml version="1.0"?><sms></sms>');
        }
        else
        {
            //! Message Loggin
            sms_message_log("XML File Found. :: $xFile ::");
        }

        //! Creating XML Object
        $outputs = simplexml_load_file($xFile);

        //!Write in xml
        $aa = count($outputs->module);

        $outputs->module[$aa]->module_manager_no = $id;
        $outputs->module[$aa]->name = $name;

        $cc = count($sms_manager_no);

        for($ii = 0 ; $ii < $cc ; $ii++)
        {
            $outputs->module[$aa]->sms_manager_no[$ii] = $sms_manager_no[$ii];
        }

        $outputs->module[$aa]->num_sms_manager = $cc;

        $cc = count($default_message_no);

        for($ii = 0 ; $ii < $cc ; $ii++)
        {
            $outputs->module[$aa]->default_message_no[$ii] = $default_message_no[$ii];
        }

        $outputs->module[$aa]->num_default_message = $cc;
        $outputs->module[$aa]->created->user_no = $user_id;
        $outputs->module[$aa]->created->date = $date;
        $outputs->module[$aa]->created->time = $time;
        $outputs->module[$aa]->last_updated->user_no = $update_user_id;
        $outputs->module[$aa]->last_updated->date = $update_date;
        $outputs->module[$aa]->last_updated->time = $update_time;
        $outputs->module[$aa]->extra1 = $extra1;
        $outputs->module[$aa]->extra2 = $extra2;
        $outputs->module[$aa]->extra3 = $extra3;

        //! Updating XML File
        file_put_contents($xFile,$outputs->asXML());

        //! Message Loggin
        sms_message_log("XML File Update Successfully.");
        sms_message_log('End of Function : '. __FUNCTION__);
    }


    /*!
     *  @brief Function to Update SMS Module Manager details in XML
     *  @param  $id                 -       Int             -   SMS Id
     *  @param  $name               -       String          -   Module Name
     *  @param  $sms_manager_no -       Array           -   SMS Manager No
     *  @param  $default_message_no -       Array           -   Default Message No
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function updateSMSModuleManagerDetailsXML($id,$name,$sms_manager_no,$default_message_no,$update_user_id,$update_date,$update_time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        global $sms_xml_file_path;

        $filename = "sms_module_manager";

        $path = @$sms_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            sms_message_log("XML File Not Found. :: $xFile ::");
            sms_message_log('End of Function : '. __FUNCTION__);
        }
        else
        {
            //! Message Loggin
            sms_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $outputs = simplexml_load_file($xFile);

            //!Write in xml
            $cnt = count($outputs->module);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->module[$aa]->module_manager_no)
                {
                    $update = 1;

                    $outputs->module[$aa]->name = $name;

                    $cc = count($sms_manager_no);

                    for($ii = 0 ; $ii < $cc ; $ii++)
                    {
                        $outputs->module[$aa]->sms_manager_no[$ii] = $sms_manager_no[$ii];
                    }

                    $outputs->module[$aa]->num_sms_manager = $cc;

                    $cc = count($default_message_no);

                    for($ii = 0 ; $ii < $cc ; $ii++)
                    {
                        $outputs->module[$aa]->default_message_no[$ii] = $default_message_no[$ii];
                    }

                    $outputs->module[$aa]->num_default_message = $cc;
                    $outputs->module[$aa]->last_updated->user_no = $update_user_id;
                    $outputs->module[$aa]->last_updated->date = $update_date;
                    $outputs->module[$aa]->last_updated->time = $update_time;
                    $outputs->module[$aa]->extra1 = $extra1;
                    $outputs->module[$aa]->extra2 = $extra2;
                    $outputs->module[$aa]->extra3 = $extra3;

                    //! Updating XML File
                    file_put_contents($xFile,$outputs->asXML());

                    break;
                }
            }

            if($update == 1)
            {
                //! Message Loggin
                sms_message_log("XML File Update Successfully.");
            }
            else
            {
                //! Message Loggin
                sms_message_log("No Record found For $id.");
            }

            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);

        }
    }


    /*!
     *  @brief Function to Delete SMS Details From XML
     *  @param  $id                 -       Int             -   SMS Id
     */
    function deleteSMSModuleManagerDetailsXML($id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        global $sms_xml_file_path;

        $filename = "sms_module_manager";

        $path = @$sms_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            sms_message_log("XML File Not Found. :: $xFile ::");
            sms_message_log('End of Function : '. __FUNCTION__);
        }
        else
        {
            //! Message Loggin
            sms_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $outputs = simplexml_load_file($xFile);

            //!Write in xml
            $cnt = count($outputs->module);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->module[$aa]->module_manager_no)
                {
                    $update = 1;

                    unset($outputs->module[$aa]);

                    //! Updating XML File
                    file_put_contents($xFile,$outputs->asXML());

                    break;
                }
            }

            if($update == 1)
            {
                //! Message Loggin
                sms_message_log("XML File Update Successfully.");
            }
            else
            {
                //! Message Loggin
                sms_message_log("No Record found For $id.");
            }

            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);

        }
    }
?>