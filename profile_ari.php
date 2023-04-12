<?php
  session_start();

  if (!isset($_SESSION['nama']) || !isset($_SESSION['status']) || !isset($_COOKIE['umur']) || !isset($_SESSION['email'])) {
    header('Location: index_ari.php');
    exit();
  }

  $nama = $_SESSION['nama'];
  $status = $_SESSION['status'];
  $umur = $_COOKIE['umur'];
  $email =$_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profil</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1>Profil</h1>
    <table class="table">
      <tr>
        <td>Nama</td>
        <td><?php echo $nama ?></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><?php echo $status ?></td>
      </tr>
      <tr>
        <td>Umur</td>
        <td><?php echo $umur ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $email?></td>
      </tr>
    </table>
  </div>
</body>
</html>
