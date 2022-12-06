<?php
    include '../connect.php';
    session_start();

    if (isset($_POST['submit'])) {
        $user_id = $_SESSION['user_id'];
        $a_id = $_POST['a_id'];
        $comment = $_POST['comment'];
        // var_dump($user_id);
        // var_dump($a_id);
        // var_dump($comment);

        $stmt = $connect->prepare("INSERT INTO comment(user_id, article_id, comment)
        VALUES (?, ?, ?)");

        $stmt->bind_param("iis", $user_id, $a_id, $comment);
        $stmt->execute();
    }
    header("Location: ../view.php?a_id=$a_id");
?>