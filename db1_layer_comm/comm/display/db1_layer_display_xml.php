<?php
    /**************************************************************************
     *                                                                        *
     *  Display XML layer                                                     *
     *                                                                        *
     **************************************************************************/



    /*!
     *  @brief Function to get All Display details
     *  @return $data                   -       ARRAY       -       Display data
     */
    function getDisXML()
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $dis_xml_file_path;

        $filename = "dis";

        $path = @$dis_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            dis_message_log("XML File Found. :: $xFile ::");

            //! Create Xml Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                $data[] = $doc->info[$iii];
            }

            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);

            return $data;
        }
        else            //! else -> Return File Not Found
        {
            //! Message Loggin
            dis_message_log("XML File Not Found. :: $xFile ::");

            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }
    }


    /*!
     *  @brief Function to get Display details according to the Display id provided from XML
     *  @param  $id                     -       Int         -       Display Id
     *  @return $data                   -       ARRAY       -       Display data
     */
    function getDisForDisIdXML($id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        global $dis_xml_file_path;

        $filename = "dis";

        $path = @$dis_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";
       print_r($xFile); exit;
        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            dis_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the disunication id is found in the xml
                if($id == $doc->info[$iii]->display_no)
                {
                    //! Message Loggin
                    dis_message_log('End of Function : '. __FUNCTION__);

                    return $doc->info[$iii];
                }
            }
        }
        else
        {
            //! Message Loggin
            dis_message_log("XML File Not Found. :: $xFile ::");
            dis_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        dis_message_log("No Record Found.");
        dis_message_log('End of Function : '. __FUNCTION__);
    }

    /*!
     *  @brief Function to get Display details according to the Communication Id provided from XML
     *  @param  $communication_id       -       String      -       Communication Id
     *  @return $data                   -       ARRAY       -       Display data
     */
    function getDisForCommunicationIdXML($communication_id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $dis_xml_file_path;

        $filename = "dis";

        $path = @$dis_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            dis_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the disunication type is found in the xml
                if($communication_id == $doc->info[$iii]->communication_manager_id)
                {
                    $data[] = $doc->info[$iii];
                }
            }

            //! Check if any records found
            if(count($data) == 0)
            {
                //! Message Loggin
                dis_message_log("No Record Found.");
            }
        }
        else
        {
            //! Message Loggin
            dis_message_log("XML File Not Found. :: $xFile ::");
            dis_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);

        return $data;
    }

    /*!
     *  @brief Function to get Display details according to the Scheduled Date provided from XML
     *  @param  $date                   -       String      -       Display scheduled date
     *  @return $data                   -       ARRAY       -       Display data
     */
    function getDisForDisScheduledDateXML($date)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $dis_xml_file_path;

        $filename = "dis";

        $path = @$dis_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            dis_message_log("XML File Found. :: $xFile ::");

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
                dis_message_log("No Record Found.");
            }
        }
        else
        {
            //! Message Loggin
            dis_message_log("XML File Not Found. :: $xFile ::");
            dis_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);

        return $data;
    }

    /*!
     *  @brief Function to get Display details according to the To User Id provided from XML
     *  @param  $to_user_id             -       Int         -       To user Id
     *  @return $data                   -       ARRAY       -       Display data
     */
    function getDisForDisToUserIdXML($to_user_id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $dis_xml_file_path;

        $filename = "dis";

        $path = @$dis_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            dis_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the match is found
                if($to_user_id == $doc->info[$iii]->display_to->id)
                {
                    $data[] = $doc->info[$iii];
                }
            }

            //! Check if any records found
            if(count($data) == 0)
            {
                //! Message Loggin
                dis_message_log("No Record Found.");
            }
        }
        else
        {
            //! Message Loggin
            dis_message_log("XML File Not Found. :: $xFile ::");
            dis_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);

        return $data;
    }

    /*!
     *  @brief Function to Insert Display details in XML
     *  @param  $id                 -       Int             -   Display Id
     *  @param  $name               -       String          -   Display to Name
     *  @param  $to_user_id         -       Int             -   Display To User Id
     *  @param  $tag                -       String          -   Display Tag
     *  @param  $message            -       String          -   Display message
     *  @param  $sched_date         -       String          -   Scheduled date
     *  @param  $sched_time         -       String          -   Scheduled time
     *  @param  $module             -       String          -   Module Name
     *  @param  $module_id          -       Int             -   Module Record Id
     *  @param  $user_id            -       Int             -   creation user id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $display_manager_id -       String          -   Display Manager Id
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function insertDisplayDetailsXML($id,$name,$to_user_id,$tag,$message,$sched_date,$sched_time,$module,$module_id,$user_id,$date,$time,$update_user_id,$update_date,$update_time,$display_manager_id,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        global $dis_xml_file_path;

        $filename = "dis";

        $path = @$dis_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            dis_message_log("XML File Not Found. :: $xFile ::");
            dis_message_log("Creating New XML File. :: $xFile ::");
            file_put_contents($xFile,'<?xml version="1.0"?><display></display>');
        }
        else
        {
            //! Message Loggin
            dis_message_log("XML File Found. :: $xFile ::");
        }

        //! Creating XML Object
        $outputs = simplexml_load_file($xFile);

        //!Write in xml
        $aa = count($outputs->info);

        $outputs->info[$aa]->display_no = $id;
        $outputs->info[$aa]->display_to->id = $to_user_id;
        $outputs->info[$aa]->display_to->name = $name;
        $outputs->info[$aa]->tag = $tag;
        $outputs->info[$aa]->message = $message;
        $outputs->info[$aa]->scheduled_date = $sched_date;
        $outputs->info[$aa]->scheduled_time = $sched_time;
        $outputs->info[$aa]->module->id = $module_id;
        $outputs->info[$aa]->module->name = $module;
        $outputs->info[$aa]->created->user_no = $user_id;
        $outputs->info[$aa]->created->date = $date;
        $outputs->info[$aa]->created->time = $time;
        $outputs->info[$aa]->last_updated->user_no = $update_user_id;
        $outputs->info[$aa]->last_updated->date = $update_date;
        $outputs->info[$aa]->last_updated->time = $update_time;
        $outputs->info[$aa]->display_manager->id = $display_manager_id;
        $outputs->info[$aa]->communication_manager_id = $comm_manager_id;
        $outputs->info[$aa]->extra1 = $extra1;
        $outputs->info[$aa]->extra2 = $extra2;
        $outputs->info[$aa]->extra3 = $extra3;

        //! Updating XML File
        file_put_contents($xFile,$outputs->asXML());

        //! Message Loggin
        dis_message_log("XML File Update Successfully.");
        dis_message_log('End of Function : '. __FUNCTION__);
    }


    /*!
     *  @brief Function to Update Display details in XML
     *  @param  $id                 -       Int             -   Display Id
     *  @param  $name               -       String          -   Display to Name
     *  @param  $to_user_id         -       Int             -   Display To User Id
     *  @param  $tag                -       String          -   Display Tag
     *  @param  $message            -       String          -   Display message
     *  @param  $sched_date         -       String          -   Scheduled date
     *  @param  $sched_time         -       String          -   Scheduled time
     *  @param  $module             -       String          -   Module Name
     *  @param  $module_id          -       Int             -   Module Record Id
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $display_manager_id -       String          -   Display Manager Id
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function updateDisplayDetailsXML($id,$name,$to_user_id,$tag,$message,$sched_date,$sched_time,$module,$module_id,$update_user_id,$update_date,$update_time,$display_manager_id,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        global $dis_xml_file_path;

        $filename = "dis";

        $path = @$dis_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            dis_message_log("XML File Not Found. :: $xFile ::");
            dis_message_log('End of Function : '. __FUNCTION__);
        }
        else
        {
            //! Message Loggin
            dis_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $outputs = simplexml_load_file($xFile);

            //!Write in xml
            $cnt = count($outputs->info);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->info[$aa]->display_no)
                {
                    $update = 1;

                    $outputs->info[$aa]->display_to->id = $to_user_id;
                    $outputs->info[$aa]->display_to->name = $name;
                    $outputs->info[$aa]->tag = $tag;
                    $outputs->info[$aa]->message = $message;
                    $outputs->info[$aa]->scheduled_date = $sched_date;
                    $outputs->info[$aa]->scheduled_time = $sched_time;
                    $outputs->info[$aa]->module->id = $module_id;
                    $outputs->info[$aa]->module->name = $module;
                    $outputs->info[$aa]->last_updated->user_no = $update_user_id;
                    $outputs->info[$aa]->last_updated->date = $update_date;
                    $outputs->info[$aa]->last_updated->time = $update_time;
                    $outputs->info[$aa]->display_manager->id = $display_manager_id;
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
                dis_message_log("XML File Update Successfully.");
            }
            else
            {
                //! Message Loggin
                dis_message_log("No Record found For $id.");
            }

            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);

        }
    }


    /*!
     *  @brief Function to Delete Display Details From XML
     *  @param  $id                 -       Int             -   Display Id
     */
    function deleteDisplayDetailsXML($id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        global $dis_xml_file_path;

        $filename = "dis";

        $path = @$dis_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            dis_message_log("XML File Not Found. :: $xFile ::");
            dis_message_log('End of Function : '. __FUNCTION__);
        }
        else
        {
            //! Message Loggin
            dis_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $outputs = simplexml_load_file($xFile);

            //!Write in xml
            $cnt = count($outputs->info);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->info[$aa]->display_no)
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
                dis_message_log("XML File Update Successfully.");
            }
            else
            {
                //! Message Loggin
                dis_message_log("No Record found For $id.");
            }

            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);

        }
    }
?>