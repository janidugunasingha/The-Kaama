<?php
include 'connect.php';

if ($link==true){
    if(isset($_POST['login_user'])&&$_POST['login_user']==true){
        $chk = "select * from users where email='".$_POST['email']."'";
        $result=mysqli_query($link,$chk);
        if ($result->num_rows==1){
            $pass="";
            $email="";
            $userType="";
            foreach ($result as $data){
                $pass=$data['password'];
                $id=$data['id'];
                $userType=$data['userType'];
                $email=$data['email'];
            }
            if ($pass==md5($_POST['password'])){

                session_start();

                $_SESSION['user_id']=$id;
                $_SESSION['userType']=$userType;
                $_SESSION['email']=$email;

                echo json_encode("success");
            }else{
                echo json_encode("password");
            }
        }else{
            echo json_encode("no_user");
        }
    }
}