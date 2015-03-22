<?php
    /**************************************************************************
     *                                                                        *
     *  Email XML layer                                                       *
     *                                                                        *
     **************************************************************************/



    /*!
     *  @brief Function to get All Email details
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailXML()
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $email_xml_file_path;

        $filename = "email";

        $path = @$email_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            email_message_log("XML File Found. :: $xFile ::");

            //! Create Xml Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                $data[] = $doc->info[$iii];
            }

            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);

            return $data;
        }
        else            //! else -> Return File Not Found
        {
            //! Message Loggin
            email_message_log("XML File Not Found. :: $xFile ::");

            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }
    }


    /*!
     *  @brief Function to get Email details according to the Email id provided from XML
     *  @param  $id                     -       Int         -       Email Id
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailForEmailIdXML($id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email";

        $path = @$email_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            email_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the emailunication id is found in the xml
                if($id == $doc->info[$iii]->email_no)
                {
                    //! Message Loggin
                    email_message_log('End of Function : '. __FUNCTION__);

                    return $doc->info[$iii];
                }
            }
        }
        else
        {
            //! Message Loggin
            email_message_log("XML File Not Found. :: $xFile ::");
            email_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        email_message_log("No Record Found.");
        email_message_log('End of Function : '. __FUNCTION__);
    }

    /*!
     *  @brief Function to get Email details according to the Communication Id provided from XML
     *  @param  $communication_id       -       String      -       Communication Id
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailForCommunicationIdXML($communication_id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $email_xml_file_path;

        $filename = "email";

        $path = @$email_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            email_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the emailunication type is found in the xml
                if($communication_id == $doc->info[$iii]->communication_manager_id)
                {
                    $data[] = $doc->info[$iii];
                }
            }

            //! Check if any records found
            if(count($data) == 0)
            {
                //! Message Loggin
                email_message_log("No Record Found.");
            }
        }
        else
        {
            //! Message Loggin
            email_message_log("XML File Not Found. :: $xFile ::");
            email_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);

        return $data;
    }

    /*!
     *  @brief Function to get Email details according to the Scheduled Date provided from XML
     *  @param  $date                   -       String      -       Email scheduled date
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailForEmailScheduledDateXML($date)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $email_xml_file_path;

        $filename = "email";

        $path = @$email_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            email_message_log("XML File Found. :: $xFile ::");

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
                email_message_log("No Record Found.");
            }
        }
        else
        {
            //! Message Loggin
            email_message_log("XML File Not Found. :: $xFile ::");
            email_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);

        return $data;
    }

    /*!
     *  @brief Function to get Email details according to the Email Manager Id provided from XML
     *  @param  $email_manager_id       -       Int         -       Email Manager Id
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailForEmailManagerIdXML($email_manager_id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $email_xml_file_path;

        $filename = "email";

        $path = @$email_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            email_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $doc = simplexml_load_file($xFile);

            $cnt = count($doc->info);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the match is found
                if($email_manager_id == $doc->info[$iii]->email_manager->id)
                {
                    $data[] = $doc->info[$iii];
                }
            }

            //! Check if any records found
            if(count($data) == 0)
            {
                //! Message Loggin
                email_message_log("No Record Found.");
            }
        }
        else
        {
            //! Message Loggin
            email_message_log("XML File Not Found. :: $xFile ::");
            email_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);

        return $data;
    }

    /*!
     *  @brief Function to get Email details according to the Status provided from XML
     *  @param  $status                 -       String      -       Status
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailForStatusXML($status)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $email_xml_file_path;

        $filename = "email";

        $path = @$email_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(file_exists($xFile))     //! if yes -> Continue
        {
            //! Message Loggin
            email_message_log("XML File Found. :: $xFile ::");

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
                email_message_log("No Record Found.");
            }
        }
        else
        {
            //! Message Loggin
            email_message_log("XML File Not Found. :: $xFile ::");
            email_message_log('End of Function : '. __FUNCTION__);

            return INVALID_XML_FILE;
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);

        return $data;
    }

    /*!
     *  @brief Function to Insert Email details
     *  @param  $email_id           -       Int             -   Email Id
     *  @param  $to_name            -       Array           -   Email to Name
     *  @param  $to_email           -       Array           -   Email To Email Id
     *  @param  $from_name          -       String          -   Email From Name
     *  @param  $from_email         -       String          -   Email From Email Id
     *  @param  $subject            -       String          -   Email Subject
     *  @param  $message            -       String          -   Email message
     *  @param  $attachment         -       Array           -   Email Attachment
     *  @param  $status             -       String          -   Email Status
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
     *  @param  $email_manager_id   -       String          -   Email Manager Id
     *  @param  $email_manager_name -       String          -   Email Manager Name
     *  @param  $email_manager_email -      String          -   Email Manager Email
     *  @param  $email_manager_password -   String          -   Email Password
     *  @param  $email_manager_email_name - String          -   Email Name
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function insertEmailDetailsXML($email_id,$to_name,$to_email,$from_name,$from_email,$subject,$message,$attachment,$status,$sched_date,$sched_time,$sent_date,$sent_time,$module,$module_id,$user_id,$date,$time,$update_user_id,$update_date,$update_time,$email_manager_id,$email_manager_name,$email_manager_email,$email_manager_password,$email_manager_email_name,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email";

        $path = @$email_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            email_message_log("XML File Not Found. :: $xFile ::");
            email_message_log("Creating New XML File. :: $xFile ::");
            file_put_contents($xFile,'<?xml version="1.0"?><email></email>');
        }
        else
        {
            //! Message Loggin
            email_message_log("XML File Found. :: $xFile ::");
        }

        //! Creating XML Object
        $outputs = simplexml_load_file($xFile);

        //!Write in xml
        $aa = count($outputs->info);

        $outputs->info[$aa]->email_no = $email_id;

        $cc = count($to_name);

        for($ii = 0 ; $ii < $cc ; $ii++)
        {
            $outputs->info[$aa]->email_to[$ii]->name = $to_name[$ii];
            $outputs->info[$aa]->email_to[$ii]->email_id = $to_email[$ii];
        }

        $outputs->info[$aa]->num_email_to = $cc;
        $outputs->info[$aa]->email_from->name = $from_name;
        $outputs->info[$aa]->email_from->email_id = $from_email;
        $outputs->info[$aa]->subject = $subject;
        $outputs->info[$aa]->message = $message;

        $cc = count($attachment);

        for($ii = 0; $ii < $cc ; $ii++)
        {
            $outputs->info[$aa]->attachment[$ii] = $attachment[$ii];
        }

        $outputs->info[$aa]->num_attachment = $cc;
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
        $outputs->info[$aa]->email_manager->id = $email_manager_id;
        $outputs->info[$aa]->email_manager->name = $email_manager_name;
        $outputs->info[$aa]->email_manager->email_id = $email_manager_email;
        $outputs->info[$aa]->email_manager->email_password = $email_manager_password;
        $outputs->info[$aa]->email_manager->email_name = $email_manager_email_name;
        $outputs->info[$aa]->communication_manager_id = $comm_manager_id;
        $outputs->info[$aa]->extra1 = $extra1;
        $outputs->info[$aa]->extra2 = $extra2;
        $outputs->info[$aa]->extra3 = $extra3;

        //! Updating XML File
        file_put_contents($xFile,$outputs->asXML());

        //! Message Loggin
        email_message_log("XML File Update Successfully.");
        email_message_log('End of Function : '. __FUNCTION__);
    }


    /*!
     *  @brief Function to Update Email details
     *  @param  $email_id           -       Int             -   Email Id
     *  @param  $to_name            -       Array           -   Email to Name
     *  @param  $to_email           -       Array           -   Email To Email Id
     *  @param  $from_name          -       String          -   Email From Name
     *  @param  $from_email         -       String          -   Email From Email Id
     *  @param  $subject            -       String          -   Email Subject
     *  @param  $message            -       String          -   Email message
     *  @param  $attachment         -       Array           -   Email Attachment
     *  @param  $status             -       String          -   Email Status
     *  @param  $sched_date         -       String          -   Scheduled date
     *  @param  $sched_time         -       String          -   Scheduled time
     *  @param  $sent_date          -       String          -   Sent date
     *  @param  $sent_time          -       String          -   Sent time
     *  @param  $module             -       String          -   Module Name
     *  @param  $module_id          -       Int             -   Module Record Id
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $email_manager_id   -       String          -   Email Manager Id
     *  @param  $email_manager_name -       String          -   Email Manager Name
     *  @param  $email_manager_email -      String          -   Email Manager Email
     *  @param  $email_manager_password -   String          -   Email Password
     *  @param  $email_manager_email_name - String          -   Email Name
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function updateEmailDetailsXML($email_id,$to_name,$to_email,$from_name,$from_email,$subject,$message,$attachment,$status,$sched_date,$sched_time,$sent_date,$sent_time,$module,$module_id,$update_user_id,$update_date,$update_time,$email_manager_id,$email_manager_name,$email_manager_email,$email_manager_password,$email_manager_email_name,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email";

        $path = @$email_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            email_message_log("XML File Not Found. :: $xFile ::");
            email_message_log('End of Function : '. __FUNCTION__);
        }
        else
        {
            //! Message Loggin
            email_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $outputs = simplexml_load_file($xFile);

            //!Write in xml
            $cnt = count($outputs->info);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($email_id == $outputs->info[$aa]->email_no)
                {
                    $update = 1;

                    $cc = count($outputs->info[$aa]->email_to);

                    for($ii = 0 ; $ii < $cc ; $ii++)
                    {
                        $outputs->info[$aa]->email_to[$ii]->name = $to_name[$ii];
                        $outputs->info[$aa]->email_to[$ii]->email_id = $to_email[$ii];
                    }

                    $outputs->info[$aa]->num_email_to = $cc;
                    $outputs->info[$aa]->email_from->name = $from_name;
                    $outputs->info[$aa]->email_from->email_id = $from_email;
                    $outputs->info[$aa]->subject = $subject;
                    $outputs->info[$aa]->message = $message;

                    $cc = count($attachment);

                    for($ii = 0; $ii < $cc ; $ii++)
                    {
                        $outputs->info[$aa]->attachment[$ii] = $attachment[$ii];
                    }

                    $outputs->info[$aa]->num_attachment = $cc;
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
                    $outputs->info[$aa]->email_manager->id = $email_manager_id;
                    $outputs->info[$aa]->email_manager->name = $email_manager_name;
                    $outputs->info[$aa]->email_manager->email_id = $email_manager_email;
                    $outputs->info[$aa]->email_manager->email_password = $email_manager_password;
                    $outputs->info[$aa]->email_manager->email_name = $email_manager_email_name;
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
                email_message_log("XML File Update Successfully.");
            }
            else
            {
                //! Message Loggin
                email_message_log("No Record found For $email_id.");
            }

            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);

        }
    }


    /*!
     *  @brief Function to Update Email details XML Partial For Status
     *  @param  $email_id           -       Int             -   Email Id
     *  @param  $status             -       String          -   Email Status
     *  @param  $sent_date          -       String          -   Sent date
     *  @param  $sent_time          -       String          -   Sent time
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     */
    function updateEmailDetailsForStatusXML($email_id,$status,$sent_date,$sent_time,$update_user_id,$update_date,$update_time)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email";

        $path = @$email_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            email_message_log("XML File Not Found. :: $xFile ::");
            email_message_log('End of Function : '. __FUNCTION__);
        }
        else
        {
            //! Message Loggin
            email_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $outputs = simplexml_load_file($xFile);

            //!Write in xml
            $cnt = count($outputs->info);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($email_id == $outputs->info[$aa]->email_no)
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
                email_message_log("XML File Update Successfully.");
            }
            else
            {
                //! Message Loggin
                email_message_log("No Record found For $email_id.");
            }

            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);

        }
    }


    /*!
     *  @brief Function to Delete Email Details From XML
     *  @param  $id                 -       Int             -   Email Id
     */
    function deleteEmailDetailsXML($id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email";

        $path = @$email_xml_file_path . "xml/";

        //! Xml File Path
        $xFile =  $path . $filename . ".xml";

        /*!
         * Check If the XML File exists
         */
        if(!file_exists($xFile))     //! if Not -> Create an empty xml file
        {
            //! Message Loggin
            email_message_log("XML File Not Found. :: $xFile ::");
            email_message_log('End of Function : '. __FUNCTION__);
        }
        else
        {
            //! Message Loggin
            email_message_log("XML File Found. :: $xFile ::");

            //! Creating XML Object
            $outputs = simplexml_load_file($xFile);

            //!Write in xml
            $cnt = count($outputs->info);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->info[$aa]->email_no)
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
                email_message_log("XML File Update Successfully.");
            }
            else
            {
                //! Message Loggin
                email_message_log("No Record found For $id.");
            }

            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);

        }
    }
?>