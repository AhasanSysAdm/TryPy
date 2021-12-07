<?php
    $con = mysqli_connect("localhost", "root", "", "apicall");
    $response = array();
    if($con) {
        $sql = "select * from user";
        $result = mysqli_query($con,$sql);
        if($result) {
            $x = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $response[$x]['id'] = $row['id'];
                $response[$x]['name'] = $row['name'];
                $response[$x]['email'] = $row['email'];
                $response[$x]['phone'] = $row['phone'];  
                $x++;  
            }
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    else {
        echo "Database Didn't Connect";

      }
    }
?>
