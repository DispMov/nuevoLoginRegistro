<?php
    $con = mysqli_connect("	mysql13.000webhost.com", "a4243694_karlyy", "12karlyyhdz", "a4243694_ejemplo");
    
    $nombre = $_POST["nombre"];
    $usernombre = $_POST["usernombre"];
    $contraseña = $_POST["contraseña"];
    $edad = $_POST["edad"];
    $statement = mysqli_prepare($con, "INSERT INTO usuario (nombre, usernombre, contraseña,edad) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "siss", $nombre, $usernombre, $contraseña, $edad);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
Status 
 
