<?php
/*! Include file for connection  */
include_once('class.dbConnect.php');

/*! Class for interaction with database thorugh methods */

class dbContactDetails extends dbConnect
{
    /*! Function to add record in the database */
     function set_contact($sFirstName, $sLastName, $sAddress, $sCity, $iPincode, $sState, $sCountry, $iPhoneNo, $iMobile, $sEmail, $sLoginId)
     {
        parent::get_connection();    /*! Connecting to database */

        $sQuery = "insert into contact(first_name, last_name, address, city, pincode, state, country, phone_no, mobile_no, email, login_id) values ('$sFirstName', '$sLastName', '$sAddress', '$sCity', '$iPincode', '$sState', '$sCountry', '$iPhoneNo', '$iMobile', '$sEmail','$sLoginId')";

        parent::dbQuery($sQuery);   /*! Executing Query */

        $id = mysql_insert_id($this->iContactId);      /*! Getting last inserted record id */

        parent::close_connection();           /*! Closing connection */

        return $id;

     }

     /*! Function to View(Retrieve) particular record from database */
     function get_contact($id,$sLoginId,$sRights)
     {
         parent::get_connection();      /*! Connecting to database */
         if($sRights == 'admin')
         {
            $sQuery = "select * from contact where id = $id" ;
         }
         else
         {
            $sQuery = "select * from contact where id = $id and login_id ='$sLoginId'" ;
         }


         $sResult = parent::dbQuery($sQuery);       /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);  /*! Fetching Results  */

         parent::close_connection();                /*! Closing connection */

         return  $aResultArray ;

     }

     /*! Function to View(Retrieve) all records from database */
     function get_all_contact($sLoginId,$sRights)
     {
         parent::get_connection();                 /*! Connecting to database */
         if($sRights == 'admin')
         {
            $sQuery = "select * from contact" ;
         }
         else
         {
           $sQuery = "select * from contact where login_id ='$sLoginId'" ;
         }
         $sResult = parent::dbQuery($sQuery);     /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);    /*! Fetching Results  */

         parent::close_connection();              /*! Closing connection */

         return  $aResultArray ;
     }

     /*! Function to View(Retrieve) records from database based on ceratin condition */
     function search_contact($fieldName, $parameter,$sLoginId,$sRights)
     {
         parent::get_connection();                    /*! Connecting to database */

         //$sQuery = "select * from contact where $fieldName like '$parameter%'  and login_id ='$sLoginId'" ;
         if($sRights=='admin')
         {
            $sQuery = "select * from contact where ";
             for($pp=0;$pp<count($fieldName);$pp++)
             {
                 $sQuery .=  $fieldName[$pp]." like '".$parameter[$pp]."%' and ";
             }
              $sQuery .= '1';
         }
         else
         {
             $sQuery = "select * from contact where ";
             for($pp=0;$pp<count($fieldName);$pp++)
             {
                 $sQuery .=  $fieldName[$pp]." like '".$parameter[$pp]."%' and ";
             }

             $sQuery .= "login_id ='$sLoginId'" ;
         }

        
         $sResult = parent::dbQuery($sQuery);         /*! Executing Query */

         $aResultArray =  array();

         $aResultArray = parent::fetch_result($sResult);    /*! Fetching Results  */

         parent::close_connection();                 /*! Closing connection */

         return  $aResultArray ;

     }

     /*! Function to Update particular record from database */
     function update_contact($id,$sFirstName, $sLastName, $sAddress, $sCity, $iPincode, $sState, $sCountry, $iPhoneNo, $iMobile, $sEmail,$sLoginId,$sRights)
     {
        parent::get_connection();              /*! Connecting to database */
        if($sRights == 'admin')
        {
            $sQuery = "update contact set first_name = '$sFirstName', last_name = '$sLastName', address = '$sAddress', city = '$sCity', pincode = '$iPincode', state = '$sState', country = '$sCountry', phone_no = '$iPhoneNo', mobile_no = '$iMobile', email = '$sEmail' where id= $id";
        }
        else
        {
           $sQuery = "update contact set first_name = '$sFirstName', last_name = '$sLastName', address = '$sAddress', city = '$sCity', pincode = '$iPincode', state = '$sState', country = '$sCountry', phone_no = '$iPhoneNo', mobile_no = '$iMobile', email = '$sEmail' where id= $id   and login_id ='$sLoginId'";
        }
        parent::dbQuery($sQuery);              /*! Executing Query */

        //$iId = mysql_insert_id($this->iContactId);

        parent::close_connection();                 /*! Closing connection */

        //return $id;

     }

     /*! Function to Delete particular record from database */

     function delete_contact($id)
     {
        parent::get_connection();              /*! Connecting to database */

        $sQuery = "delete from contact where id= $id ";

        parent::dbQuery($sQuery);              /*! Executing Query */

        parent::close_connection();
     }

     function delete_users_contact($sLoginId)
     {
        parent::get_connection();              /*! Connecting to database */

        $sQuery = "delete from contact where login_id = '$sLoginId' ";

        parent::dbQuery($sQuery);              /*! Executing Query */

        parent::close_connection();
     }

}

?>