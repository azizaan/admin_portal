<?php
require_once 'config.php';
if(isset($_COOKIE['aan_session_id']))
{
    $session_id=$_COOKIE['aan_session_id'];
    $result=mysqli_query($con,"Select * from session where session_id=$session_id");
    while($res=mysqli_fetch_array($result))
    {
        $type=$res['type'];
    }
    if($type!="admin")
    {
        header("Location:index.php");
    }
    $id=$_GET['id'];
    $result=mysqli_query($con,"Select * from users where id=$id");
    while($res=mysqli_fetch_array($result))
    {
        $name=$res['name'];
        $username=$res['username'];
        $password=$res['password'];
    }
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $id=$_POST['id'];
        $result = mysqli_query($con,"Select * from users where username='$username'");
        $f=0;
        while($res=mysqli_fetch_array($result))
        {
            if($res['id']!=$id)
                $f=1;
        }
        if($f==1)
        {
            if(strtolower($username)=="admin")
                echo "<script type='text/javascript'>
                        alert('Cannot use username Admin. Please Try Again!');
                        window.location.replace(\"edituser.php?id=$id\");
                      </script>";
            else
                echo "<script type='text/javascript'>
                        alert('Username already taken. Please Try Again!');
                        window.location.replace(\"edituser.php?id=$id\");
                      </script>";
        }
        else
        {
            $result = mysqli_query($con,"update users set name='$name', username='$username', password='$password' where id=$id");
            header("Location:index.php");
        }
    }
}
else
{
    header("Location:index.php");
}
?>
<html>
    <head>
        <title>EDIT USER</title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    </head>
    <body>
        <br><br>
        <center>
            <a style="text-decoration:none" href="http://ideetulot.com/aan/"><h1>aan</h1></a>
        </center>
        <br><br>
        <center>
            <form action="edituser.php" method="post">
                <label>Name</label> 
                <input name="name" value="<?php echo $name ?>" required><br><br>
                <label>Username</label> 
                <input name="username" value="<?php echo $username ?>" required><br><br>
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password ?>" required><br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>" required><br>
                <input type="submit" name="submit">
            </form>
        </center> 
    </body>
</html>
