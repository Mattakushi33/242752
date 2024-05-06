<?php
	session_start();
	include('header.php');
	include('connect.php');
?>
<section>
	<form method="POST" action="log.php" class="auth_form">
		<?php
			$login=$_SESSION['login'];
			if ($login){
  				if ($login=='er login'){
				    echo '<p class="error">Введён неправильный логин или пароль</p>';
    				$_SESSION['login']='';
    			}else{
  					echo '<p class="current">Добро пожаловать '.$login.'</p>';
  					header('Location: general.php');
    			}
    		}
		?>
		<label>Логин</label>
		<input type="text" name="log" placeholder="Логин">
		<label>Пароль</label>
		<input type="password" name="pswd" placeholder="">
		<a href="reg.php">Вы еще не зарегистрированы?</a>
		<button type="submit">Войти</button>
	</form>
</section>