<?php
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $text=$_POST['text'];

    $conn = new mysqli('localhost','root','','contact_database');
    if($conn -> connect_error){
        die('Connection Failed : '. $conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO suggestions (firstname,lastname,email,phonenumber,text) VALUES (?, ?, ?, ?, ?)");
        if (!$stmt) {
            die('Error in preparing statement: ' . $conn->error);
        }
        $stmt->bind_param("sssis",$firstname,$lastname,$email,$phonenumber,$text);
        if ($stmt->execute()) {
            header('location:index.php');
        } else {
            echo 'Error in executing statement: ' . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
?>