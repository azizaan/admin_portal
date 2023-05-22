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
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $result = mysqli_query($con,"Select * from users where username='$username'");
        $f=0;
        while($res=mysqli_fetch_array($result))
        {
            $f=1;
        }
        if($f==1)
        {
            if(strtolower($username)=="admin")
            echo "<SCRIPT type='text/javascript'>
        alert('Cannot use username Admin. Plase Try Again!');
        window.location.replace(\"adduser.php\");
    </SCRIPT>";
            else
            echo "<SCRIPT type='text/javascript'>
        alert('Username already taken. Plase Try Again!');
        window.location.replace(\"adduser.php\");
    </SCRIPT>"; 
        }
        else
        {
        $result = mysqli_query($con,"Insert into users (name, username, password) values('$name','$username','$password')");
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
    <title>ADD USER</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form action="adduser.php" method="post">
                    <input type="hidden" id="name" name="name" class="form-control" value="user" readonly>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                        <a href="a_main_dashboard.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
