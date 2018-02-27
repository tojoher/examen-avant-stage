
<?php
$servername = "localhost";
$username = "AKAMASOA_free";
$dbname = "akamasoa_free";
$password = "";


try {
    $conn = new PDO("mysql:host=$servername;$dbname=akamasoa_free", $username="AKAMASOA_free", $password="");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    // prepare sql and bind parameters
    $msmt = $conn->prepare("INSERT INTO USER_free (USER_pseudo, USER_email,USER_pass) 
    VALUES (:USER_pseudo, :USER_email,:USER_pass)");
    $msmt->bindParam(':USER_pseudo', $pseudo);
    $msmt->bindParam(':USER_email', $email);
    $msmt->bindParam(':USER_pass', $password);
    #row insertion
    $pseudo=htmlentities(trim($_POST["pseudo"]));
    $email=htmlentities(trim($_POST["email"]));
    $password=htmlentities(trim($_POST["password"]));
    //exec
    $msmt->execute();
    echo "error";
    }
    catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>