"<?php
	include('header.php');
?>
<section>
	<form method="POST" action="" class="auth_form">
		<?php
		if(isset($_POST['register'])){
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$login = $_POST['login'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$passwordCur = $_POST['passwordCur'];

			if($name !== '' && $surname !== '' && $login !== '' && $email !== '' && $password !== ''){
				if($password == $passwordCur){
					$query = "INSERT INTO users (name, surname, login, email, password) VALUES ('$name', '$surname', '$login', '$email', '$passwordCur')";
					$result = mysqli_query($db, $query);
					echo '<p class="current">Вы успешно зарегистрировались</p>';
				}else{
					echo '<p class="error">Пароли должны совпадать</p>';
				}
			}else{
				echo '<p class="error">Заполните все поля</p>';
			}
		}
		?>
		<label>Имя</label>
		<input type="text" name="name" placeholder="Иван">
		<label>Фамилия</label>
		<input type="text" name="surname" placeholder="Иванов">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Логин">
		<label>Е-майл</label>
		<input type="email" name="email" placeholder="Е-майл@mail.com">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="">
		<label>Повтор пароля</label>
		<input type="password" name="passwordCur" placeholder="">
		<button type="submit" name="register">Зарегистрироваться</button>
	</form>
</section>