<?php
    /**************************************************************************
     *                                                                        *
     *  SMS Logging Script                                                    *
     *                                                                        *
     **************************************************************************/


    /*!
     *  @brief Function to log SMS messages
     *  @param $msg - STRING - Message
     *  @return none
     */
    function sms_message_log($msg)
    {
        //! Message Loggin
        file_put_contents("sms_log.txt",date('Y-m-d H:i:s')."\t\t $msg \r\n",FILE_APPEND);
    }
?>