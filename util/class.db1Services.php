<?php

 include_once('class.dbConnect.php');


 /*
 *   Class/  db1UserInfo
 *
 *   Use/  explain in the function
 *
 *
 */
 //! inheriting class from class dbConnect
 class db1Services extends dbConnect
 {

    function set_data($sName)
    {

          parent::get_connection();

          $sQuery = "insert into services(`id`,`name`) values(Null, '$sName')";

          $sResult = parent::dbQuery($sQuery) ;

          $iId = mysql_insert_id($this->iContactId);

          parent::close_connection();

          return   $iId;

    }

    function get_data()
    {

          parent::get_connection();

          $sQuery = "select * from services";

          $sResult = parent::dbQuery($sQuery);

          $aResultArray = parent::fetch_result($sResult);

          parent::close_connection();

          return   $aResultArray;

    }

    function get_service($iId)
    {
          parent::get_connection();

          $sQuery = "select * from `services` where `id` = '$iId'";

          $sResult = parent::dbQuery($sQuery);

          $aResultArray = parent::fetch_result($sResult);

          parent::close_connection();

          return   $aResultArray;
    }

 }

 $oService = new  db1Services('dbt');  //! creating object of  class

?>