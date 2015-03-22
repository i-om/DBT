<?php
    /**************************************************************************
     *                                                                        *
     *  Communication Logging Script                                          *
     *                                                                        *
     **************************************************************************/


    /*!
     *  @brief Function to log Communication messages
     *  @param $msg - STRING - Message
     *  @return none
     */
    function comm_message_log($msg)
    {
        //! Message Loggin
        file_put_contents("comm_log.txt",date('Y-m-d H:i:s')."\t\t $msg \r\n",FILE_APPEND);
    }
?>