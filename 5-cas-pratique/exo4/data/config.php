<?php
function get_connection(){
    $server_name = 'localhost';
    $user_name   = 'root';
    $password    = '';
    $database    = 'crud_user';

    $connection = mysqli_connect($server_name, $user_name, $password, $database);

    if (!$connection) {
        die("Connexion échouée : " . mysqli_connect_error());
    }
    else{
        //echo("connexion réussie...");
    }
    return $connection;
}









function get_users(){
    $connection = get_connection();
    $sql = "SELECT * FROM users";

    $result = $connection->query($sql);

    if(!$result){
        die("Erreur SQL : " . $connection->error);
    }

    $connection->close();
    return $result;
}
