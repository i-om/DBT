<?php
    /**************************************************************************
     *                                                                        *
     *  Display Logging Script                                                *
     *                                                                        *
     **************************************************************************/


    /*!
     *  @brief Function to log Display messages
     *  @param $msg - STRING - Message
     *  @return none
     */
    function dis_message_log($msg)
    {
        //! Message Loggin
        file_put_contents("dis_log.txt",date('Y-m-d H:i:s')."\t\t $msg \r\n",FILE_APPEND);
    }
?>