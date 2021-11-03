<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    // Create connection
$conn = new mysqli('sql211.epizy.com','epiz_28276226','2eTbs1TJG1uCnI','epiz_28276226_manojsharma');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contactus(name,email,message)
    values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt->execute();
    echo "Message Sent Successfully.";
    $stmt->close();
    $conn->close();
}
?>