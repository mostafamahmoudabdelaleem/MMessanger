<?php
/* Database connection settings */
include 'db1conn.php';

// Parse URL sent data
$user1 = $_GET['u1'];
$user2 = $_GET['u2'];

$sql = "SELECT
        `Message`, `SenderID`, `Time`
        FROM
        `Messages`
        WHERE
        (SenderID = '$user1' OR SenderID = '$user2') AND (ReceiverID = '$user2' OR ReceiverID = '$user1')";
        
$result = $conn->query($sql);
if($result->num_rows > 0){
    $dataArr = array();
    $datacount = $result->num_rows;
    
    for($x = 0; $x < $datacount; $x++) {
        $user = $result->fetch_assoc();
        $dataArr[$x] = $user;
    }
    $resp = array("count" => $datacount, "messages" => $dataArr);
    echo json_encode($resp);
}else{
    
    
}




// Close database connection
include 'db1disconn.php';
?>