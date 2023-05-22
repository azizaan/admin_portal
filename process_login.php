<?php
require_once 'config.php';

// Redirect user if already logged in
if(isset($_COOKIE['aan_session_id'])) {
    header('Location: index.php');
    exit;
}

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = mysqli_prepare($con, "SELECT id, type FROM users WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if(mysqli_stmt_num_rows($stmt) == 1) {
        mysqli_stmt_bind_result($stmt, $id, $type);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

        // Set session and redirect to session.php
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['type'] = $type;
        header("Location: session.php?id=$id&type=$type");
        exit;
    } else {
        header('Location: login_404.php');
        exit;
    }
}

?>
