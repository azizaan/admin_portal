<?php
require_once 'config.php';
if(isset($_COOKIE['aan_session_id']))
{
    $session_id=$_COOKIE['aan_session_id'];
    $result=mysqli_query($con,"Select * from session where session_id=$session_id");
    while($res=mysqli_fetch_array($result))
    {
        $id=$res['id'];
        $type=$res['type'];
    }
    if($type=="user")
    {
        header("Location:u_main_dashboard.php");
    }
    $result=mysqli_query($con,"select * from users where id=$id");
    while($res=mysqli_fetch_array($result))
    {
        $name=$res['username'];
    }
    $no = 1;
}
else
{
    header("Location:login.php");
}
?>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://p.w3layouts.com/demos/novus_admin_panel/web/css/font-awesome.css" rel="stylesheet">
    <style>
        body {
            font-family: "Ubuntu", sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 32px;
            margin-top: 20px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .container {
            margin-top: 20px;
        }

        table {
            width: 100%;
        }

        th {
            font-weight: bold;
        }

        td {
            padding: 10px 0;
        }

        .status-online {
            color: green;
        }

        .status-offline {
            color: red;
        }

        .btn {
            padding: 5px 10px;
            margin-left: 5px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <a style="text-decoration:none" href="http://ideetulot.com/aan/"><h1>Hi Admin</h1></a>
            <h4>Hi! <?php echo $name ?>.</h4>
            <a href="logout.php"><button class="btn btn-primary">Logout</button></a>
        </div>
        <hr>
        <div class="text-center">
            <h2>List of Users</h2>
            <a href="adduser.php"><button class="btn btn-primary">Add User</button></a>
        </div>
        <br>
        <table id="user-table" class="table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result1=mysqli_query($con,"select * from users");
                while($res1=mysqli_fetch_array($result1))
                {
                    $id=$res1['id'];
                    $name=$res1['name'];
                    $username=$res1['username'];
                    $password=$res1['password'];
                    $type=$res1['type'];
                    $online=0;
                    if($type!="admin")
                    {
                        $result2=mysqli_query($con,"select * from session where id=$id");
                        while($res2=mysqli_fetch_array($result2))
                        {
                            $online=1;
                        }
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $name ?></td> 
                            <td><?php echo $username ?></td>
                            <td><?php echo $password ?></td>
                            <td><?php if($online==1) echo '<span class="status-online">Online</span>'; else echo '<span class="status-offline">Offline</span>'; ?></td>
                            <td>
                                <a href="deleteuser.php?id=<?php echo $id ?>" class="btn btn-danger">Remove</a>
                                <a href="makeadmin.php?id=<?php echo $id ?>" class="btn btn-success">Make Admin</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#user-table').DataTable();
        });
    </script>
</body>
</html>
