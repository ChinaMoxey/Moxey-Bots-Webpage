<?php
session_start();

if(isset($_POST['submit']))
{
    include_once 'dbh.inc.php';
    
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);
    
    //Error handlers
    //Check if inputs are empty
    if(empty($uid) || empty ($pwd))
    {
        header("Location: ../index.php?login=empty");
        exit();
}
    else
    {
        $sql = "SELECT * FROM users WHERE user_uid = '$uid' AND user_pwd = '$pwd';";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1)
        {
           header("Location: ../index.php?login=error");
            exit();
        } 
        else
        {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                    header("Location: ../order.php");
                    exit();

                }
            }
        }
    


