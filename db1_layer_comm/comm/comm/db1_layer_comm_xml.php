<?php
    /**************************************************************************
     *                                                                        *
     *  Communication XML layer                                               *
     *                                                                        *
     **************************************************************************/



    /*!
     *  @brief Function to get All Communication details
     *  @return $data                   -       ARRAY       -       Communication data
     */
    function getCommXML()
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $comm_xml_file_path;

        $filename = "comm";

        $path = @$comm_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            comm_message_log("XML File Found. :: $xFile ::");

            //! Create Xml Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->manager);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                $data[] = $doc->manager[$iii];
            }

            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);

            return $data;
        }
        else            //! else -> Return File Not Found
        {
            //! Message Loggin
            comm_message_log("XML File Not Found. :: $xFile ::");

            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }
    }


    /*!
     *  @brief Function to get Communication details according to the Communication id provided from XML
     *  @param  $communication_id       -       Int         -       Communication Id
     *  @return $data                   -       ARRAY       -       Communication data
     */
    function getCommForCommIdXML($communication_id)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        global $comm_xml_file_path;

        $filename = "comm";

        $path = @$comm_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            comm_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->manager);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the communication id is found in the xml
                if($communication_id == $doc->manager[$iii]->comm_manager_no)
                {
                    //! Message Loggin
                    comm_message_log('End of Function : '. __FUNCTION__);

                    return $doc->manager[$iii];
                }
            }
        }
        else
        {
            //! Message Loggin
            comm_message_log("XML File Not Found. :: $xFile ::");
            comm_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        comm_message_log("No Record Found.");
        comm_message_log('End of Function : '. __FUNCTION__);
    }

    /*!
     *  @brief Function to get Communication details according to the Communication type provided from XML
     *  @param  $type                   -       String      -       Communication Type
     *  @return $data                   -       ARRAY       -       Communication data
     */
    function getCommForCommTypeXML($type)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $comm_xml_file_path;

        $filename = "comm";

        $path = @$comm_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            comm_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->manager);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the communication type is found in the xml
                if($type == $doc->manager[$iii]->type)
                {
                    $data[] = $doc->manager[$iii];
                }
            }

            //! Check if any records found
            if(count($data) == 0)
            {
                //! Message Loggin
                comm_message_log("No Record Found.");
            }
        }
        else
        {
            //! Message Loggin
            comm_message_log("XML File Not Found. :: $xFile ::");
            comm_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);

        return $data;
    }

    /*!
     *  @brief Function to get Communication details according to the Scheduled Date provided from XML
     *  @param  $date                   -       String      -       Communication scheduled date
     *  @return $data                   -       ARRAY       -       Communication data
     */
    function getCommForCommScheduledDateXML($date)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $comm_xml_file_path;

        $filename = "comm";

        $path = @$comm_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            comm_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->manager);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the match is found
                if($date == $doc->manager[$iii]->schedule_date)
                {
                    $data[] = $doc->manager[$iii];
                }
            }

            //! Check if any records found
            if(count($data) == 0)
            {
                //! Message Loggin
                comm_message_log("No Record Found.");
            }
        }
        else
        {
            //! Message Loggin
            comm_message_log("XML File Not Found. :: $xFile ::");
            comm_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);

        return $data;
    }

    /*!
     *  @brief Function to get Communication details according to the Repeat provided from XML
     *  @param  $repeat                 -       String      -       Communication Repeat
     *  @return $data                   -       ARRAY       -       Communication data
     */
    function getCommForCommRepeatXML($repeat)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $comm_xml_file_path;

        $filename = "comm";

        $path = @$comm_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            comm_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->manager);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the match is found
                if($repeat == $doc->manager[$iii]->repeat)
                {
                    $data[] = $doc->manager[$iii];
                }
            }

            //! Check if any records found
            if(count($data) == 0)
            {
                //! Message Loggin
                comm_message_log("No Record Found.");
            }
        }
        else
        {
            //! Message Loggin
            comm_message_log("XML File Not Found. :: $xFile ::");
            comm_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);

        return $data;
    }

    /*!
     *  @brief Function to Insert Communication details XML
     *  @param  $id                 -       Int             -   Communication Id
     *  @param  $type               -       String          -   Type
     *  @param  $type_ids           -       Array           -   type ids
     *  @param  $type_type          -       Array           -   type ids type
     *  @param  $message_details    -       String          -   Message Details
     *  @param  $from_user_id       -       Int             -   From User ID
     *  @param  $sched_date         -       String          -   Scheduled date
     *  @param  $repeat             -       String          -   Repeat
     *  @param  $expire_date        -       String          -   Repeat Expire Date
     *  @param  $frequency          -       Int             -   Frequenct of the repeat
     *  @param  $user_id            -       Int             -   creation user id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function insertCommunicationManagerDetailsXML($id,$type,$type_ids,$type_type,$message_details,$from_user_id,$sched_date,$repeat,$expire_date,$frequency,$user_id,$date,$time,$update_user_id,$update_date,$update_time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        global $comm_xml_file_path;

        $filename = "comm";

        $path = @$comm_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            comm_message_log("XML File Not Found. :: $xFile ::");
            comm_message_log("Creating New XML File. :: $xFile ::");
            file_put_contents($xFile,'<?xml version="1.0"?><communication></communication>');
        }
        else
        {
            //! Message Loggin
            comm_message_log("XML File Found. :: $xFile ::");
        }

        //! Creating XML Object
        $outputs = simplexml_load_file($xFile);

        //!Write in xml
        $aa = count($outputs->manager);

        $outputs->manager[$aa]->comm_manager_no = $id;
        $outputs->manager[$aa]->type = $type;

        $cc = count($type_ids);

        for($ii = 0 ; $ii < $cc ; $ii++)
        {
            $outputs->manager[$aa]->comm_message[$ii]->id = $type_ids[$ii];
            $outputs->manager[$aa]->comm_message[$ii]->type = $type_type[$ii];
        }

        $outputs->manager[$aa]->num_comm_message = $cc;
        $outputs->manager[$aa]->message_details = $message_details;
        $outputs->manager[$aa]->from_user_id = $from_user_id;
        $outputs->manager[$aa]->repeat = $repeat;
        $outputs->manager[$aa]->schedule_date = $sched_date;
        $outputs->manager[$aa]->expire_date = $expire_date;
        $outputs->manager[$aa]->frequency = $frequency;
        $outputs->manager[$aa]->created->user_no = $user_id;
        $outputs->manager[$aa]->created->date = $date;
        $outputs->manager[$aa]->created->time = $time;
        $outputs->manager[$aa]->last_updated->user_no = $update_user_id;
        $outputs->manager[$aa]->last_updated->date = $update_date;
        $outputs->manager[$aa]->last_updated->time = $update_time;
        $outputs->manager[$aa]->extra1 = $extra1;
        $outputs->manager[$aa]->extra2 = $extra2;
        $outputs->manager[$aa]->extra3 = $extra3;

        //! Updating XML File
        file_put_contents($xFile,$outputs->asXML());

        //! Message Loggin
        comm_message_log("XML File Update Successfully.");
        comm_message_log('End of Function : '. __FUNCTION__);
    }


    /*!
     *  @brief Function to Update Communication details XML
     *  @param  $id                 -       Int             -   Communication Id
     *  @param  $type               -       String          -   Type
     *  @param  $type_ids           -       Array           -   type ids
     *  @param  $type_type          -       Array           -   type ids type
     *  @param  $message_details    -       String          -   Message Details
     *  @param  $from_user_id       -       Int             -   From User ID
     *  @param  $sched_date         -       String          -   Scheduled date
     *  @param  $repeat             -       String          -   Repeat
     *  @param  $expire_date        -       String          -   Repeat Expire Date
     *  @param  $frequency          -       Int             -   Frequenct of the repeat
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function updateCommunicationManagerDetailsXML($id,$type,$type_ids,$type_type,$message_details,$from_user_id,$sched_date,$repeat,$expire_date,$frequency,$update_user_id,$update_date,$update_time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        global $comm_xml_file_path;

        $filename = "comm";

        $path = @$comm_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            comm_message_log("XML File Not Found. :: $xFile ::");
            comm_message_log('End of Function : '. __FUNCTION__);
        }
        else
        {
            //! Message Loggin
            comm_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $outputs = simplexml_load_file($xFile);

            //!Write in xml
            $cnt = count($outputs->manager);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->manager[$aa]->comm_manager_no)
                {
                    $update = 1;

                    $outputs->manager[$aa]->type = $type;

                    $cc = count($type_ids);

                    for($ii = 0 ; $ii < $cc ; $ii++)
                    {
                        $outputs->manager[$aa]->comm_message[$ii]->id = $type_ids[$ii];
                        $outputs->manager[$aa]->comm_message[$ii]->type = $type_type[$ii];
                    }

                    $outputs->manager[$aa]->num_comm_message = $cc;
                    $outputs->manager[$aa]->message_details = $message_details;
                    $outputs->manager[$aa]->from_user_id = $from_user_id;
                    $outputs->manager[$aa]->repeat = $repeat;
                    $outputs->manager[$aa]->schedule_date = $sched_date;
                    $outputs->manager[$aa]->expire_date = $expire_date;
                    $outputs->manager[$aa]->frequency = $frequency;
                    $outputs->manager[$aa]->last_updated->user_no = $update_user_id;
                    $outputs->manager[$aa]->last_updated->date = $update_date;
                    $outputs->manager[$aa]->last_updated->time = $update_time;
                    $outputs->manager[$aa]->extra1 = $extra1;
                    $outputs->manager[$aa]->extra2 = $extra2;
                    $outputs->manager[$aa]->extra3 = $extra3;

                    //! Updating XML File
                    file_put_contents($xFile,$outputs->asXML());

                    break;
                }
            }

            if($update == 1)
            {
                //! Message Loggin
                comm_message_log("XML File Update Successfully.");
            }
            else
            {
                //! Message Loggin
                comm_message_log("No Record found For $id.");
            }

            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);

        }
    }


    /*!
     *  @brief Function to Update Communication Partial Update for the Repeat details XML
     *  @param  $id                 -       Int             -   Communication Id
     *  @param  $type_ids           -       Array           -   type ids
     *  @param  $type_type          -       Array           -   type ids type
     *  @param  $sched_date         -       String          -   Scheduled date
     *  @param  $repeat             -       String          -   Repeat
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     */
    function updateCommunicationManagerDetailsForRepeatXML($id,$type_ids,$type_type,$sched_date,$repeat,$update_user_id,$update_date,$update_time)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        global $comm_xml_file_path;

        $filename = "comm";

        $path = @$comm_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            comm_message_log("XML File Not Found. :: $xFile ::");
            comm_message_log('End of Function : '. __FUNCTION__);
        }
        else
        {
            //! Message Loggin
            comm_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $outputs = simplexml_load_file($xFile);

            //!Write in xml
            $cnt = count($outputs->manager);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->manager[$aa]->comm_manager_no)
                {
                    $update = 1;

                    $cc = count($type_ids);

                    for($ii = 0 ; $ii < $cc ; $ii++)
                    {
                        $outputs->manager[$aa]->comm_message[$ii]->id = $type_ids[$ii];
                        $outputs->manager[$aa]->comm_message[$ii]->type = $type_type[$ii];
                    }

                    $outputs->manager[$aa]->num_comm_message = $cc;
                    $outputs->manager[$aa]->repeat = $repeat;
                    $outputs->manager[$aa]->schedule_date = $sched_date;
                    $outputs->manager[$aa]->last_updated->user_no = $update_user_id;
                    $outputs->manager[$aa]->last_updated->date = $update_date;
                    $outputs->manager[$aa]->last_updated->time = $update_time;

                    //! Updating XML File
                    file_put_contents($xFile,$outputs->asXML());

                    break;
                }
            }

            if($update == 1)
            {
                //! Message Loggin
                comm_message_log("XML File Update Successfully.");
            }
            else
            {
                //! Message Loggin
                comm_message_log("No Record found For $id.");
            }

            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);

        }
    }

    /*!
     *  @brief Function to Delete Communication Details From XML
     *  @param  $id                 -       Int             -   Communication Id
     */
    function deleteCommunicationManagerDetailsXML($id)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        global $comm_xml_file_path;

        $filename = "comm";

        $path = @$comm_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            comm_message_log("XML File Not Found. :: $xFile ::");
            comm_message_log('End of Function : '. __FUNCTION__);
        }
        else
        {
            //! Message Loggin
            comm_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $outputs = simplexml_load_file($xFile);

            //!Write in xml
            $cnt = count($outputs->manager);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->manager[$aa]->comm_manager_no)
                {
                    $update = 1;

                    unset($outputs->manager[$aa]);

                    //! Updating XML File
                    file_put_contents($xFile,$outputs->asXML());

                    break;
                }
            }

            if($update == 1)
            {
                //! Message Loggin
                comm_message_log("XML File Update Successfully.");
            }
            else
            {
                //! Message Loggin
                comm_message_log("No Record found For $id.");
            }

            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);

        }
    }
?>