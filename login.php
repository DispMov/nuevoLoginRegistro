<?php
    $con = mysqli_connect("mysql13.000webhost.com", "a4243694_karlyy", "12karlyyhdz", "a4243694_ejemplo");
    
    $usernombre = $_POST["usernombre"];
    $contraseña = $_POST["contraseña"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM usuario WHERE usernombre = ? AND contraseña = ?");
    mysqli_stmt_bind_param($statement, "ss", $usernombre, $contraseña);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $usuarioid, $nombre, $edad, $usernombre, $contraseña);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["name"] = $nombre;
        $response["age"] = $edad;
        $response["username"] = $usernombre;
        $response["password"] = $contraseña;
    }
    
    echo json_encode($response);
?>

