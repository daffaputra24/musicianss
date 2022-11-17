<html>

<head>
	<meta charset="utf-8">
	<title>POS - Point Of Sale</title>
	<link href="<?php echo base_url() . 'assets/css/' ?>login_style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<!--//webfonts-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
	<div class="main">
		<div class="user">
			<img src="<?php echo base_url() . 'assets/img/' ?>user.png" alt="">
		</div>
		<div class="login">
			<div class="inset">
			<h4 class="text-center" style="font-weight: bold;">LOGIN</h4>
				<?php echo form_open('auth/login'); ?>
				<div>
					<span><label>Username</label></span>
					<span><input type="text" name="username" class="textbox" id="active"></span>
				</div>
				<div>
					<span><label>Password</label></span>
					<span><input type="password" name="password" class="password"></span>
				</div>
				<div class="sign">
					<div class="submit">
						<input type="submit" name="submit" onclick="myFunction()" value="LOGIN">
					</div>
					<div class="clear"> </div>
				</div>
				</form>
			</div>
		</div>

	</div>

	<footer class="text-center mt-5">
                <p><em><small>Musician: Solusi latihan bermusik murah dan nyaman</small></em></p>
    </footer>


</body>

</html>