<?php
    /**************************************************************************
     *                                                                        *
     *  Email Connection Script                                             *
     *                                                                        *
     **************************************************************************/



    /*!
     * include message constants
     */
     include_once 'message_constants.php';

    /*!
     * include Logging script
     */
    include_once 'email_logging.php';

    /*!
     * $remoteServer - INTEGER - Flag to use local database server
     */
    $remoteServer = 0;

    global $message;
    global $email_conn;
    global $email_host;
    global $email_user;
    global $email_password;
    global $email_dbname;

    /*!
     * Check If the Remote server is set or not
     */
    if($remoteServer)
    {
        /*!
         *  $host - STRING - Hostname
         */
        $email_host = '';

        /*!
         * $user - STRING - Database username
         */
        $email_user = '';

        /*!
         *    $password - STRING - Database user password
         */
        $email_password = '';

        /*!
         *    $dbname - STRING - Database name
         */
        $email_dbname = 'db_rvs_1';
    }
    else
    {
        /*!
         *  $host - STRING - Hostname
         */
        $email_host = 'localhost';

        /*!
         * $user - STRING - Database username
         */
        $email_user = 'root';

        /*!
         *    $password - STRING - Database user password
         */
        $email_password = '';

        /*!
         *    $dbname - STRING - Database name
         */
        $email_dbname = 'db_rvs_1';
    }

    /*!
     *  @brief Function to eastablish database connection
     *  @param none
     *  @return $conn RESOURCE resource id
     */
    function getEmailConnection()
    {

        global $message;
        global $email_conn;
        global $email_host;
        global $email_user;
        global $email_password;
        global $email_dbname;

        //Establish Database connection
        $email_conn = @mysql_connect($email_host, $email_user, $email_password);

        /*!
         * Check if the connection is established
         */
        if($email_conn == '')        //! If Not established log the error , And Return DB Failure Message
        {
            //! Loggin message
            email_message_log("Database Connection Failure. Check Your Username / Password.");
            return(DB_CONNECTION_FAILURE);
        }
        else                        //! If Establish Select the database s
        {
            //! Logging Message
            email_message_log("Database Connection Successful.");

            //! Selcting Databsae
            $dbSelectSts = @mysql_select_db($email_dbname);

            /*!
             * Ceck If the dabase is selected successfully
             */
            if($dbSelectSts == '')          //! If Not Selected : log the error and return selection failure
            {
                //! Loggin message
                email_message_log("Database Selection Failure. MYSQL ERROR ::: " . @mysql_error($email_conn)." :::.");
                return(DB_SELECTION_FAILURE);
            }
            else                            //! Else Data base selection successful. Return Connection Object
            {
                email_message_log("Database Selection Successful.");
                return ($email_conn);
            }
        }
    }


    /*!
     * @brief Function to close database connection
     * @param none
     * @return message
     */
     function closeEmailConnection()
     {
        global $email_conn;

        $res = '';

        //! Closing Connection
        $res = @mysql_close($email_conn);

        /*!
         * Check if the conection is closed successfully
         */
        if($res == 1)       //! if Closed return successful
        {
            //! Log Message
            email_message_log("Database Connection Closed Successful.");
            return($res);
        }
        else                //! Else Log error message and return database connection close unsuccessful
        {
            email_message_log("Database Connection Closed Unsuccessful.");
            return(DB_CONNECTION_CLOSE_FAILURE);
        }
    }
?>