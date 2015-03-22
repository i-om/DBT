<?php
    /**************************************************************************
     *                                                                        *
     *  SMS Database layer                                                *
     *                                                                        *
     **************************************************************************/

    /*!
     * include database connection file.
     */
    include_once 'sms_connection.php';


    /*!
     *  @brief Function to get SMS details according to the SMS id provided
     *  @param  $sms_id                 -       Int         -       SMS Id
     *  @return $data                   -       ARRAY       -       SMS data
     */
    function getSMSForSMSId($sms_id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms` WHERE `rt_comm_sms_id` = '" . $sms_id . "'";

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
     *  @brief Function to get SMS details according to the Communication Id provided
     *  @param  $communication_id           -       String      -       Communication Id
     *  @return $data                       -       ARRAY       -       SMS data
     */
    function getSMSForCommunicationId($communication_id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms` WHERE `rt_comm_manager_id` = '" . $communication_id . "'";

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
     *  @brief Function to get SMS details according to the SMS Manager Id provided
     *  @param  $sms_manager_id                 -       Int         -   SMS Manager Id
     *  @return $data                           -       ARRAY       -   SMS data
     */
    function getSMSForSMSFromUserId($sms_manager_id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms` WHERE `rt_comm_sms_manager_id` = '" . $sms_manager_id . "'";

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
     *  @brief Function to get SMS details according to the SMS Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   SMS data
     */
    function getSMSForSMSScheduledDate($sched_date)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms` WHERE `rt_comm_sched_date` = '" . $sched_date . "'";

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
     *  @brief Function to get SMS details according to the SMS Smaller than Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   SMS data
     */
    function getSMSForSMSSmallerThanScheduledDate($sched_date)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms` WHERE `rt_comm_sched_date` < '" . $sched_date . "'";

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
     *  @brief Function to get SMS details according to the SMS Greater than Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   SMS data
     */
    function getSMSForSMSGreaterThanScheduledDate($sched_date)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms` WHERE `rt_comm_sched_date` > '" . $sched_date . "'";

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
     *  @brief Function to get SMS details according to the SMS To Name provided
     *  @param  $sms_to             -       String          -   To SMS Name
     *  @return $data               -       ARRAY           -   SMS data
     */
    function getSMSForSMSTo($sms_to)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms` WHERE `rt_comm_to_name` = '" . $sms_to . "'";

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
     *  @brief Function to get SMS details according to the SMS user Id provided
     *  @param  $user_id            -       INT             -   User Id
     *  @return $data               -       ARRAY           -   SMS data
     */
    function getSMSForSMSUserId($user_id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms` WHERE `rt_comm_creation_user_id` = '" . $user_id . "'";

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
     *  @brief Function to get SMS details according to the Status provided
     *  @param  $status             -       String          -   String
     *  @return $data               -       ARRAY           -   SMS data
     */
    function getSMSForSMSStatus($status)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms` WHERE `rt_comm_status` = '" . $status . "'";

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
     *  @brief Function to Insert SMS details
     *  @param  $to_name            -       String          -   SMS to Name
     *  @param  $to_mobile          -       String          -   SMS To Mobile No.
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
     *  @param  $sender_id          -       String          -   Sender Id
     *  @param  $plus91_sms_id      -       String          -   Plus91_SMS_Id
     *  @param  $sms_manager_id     -       String          -   SMS Manager Id
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   SMS Id
     */
    function insertSMSDetails($to_name,$to_mobile,$from_name,$from_mobile,$message,$status,$sched_date,$sched_time,$sent_date,$sent_time,$module,$module_id,$user_id,$date,$time,$sender_id,$plus91_sms_id,$sms_manager_id,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "insert into `rt_comm_sms` (`rt_comm_sms_id`,`rt_comm_to_name`,`rt_comm_to_mobile`,`rt_comm_from_name`,`rt_comm_from_mobile`,`rt_comm_message`,`rt_comm_status`,`rt_comm_sched_date`,`rt_comm_sched_time`,`rt_comm_sent_date`,`rt_comm_sent_time`,`rt_comm_module_name`,`rt_comm_module_id`,`rt_comm_creation_date`,`rt_comm_creation_time`,`rt_comm_creation_user_id`,`rt_comm_sender_id`,`rt_comm_plus91_sms_id`,`rt_comm_sms_manager_id`,`rt_comm_manager_id`,`rt_comm_extra1`,`rt_comm_extra2`,`rt_comm_extra3`)values
                                            (null            ,'$to_name'       ,'$to_mobile'       ,'$from_name'       ,'$from_mobile'       ,'$message'       ,'$status'       ,'$sched_date'       ,'$sched_time'       ,'$sent_date'       ,'$sent_time'       ,'$module'            ,'$module_id'       ,'$date'                ,'$time'                ,'$user_id'                ,'$sender_id'       ,'$plus91_sms_id'       ,'$sms_manager_id'       ,'$comm_manager_id'  ,'$extra1'       ,'$extra2'       ,'$extra3');";

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
     *  @brief Function to Update SMS details
     *  @param  $sms_id             -       Int             -   SMS Id
     *  @param  $to_name            -       String          -   SMS to Name
     *  @param  $to_mobile          -       String          -   SMS To Mobile No.
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
     *  @param  $sender_id          -       String          -   Sender Id
     *  @param  $plus91_sms_id      -       String          -   Plus91_SMS_Id
     *  @param  $sms_manager_id     -       String          -   SMS Manager Id
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateSMSDetails($sms_id,$to_name,$to_mobile,$from_name,$from_mobile,$message,$status,$sched_date,$sched_time,$sent_date,$sent_time,$module,$module_id,$user_id,$date,$time,$sender_id,$plus91_sms_id,$sms_manager_id,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_sms` set `rt_comm_to_name` = '$to_name',`rt_comm_to_mobile` = '$to_mobile',`rt_comm_from_name` = '$from_name',
        `rt_comm_from_mobile` = '$from_mobile',`rt_comm_message` = '$message',`rt_comm_status` = '$status',`rt_comm_sched_date` = '$sched_date',
        `rt_comm_sched_time` = '$sched_time',`rt_comm_sent_date` = '$sent_date',`rt_comm_sent_time` = '$sent_time',`rt_comm_module_name` = '$module',
        `rt_comm_module_id` = '$module_id',`rt_comm_last_update_date` = '$date',rt_comm_last_update_time` = '$time',
        `rt_comm_last_update_user_id` = '$user_id',`rt_comm_sender_id` = '$sender_id',`rt_comm_plus91_sms_id` = '$plus91_sms_id',
        `rt_comm_sms_manager_id` = '$sms_manager_id',`rt_comm_manager_id` = '$comm_manager_id',`rt_comm_extra1` = '$extra1',
        `rt_comm_extra2` = '$extra2',`rt_comm_extra3` = '$extra3' where `rt_comm_sms_id` = '$sms_id';";

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
     *  @brief Function to Update SMS details partial (Status Update)
     *  @param  $sms_id           -       Int             -   SMS Id
     *  @param  $status             -       String          -   SMS Status
     *  @param  $sent_date          -       String          -   Sent date
     *  @param  $sent_time          -       String          -   Sent time
     *  @param  $user_id            -       Int             -   creation user id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateSMSDetailsStatus($sms_id,$status,$sent_date,$sent_time,$user_id,$date,$time)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_sms` set `rt_comm_status` = '$status',`rt_comm_sent_date` = '$sent_date',`rt_comm_sent_time` = '$sent_time',
        `rt_comm_last_update_date` = '$date',`rt_comm_last_update_time` = '$time',`rt_comm_last_update_user_id` = '$user_id',
        where `rt_comm_sms_id` = '$sms_id';";

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
     *  @brief Function to Delete SMS details
     *  @param  $sms_id         -       Int             -   SMS id
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function deleteSMSDetails($sms_id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "delete from `rt_comm_sms` where `rt_comm_sms_id` = '$sms_id'";

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