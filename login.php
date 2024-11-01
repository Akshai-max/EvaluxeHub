<?php
    $name=$_POST['name'];
    $email=$_POST['username'];
    $password=$_POST['password'];

    $conn = new mysqli('localhost','root','','contact_database');
    if($conn -> connect_error){
        die('Connection Failed : '. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO signin (username,email,userpassword) VALUES (?, ?, ?)");
        if (!$stmt) {
            die('Error in preparing statement: ' . $conn->error);
        }
        $stmt->bind_param("sss",$name,$email,$password);
        if ($stmt->execute()) {
            header('location:home.php');
        } else {
            echo 'Error in executing statement: ' . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
?>
