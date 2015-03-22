<?php
    /**************************************************************************
     *                                                                        *
     *  Display Connection Script                                             *
     *                                                                        *
     **************************************************************************/



    /*!
     * include message constants
     */
     include_once 'message_constants.php';

    /*!
     * include Logging script
     */
    include_once 'display_logging.php';

    /*!
     * $remoteServer - INTEGER - Flag to use local database server
     */
    $remoteServer = 0;

    global $message;
    global $dis_conn;
    global $dis_host;
    global $dis_user;
    global $dis_password;
    global $dis_dbname;

    /*!
     * Check If the Remote server is set or not
     */
    if($remoteServer)
    {
        /*!
         *  $host - STRING - Hostname
         */
        $dis_host = '';

        /*!
         * $user - STRING - Database username
         */
        $dis_user = '';

        /*!
         *    $password - STRING - Database user password
         */
        $dis_password = '';

        /*!
         *    $dbname - STRING - Database name
         */
        $dis_dbname = 'dbt';
    }
    else
    {
        /*!
         *  $host - STRING - Hostname
         */
        $dis_host = 'localhost';

        /*!
         * $user - STRING - Database username
         */
        $dis_user = 'root';

        /*!
         *    $password - STRING - Database user password
         */
        $dis_password = '';

        /*!
         *    $dbname - STRING - Database name
         */
        $dis_dbname = 'dbt';
    }

    /*!
     *  @brief Function to eastablish database connection
     *  @param none
     *  @return $conn RESOURCE resource id
     */
    function getDisConnection()
    {

        global $message;
        global $dis_conn;
        global $dis_host;
        global $dis_user;
        global $dis_password;
        global $dis_dbname;

        //Establish Database connection
        $dis_conn = @mysql_connect($dis_host, $dis_user, $dis_password);

        /*!
         * Check if the connection is established
         */
        if($dis_conn == '')        //! If Not established log the error , And Return DB Failure Message
        {
            //! Loggin message
            dis_message_log("Database Connection Failure. Check Your Username / Password.");
            return(DB_CONNECTION_FAILURE);
        }
        else                        //! If Establish Select the database s
        {
            //! Logging Message
            dis_message_log("Database Connection Successful.");

            //! Selcting Databsae
            $dbSelectSts = @mysql_select_db($dis_dbname);

            /*!
             * Ceck If the dabase is selected successfully
             */
            if($dbSelectSts == '')          //! If Not Selected : log the error and return selection failure
            {
                //! Loggin message
                dis_message_log("Database Selection Failure. MYSQL ERROR ::: " . @mysql_error($dis_conn)." :::.");
                return(DB_SELECTION_FAILURE);
            }
            else                            //! Else Data base selection successful. Return Connection Object
            {
                dis_message_log("Database Selection Successful.");
                return ($dis_conn);
            }
        }
    }


    /*!
     * @brief Function to close database connection
     * @param none
     * @return message
     */
     function closeDisConnection()
     {
        global $dis_conn;

        $res = '';

        //! Closing Connection
        $res = @mysql_close($dis_conn);

        /*!
         * Check if the conection is closed successfully
         */
        if($res == 1)       //! if Closed return successful
        {
            //! Log Message
            dis_message_log("Database Connection Closed Successful.");
            return($res);
        }
        else                //! Else Log error message and return database connection close unsuccessful
        {
            dis_message_log("Database Connection Closed Unsuccessful.");
            return(DB_CONNECTION_CLOSE_FAILURE);
        }
    }
?>