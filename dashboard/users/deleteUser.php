<?php
include '../../connect.php';
define('baseURL', explode('dashboard', $_SERVER['REQUEST_URI'])[0]);
$u_id = $_GET['u_id'];

//delete user
$sql = "DELETE FROM user WHERE id=$u_id";
if (mysqli_query($connect, $sql)) {
    echo "
        <script>
            window.alert('User deleted successfully!')
            window.location.href = '../users/list.php'
        </script>
    ";
} else {
    echo "
        <script>
            window.alert('Cant delete user!')
            window.location.href = '../users/list.php'
        </script>
    ";
}