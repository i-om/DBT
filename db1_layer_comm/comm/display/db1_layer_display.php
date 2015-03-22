<?php
    /**************************************************************************
     *                                                                        *
     *  Display Database layer                                                *
     *                                                                        *
     **************************************************************************/

    /*!
     * include database connection file.
     */
    include_once 'display_connection.php';


    /*!
     *  @brief Function to get Display details according to the Display id provided
     *  @param  $display_id             -       Int         -       Display Id
     *  @return $data                   -       ARRAY       -       Display data
     */
    function getDisForDisId($display_id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display` WHERE `rt_comm_display_id` = '" . $display_id . "'";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

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
                    dis_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Display details according to the Communication Id provided
     *  @param  $communication_id           -       String      -       Communication Id
     *  @return $data                       -       ARRAY       -       Display data
     */
    function getDisForCommunicationId($communication_id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display` WHERE `rt_comm_manager_id` = '" . $communication_id . "'";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

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
                    dis_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Display details according to the Display Manager Id provided
     *  @param  $display_manager_id             -       Int         -   User Id
     *  @return $data                           -       ARRAY       -   Display data
     */
    function getDisForDisFromUserId($display_manager_id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display` WHERE `rt_comm_display_manager_id` = '" . $display_manager_id . "'";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

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
                    dis_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Display details according to the Display Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   Display data
     */
    function getDisForDisScheduledDate($sched_date)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display` WHERE `rt_comm_sched_date` = '" . $sched_date . "'";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

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
                    dis_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Display details according to the Display Smaller than Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   Display data
     */
    function getDisForDisSmallerThanScheduledDate($sched_date)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display` WHERE `rt_comm_sched_date` < '" . $sched_date . "'";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

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
                    dis_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }

    /*!
     *  @brief Function to get Display details according to the Display Greater than Schedule date provided
     *  @param  $sched_date             -       String          -   Scheduled Date
     *  @return $data                   -       ARRAY           -   Display data
     */
    function getDisForDisGreaterThanScheduledDate($sched_date)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display` WHERE `rt_comm_sched_date` > '" . $sched_date . "'";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

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
                    dis_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Display details according to the Display User Id provided
     *  @param  $to_user_id         -       Int             -   Repeat
     *  @return $data               -       ARRAY           -   Display data
     */
    function getDisForDisToUserId($to_user_id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display` WHERE `rt_comm_to_user_id` = '" . $to_user_id . "'";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

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
                    dis_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Display details according to the Display To User Id and Scheduled date provided
     *  @param  $to_user_id         -       Int             -   To user Id
     *  @param  $sched_date         -       String          -   Scheduled Date
     *  @return $data               -       ARRAY           -   Display data
     */
    function getDisForDisToUserIdScheduledDate($to_user_id,$sched_date)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display` WHERE `rt_comm_to_user_id` = '" . $to_user_id . "' and `rt_comm_sched_date` = '" . $sched_date . "'";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

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
                    dis_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }


    /*!
     *  @brief Function to get Display details according to the Display user Id provided
     *  @param  $user_id            -       INT             -   User Id
     *  @return $data               -       ARRAY           -   Display data
     */
    function getDisForDisUserId($user_id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display` WHERE `rt_comm_creation_user_id` = '" . $user_id . "'";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

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
                    dis_message_log("No Records Found.");
                    $row = NO_RECORDS;
                }
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $row =  SELECTION_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($row);
    }

    /*!
     *  @brief Function to Insert Display details
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
     *  @param  $display_manager_id -       String          -   Display Manager Id
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Display Id
     */
    function insertDisplayDetails($name,$to_user_id,$tag,$message,$sched_date,$sched_time,$module,$module_id,$user_id,$date,$time,$display_manager_id,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "insert into `rt_comm_display` (`rt_comm_display_id`,`rt_comm_to_name`,`rt_comm_to_user_id`,`rt_comm_tag`,`rt_comm_message`,`rt_comm_sched_date`,`rt_comm_sched_time`,`rt_comm_module_name`,`rt_comm_module_id`,`rt_comm_creation_date`,`rt_comm_creation_time`,`rt_comm_creation_user_id`,`rt_comm_display_manager_id`,`rt_comm_manager_id`,`rt_comm_extra1`,`rt_comm_extra2`,`rt_comm_extra3`)values
                                                (null                ,'$name'          ,'$to_user_id'       ,'$tag'       ,'$message'       ,'$sched_date'       ,'$sched_time'       ,'$module'            ,'$module_id'       ,'$date'                ,'$time'                ,'$user_id'                ,'$display_manager_id'       ,'$comm_manager_id'  ,'$extra1'       ,'$extra2'       ,'$extra3');";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

                //! Retrieve Last Inserted Id
                $id = @mysql_insert_id($conn);
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  INSERT_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }


    /*!
     *  @brief Function to Update Display details
     *  @param  $display_id         -       Int             -   Display Id
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
     *  @param  $display_manager_id -       String          -   Display Manager Id
     *  @param  $comm_manager_id    -       String          -   Communication Manager Id
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateDisplayDetails($display_id,$name,$to_user_id,$tag,$message,$sched_date,$sched_time,$module,$module_id,$user_id,$date,$time,$display_manager_id,$comm_manager_id,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_display` set `rt_comm_to_name` = '$name',`rt_comm_to_user_id` = '$to_user_id',`rt_comm_tag` = '$tag',
        `rt_comm_message` = '$message',`rt_comm_sched_date` = 'sched_date',`rt_comm_sched_time` = '$sched_time',`rt_comm_module_name` = '$module',
        `rt_comm_module_id` = '$module_id',`rt_comm_last_update_date` = '$date',`rt_comm_last_update_time` = '$time',
        `rt_comm_last_update_user_id` = '$user_id',`rt_comm_display_manager_id` = '$display_manager_id',`rt_comm_manager_id` = '$comm_manager_id',
        `rt_comm_extra1` = '$extra1',`rt_comm_extra2` = '$extra2',`rt_comm_extra3` = '$extra3'  where `rt_comm_display_id` = '$display_id';";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

                $id = UPDATE_SUCCESSFULL;
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  UPDATE_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }


    /*!
     *  @brief Function to Delete Display details
     *  @param  $display_id         -       Int             -   Display id
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function deleteDisplayDetails($display_id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "delete from `rt_comm_display` where `rt_comm_display_id` = '$display_id'";

        //! Data base connection
        $conn = getDisConnection();

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
                dis_message_log('Query Executed Successfully. ::: '.$query);

                $id = DELETE_SUCCESSFULL;
            }
            else                        //! Execution failed
            {
                dis_message_log('Query Execution failed. ::: '. $query .' ::: '.@mysql_error($conn));
                $id =  DELETE_FAILED;
            }

            //! Closing the connections
            closeDisConnection();
        }
        else            //! Database Connection failed
        {
            //! Message Loggin
            dis_message_log('End of Function : '. __FUNCTION__);
            return($conn);
        }

        //! Message Loggin
        dis_message_log('End of Function : '. __FUNCTION__);
        return($id);
    }
 ?>