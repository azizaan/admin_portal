<?php
require_once 'config.php';

// Memeriksa apakah ada session id yang tersimpan dalam cookie
if(isset($_COOKIE['aan_session_id']))
{
    $session_id=$_COOKIE['aan_session_id'];
    $result=mysqli_query($con,"SELECT * FROM session WHERE session_id=$session_id");
    
    while($res=mysqli_fetch_array($result))
    {
        $id=$res['id'];
        $type=$res['type'];
    }
    
    if($type!="user")
    {
        header("Location: landing.php");
    }
    
    $result=mysqli_query($con,"SELECT * FROM users WHERE id=$id");
    
    while($res=mysqli_fetch_array($result))
    {
        $name=$res['username'];
    }
}
else
{
    header("Location: login.php");
}
?>

<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://p.w3layouts.com/demos/novus_admin_panel/web/css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">User Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="text-center">
            <h1 class="mb-4">Hi, Welcome</h1>
            <h4>Hi! <?php echo $name ?>.</h4>
        </div>
        <hr>
        <br>
        <!-- Place your content here -->
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
