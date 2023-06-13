<?php
require_once 'config.php';

// Memeriksa apakah ada session id yang tersimpan dalam cookie
if (isset($_COOKIE['aan_session_id'])) {
    $session_id = $_COOKIE['aan_session_id'];
    $result = mysqli_query($con, "SELECT * FROM session WHERE session_id='$session_id'");

    while ($res = mysqli_fetch_array($result)) {
        $id = $res['id'];
        $type = $res['type'];
    }

    if ($type != "user") {
        header("Location: landing.php");
        exit();
    }

    $result = mysqli_query($con, "SELECT * FROM users WHERE id=$id");

    while ($res = mysqli_fetch_array($result)) {
        $username = $res['username'];
        $email = $res['email'];
        $no_telp = $res['no_telp'];
        $address = $res['address'];
    }
} else {
    header("Location: u_profile.php");
    exit();
}

// Memeriksa apakah ada permintaan untuk memperbarui profil
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $address = $_POST['address'];

    // Lakukan pembaruan profil di sini (misalnya, dengan menggunakan query UPDATE ke database)
    $updateResult = mysqli_query($con, "UPDATE users SET name='$username', email='$email', no_telp='$no_telp', address='$address' WHERE id=$id");

    if ($updateResult) {
        header("Location: u_profile.php");
        exit();
    } else {
        echo "<script type='text/javascript'>
                alert('Failed to update profile. Please try again!');
                window.location.replace('update_u_profile.php');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="u_main_dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <label for="username" class="form-label">Full Name</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <label for="no_telp" class="form-label">Phone Number</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $no_telp; ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <label for="address" class="form-label">Address</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="address" name="address" rows="3"><?php echo $address; ?></textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-9 offset-sm-3">
                                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='u_profile.php'">Back</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
