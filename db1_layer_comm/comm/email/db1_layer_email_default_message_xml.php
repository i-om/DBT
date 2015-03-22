<?php
    /**************************************************************************
     *                                                                        *
     *  Email Default Message XML layer                                       *
     *                                                                        *
     **************************************************************************/



    /*!
     *  @brief Function to get All Email Default Message details
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailDefaultMessageAllXML()
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $email_xml_file_path;

        $filename = "email_default_message";

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

            $cnt = count($doc->default_message);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                $data[] = $doc->default_message[$iii];
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
     *  @brief Function to get Email details according to the Email Message id provided from XML
     *  @param  $id                     -       Int         -       Email Message Id
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailDefaultMessageForIdXML($id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email_default_message";

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

            $cnt = count($doc->default_message);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the emailunication id is found in the xml
                if($id == $doc->default_message[$iii]->email_message_no)
                {
                    //! Message Loggin
                    email_message_log('End of Function : '. __FUNCTION__);

                    return $doc->default_message[$iii];
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
     *  @brief Function to get Email details according to the Name provided from XML
     *  @param  $name                   -       String      -       name
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailDefaultMessageForNameXML($name)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $email_xml_file_path;

        $filename = "email_default_message";

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

            $cnt = count($doc->default_message);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the  name is found in the xml
                if($name == $doc->default_message[$iii]->name)
                {
                    $data[] = $doc->default_message[$iii];
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
     *  @brief Function to Insert Email Default Message details in XML
     *  @param  $id                 -       Int             -   Email Id
     *  @param  $name               -       String          -   Email to Name
     *  @param  $subject            -       String          -   Email Subject
     *  @param  $message            -       String          -   Email message
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
    function insertEmailDefaultMessageDetailsXML($id,$name,$subject,$message,$user_id,$date,$time,$update_user_id,$update_date,$update_time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email_default_message";

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
        $aa = count($outputs->default_message);

        $outputs->default_message[$aa]->email_message_no = $id;
        $outputs->default_message[$aa]->name = $name;
        $outputs->default_message[$aa]->subject = $subject;
        $outputs->default_message[$aa]->message = $message;
        $outputs->default_message[$aa]->created->user_no = $user_id;
        $outputs->default_message[$aa]->created->date = $date;
        $outputs->default_message[$aa]->created->time = $time;
        $outputs->default_message[$aa]->last_updated->user_no = $update_user_id;
        $outputs->default_message[$aa]->last_updated->date = $update_date;
        $outputs->default_message[$aa]->last_updated->time = $update_time;
        $outputs->default_message[$aa]->extra1 = $extra1;
        $outputs->default_message[$aa]->extra2 = $extra2;
        $outputs->default_message[$aa]->extra3 = $extra3;

        //! Updating XML File
        file_put_contents($xFile,$outputs->asXML());

        //! Message Loggin
        email_message_log("XML File Update Successfully.");
        email_message_log('End of Function : '. __FUNCTION__);
    }


    /*!
     *  @brief Function to Update Email Default Message details in XML
     *  @param  $id                 -       Int             -   Email Id
     *  @param  $name               -       String          -   Email to Name
     *  @param  $subject            -       String          -   Email subject
     *  @param  $message            -       String          -   Email message
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function updateEmailDefaultMessageDetailsXML($id,$name,$subject,$message,$update_user_id,$update_date,$update_time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email_default_message";

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
            $cnt = count($outputs->default_message);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->default_message[$aa]->email_message_no)
                {
                    $update = 1;

                    $outputs->default_message[$aa]->name = $name;
                    $outputs->default_message[$aa]->subject = $subject;
                    $outputs->default_message[$aa]->message = $message;
                    $outputs->default_message[$aa]->last_updated->user_no = $update_user_id;
                    $outputs->default_message[$aa]->last_updated->date = $update_date;
                    $outputs->default_message[$aa]->last_updated->time = $update_time;
                    $outputs->default_message[$aa]->extra1 = $extra1;
                    $outputs->default_message[$aa]->extra2 = $extra2;
                    $outputs->default_message[$aa]->extra3 = $extra3;


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
    function deleteEmailDefaultMessageDetailsXML($id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        global $email_xml_file_path;

        $filename = "email_default_message";

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
            $cnt = count($outputs->default_message);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->default_message[$aa]->email_message_no)
                {
                    $update = 1;

                    unset($outputs->default_message[$aa]);

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