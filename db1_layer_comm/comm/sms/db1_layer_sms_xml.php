<?php
    /**************************************************************************
     *                                                                        *
     *  SMS XML layer                                                       *
     *                                                                        *
     **************************************************************************/



    /*!
     *  @brief Function to get All SMS details
     *  @return $data                   -       ARRAY       -       SMS data
     */
    function getSMSXML()
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $sms_xml_file_path;

        $filename = "sms";

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

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                $data[] = $doc->info[$iii];
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
     *  @brief Function to get SMS details according to the SMS id provided from XML
     *  @param  $id                     -       Int         -       SMS Id
     *  @return $data                   -       ARRAY       -       SMS data
     */
    function getSMSForSMSIdXML($id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        global $sms_xml_file_path;

        $filename = "sms";

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

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the smsunication id is found in the xml
                if($id == $doc->info[$iii]->sms_no)
                {
                    //! Message Loggin
                    sms_message_log('End of Function : '. __FUNCTION__);

                    return $doc->info[$iii];
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
     *  @brief Function to get SMS details according to the Communication Id provided from XML
     *  @param  $communication_id       -       String      -       Communication Id
     *  @return $data                   -       ARRAY       -       SMS data
     */
    function getSMSForCommunicationIdXML($communication_id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $sms_xml_file_path;

        $filename = "sms";

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

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the smsunication type is found in the xml
                if($communication_id == $doc->info[$iii]->communication_manager_id)
                {
                    $data[] = $doc->info[$iii];
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
     *  @brief Function to get SMS details according to the Scheduled Date provided from XML
     *  @param  $date                   -       String      -       SMS scheduled date
     *  @return $data                   -       ARRAY       -       SMS data
     */
    function getSMSForSMSScheduledDateXML($date)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $sms_xml_file_path;

        $filename = "sms";

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

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the match is found
                if($date == $doc->info[$iii]->scheduled_date)
                {
                    $data[] = $doc->info[$iii];
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
     *  @brief Function to get SMS details according to the SMS Manager Id provided from XML
     *  @param  $sms_manager_id       -       Int         -       SMS Manager Id
     *  @return $data                   -       ARRAY       -       SMS data
     */
    function getSMSForSMSManagerIdXML($sms_manager_id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $sms_xml_file_path;

        $filename = "sms";

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

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the match is found
                if($sms_manager_id == $doc->info[$iii]->sms_manager->id)
                {
                    $data[] = $doc->info[$iii];
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
     *  @brief Function to get SMS details according to the Status provided from XML
     *  @param  $status                 -       String      -       Status
     *  @return $data                   -       ARRAY       -       SMS data
     */
    function getSMSForStatusXML($status)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $sms_xml_file_path;

        $filename = "sms";

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

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the match is found
                if($status == $doc->info[$iii]->status)
                {
                    $data[] = $doc->info[$iii];
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
     *  @brief Function to Insert SMS details For xml
     *  @param  $id                 -       Int             -   SMS Id
     *  @param  $to_name            -       Array           -   SMS to Name
     *  @param  $to_mobile          -       Array           -   SMS To Mobile No.
     *  @param  $from_name          -       String          -   SMS From Name
     *  @param  $from_mobile        -       String          -   SMS From Mobile No
     *  @param  $message            -       String          -   SMS message
     *  @param  $status             -       String          -   SMS Status
     *  @param  $sched_date         -       String          -   Scheduled date
     *  @param  $sched_time         -       String          -   Scheduled time
     *  @param  $sent_date          -       String          -   Sent date
     *  @param  $sent_time          -       String          -   Sent time
     *  @param  $module             -       String          -   Module Name
     *  @param  $module_id          -       Int             -   Module Record Id
     *  @param  $user_id            -       Int             -   creation user id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $sender_id          -       String          -   Sender Id
     *  @param  $plus91_sms_id      -       String          -   Plus91_SMS_Id
     *  @param  $sms_manager_id     -       String          -   SMS Manager Id
     *  @param  $sms_manager_name   -       String          -   SMS Manager Name
     *  @param  $sms_manager_org    -       String          -   SMS Manager Organization
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function insertSMSDetailsXML($id,$to_name,$to_mobile,$from_name,$from_mobile,$message,$status,$sched_date,$sched_time,$sent_date,$sent_time,$module,$module_id,$user_id,$date,$time,$update_user_id,$update_date,$update_time,$sender_id,$plus91_sms_id,$sms_manager_id,$sms_manager_name,$sms_manager_org,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        global $sms_xml_file_path;

        $filename = "sms";

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
        $aa = count($outputs->info);

        $outputs->info[$aa]->sms_no = $id;

        $cc = count($to_name);

        for($ii = 0 ; $ii < $cc ; $ii++)
        {
            $outputs->info[$aa]->sms_to[$ii]->name = $to_name[$ii];
            $outputs->info[$aa]->sms_to[$ii]->mobile_no = $to_mobile[$ii];
        }

        $outputs->info[$aa]->num_sms_to = $cc;
        $outputs->info[$aa]->sms_from->name = $from_name;
        $outputs->info[$aa]->sms_from->mobile_no = $from_mobile;
        $outputs->info[$aa]->message = $message;
        $outputs->info[$aa]->num_character = strlen($message);

        $lk = ceil( strlen($message) / 150 ) * $cc;

        $outputs->info[$aa]->num_sms = $lk;

        $outputs->info[$aa]->status = $status;
        $outputs->info[$aa]->scheduled_date = $sched_date;
        $outputs->info[$aa]->scheduled_time = $sched_time;
        $outputs->info[$aa]->sent_date = $sent_date;
        $outputs->info[$aa]->sent_time = $sent_time;
        $outputs->info[$aa]->module->id = $module_id;
        $outputs->info[$aa]->module->name = $module;
        $outputs->info[$aa]->created->user_no = $user_id;
        $outputs->info[$aa]->created->date = $date;
        $outputs->info[$aa]->created->time = $time;
        $outputs->info[$aa]->last_updated->user_no = $update_user_id;
        $outputs->info[$aa]->last_updated->date = $update_date;
        $outputs->info[$aa]->last_updated->time = $update_time;
        $outputs->info[$aa]->sms_manager->id = $sms_manager_id;
        $outputs->info[$aa]->sms_manager->name = $sms_manager_name;
        $outputs->info[$aa]->sms_manager->sender_id = $sender_id;
        $outputs->info[$aa]->sms_manager->plus91_sms_id = $plus91_sms_id;
        $outputs->info[$aa]->sms_manager->organization_name = $sms_manager_org;
        $outputs->info[$aa]->communication_manager_id = $comm_manager_id;
        $outputs->info[$aa]->extra1 = $extra1;
        $outputs->info[$aa]->extra2 = $extra2;
        $outputs->info[$aa]->extra3 = $extra3;

        //! Updating XML File
        file_put_contents($xFile,$outputs->asXML());

        //! Message Loggin
        sms_message_log("XML File Update Successfully.");
        sms_message_log('End of Function : '. __FUNCTION__);
    }


    /*!
     *  @brief Function to Update SMS details For xml
     *  @param  $id                 -       Int             -   SMS Id
     *  @param  $to_name            -       Array           -   SMS to Name
     *  @param  $to_mobile          -       Array           -   SMS To Mobile No.
     *  @param  $from_name          -       String          -   SMS From Name
     *  @param  $from_mobile        -       String          -   SMS From Mobile No
     *  @param  $message            -       String          -   SMS message
     *  @param  $status             -       String          -   SMS Status
     *  @param  $sched_date         -       String          -   Scheduled date
     *  @param  $sched_time         -       String          -   Scheduled time
     *  @param  $sent_date          -       String          -   Sent date
     *  @param  $sent_time          -       String          -   Sent time
     *  @param  $module             -       String          -   Module Name
     *  @param  $module_id          -       Int             -   Module Record Id
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $sender_id          -       String          -   Sender Id
     *  @param  $plus91_sms_id      -       String          -   Plus91_SMS_Id
     *  @param  $sms_manager_id     -       String          -   SMS Manager Id
     *  @param  $sms_manager_name   -       String          -   SMS Manager Name
     *  @param  $sms_manager_org    -       String          -   SMS Manager Organization
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function updateSMSDetailsXML($id,$to_name,$to_mobile,$from_name,$from_mobile,$message,$status,$sched_date,$sched_time,$sent_date,$sent_time,$module,$module_id,$update_user_id,$update_date,$update_time,$sender_id,$plus91_sms_id,$sms_manager_id,$sms_manager_name,$sms_manager_org,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        global $sms_xml_file_path;

        $filename = "sms";

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
            $cnt = count($outputs->info);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->info[$aa]->sms_no)
                {
                    $update = 1;

                    $cc = count($to_name);

                    for($ii = 0 ; $ii < $cc ; $ii++)
                    {
                        $outputs->info[$aa]->sms_to[$ii]->name = $to_name[$ii];
                        $outputs->info[$aa]->sms_to[$ii]->mobile_no = $to_mobile[$ii];
                    }

                    $outputs->info[$aa]->num_sms_to = $cc;
                    $outputs->info[$aa]->sms_from->name = $from_name;
                    $outputs->info[$aa]->sms_from->mobile_no = $from_mobile;
                    $outputs->info[$aa]->message = $message;
                    $outputs->info[$aa]->num_character = strlen($message);

                    $lk = ceil( strlen($message) / 150 ) * $cc;

                    $outputs->info[$aa]->num_sms = $lk;

                    $outputs->info[$aa]->status = $status;
                    $outputs->info[$aa]->scheduled_date = $sched_date;
                    $outputs->info[$aa]->scheduled_time = $sched_time;
                    $outputs->info[$aa]->sent_date = $sent_date;
                    $outputs->info[$aa]->sent_time = $sent_time;
                    $outputs->info[$aa]->module->id = $module_id;
                    $outputs->info[$aa]->module->name = $module;
                    $outputs->info[$aa]->last_updated->user_no = $update_user_id;
                    $outputs->info[$aa]->last_updated->date = $update_date;
                    $outputs->info[$aa]->last_updated->time = $update_time;
                    $outputs->info[$aa]->sms_manager->id = $sms_manager_id;
                    $outputs->info[$aa]->sms_manager->name = $sms_manager_name;
                    $outputs->info[$aa]->sms_manager->sender_id = $sender_id;
                    $outputs->info[$aa]->sms_manager->plus91_sms_id = $plus91_sms_id;
                    $outputs->info[$aa]->sms_manager->organization_name = $sms_manager_org;
                    $outputs->info[$aa]->communication_manager_id = $comm_manager_id;
                    $outputs->info[$aa]->extra1 = $extra1;
                    $outputs->info[$aa]->extra2 = $extra2;
                    $outputs->info[$aa]->extra3 = $extra3;

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
     *  @brief Function to Update SMS details XML Partial For Status
     *  @param  $sms_id             -       Int             -   SMS Id
     *  @param  $status             -       String          -   SMS Status
     *  @param  $sent_date          -       String          -   Sent date
     *  @param  $sent_time          -       String          -   Sent time
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     */
    function updateSMSDetailsForStatusXML($sms_id,$status,$sent_date,$sent_time,$update_user_id,$update_date,$update_time)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        global $sms_xml_file_path;

        $filename = "sms";

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
            $cnt = count($outputs->info);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($sms_id == $outputs->info[$aa]->sms_no)
                {
                    $update = 1;

                    $outputs->info[$aa]->status = $status;
                    $outputs->info[$aa]->sent_date = $sent_date;
                    $outputs->info[$aa]->sent_time = $sent_time;
                    $outputs->info[$aa]->last_updated->user_no = $update_user_id;
                    $outputs->info[$aa]->last_updated->date = $update_date;
                    $outputs->info[$aa]->last_updated->time = $update_time;

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
                sms_message_log("No Record found For $sms_id.");
            }

            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);

        }
    }


    /*!
     *  @brief Function to Delete SMS Details From XML
     *  @param  $id                 -       Int             -   SMS Id
     */
    function deleteSMSDetailsXML($id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        global $sms_xml_file_path;

        $filename = "sms";

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
            $cnt = count($outputs->info);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->info[$aa]->sms_no)
                {
                    $update = 1;

                    unset($outputs->info[$aa]);

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