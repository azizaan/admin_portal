<?php 
require_once 'config.php';
if(isset($_COOKIE['aan_session_id'])){
    $session_id=$_COOKIE['aan_session_id'];
    setcookie('aan_session_id', $session_id, time()-1);
    $result=mysqli_query($con,"delete from session where session_id=$session_id");
}
header('Location:index.php');
?>