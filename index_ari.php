<?php
  session_start();
  $msg = '';

  if (isset($_POST['submit'])) {

    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['status'] = $_POST['status'];
    $_SESSION['umur'] = $_POST['umur'];
    setcookie('email', $_POST['email'], time() + (86400 * 30), '/');
    header('Location: profile_ari.php');
    exit();
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>MYBiodata</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container mt-5">
    <h1>Biodata</h1>
    <?php if ($msg) : ?>
      <div class="alert alert-danger"><?php echo $msg ?></div>
    <?php endif; ?>
    <form method="post">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" required>
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <input type="text" class="form-control" name="status" required>
      </div>
      <div class="form-group">
        <label for="umur">Umur</label>
        <input type="umur" class="form-control" name="umur" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
