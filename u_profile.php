<?php
require_once 'config.php';

// Memeriksa apakah ada session id yang tersimpan dalam cookie
if (isset($_COOKIE['aan_session_id'])) {
  $session_id = $_COOKIE['aan_session_id'];
  $result = mysqli_query($con, "SELECT * FROM session WHERE session_id=$session_id");

  while ($res = mysqli_fetch_array($result)) {
    $id = $res['id'];
    $type = $res['type'];
  }

  if ($type != "user") {
    header("Location: landing.php");
  }

  $result = mysqli_query($con, "SELECT * FROM users WHERE id=$id");

  while ($res = mysqli_fetch_array($result)) {
    $name = $res['username'];
    $email = $res['email'];
    $no_telp = $res['no_telp'];
    $address = $res['address'];
    $pekerjaan = $res['pekerjaan'];
  }
} else {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
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
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="assets/img/team/blank.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3"><?php echo $name ?></h5>
              <p class="text-muted mb-1"><?php echo $pekerjaan ?></p>
              <p class="text-muted mb-4"><?php echo $address ?></p>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary" onclick="window.location.href='update_u_profile.php'">Edit Profile</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $name ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $email ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $no_telp ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $address ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>