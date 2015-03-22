<?php
/*! Include file for connection  */
include_once('class.dbConnect.php');


class dbTemplate extends dbConnect
{
  function set_template($sTitle, $sMessage, $sType, $sLogin)
  {
        parent::get_connection();    /*! Connecting to database */

        $sQuery = "insert into templates (title, message, type,login_id) values('$sTitle','$sMessage','$sType','$sLogin')";

        parent::dbQuery($sQuery);   /*! Executing Query */

        $id = mysql_insert_id($this->iContactId);      /*! Getting last inserted record id */

        parent::close_connection();           /*! Closing connection */

        return $id;
  }


  function get_templates($sLoginId,$sRights)
  {
        parent::get_connection();    /*! Connecting to database */
        if($sRights =='admin')
        {
           $sQuery = "select * from templates";
        }
        else
        {
          $sQuery = "select * from templates where login_id='$sLoginId'";
        }


        $sResult = parent::dbQuery($sQuery);   /*! Executing Query */

        $aResultArray = array();

        $aResultArray = parent::fetch_result($sResult);

        parent::close_connection();           /*! Closing connection */

        return $aResultArray;
  }

  function get_all_templates($sType,$sLogin)
  {
        parent::get_connection();    /*! Connecting to database */

        $sQuery = "select * from templates where type='$sType' and login_id='$sLogin'";

        $sResult = parent::dbQuery($sQuery);   /*! Executing Query */

        $aResultArray = array();

        $aResultArray = parent::fetch_result($sResult);

        parent::close_connection();           /*! Closing connection */

        return $aResultArray;
  }
  function get_template_from_id($tempId)
  {
        parent::get_connection();    /*! Connecting to database */

        $sQuery = "select * from templates where idTemp ='$tempId'";

        $sResult = parent::dbQuery($sQuery);   /*! Executing Query */

        $aResultArray = array();

        $aResultArray = parent::fetch_result($sResult);

        parent::close_connection();           /*! Closing connection */

        return $aResultArray;
  }
  function update_template($sTitle, $sMessage, $sType, $id)
  {
        parent::get_connection();    /*! Connecting to database */

        $sQuery = "update templates set title='$sTitle',message ='$sMessage', type='$sType' where idTemp='$id'";

        parent::dbQuery($sQuery);   /*! Executing Query */

        parent::close_connection();           /*! Closing connection */

        //return $id;
  }
  function delete_template($id)
  {
        parent::get_connection();              /*! Connecting to database */

        $sQuery = "delete from templates where idTemp= '$id' ";

        parent::dbQuery($sQuery);              /*! Executing Query */


        parent::close_connection();
  }
}


?>