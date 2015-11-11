
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>authorization</title>
	<link href="/stylesheets/start page.css" rel="stylesheet"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="autorization-registration.js"></script>
</head>
<body>
	<div class="sign_form">
		<div class="block_authorization">
			<form action="register" method="post">
				<input type="text" class="login" id="login" name="login" placeholder="Логин или электронная почта"/>
				<input type="password" class="password" id="password" name="password" placeholder="Пароль"/>
				<button type="submit" class="btn_sign">Войти</button>
			</form>
			<div class="society_sign">
				<a href="http:\\vk.com" style="color: transparent;">
					<img class="log_vk" src="/logos/society/vk.png" title="Войти через vk.com">
				</a>
				<a href="http:\\google.com" style="color: transparent;">
					<img class="log_google" src="/logos/society/google+.png" title="Войти через google.com">
				</a>
				<a href="http:\\facebook.com">
					<img class="log_fb" src="/logos/society/fb.png" title="Войти через facebook.com">
				</a>
			</div>
		</div>
		<div class="block_register">
			<form action="" method="post">
				<div class="authorization">
					<input type="text" class="reg_login" id="reg_login" name="reg_login" placeholder="Логин или электронная почта"/>
					<input type="password" class="reg_password" id="reg_password" name="reg_password" placeholder="Пароль"/>
					<input type="password" class="retry_reg_password" id="retry_reg_password" name="reg_password" placeholder="Еще раз пароль"/>
					<input type="text" class="name" id="name" placeholder="Имя"/>
					<input type="text" class="surname" id="surname" placeholder="Фамилия"/>
					<br>
					<button type="submit" class="btn_send">Регистрация</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>