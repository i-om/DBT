<?php

  @session_start();
  $sLoginStatus = @$_SESSION["LoginStatus"];

  if($sLoginStatus == 'Login')
  {

    //! including db1 Layer
    @include_once("util/class.db1UserInfo.php");

    @include_once("util/class.dbContactDetails.php");

    $oContact = new  dbContactDetails('dbt');  //! creating object of a class

    $sIDLogin = $_GET['LoginId'];

    //! Calling method of db1UserInfo class to delete record from table UserInfo.

    $oUser->delete_user($sIDLogin);

    $oContact->delete_users_contact($sIDLogin);

    //! Redirecting control to the ViewAllUsers.php
    header("location:view_users.php");
  }
    else
    header("location:index.php");   //! session is not set then call for this page redirect to index.php

?>