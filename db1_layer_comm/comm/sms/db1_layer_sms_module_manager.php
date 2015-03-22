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
     *  @brief Function to get SMS Module Manager details according to the SMS Module Manager id provided
     *  @param  $id                     -       Int         -       SMS Module Manager id
     *  @return $data                   -       ARRAY       -       SMS Module Manager data
     */
    function getSMSModuleManagerForSMSModuleManagerId($id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_module_manager` WHERE `rt_comm_sms_module_manager_id` = '" . $id . "'";

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
     *  @brief Function to get SMS Module Manager details according to the name provided
     *  @param  $name                       -       String      -       Module Name
     *  @return $data                       -       ARRAY       -       SMS Module Manager data
     */
    function getSMSModuleManagerForName($name)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_module_manager` WHERE `rt_comm_sms_module_name` = '" . $name . "'";

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
     *  @brief Function to get SMS Module Manager details according to the user Id provided
     *  @param  $user_id            -       INT             -   User Id
     *  @return $data               -       ARRAY           -   SMS Module Manager data
     */
    function getSMSModuleManagerForUserId($user_id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_module_manager` WHERE `rt_comm_sms_module_creation_user_id` = '" . $user_id . "'";

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
     *  @brief Function to Insert SMS Module Manager details
     *  @param  $name               -       String          -   Module Name
     *  @param  $manager_ids        -       String          -   SMS Manager Ids
     *  @param  $message_ids        -       String          -   SMS Default Message ids
     *  @param  $user_id            -       Int             -   creation user id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   SMS Module Manager Id
     */
    function insertSMSModuleManagerDetails($name,$manager_ids,$message_ids,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "insert into `rt_comm_sms_module_manager` (`rt_comm_sms_module_manager_id`,`rt_comm_sms_module_name`,`rt_comm_sms_module_manager_ids`,`rt_comm_sms_module_message_ids`,`rt_comm_sms_module_creation_date`,`rt_comm_sms_module_creation_time`,`rt_comm_sms_module_creation_user_id`,`rt_comm_sms_module_extra1`,`rt_comm_sms_module_extra2`,`rt_comm_sms_module_extra3`)values
                                                               (null                               ,'$name'                      ,'$manager_ids'                      ,'$message_ids'                      ,'$date'                               ,'$time'                               ,'$user_id'                               ,'$extra1'                      ,'$extra2'                      ,'$extra3');";

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
     *  @brief Function to Update SMS Module Manager details
     *  @param  $did                -       Int             -   Module Manager Id
     *  @param  $name               -       String          -   Module Name
     *  @param  $manager_ids        -       String          -   SMS Manager Ids
     *  @param  $message_ids        -       String          -   SMS Default Message ids
     *  @param  $user_id            -       Int             -   Update user id
     *  @param  $date               -       String          -   update Date
     *  @param  $time               -       String          -   Update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateSMSModuleManagerDetails($did,$name,$manager_ids,$message_ids,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_sms_module_manager` set `rt_comm_sms_module_name` = '$name',`rt_comm_sms_module_manager_ids` = '$manager_ids',
        `rt_comm_sms_module_message_ids` = '$message_ids',`rt_comm_sms_module_last_update_date` = '$date',
        `rt_comm_sms_module_last_update_time` = '$time',`rt_comm_sms_module_last_update_user_id` = '$user_id',
        `rt_comm_sms_module_extra1` = '$extra1',`rt_comm_sms_module_extra2` = '$extra2',`rt_comm_sms_module_extra3` = '$extra3'
         where `rt_comm_sms_module_manager_id` = '$did';";

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
     *  @brief Function to Delete SMS Module Managers details
     *  @param  $did                -       Int             -   SMS Module Manager id
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function deleteSMSModuleManagerDetails($did)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "delete from `rt_comm_sms_module_manager` where `rt_comm_sms_module_manager_id` = '$did'";

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