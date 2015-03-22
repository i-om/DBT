<?php
    /**************************************************************************
     *                                                                        *
     *  Email Manager XML layer                                      *
     *                                                                        *
     **************************************************************************/



    /*!
     *  @brief Function to get All Email Module Manager details
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailManagerAllXML()
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $email_xml_file_path;

        $filename = "email_manager";

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

            $cnt = count($doc->manager);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                $data[] = $doc->manager[$iii];
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
     *  @brief Function to get Email Manager details according to the Email Manager id provided from XML
     *  @param  $id                     -       Int         -       Email Manager Id
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailManagerForIdXML($id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email_manager";

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

            $cnt = count($doc->manager);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the emailunication id is found in the xml
                if($id == $doc->manager[$iii]->manager_no)
                {
                    //! Message Loggin
                    email_message_log('End of Function : '. __FUNCTION__);

                    return $doc->manager[$iii];
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
     *  @brief Function to Insert Email Manager details in XML
     *  @param  $id                 -       Int             -   Email Id
     *  @param  $name               -       String          -   Module Name
     *  @param  $email               -       String          -  Email
     *  @param  $password               -       String          -  Password
     *  @param  $email_name               -       String          -   Email Name
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
    function insertEmailManagerDetailsXML($id,$name,$email,$password,$email_name,$user_id,$date,$time,$update_user_id,$update_date,$update_time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email_manager";

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
        $aa = count($outputs->manager);

        $outputs->manager[$aa]->manager_no = $id;
        $outputs->manager[$aa]->name = $name;
        $outputs->manager[$aa]->email_id = $email;
        $outputs->manager[$aa]->email_password = $password;
        $outputs->manager[$aa]->email_name = $email_name;
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
        email_message_log("XML File Update Successfully.");
        email_message_log('End of Function : '. __FUNCTION__);
    }


    /*!
     *  @brief Function to Update Email  Manager details in XML
     *  @param  $id                 -       Int             -   Email Manager Id
     *  @param  $name               -       String          -   Name
     *  @param  $email               -       String          -  Email
     *  @param  $password               -       String          -  Password
     *  @param  $email_name               -       String          -   Email Name
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function updateEmailManagerDetailsXML($id,$name,$email,$password,$email_name,$update_user_id,$update_date,$update_time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email_manager";

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
            $cnt = count($outputs->manager);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->manager[$aa]->manager_no)
                {
                    $update = 1;

                    $outputs->manager[$aa]->name = $name;
                    $outputs->manager[$aa]->email_id = $email;
                    $outputs->manager[$aa]->email_password = $password;
                    $outputs->manager[$aa]->email_name = $email_name;
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


    /*!
     *  @brief Function to Delete Email Details From XML
     *  @param  $id                 -       Int             -   Email Id
     */
    function deleteEmailManagerDetailsXML($id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email_manager";

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
            $cnt = count($outputs->manager);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->manager[$aa]->manager_no)
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