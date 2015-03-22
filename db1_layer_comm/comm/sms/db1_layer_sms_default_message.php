<?php
    /**************************************************************************
     *                                                                        *
     *  SMS Default Message Database layer                                *
     *                                                                        *
     **************************************************************************/

    /*!
     * include database connection file.
     */
    include_once 'sms_connection.php';


    /*!
     *  @brief Function to get all SMS Default Message details
     *  @return $data                   -       ARRAY       -       SMS Default message data
     */
    function getSMSDefaultMessageAll()
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_default_message`";

        //! Data base connection
        $conn = getSMSConnection();

        /*!
         * Check if the database Connection is made
         */
        if(is_resource($conn))          //! If yes Fire the query
        {
            //! Executing the query
            $resultSet = @mysql_query($query, $conn);

            /*!
             * Check If the Query executed properly
             */
            if ($resultSet != '')           //! If yes retieve the data
            {
                //! Message Login
                sms_message_log('Query Executed Successfully. ::: '.$query);

                /*!
                 * Checking if the result set is empty or not
                 */
                if(@mysql_num_rows($resultSet) > 0 )        //! If Not : retrieve the result
                {
                    $row[] = @mysql_fetch_object($resultSet);

                }
                else                                //! Else : Result set is empty
                {
                    //! No Records found
                    sms_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                sms_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeSMSConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        sms_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }

    /*!
     *  @brief Function to get SMS Default Message details according to the SMS Default Message id provided
     *  @param  $id                     -       Int         -       SMS Default Message Id
     *  @return $data                   -       ARRAY       -       SMS Default Message data
     */
    function getSMSDefaultMessageForSMSDefaultMessageId($id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_default_message` WHERE `rt_comm_sms_message_id` = '" . $id . "'";

        //! Data base connection
        $conn = getSMSConnection();

        /*!
         * Check if the database Connection is made
         */
        if(is_resource($conn))          //! If yes Fire the query
        {
            //! Executing the query
            $resultSet = @mysql_query($query, $conn);

            /*!
             * Check If the Query executed properly
             */
            if ($resultSet != '')           //! If yes retieve the data
            {
                //! Message Login
                sms_message_log('Query Executed Successfully. ::: '.$query);

                /*!
                 * Checking if the result set is empty or not
                 */
                if(@mysql_num_rows($resultSet) > 0 )        //! If Not : retrieve the result
                {
                    $row = @mysql_fetch_object($resultSet);

                }
                else                                //! Else : Result set is empty
                {
                    //! No Records found
                    sms_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                sms_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeSMSConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        sms_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get SMS Default Message details according to the Name of the default message provided
     *  @param  $name                       -       String      -       Name of the default Message
     *  @return $data                       -       ARRAY       -       SMS Default Message data
     */
    function getSMSDefaultMessageForName($name)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_default_message` WHERE `rt_comm_sms_name` = '" . $name . "'";

        //! Data base connection
        $conn = getSMSConnection();

        /*!
         * Check if the database Connection is made
         */
        if(is_resource($conn))          //! If yes Fire the query
        {
            //! Executing the query
            $resultSet = @mysql_query($query, $conn);

            /*!
             * Check If the Query executed properly
             */
            if ($resultSet != '')           //! If yes retieve the data
            {
                //! Message Login
                sms_message_log('Query Executed Successfully. ::: '.$query);

                /*!
                 * Checking if the result set is empty or not
                 */
                if(@mysql_num_rows($resultSet) > 0 )        //! If Not : retrieve the result
                {
                    $row = @mysql_fetch_object($resultSet);

                }
                else                                //! Else : Result set is empty
                {
                    //! No Records found
                    sms_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                sms_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeSMSConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        sms_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get SMS Default Message details according to the user Id provided
     *  @param  $user_id            -       INT             -   User Id
     *  @return $data               -       ARRAY           -   SMS data
     */
    function getSMSDefaultMessageForUserId($user_id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_default_message` WHERE `rt_comm_sms_creation_user_id` = '" . $user_id . "'";

        //! Data base connection
        $conn = getSMSConnection();

        /*!
         * Check if the database Connection is made
         */
        if(is_resource($conn))          //! If yes Fire the query
        {
            //! Executing the query
            $resultSet = @mysql_query($query, $conn);

            /*!
             * Check If the Query executed properly
             */
            if ($resultSet != '')           //! If yes retieve the data
            {
                //! Message Login
                sms_message_log('Query Executed Successfully. ::: '.$query);

                /*!
                 * Checking if the result set is empty or not
                 */
                if(@mysql_num_rows($resultSet) > 0 )        //! If Not : retrieve the result
                {
                    $row[] = @mysql_fetch_object($resultSet);

                }
                else                                //! Else : Result set is empty
                {
                    //! No Records found
                    sms_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                sms_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeSMSConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        sms_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }

    /*!
     *  @brief Function to Insert SMS Default Message details
     *  @param  $name               -       String          -   Name
     *  @param  $message            -       String          -   Message
     *  @param  $user_id            -       Int             -   creation user id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   SMS Default Message Id
     */
    function insertSMSDefaultMessageDetails($name,$message,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "insert into `rt_comm_sms_default_message` (`rt_comm_sms_message_id`,`rt_comm_sms_name`,`rt_comm_sms_message`,`rt_comm_sms_creation_date`,`rt_comm_sms_creation_time`,`rt_comm_sms_creation_user_id`,`rt_comm_sms_extra1`,`rt_comm_sms_extra2`,`rt_comm_sms_extra3`) values
                                                            (null                    ,'$name'           ,'$message'           ,'$date'                    ,'$time'                    ,'$user_id'                    ,'$extra1'           ,'$extra2'           ,'$extra3');";

        //! Data base connection
        $conn = getSMSConnection();

        /*!
         * Check if the database Connection is made
         */
        if(is_resource($conn))          //! If yes Fire the query
        {
            //! Executing the query
            $resultSet = @mysql_query($query, $conn);

            /*!
             * Check If the Query executed properly
             */
            if ($resultSet != '')           //! If yes retieve the data
            {
                //! Message Login
                sms_message_log('Query Executed Successfully. ::: '.$query);

                //! Retrieve Last Inserted Id
                $id = @mysql_insert_id($conn);
            }
            else                        //! Execution failed
            {
                sms_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  INSERT_FAILED;
            }

            //! Closing the connections
            closeSMSConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        sms_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }


    /*!
     *  @brief Function to Update SMS Default Message details
     *  @param  $did                -       Int             -   SMS Default Message Id
     *  @param  $name               -       String          -   Name
     *  @param  $message            -       String          -   Message
     *  @param  $user_id            -       Int             -   Update user id
     *  @param  $date               -       String          -   Update Date
     *  @param  $time               -       String          -   update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateSMSDefaultMessageDetails($did,$name,$message,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_sms_default_message` set `rt_comm_sms_name` = '$name',
        `rt_comm_sms_message` = '$message',`rt_comm_sms_last_update_date` = '$date',`rt_comm_sms_last_update_time` = '$time',
        `rt_comm_sms_last_update_user_id` = '$user_id',`rt_comm_sms_extra1` = '$extra1',`rt_comm_sms_extra2` = '$extra2',
        `rt_comm_sms_extra3` = '$extra3' where `rt_comm_sms_message_id` = '$did';";

        //! Data base connection
        $conn = getSMSConnection();

        /*!
         * Check if the database Connection is made
         */
        if(is_resource($conn))          //! If yes Fire the query
        {
            //! Executing the query
            $resultSet = @mysql_query($query, $conn);

            /*!
             * Check If the Query executed properly
             */
            if ($resultSet != '')           //! If yes retieve the data
            {
                //! Message Login
                sms_message_log('Query Executed Successfully. ::: '.$query);

                $id = UPDATE_SUCCESSFULL;
            }
            else                        //! Execution failed
            {
                sms_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  UPDATE_FAILED;
            }

            //! Closing the connections
            closeSMSConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        sms_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }


    /*!
     *  @brief Function to Delete SMS Default Message details
     *  @param  $did                -       Int             -   SMS Default Message id
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function deleteSMSDefaultMessageDetails($did)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "delete from `rt_comm_sms_default_message` where `rt_comm_sms_message_id` = '$did'";

        //! Data base connection
        $conn = getSMSConnection();

        /*!
         * Check if the database Connection is made
         */
        if(is_resource($conn))          //! If yes Fire the query
        {
            //! Executing the query
            $resultSet = @mysql_query($query, $conn);

            /*!
             * Check If the Query executed properly
             */
            if ($resultSet != '')           //! If yes retieve the data
            {
                //! Message Login
                sms_message_log('Query Executed Successfully. ::: '.$query);

                $id = DELETE_SUCCESSFULL;
            }
            else                        //! Execution failed
            {
                sms_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  DELETE_FAILED;
            }

            //! Closing the connections
            closeSMSConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            sms_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        sms_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }
 ?>