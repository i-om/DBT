<?php
    /**************************************************************************
     *                                                                        *
     *  Email Database layer                                                *
     *                                                                        *
     **************************************************************************/

    /*!
     * include database connection file.
     */
    include_once 'email_connection.php';


    /*!
     *  @brief Function to get Email details according to the Email id provided
     *  @param  $email_id               -       Int         -       Email Id
     *  @return $data                   -       ARRAY       -       Email data
     */
    function getEmailForEmailId($email_id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email` WHERE `rt_comm_email_id` = '" . $email_id . "'";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

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
                    email_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Email details according to the Communication Id provided
     *  @param  $communication_id           -       String      -       Communication Id
     *  @return $data                       -       ARRAY       -       Email data
     */
    function getEmailForCommunicationId($communication_id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email` WHERE `rt_comm_manager_id` = '" . $communication_id . "'";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

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
                    email_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Email details according to the Email Manager Id provided
     *  @param  $email_manager_id             -       Int         -   User Id
     *  @return $data                           -       ARRAY       -   Email data
     */
    function getEmailForEmailFromUserId($email_manager_id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email` WHERE `rt_comm_email_manager_id` = '" . $email_manager_id . "'";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

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
                    email_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Email details according to the Email Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   Email data
     */
    function getEmailForEmailScheduledDate($sched_date)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email` WHERE `rt_comm_sched_date` = '" . $sched_date . "'";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

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
                    email_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Email details according to the Email Smaller than Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   Email data
     */
    function getEmailForEmailSmallerThanScheduledDate($sched_date)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email` WHERE `rt_comm_sched_date` < '" . $sched_date . "'";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

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
                    email_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }

    /*!
     *  @brief Function to get Email details according to the Email Greater than Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   Email data
     */
    function getEmailForEmailGreaterThanScheduledDate($sched_date)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email` WHERE `rt_comm_sched_date` > '" . $sched_date . "'";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

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
                    email_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Email details according to the Email To Name provided
     *  @param  $email_to           -       String          -   To Email Name
     *  @return $data               -       ARRAY           -   Email data
     */
    function getEmailForEmailEmailTo($email_to)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email` WHERE `rt_comm_to_name` = '" . $email_to . "'";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

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
                    email_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }



    /*!
     *  @brief Function to get Email details according to the Email user Id provided
     *  @param  $user_id            -       INT             -   User Id
     *  @return $data               -       ARRAY           -   Email data
     */
    function getEmailForEmailUserId($user_id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email` WHERE `rt_comm_creation_user_id` = '" . $user_id . "'";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

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
                    email_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Email details according to the Status provided
     *  @param  $status             -       String          -   String
     *  @return $data               -       ARRAY           -   Email data
     */
    function getEmailForEmailStatus($status)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email` WHERE `rt_comm_status` = '" . $status . "'";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

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
                    email_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to Insert Email details
     *  @param  $to_name            -       String          -   Email to Name
     *  @param  $to_email           -       String          -   Email To Email Id
     *  @param  $from_name          -       String          -   Email From Name
     *  @param  $from_email         -       String          -   Email From Email Id
     *  @param  $subject            -       String          -   Email Subject
     *  @param  $message            -       String          -   Email message
     *  @param  $attachment         -       String          -   Email Attachment
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
     *  @param  $email_manager_id   -       String          -   Email Manager Id
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Email Id
     */
    function insertEmailDetails($to_name,$to_email,$from_name,$from_email,$subject,$message,$attachment,$status,$sched_date,$sched_time,$sent_date,$sent_time,$module,$module_id,$user_id,$date,$time,$email_manager_id,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "insert into `rt_comm_email` (`rt_comm_email_id`,`rt_comm_to_name`,`rt_comm_to_email_id`,`rt_comm_from_name`,`rt_comm_from_email_id`,`rt_comm_subject`,`rt_comm_message`,`rt_comm_attachment`,`rt_comm_status`,`rt_comm_sched_date`,`rt_comm_sched_time`,`rt_comm_sent_date`,`rt_comm_sent_time`,`rt_comm_module_name`,`rt_comm_module_id`,`rt_comm_creation_date`,`rt_comm_creation_time`,`rt_comm_creation_user_id`,`rt_comm_email_manager_id`,`rt_comm_manager_id`,`rt_comm_extra1`,`rt_comm_extra2`,`rt_comm_extra3`)values
                                              (null              ,'$to_name'       ,'$to_email'          ,'$from_name'        ,'$from_email'         ,'$subject'       ,'$message'       ,'$attachment'       ,'$status'       ,'$sched_date'       ,'$sched_time'       ,'$sent_date'       ,'$sent_time'       ,'$module'            ,'$module_id'       ,'$date'                ,'$time'                ,'$user_id'                ,'$email_manager_id'       ,'$comm_manager_id'  ,'$extra1'       ,'$extra2'       ,'$extra3');";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

                //! Retrieve Last Inserted Id
                $id = @mysql_insert_id($conn);
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  INSERT_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }


    /*!
     *  @brief Function to Update Email details
     *  @param  $email_id           -       Int             -   Email Id
     *  @param  $to_name            -       String          -   Email to Name
     *  @param  $to_email           -       String          -   Email To Email Id
     *  @param  $from_name          -       String          -   Email From Name
     *  @param  $from_email         -       String          -   Email From Email Id
     *  @param  $subject            -       String          -   Email Subject
     *  @param  $message            -       String          -   Email message
     *  @param  $attachment         -       String          -   Email Attachment
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
     *  @param  $email_manager_id   -       String          -   Email Manager Id
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateEmailDetails($email_id,$to_name,$to_email,$from_name,$from_email,$subject,$message,$attachment,$status,$sched_date,$sched_time,$sent_date,$sent_time,$module,$module_id,$user_id,$date,$time,$email_manager_id,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_email` set `rt_comm_to_name` = '$to_name',`rt_comm_to_email_id` = '$to_email',`rt_comm_from_name` = '$from_name',
        `rt_comm_from_email_id` = '$from_email',`rt_comm_subject` = '$subject',`rt_comm_message` = '$message',`rt_comm_attachment` = '$attachment',
        `rt_comm_status` = '$status',`rt_comm_sched_date` = '$sched_date',`rt_comm_sched_time` = '$sched_time',`rt_comm_sent_date` = '$sent_date',
        `rt_comm_sent_time` = '$sent_time',`rt_comm_module_name` = '$module',`rt_comm_module_id` = '$module_id',`rt_comm_last_update_date` = '$date',
        `rt_comm_last_update_time` = '$time',`rt_comm_last_update_user_id` = '$user_id',`rt_comm_email_manager_id` = '$email_manager_id',
        `rt_comm_manager_id` = '$comm_manager_id',`rt_comm_extra1` = '$extra1',`rt_comm_extra2` = '$extra2',`rt_comm_extra3` = '$extra3'
        where `rt_comm_email_id` = '$email_id';";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

                $id = UPDATE_SUCCESSFULL;
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  UPDATE_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }

    /*!
     *  @brief Function to Update Email details partial (Status Update)
     *  @param  $email_id           -       Int             -   Email Id
     *  @param  $status             -       String          -   Email Status
     *  @param  $sent_date          -       String          -   Sent date
     *  @param  $sent_time          -       String          -   Sent time
     *  @param  $user_id            -       Int             -   creation user id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateEmailDetailsStatus($email_id,$status,$sent_date,$sent_time,$user_id,$date,$time)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_email` set `rt_comm_status` = '$status',`rt_comm_sent_date` = '$sent_date',`rt_comm_sent_time` = '$sent_time',
        `rt_comm_last_update_date` = '$date',`rt_comm_last_update_time` = '$time',`rt_comm_last_update_user_id` = '$user_id',
        where `rt_comm_email_id` = '$email_id';";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

                $id = UPDATE_SUCCESSFULL;
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  UPDATE_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }


    /*!
     *  @brief Function to Delete Email details
     *  @param  $email_id         -       Int             -   Email id
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function deleteEmailDetails($email_id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "delete from `rt_comm_email` where `rt_comm_email_id` = '$email_id'";

        //! Data base connection
        $conn = getEmailConnection();

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
                email_message_log('Query Executed Successfully. ::: '.$query);

                $id = DELETE_SUCCESSFULL;
            }
            else                        //! Execution failed
            {
                email_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  DELETE_FAILED;
            }

            //! Closing the connections
            closeEmailConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            email_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        email_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }
 ?>