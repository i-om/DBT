<?php
    /**************************************************************************
     *                                                                        *
     *  Display Manager Database layer                                        *
     *                                                                        *
     **************************************************************************/

    /*!
     * include database connection file.
     */
    include_once 'display_connection.php';


    /*!
     *  @brief Function to get all Display Manager details
     *  @return $data                   -       ARRAY       -       Display Manager data
     */
    function getDisplayManagerAll()
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display_manager`";

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
     *  @brief Function to get Display Manager details according to the Display Manager id provided
     *  @param  $id                     -       Int         -       Display Manager Id
     *  @return $data                   -       ARRAY       -       Display Manager data
     */
    function getDisplayManagerForDisplayManagerId($id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display_manager` WHERE `rt_display_manager_id` = '" . $id . "'";

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
     *  @brief Function to get Display Manager details according to the Name  provided
     *  @param  $name                       -       String      -       Name
     *  @return $data                       -       ARRAY       -       Display Manager data
     */
    function getDisplayManagerForName($name)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display_manager` WHERE `rt_display_manager_name` = '" . $name . "'";

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
     *  @brief Function to get Display Manager details according to the user Id provided
     *  @param  $user_id            -       INT             -   User Id
     *  @return $data               -       ARRAY           -   Display data
     */
    function getDisplayManagerForUserId($user_id)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_display_manager` WHERE `rt_display_manager_creation_user_id` = '" . $user_id . "'";

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
     *  @brief Function to Insert Display Manager details
     *  @param  $name               -       String          -   Name
     *  @param  $user_id            -       Int             -   creation user id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Display Manager Id
     */
    function insertDisplayManagerDetails($name,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "insert into `rt_comm_display_manager` (`rt_display_manager_id`,`rt_display_manager_name`,`rt_display_manager_creation_date`,`rt_display_manager_creation_time`,`rt_display_manager_creation_user_id`,`rt_display_manager_extra1`,`rt_display_manager_extra2`,`rt_display_manager_extra3`) values
                                                        (null                   ,'$name'                  ,'$date'                           ,'$time'                           ,'$user_id'                           ,'$extra1'                  ,'$extra2'                  ,'$extra3');";

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
     *  @brief Function to Update Display Manager details
     *  @param  $did                -       Int             -   Display Manager Id
     *  @param  $name               -       String          -   Name
     *  @param  $user_id            -       Int             -   Update user id
     *  @param  $date               -       String          -   Update Date
     *  @param  $time               -       String          -   update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateDisplayManagerDetails($did,$name,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_display_manager` set `rt_display_manager_name` = '$name',`rt_display_manager_last_update_date` = '$date',
        `rt_display_manager_last_update_time` = '$time',`rt_display_manager_last_update_user_id` = '$user_id',
        `rt_display_manager_extra1` = '$extra1',`rt_display_manager_extra2` = '$extra2',`rt_display_manager_extra3` = '$extra3'
        where `rt_display_manager_id` = '$did';";

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
     *  @brief Function to Delete Display Manager details
     *  @param  $did                -       Int             -   Display Manager id
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function deleteDisplayManagerDetails($did)
    {
        //! Message Loggin
        dis_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "delete from `rt_comm_display_manager` where `rt_display_manager_id` = '$did'";

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