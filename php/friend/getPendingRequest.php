<?php
/* Database connection settings */
include '../db1conn.php';

if(isset($_GET['user'])){
    $user_id = $_GET['user'];
    
    $sql = "SELECT * FROM `friendrequests`, `usertable` WHERE `From` = '$user_id' AND `Accepted` = 0 AND `usertable`.`USER_ID` = `friendrequests`.`To`";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $dataArray = array();
        for($i; $i<$result->num_rows; $i++){
            $data = $result->fetch_assoc();
            $dataArray[$i] = $data;
        }
        echo json_encode($dataArray);
    }    
}

// Close database connection
include '../db1disconn.php';
?>