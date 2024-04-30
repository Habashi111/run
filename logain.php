<?php
if(isset($_POST['submit'])){
    include "connection.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt= $db->prepare("INSERT INTO mo(email,password) VALUES(:e,:p)");

    try {
        $stmt->execute(array(
            'e' => $email,
            'p' => $password
        ));
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>