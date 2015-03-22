<?php
    /**************************************************************************
     *                                                                        *
     *  SMS Connection Script                                             *
     *                                                                        *
     **************************************************************************/



    /*!
     * include message constants
     */
     include_once 'message_constants.php';

    /*!
     * include Logging script
     */
    include_once 'sms_logging.php';

    /*!
     * $remoteServer - INTEGER - Flag to use local database server
     */
    $remoteServer = 0;

    global $message;
    global $sms_conn;
    global $sms_host;
    global $sms_user;
    global $sms_password;
    global $sms_dbname;

    /*!
     * Check If the Remote server is set or not
     */
    if($remoteServer)
    {
        /*!
         *  $host - STRING - Hostname
         */
        $sms_host = '';

        /*!
         * $user - STRING - Database username
         */
        $sms_user = '';

        /*!
         *    $password - STRING - Database user password
         */
        $sms_password = '';

        /*!
         *    $dbname - STRING - Database name
         */
        $sms_dbname = 'db_rvs_1';
    }
    else
    {
        /*!
         *  $host - STRING - Hostname
         */
        $sms_host = 'localhost';

        /*!
         * $user - STRING - Database username
         */
        $sms_user = 'root';

        /*!
         *    $password - STRING - Database user password
         */
        $sms_password = '';

        /*!
         *    $dbname - STRING - Database name
         */
        $sms_dbname = 'db_rvs_1';
    }

    /*!
     *  @brief Function to eastablish database connection
     *  @param none
     *  @return $conn RESOURCE resource id
     */
    function getSMSConnection()
    {

        global $message;
        global $sms_conn;
        global $sms_host;
        global $sms_user;
        global $sms_password;
        global $sms_dbname;

        //Establish Database connection
        $sms_conn = @mysql_connect($sms_host, $sms_user, $sms_password);

        /*!
         * Check if the connection is established
         */
        if($sms_conn == '')        //! If Not established log the error , And Return DB Failure Message
        {
            //! Loggin message
            sms_message_log("Database Connection Failure. Check Your Username / Password.");
            return(DB_CONNECTION_FAILURE);
        }
        else                        //! If Establish Select the database s
        {
            //! Logging Message
            sms_message_log("Database Connection Successful.");

            //! Selcting Databsae
            $dbSelectSts = @mysql_select_db($sms_dbname);

            /*!
             * Ceck If the dabase is selected successfully
             */
            if($dbSelectSts == '')          //! If Not Selected : log the error and return selection failure
            {
                //! Loggin message
                sms_message_log("Database Selection Failure. MYSQL ERROR ::: " . @mysql_error($sms_conn)." :::.");
                return(DB_SELECTION_FAILURE);
            }
            else                            //! Else Data base selection successful. Return Connection Object
            {
                sms_message_log("Database Selection Successful.");
                return ($sms_conn);
            }
        }
    }


    /*!
     * @brief Function to close database connection
     * @param none
     * @return message
     */
     function closeSMSConnection()
     {
        global $sms_conn;

        $res = '';

        //! Closing Connection
        $res = @mysql_close($sms_conn);

        /*!
         * Check if the conection is closed successfully
         */
        if($res == 1)       //! if Closed return successful
        {
            //! Log Message
            sms_message_log("Database Connection Closed Successful.");
            return($res);
        }
        else                //! Else Log error message and return database connection close unsuccessful
        {
            sms_message_log("Database Connection Closed Unsuccessful.");
            return(DB_CONNECTION_CLOSE_FAILURE);
        }
    }
?>