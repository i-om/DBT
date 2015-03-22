<?php
    /**************************************************************************
     *                                                                        *
     *  Display Manager XML layer                                      *
     *                                                                        *
     **************************************************************************/



    /*!
     *  @brief Function to get All Display Module Manager details
     *  @return $data                   -       ARRAY       -       Display data
     */
    function getDisplayManagerAllXML()
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();

        global $dis_xml_file_path;

        $filename = "dis_manager";

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

            $cnt = count($doc->manager);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                $data[] = $doc->manager[$iii];
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
     *  @brief Function to get Display Manager details according to the Display Manager id provided from XML
     *  @param  $id                     -       Int         -       Display Manager Id
     *  @return $data                   -       ARRAY       -       Display data
     */
    function getDisplayManagerForIdXML($id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        global $dis_xml_file_path;

        $filename = "dis_manager";

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

            $cnt = count($doc->manager);

            for($iii=0; $iii < $cnt ; $iii++)
            {
                //! Checking if the disunication id is found in the xml
                if($id == $doc->manager[$iii]->manager_no)
                {
                    //! Message Loggin
                    dis_message_log('End of Function : '. __FUNCTION__);

                    return $doc->manager[$iii];
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
     *  @brief Function to Insert Display Manager details in XML
     *  @param  $id                 -       Int             -   Display Id
     *  @param  $name               -       String          -   Module Name
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
    function insertDisplayManagerDetailsXML($id,$name,$user_id,$date,$time,$update_user_id,$update_date,$update_time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        global $dis_xml_file_path;

        $filename = "dis_manager";

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
        $aa = count($outputs->manager);

        $outputs->manager[$aa]->manager_no = $id;
        $outputs->manager[$aa]->name = $name;
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
        dis_message_log("XML File Update Successfully.");
        dis_message_log('End of Function : '. __FUNCTION__);
    }


    /*!
     *  @brief Function to Update Display  Manager details in XML
     *  @param  $id                 -       Int             -   Display Manager Id
     *  @param  $name               -       String          -   Name
     *  @param  $update_user_id     -       Int             -   update user id
     *  @param  $update_date        -       String          -   update Date
     *  @param  $update_time        -       String          -   update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     */
    function updateDisplayManagerDetailsXML($id,$name,$update_user_id,$update_date,$update_time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        global $dis_xml_file_path;

        $filename = "dis_manager";

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
            $cnt = count($outputs->manager);

            $update = 0;

            for($aa=0; $aa < $cnt ; $aa++)
            {
                //! Checking if the match is found
                if($id == $outputs->manager[$aa]->manager_no)
                {
                    $update = 1;

                    $outputs->manager[$aa]->name = $name;
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
    function deleteDisplayManagerDetailsXML($id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        global $dis_xml_file_path;

        $filename = "dis_manager";

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