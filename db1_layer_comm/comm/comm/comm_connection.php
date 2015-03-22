<?php
    /**************************************************************************
     *                                                                        *
     *  Communication Connection Script                                       *
     *                                                                        *
     **************************************************************************/



    /*!
     * include message constants
     */
     include_once 'message_constants.php';

    /*!
     * include Logging script
     */
    include_once 'comm_logging.php';

    /*!
     * $remoteServer - INTEGER - Flag to use local database server
     */
    $remoteServer = 0;

    global $message;
    global $comm_conn;
    global $comm_host;
    global $comm_user;
    global $comm_password;
    global $comm_dbname;

    /*!
     * Check If the Remote server is set or not
     */
    if($remoteServer)
    {
        /*!
         *  $host - STRING - Hostname
         */
        $comm_host = '';

        /*!
         * $user - STRING - Database username
         */
        $comm_user = '';

        /*!
         *    $password - STRING - Database user password
         */
        $comm_password = '';

        /*!
         *    $dbname - STRING - Database name
         */
        $comm_dbname = 'labc_alert';
    }
    else
    {
        /*!
         *  $host - STRING - Hostname
         */
        $comm_host = 'localhost';

        /*!
         * $user - STRING - Database username
         */
        $comm_user = 'root';

        /*!
         *    $password - STRING - Database user password
         */
        $comm_password = '';

        /*!
         *    $dbname - STRING - Database name
         */
        $comm_dbname = 'email_sms';
    }

    /*!
     *  @brief Function to eastablish database connection
     *  @param none
     *  @return $conn RESOURCE resource id
     */
    function getCommConnection()
    {

        global $message;
        global $comm_conn;
        global $comm_host;
        global $comm_user;
        global $comm_password;
        global $comm_dbname;

        //Establish Database connection
        $comm_conn = @mysql_connect($comm_host, $comm_user, $comm_password);

        /*!
         * Check if the connection is established
         */
        if($comm_conn == '')        //! If Not established log the error , And Return DB Failure Message
        {
            //! Loggin message
            comm_message_log("Database Connection Failure. Check Your Username / Password.");
            return(DB_CONNECTION_FAILURE);
        }
        else                        //! If Establish Select the database s
        {
            //! Logging Message
            comm_message_log("Database Connection Successful.");

            //! Selcting Databsae
            $dbSelectSts = @mysql_select_db($comm_dbname);

            /*!
             * Ceck If the dabase is selected successfully
             */
            if($dbSelectSts == '')          //! If Not Selected : log the error and return selection failure
            {
                //! Loggin message
                comm_message_log("Database Selection Failure. MYSQL ERROR ::: " . @mysql_error($comm_conn)." :::.");
                return(DB_SELECTION_FAILURE);
            }
            else                            //! Else Data base selection successful. Return Connection Object
            {
                comm_message_log("Database Selection Successful.");
                return ($comm_conn);
            }
        }
    }


    /*!
     * @brief Function to close database connection
     * @param none
     * @return message
     */
     function closeCommConnection()
     {
        global $comm_conn;

        $res = '';

        //! Closing Connection
        $res = @mysql_close($comm_conn);

        /*!
         * Check if the conection is closed successfully
         */
        if($res == 1)       //! if Closed return successful
        {
            //! Log Message
            comm_message_log("Database Connection Closed Successful.");
            return($res);
        }
        else                //! Else Log error message and return database connection close unsuccessful
        {
            comm_message_log("Database Connection Closed Unsuccessful.");
            return(DB_CONNECTION_CLOSE_FAILURE);
        }
    }
?>