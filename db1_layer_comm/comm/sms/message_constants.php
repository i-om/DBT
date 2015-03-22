<?php
    /**************************************************************************
     *                                                                        *
     *  Communication Message Constant Script                                 *
     *                                                                        *
     **************************************************************************/


    /*!  Constant for database connection success */
   @define('DB_CONNECTION_SUCCESS','M0001');

   /*!  Constant for database connection failure */
   @define('DB_CONNECTION_FAILURE','E0010');

   /*!  Constant for database selection success */
   @define('DB_SELECTION_SUCCESS','M0011');

   /*!  Constant for database selection failure */
   @define('DB_SELECTION_FAILURE','E0011');

   /*!  Constant for closed database connection */
   @define('DB_CONNECTION_CLOSED','M0100');

   /*!  Constant for closed database connection */
   @define('DB_CONNECTION_CLOSE_FAILURE','E0100');

   /*!  Constant for no records found */
   @define('NO_RECORDS','M0101');

   /*!  Constant for record exists */
   @define('RECORDS_EXISTS','M0110');

   /*!  Constant for successfull insertion */
   @define('INSERT_SUCCESSFULL','M0111');

   /*!  Constant for insertion failure */
   @define('INSERT_FAILED','E1000');

   /*!  Constant for successfull update */
   @define('UPDATE_SUCCESSFULL','M1001');

   /*!  Constant for update failure */
   @define('UPDATE_FAILED','E1010');

   /*!  Constant for selection failure */
   @define('SELECTION_FAILED','E1011');

   /*!  Constant for successfull deletion */
   @define('DELETE_SUCCESSFULL','M1100');

   /*!  Constant for deletion failure */
   @define('DELETE_FAILED','E1101');

   /*!  Constant for invalid data */
   @define('INVALID_DATA','E1110');

   /*!  Constant for deletion failure */
   @define('START_GETCONNECTION','M0000');

   /*!  Constant for invalid data */
   @define('END_GETCONNECTION','M1111');

   /*!  Constant for deletion failure */
   @define('START_CLOSECONNECTION','M0010');

   /*!  Constant for invalid data */
   @define('END_CLOSECONNECTION','M1000');

   /*!  Constant for invalid XML file */
   @define('INVALID_XML_FILE','E1111');
?>