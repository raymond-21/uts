<html lang="id">
  <head>
    <title>PERCETAKAN UTAMA</title>
      <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
  	<?php 
if(isset($_GET['pesan'])) {
	if($_GET['pesan']=="gagal") {
		echo "<div class ='alert'>username password  tidak sesuai</div>";
	}
}
?>

    <div class="login-page">
      <h3 ></h3>
      <form action="cek_login.php" method="post">

      <div class="form-control">
        <i class="fa fa-user"></i>
        <input type="text" name="username" placeholder="Username" required="required" />
      </div>

      <div class="form-control">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required="required" />
      </div>

      <input type="submit" class="btn-submit" type="button" value="Masuk" />
    </div>
    </form>
  </body>
</html>
