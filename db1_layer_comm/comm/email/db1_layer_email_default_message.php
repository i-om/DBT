<?php
    /**************************************************************************
     *                                                                        *
     *  Email Default Message Database layer                                *
     *                                                                        *
     **************************************************************************/

    /*!
     * include database connection file.
     */
    include_once 'email_connection.php';


    /*!
     *  @brief Function to get all Email Default Message details
     *  @return $data                   -       ARRAY       -       Email Default message data
     */
    function getEmailDefaultMessageAll()
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email_default_message`";

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
     *  @brief Function to get Email Default Message details according to the Email Default Message id provided
     *  @param  $id                     -       Int         -       Email Default Message Id
     *  @return $data                   -       ARRAY       -       Email Default Message data
     */
    function getEmailDefaultMessageForEmailDefaultMessageId($id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email_default_message` WHERE `rt_comm_email_message_id` = '" . $id . "'";

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
     *  @brief Function to get Email Default Message details according to the Name of the default message provided
     *  @param  $name                       -       String      -       Name of the default Message
     *  @return $data                       -       ARRAY       -       Email Default Message data
     */
    function getEmailDefaultMessageForName($name)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email_default_message` WHERE `rt_comm_email_name` = '" . $name . "'";

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
     *  @brief Function to get Email Default Message details according to the user Id provided
     *  @param  $user_id            -       INT             -   User Id
     *  @return $data               -       ARRAY           -   Email data
     */
    function getEmailDefaultMessageForUserId($user_id)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $data = array();
        $conn = '';

        $resultSet = '';
        $row = array();

        //! Query
        $query = "SELECT * FROM `rt_comm_email_default_message` WHERE `rt_comm_email_creation_user_id` = '" . $user_id . "'";

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
     *  @brief Function to Insert Email Default Message details
     *  @param  $name               -       String          -   Name
     *  @param  $subject            -       String          -   Message Subject
     *  @param  $message            -       String          -   Message
     *  @param  $user_id            -       Int             -   creation user id
     *  @param  $date               -       String          -   creation Date
     *  @param  $time               -       String          -   creation time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Email Default Message Id
     */
    function insertEmailDefaultMessageDetails($name,$subject,$message,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "insert into `rt_comm_email_default_message` (`rt_comm_email_message_id`,`rt_comm_email_name`,`rt_comm_email_subject`,`rt_comm_email_message`,`rt_comm_email_creation_date`,`rt_comm_email_creation_time`,`rt_comm_email_creation_user_id`,`rt_comm_email_extra1`,`rt_comm_email_extra2`,`rt_comm_email_extra3`) values
                                                              (null                      ,'$name'             ,'$subject'             ,'$message'             ,'$date'                      ,'$time'                      ,'$user_id'                      ,'$extra1'             ,'$extra2'             ,'$extra3');";

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
     *  @brief Function to Update Email Default Message details
     *  @param  $did                -       Int             -   Email Default Message Id
     *  @param  $name               -       String          -   Name
     *  @param  $subject            -       String          -   Message Subject
     *  @param  $message            -       String          -   Message
     *  @param  $user_id            -       Int             -   Update user id
     *  @param  $date               -       String          -   Update Date
     *  @param  $time               -       String          -   update time
     *  @param  $extra1             -       String          -   Extra 1
     *  @param  $extra2             -       String          -   Extra 2
     *  @param  $extra3             -       String          -   Extra 3
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function updateEmailDefaultMessageDetails($did,$name,$subject,$message,$user_id,$date,$time,$extra1,$extra2,$extra3)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "update `rt_comm_email_default_message` set `rt_comm_email_name` = '$name',`rt_comm_email_subject` = '$subject',
        `rt_comm_email_message` = '$message',`rt_comm_email_last_update_date` = '$date',`rt_comm_email_last_update_time` = '$time',
        `rt_comm_email_last_update_user_id` = '$user_id',`rt_comm_email_extra1` = '$extra1',`rt_comm_email_extra2` = '$extra2',
        `rt_comm_email_extra3` = '$extra3' where `rt_comm_email_message_id` = '$did';";

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
     *  @brief Function to Delete Email Default Message details
     *  @param  $did                -       Int             -   Email Default Message id
     *  @return $id                 -       Int             -   Successful / Unsuccessful
     */
    function deleteEmailDefaultMessageDetails($did)
    {
        //! Message Loggin
        email_message_log('Start of Function : '. __FUNCTION__);

        $msg = '';

        //! Query
        $query = "delete from `rt_comm_email_default_message` where `rt_comm_email_message_id` = '$did'";

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