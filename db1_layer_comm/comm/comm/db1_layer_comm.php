<?php
    /**************************************************************************
     *                                                                        *
     *  Communication Database layer                                          *
     *                                                                        *
     **************************************************************************/

    /*!
     * include database connection file.
     */
    include_once 'comm_connection.php';


    /*!
     *  @brief Function to get Communication details according to the Communication id provided
     *  @param  $communication_id       -       Int         -       Communication Id
     *  @return $data                   -       ARRAY       -       Communication data
     */
    function getCommForCommId($communication_id)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_manager` WHERE `rt_comm_manager_id` = '" . $communication_id . "'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

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
                    comm_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Communication details according to the Communication Type provided
     *  @param  $communication_type         -       String      -       Communication Type
     *  @return $data                       -       ARRAY       -       Communication data
     */
    function getCommForCommType($communication_type)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_manager` WHERE `rt_comm_manager_type` = '" . $communication_type . "'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

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
                    comm_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Communication details according to the Communication From User Id provided
     *  @param  $communication_from_user_id     -       Int         -   User Id
     *  @return $data                           -       ARRAY       -   Communication data
     */
    function getCommForCommFromUserId($communication_from_user_id)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_manager` WHERE `rt_comm_manager_from_user_id` = '" . $communication_from_user_id . "'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

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
                    comm_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Communication details according to the Communication Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   Communication data
     */
    function getCommForCommScheduledDate($sched_date)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_manager` WHERE `rt_comm_manager_schedule_date` = '" . $sched_date . "'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

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
                    comm_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Communication details according to the Communication Smaller than Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   Communication data
     */
    function getCommForCommSmallerThanScheduledDate($sched_date)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_manager` WHERE `rt_comm_manager_schedule_date` < '" . $sched_date . "'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

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
                    comm_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }

    /*!
     *  @brief Function to get Communication details according to the Communication Greater than Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   Communication data
     */
    function getCommForCommGreaterThanScheduledDate($sched_date)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_manager` WHERE `rt_comm_manager_schedule_date` > '" . $sched_date . "'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

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
                    comm_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Communication details according to the Communication repeat provided
     *  @param  $repeat             -       String          -   Repeat
     *  @return $data               -       ARRAY           -   Communication data
     */
    function getCommForCommRepeat($repeat)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_manager` WHERE `rt_comm_manager_repeat` = '" . $repeat . "'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

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
                    comm_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Communication details according to the Communication repeat and smaller than current date provided
     *  @param  $repeat             -       String          -   Repeat
     *  @param  $sched_date         -       String          -   Scheduled Date
     *  @return $data               -       ARRAY           -   Communication data
     */
    function getCommForCommRepeatScheduledDate($repeat,$sched_date)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_manager` WHERE `rt_comm_manager_repeat` = '" . $repeat . "' and `rt_comm_manager_schedule_date` <= '" . $sched_date . "'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

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
                    comm_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Communication details according to the Communication user Id provided
     *  @param  $user_id            -       INT             -   User Id
     *  @return $data               -       ARRAY           -   Communication data
     */
    function getCommForCommUserId($user_id)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_manager` WHERE `rt_comm_manager_creation_user_id` = '" . $user_id . "'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

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
                    comm_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }

    /*!
     *  @brief Function to Insert Communication details
     *  @param  $type               -       String          -   Type
     *  @param  $type_ids           -       String          -   type ids
     *  @param  $message_details    -       String          -   Message Details
     *  @param  $from_user_id       -       Int             -   From User ID
     *  @param  $sched_date         -       String          -   Scheduled date
     *  @param  $repeat             -       String          -   Repeat
     *  @param  $expire_date        -       String          -   Repeat Expire Date
     *  @param  $frequency          -       Int             -   Frequenct of the repeat
     *  @param  $user_id            -       Int             -   creation user id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Communication Manager Id
     */
    function insertCommunicationManagerDetails($type,$type_ids,$message_details,$from_user_id,$sched_date,$repeat,$expire_date,$frequency,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "insert into `rt_comm_manager` (`rt_comm_manager_id`,`rt_comm_manager_type`,`rt_comm_manager_type_ids`,`rt_comm_manager_message_details`,`rt_comm_manager_from_user_id`,`rt_comm_manager_schedule_date`,`rt_comm_manager_repeat`,`rt_comm_manager_expire_date`,`rt_comm_manager_frequency`,`rt_comm_manager_creation_date`,`rt_comm_manager_creation_time`,`rt_comm_manager_creation_user_id`,`rt_comm_manager_extra1`,`rt_comm_manager_extra2`,`rt_comm_manager_extra3`)values
                                                (null                ,'$type'               ,'$type_ids'               ,'$message_details'               , '$from_user_id'              ,'$sched_date'                  ,'$repeat'               ,'$expire_date'               ,'$frequency'               ,'$date'                        ,'$time'                        ,'$user_id'                        ,'$extra1'               ,'$extra2'               ,'$extra3');";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

                //! Retrieve Last Inserted Id
                $id = @mysql_insert_id($conn);
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  INSERT_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }


    /*!
     *  @brief Function to Update Communication details
     *  @param  $communication_id   -       Int             -   Communication id
     *  @param  $type               -       String          -   Type
     *  @param  $type_ids           -       String          -   type ids
     *  @param  $message_details    -       String          -   Message Details
     *  @param  $from_user_id       -       Int             -   From User ID
     *  @param  $sched_date         -       String          -   Scheduled date
     *  @param  $repeat             -       String          -   Repeat
     *  @param  $expire_date        -       String          -   Repeat Expire Date
     *  @param  $frequency          -       Int             -   Frequenct of the repeat
     *  @param  $user_id            -       Int             -   updated user id
     *  @param  $date               -       String          -   updated Date
     *  @param  $time               -       String          -   updated time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateCommunicationManagerDetails($communication_id,$type,$type_ids,$message_details,$from_user_id,$sched_date,$repeat,$expire_date,$frequency,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_manager` set `rt_comm_manager_type` = '$type',`rt_comm_manager_type_ids` = '$type_ids',
        `rt_comm_manager_message_details` = '$message_details',`rt_comm_manager_from_user_id` = '$from_user_id',
        `rt_comm_manager_schedule_date` = '$sched_date',`rt_comm_manager_repeat` = '$repeat',`rt_comm_manager_expire_date` = '$expire_date',
        `rt_comm_manager_frequency` = '$frequency',`rt_comm_manager_last_update_date` = '$date',`rt_comm_manager_last_update_time` = '$time',
        `rt_comm_manager_last_update_user_id` = '$user_id',`rt_comm_manager_extra1` = '$extra1',`rt_comm_manager_extra2` = '$extra2',
        `rt_comm_manager_extra3` = '$extra3' where `rt_comm_manager_id` = '$communication_id'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

                $id = UPDATE_SUCCESSFULL;
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  UPDATE_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }


    /*!
     *  @brief Function to Update Communication details (Partial Update for the repeat)
     *  @param  $communication_id   -       Int             -   Communication id
     *  @param  $type_ids           -       String          -   type ids
     *  @param  $sched_date         -       String          -   Scheduled date
     *  @param  $repeat             -       String          -   Repeat
     *  @param  $user_id            -       Int             -   updated user id
     *  @param  $date               -       String          -   updated Date
     *  @param  $time               -       String          -   updated time
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateCommunicationManagerDetailsForRepeat($communication_id,$type_ids,$sched_date,$repeat,$user_id,$date,$time)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_manager` set `rt_comm_manager_type_ids` = '$type_ids',`rt_comm_manager_schedule_date` = '$sched_date',
        `rt_comm_manager_repeat` = '$repeat',`rt_comm_manager_last_update_date` = '$date',`rt_comm_manager_last_update_time` = '$time',
        `rt_comm_manager_last_update_user_id` = '$user_id' where `rt_comm_manager_id` = '$communication_id'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

                $id = UPDATE_SUCCESSFULL;
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  UPDATE_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }


    /*!
     *  @brief Function to Delete Communication details
     *  @param  $communication_id   -       Int             -   Communication id
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function deleteCommunicationManagerDetails($communication_id)
    {
        //! Message Loggin
        comm_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "delete from `rt_comm_manager` where `rt_comm_manager_id` = '$communication_id'";

        //! Data base connection
        $conn = getCommConnection();

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
                comm_message_log('Query Executed Successfully. ::: '.$query);

                $id = DELETE_SUCCESSFULL;
            }
            else                        //! Execution failed
            {
                comm_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  DELETE_FAILED;
            }

            //! Closing the connections
            closeCommConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            comm_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        comm_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }
 ?>