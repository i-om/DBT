<?php

     /*! Class to establish a new database connection */

     class dbConnect
     {
       private $sServerName = 'localhost';    /*! Give server name */

       private $sUserId = 'root';            /*! Give User ID */

       private $sPassword = '';              /*! Give Password */

       private $sDatabase = 'mysql';         /*! Give Database */

       private $sQuery = '';

       private $sResult = '';

       protected $iPatientId = '' ;


       function __construct($sDatabase)           /*! Constructor of the class, give databse name to $sDatabase */
       {
           $this->sDatabase = $sDatabase;
       }

       function get_connection()
       {
         /*! Establish connection using above parameters */
         $this->iPatientId = mysql_connect($this->sServerName, $this->sUserId, $this->sPassword) or die (mysql_error());

         /*! Selecting database */

         mysql_select_db($this->sDatabase, $this->iPatientId) or die (mysql_error());
       }

     /*! Function to fire a query */
       protected function dbQuery($sQuery)
       {
         $this->sResult = mysql_query($sQuery ,$this->iPatientId) or die (mysql_error());
         return $this->sResult;
       }

     /*! Function to fetch results */

     protected function fetch_result($sResult)
     {
        $aSearch = array();

        while($row = mysql_fetch_assoc($sResult))
        {
            $aSearch[] = $row ;
        }
       // print_r($aSearch) ; exit;
        return  $aSearch;
     }

     /*! This function closes connection of database  */
     function close_connection()
     {
       mysql_close($this->iPatientId) or die (mysql_error());
     }
}


?>