<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	body {
		min-height: 100vh;
		background-image: url(<?= base_url(); ?>/assets/img/img_properties/background.jpg);
		background-size: cover;
		background-repeat: no-repeat;
	}

	.glass {
		/* From https://css.glass */
background: rgba(255, 255, 255, 0.11);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(10.9px);
-webkit-backdrop-filter: blur(10.9px);
border: 1px solid rgba(255, 255, 255, 0.72);
	}

	.container {
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
	}
</style>

<div class="container">
	<div class="row justify-content-center my-2">
		
		<div class="col-lg-5 mx-5 glass text-dark p-5">
			<center>
				<img style="box-shadow: 5px 5px 5px rgba(0,0,0,0.3)" src="<?= base_url(); ?>assets/img/img_properties/diamondlogo.png" alt="logo" class="img-fluid rounded-circle mb-2" width="111">
			</center>
			<h2 class="text-center">
				Sign In
			</h2>
		</br>
			<form method="post">
				<div class="form-group">
					<label for="username"><i class="fas fa-fw fa-user"></i> Nama Pengguna</label>
					<input required type="text" autocomplete="off" id="username" class="form-control rounded-pill" name="username">
				</div>
				<div class="form-group">
					<label for="password"><i class="fas fa-fw fa-lock"></i> Kata Sandi</label>
					<input required type="password" id="password" class="form-control rounded-pill" name="password">
				</div>
				<div class="form-group text-right">
					<button type="submit" name="login" class="w-100 btn bg-custom rounded-pill text-info"><i class="fas fa-fw fa-sign-in-alt"></i> Masuk</button>
				</div>
			</form>

		</div>
	</div>
</div>