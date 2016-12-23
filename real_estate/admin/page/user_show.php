<?php  
    include '../../connect_db.php';

    $sql = " SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows >0) {
        while ($row = $result->fetch_assoc()) {
            echo "id:".$row["id"].". ";
            echo "first_name:".$row["first_name"].". ";
            echo "last_name:".$row["last_name"].". ";
            echo "username:".$row["username"].". ";
            echo "avatar:".$row["avatar"].". ";
            echo "birthday:".date("d-m-Y",$row["birthday"]).". ";
            echo "gender:".$row["gender"].". ";
            echo "email:".$row["email"].". ";
            echo "phone:".$row["phone"].". ";
            echo "created:".date("d-m-Y",$row["created"]).". ";
            echo "modified:".date("d-m-Y",$row["modified"])."<br>";
        }

    }else{
        echo "No result";
    }
    $conn->close();
?>