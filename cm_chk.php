<?php
// Login and Authetication
// This module verifies the login status of the user 
if(!isset($_user_id))
    session_start();

    if(isset($_SESSION['flag1']))
    {
        if($_SESSION['flag1'] == 1)
        {
            /*$_instituteName = $_SESSION['Name'];
            $__id = $_SESSION['Id'];
            $_user_id = $_SESSION['userId'];
            $_user_name = $_SESSION['name'];
            $_user_email = $_SESSION['useremail'];
            $_user_mobile = $_SESSION['usermobile'];
            $_staffId = $_SESSION['staffId'];
            $userType = $_SESSION['userType'];
            //$userType1 = $_SESSION['userType1'];
            $logindate =$_SESSION['datetime'];
            $_designation = $_SESSION['designation'];
            //$sstateId = @$_SESSION['stateId'];
            $iName = @$_SESSION['iName'];
            $instituteName = @$_SESSION['Name'];
            $_addr = @$_SESSION['addr'];
            $login_instance_id = @$_SESSION['loginInstanceId'];
			$_dept_id = 1;  */
        }
        else
        {
            header("location: index.php");
        }
    }
    else
    {
       header("location: index.php");
    }
?>