<?php
function get_connection(): mysqli {
    $server_name = 'localhost';
    $user_name   = 'root';
    $password    = '';
    $database    = 'exo4_db';

    $conn = mysqli_connect($server_name, $user_name, $password, $database);
    if (!$conn) {
        die('Erreur de connexion : ' . mysqli_connect_error());
    }
    // set charset
    mysqli_set_charset($conn, 'utf8mb4');
    return $conn;
}
?>
<?php
// ...existing code...
?>