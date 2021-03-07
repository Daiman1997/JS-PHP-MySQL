<?php
include('includes/db.php');

echo date('d.m.Y H:i:s');
?>

<form method="POST" action="/handle.php">
	<input type="text" placeholder="Ваш логин" name="login">
	<input type="text" placeholder="Ваш пароль" name="password">
	<hr>
	<input type="submit" value="Отправить">
</form>