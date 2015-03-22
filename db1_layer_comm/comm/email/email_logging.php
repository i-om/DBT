<?php
    /**************************************************************************
     *                                                                        *
     *  Email Logging Script                                                *
     *                                                                        *
     **************************************************************************/


    /*!
     *  @brief Function to log Email messages
     *  @param $msg - STRING - Message
     *  @return none
     */
    function email_message_log($msg)
    {
        //! Message Loggin
        file_put_contents("email_log.txt",date('Y-m-d H:i:s')."\t\t $msg \r\n",FILE_APPEND);
    }
?>