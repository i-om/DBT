<?php
    /**************************************************************************
     *                                                                        *
     *  SMS Manager Database layer                                            *
     *                                                                        *
     **************************************************************************/

    /*!
     * include database connection file.
     */
    include_once 'sms_connection.php';


    /*!
     *  @brief Function to get all SMS Manager details
     *  @return $data                   -       ARRAY       -       SMS Manager data
     */
    function getSMSManagerAll()
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_manager`";

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
     *  @brief Function to get SMS Manager details according to the SMS Manager id provided
     *  @param  $id                     -       Int         -       SMS Manager Id
     *  @return $data                   -       ARRAY       -       SMS Manager data
     */
    function getSMSManagerForSMSManagerId($id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_manager` WHERE `rt_sms_manager_id` = '" . $id . "'";

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
     *  @brief Function to get SMS Manager details according to the Name  provided
     *  @param  $name                       -       String      -       Name
     *  @return $data                       -       ARRAY       -       SMS Manager data
     */
    function getSMSManagerForName($name)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_manager` WHERE `rt_sms_manager_name` = '" . $name . "'";

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
     *  @brief Function to get SMS Manager details according to the user Id provided
     *  @param  $user_id            -       INT             -   User Id
     *  @return $data               -       ARRAY           -   SMS data
     */
    function getSMSManagerForUserId($user_id)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_manager` WHERE `rt_sms_manager_creation_user_id` = '" . $user_id . "'";

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
     *  @brief Function to get SMS Manager details according to the Expire date provided
     *  @param  $date               -       String          -   Date
     *  @return $data               -       ARRAY           -   SMS data
     */
    function getSMSManagerForExpireDate($date)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_sms_manager` WHERE `rt_sms_manager_expire_date` = '" . $date . "'";

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
     *  @brief Function to Insert SMS Manager details
     *  @param  $plus91_sms_id      -       String          -   Plus91 SMS Id
     *  @param  $name               -       String          -   Name
     *  @param  $mobile             -       String          -   Mobile No
     *  @param  $sender_id          -       String          -   SMS Sender Id
     *  @param  $organization       -       String          -   Organization Name
     *  @param  $user_id            -       Int             -   creation user id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   SMS Manager Id
     */
    function insertSMSManagerDetails($plus91_sms_id,$name,$mobile,$sender_id,$organization,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "insert into `rt_comm_sms_manager` (`rt_sms_manager_id`,`rt_sms_manager_plus91_sms_id`,`rt_sms_manager_name`,`rt_sms_manager_mobile`,`rt_sms_manager_sender_id`,`rt_sms_manager_organization_name`,`rt_sms_manager_creation_date`,`rt_sms_manager_creation_time`,`rt_sms_manager_creation_user_id`,`rt_sms_manager_extra1`,`rt_sms_manager_extra2`,`rt_sms_manager_extra3`) values
                                                    (null               ,'$plus91_sms_id'              ,'$name'              ,'$mobile'              ,'$sender_id'              ,'$organization'                   ,'$date'                       ,'$time'                       ,'$user_id'                       ,'$extra1'              ,'$extra2'              ,'$extra3');";

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
     *  @brief Function to Update SMS Manager details
     *  @param  $did                -       Int             -   SMS Manager Id
     *  @param  $plus91_sms_id      -       String          -   Plus91 SMS Id
     *  @param  $name               -       String          -   Name
     *  @param  $mobile             -       String          -   Mobile No
     *  @param  $sender_id          -       String          -   SMS Sender Id
     *  @param  $organization       -       String          -   Organization Name
     *  @param  $user_id            -       Int             -   Update user id
     *  @param  $date               -       String          -   Update Date
     *  @param  $time               -       String          -   update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateSMSManagerDetails($did,$plus91_sms_id,$name,$mobile,$sender_id,$organization,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_sms_manager` set `rt_sms_manager_plus91_sms_id` = '$plus91_sms_id',`rt_sms_manager_name` = '$name',
        `rt_sms_manager_mobile` = '$mobile',`rt_sms_manager_sender_id` = '$sender_id',`rt_sms_manager_organization_name` = '$organization',
        `rt_sms_manager_last_update_date` = '$date',`rt_sms_manager_last_update_time` = '$time',`rt_sms_manager_last_update_user_id` = '$user_id',
        `rt_sms_manager_extra1` = '$extra1',`rt_sms_manager_extra2` = '$extra2',`rt_sms_manager_extra3` = '$extra3'
        where `rt_sms_manager_id` = '$did';";

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
     *  @brief Function to Update SMS Manager details (Partial For Credits)
     *  @param  $did                -       Int             -   SMS Manager Id
     *  @param  $credits            -       Int             -   Credits
     *  @param  $expire_date        -       String          -   Expire date
     *  @param  $last_purchase_date -       String          -   Last Purchase Date
     *  @param  $last_credits       -       Int             -   Last purchased credits
     *  @param  $last_expire_date   -       String          -   last Expire Date
     *  @param  $user_id            -       Int             -   Update user id
     *  @param  $date               -       String          -   Update Date
     *  @param  $time               -       String          -   update time
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateSMSManagerDetailsForCredits($did,$credits,$expire_date,$last_purchase_date,$last_credits,$last_expire_date,$user_id,$date,$time)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_sms_manager` set `rt_sms_manager_pending_credits` = '$credits',`rt_sms_manager_expire_date` = '$expire_date',
        `rt_sms_manager_last_purchase_date` = '$last_purchase_date',`rt_sms_manager_last_purchase_credits` = '$last_credits',
        `rt_sms_manager_last_expire_date` = '$last_expire_date',`rt_sms_manager_last_update_date` = '$date',`rt_sms_manager_last_update_time` = '$time',
        `rt_sms_manager_last_update_user_id` = '$user_id' where `rt_sms_manager_id` = '$did';";

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
     *  @brief Function to Delete SMS Manager details
     *  @param  $did                -       Int             -   SMS Manager id
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function deleteSMSManagerDetails($did)
    {
        //! Message Loggin
        sms_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "delete from `rt_comm_sms_manager` where `rt_sms_manager_id` = '$did'";

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