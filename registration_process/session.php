<?php 
include "../connect.php"; 
session_start();

$name=$_POST['name'];
$password=$_POST['password'];
$auth=$_POST['auth'];

        $check_user="SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'";     
        $check_user_query=mysqli_query($connect, $check_user);

        if ($auth) {
            if ($name!="" AND $password!=""){  
                    
                        if (mysqli_num_rows($check_user_query) > 0){ 

                        $user=mysqli_fetch_assoc($check_user_query);

                            $_SESSION['user'] = [
                                "id" => $user['id'],
                                "name" => $user['name'],
                                "password" => $user['password'],
                            ];

                            header('location: profile.php');
                        }
                        else 
                        {
                            $_SESSION['message'] = 'Wrong login or password';
                            header('location: reg.php');
                        }
                    }
                    else
                    {
                        $_SESSION['message'] = 'Fields are empty';
                        header('location: reg.php');
                    }

            }

?>