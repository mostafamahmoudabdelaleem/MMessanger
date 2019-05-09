<?php 

    require_once('db1conn.php');
    $dir_link = 'https://ar-developer.000webhostapp.com/m/android/messenger/profile-pictures/';
    $prefix = 'pp-';

    if(isset($_GET['u'])  && isset($_GET['p'])){
        $user_id = $_GET['u'];
        $picture_base64 = $_GET['p'];
        $save_dir = "../profile-pictures/". $prefix . $user_id .".png";
        $picture_link = $dir_link . $prefix . $user_id .".png";
        file_put_contents($save_dir,base64_decode($picture_base64));

        $sql = "UPDATE `usertable` 
                SET `Profile_Pic` = '$picture_link' 
                WHERE `usertable`.`ID` = '$user_id'";

        if($conn->query($sql)){
            echo 200;              // UPLOADED TO SERVER
        }else{
            echo 400;            // NOT UPLOADED TO SERVER
        }

        
    }else{
        echo 404;                 // BAD INPUT or NO INPUT
    }

    


?>