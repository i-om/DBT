<?php

 include('class.dbConnect.php');


 /*
 *   Class/  db1UserInfo
 *
 *   Use/  explain in the function
 *
 *
 */
 //! inheriting class from class dbConnect
 class db1UserInfo extends dbConnect
 {

    function set_data($sLoginId,$sUserName, $sPassword, $sHintQuestion, $sHintAnswer, $sEmail, $sRights,  $sDepartment, $sContact)
    {

          parent::get_connection();

          $sQuery = "insert into userinfo (login_id, name, password, hint_question, hint_answer, email, rights, department, contact_no) values('$sLoginId', '$sUserName', '$sPassword', '$sHintQuestion', '$sHintAnswer','$sEmail','$sRights','$sDepartment','$sContact')";

          $sResult = parent::dbQuery($sQuery) ;

          parent::close_connection();

          return   $sResult;

    }


    function search_userLog($sLoginID)
    {

          parent::get_connection();

          $aSelectArray=array();

          $sQuerySel="select * from userinfo where login_id like binary '$sLoginID'";

          $sResult = parent::dbQuery($sQuerySel) ;

          parent::close_connection();

          $aSelectArray = parent::fetch_result($sResult);

          return $aSelectArray;

    }


    function verify_log($sLoginId,$sUserPwd)
    {

          parent::get_connection();

          $aSearchArray=array();

          $sQuerySearch="select * from userinfo where login_id like binary '$sLoginId' and password like binary '$sUserPwd'";

          $sResult = parent::dbQuery($sQuerySearch);

          parent::close_connection();

          $aSearchArray = parent::fetch_result($sResult);

          return $aSearchArray;

    }


    function get_data()
    {

          parent::get_connection();

          $aArrayData=array();

          $sQuerySearch="select * from userinfo";

          $sResult = parent::dbQuery($sQuerySearch);

          parent::close_connection();

          $aArrayData = parent::fetch_result($sResult);

          return $aArrayData;

    }


    function user_verify($sLoginId,$sHintQuestion,$sHintAnswer)
    {

          parent::get_connection();

          $aSearchArray=array();

          $sQuerySearch="select * from userinfo where login_id like binary '$sLoginId' and hint_question='$sHintQuestion' and hint_answer='$sHintAnswer'";

          $sResult = parent::dbQuery($sQuerySearch) ;

          $aSearchArray = parent::fetch_result($sResult);

          parent::close_connection();

          return $aSearchArray;

    }


    function update_pwd($sNewPassword,$sLoginId)
    {

          parent::get_connection();

          $sQueryMod = "update userinfo set password='$sNewPassword' where login_id='$sLoginId'";

          $iResult = parent::dbQuery($sQueryMod) ;

          parent::close_connection();

          return $iResult;

    }

    function update_user($sLoginId,$sUserName, $sPassword, $sEmail, $sDepartment, $sContact,$sRights)
    {

          parent::get_connection();

          $sQuery = "update userinfo set name='$sUserName', password='$sPassword', email='$sEmail', department='$sDepartment', contact_no='$sContact',	rights='$sRights' where login_id='$sLoginId'";

          $sResult = parent::dbQuery($sQuery) ;

          parent::close_connection();

          return   $sResult;

    }

    function delete_user($sLoginId)
    {

          parent::get_connection();

          $sQueryDel = "delete from userinfo where login_id='$sLoginId'";

          $iResult = parent::dbQuery($sQueryDel) ;

          parent::close_connection();

          return $iResult;
    }



    function testDb1UserInfo()
    {
    /*
    *
    *   function verify_log($sLoginId,$sUserPwd)
    *   {
    *    $sQuery = "select * from userinfo where login_id like binary '$sLoginId' and password like binary '$sUserPwd'";
    *    by firing this query it search in table for the record with given id and password.
    *    and finally it returns result.
    *   }
    *
    *   function search_userLog($sLoginID)
    *   {
    *    Query = "select * from userinfo where login_id like binary '$sUserID'";
    *    execute Query by calling method of super class dbQuery($sQuery)
    *    fetch result in an array.
    *    checks if record is present or not \
    *    if datafound then return all the data related to login id
    *    and returns array of data.
    *   }
    *
    *   function set_data($sLoginId,$sUserName, $sPassword, $sHintQuestion, $sHintAnswer)
    *   {
    *    Takes 5 arguments and then by firing query puts them all into userinfo table
    *    Query = "insert into userinfo (login_id, name, password, hint_question, hint_answer) values('$sLoginId', '$sUserName', '$sPassword', '$sHintQuestion', '$sHintAnswer')";
    *   }
    *
    *   function get_data()
    *   {
    *    It fires the query select * from userinfo.
    *    Fetches the result return by the query into an array.
    *    then returns the array.
    *   }
    *
    *   function user_verify($sLoginId,$sHintQuestion,$sHintAnswer)
    *   {
    *    Query = "select * from userinfo where login_id like binary '$sLoginId' and hint_question='$sHintQuestion' and hint_answer='$sHintAnswer'";
    *    execute Query by calling method of super class dbQuery($sQuery)
    *    fetch result in an array.
    *    checks if record is present or not \
    *    if datafound then return all the data releted to login id
    *    and returns array of data
    *   }
    *
    *   function update_pwd($sNewPassword,$sLoginId)
    *   {
    *     Query="update userinfo set password='$sNewPassword' where login_id='$iUserId'";
    *     execute Query by calling method of superclassDBQuery
    *     make changes into the table according to condition given in the query.i.e sets new pwd in by replacing old one.
    *     if change occur it return result.
    *   }
    *
    *
    *
    */
    }
 }

 $oUser = new  db1UserInfo('dbt');  //! creating object of db1UserInfo class

?>