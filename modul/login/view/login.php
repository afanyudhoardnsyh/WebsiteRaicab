<!DOCTYPE html>
<html>
<body>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>alert ('Username dan Password Tidak Sesuai!')</script>";
		}
	}
	?>
    <div class="container">
	    <form action="cek_login.php" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">LOGIN</p>
            <div class="input-group">
				<input type="text" name="username" class="form_login" placeholder="Username" required="required">
            </div>
            <div class="input-group">
				<input type="password" name="password" class="form_login" placeholder="Password" required="required">
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Belum punya akun? <a href="register.php">Daftar Disini!</a></p>
        </form>
    </div>
</body>
</html>