<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Пятнашки</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
<?php
	if ( $_COOKIE['user'] ==''):
?>

<form method="POST" action="/login2.php">
	Авторизация
	<br>
	<input type="text" placeholder="Логин" size="40" name="login" class="form-control" id="login">
	<input type="text" placeholder="Пароль"size="40" name="pass" class="form-control" id="password">
	<hr>
	<input type="submit" value="Отправить">
</form>
<form method="POST" action="/login1.php">
	Регистрация
	<br>
	<input type="text" placeholder="Логин" size="40" name="login" class="form-control" id="login">
	<input type="text" placeholder="Пароль"size="40" name="pass" class="form-control" id="password">
	<hr>
	<input type="submit" value="Отправить">
</form>
</div>

<?php else: ?>
	<a href="/exit.php">Выйти</a>
<?php endif; ?>
<br>
<?php
	if ( $_COOKIE['user'] !=''):
?>

        <section class="game-box">
            <form>
                <input type="button" class="button" value="1" id="btn0" onclick="move(0); check(); score();" >
                <input type="button" class="button" value="2" id="btn1" onclick="move(1); check(); score(); " >
                <input type="button" class="button" value="3" id="btn2" onclick="move(2); check(); score(); " >
                <input type="button" class="button" value="4" id="btn3" onclick="move(3); check(); score(); " >
                <input type="button" class="button" value="5" id="btn4" onclick="move(4); check(); score(); " >
                <input type="button" class="button" value="6" id="btn5" onclick="move(5); check(); score(); " >
                <input type="button" class="button" value="7" id="btn6" onclick="move(6); check(); score(); " >
                <input type="button" class="button" value="8" id="btn7" onclick="move(7); check(); score(); " >
                <input type="button" class="button" value="9" id="btn8" onclick="move(8); check(); score(); " >
                <input type="button" class="button" value="10" id="btn9" onclick="move(9); check(); score(); " >
                <input type="button" class="button" value="11" id="btn10" onclick="move(10); check(); score(); " >
                <input type="button" class="button" value="12" id="btn11" onclick="move(11); check(); score(); " >
                <input type="button" class="button" value="13" id="btn12" onclick="move(12); check(); score(); " >
                <input type="button" class="button" value="14" id="btn13" onclick="move(13); check(); score(); " >
                <input type="button" class="button" value="15" id="btn14" onclick="move(14); check(); score(); " >
                <input type="button" class="button" value=" " id="btn15" onclick="move(15); check(); score(); ">
                <p></p>
                 <p><input type="button" class="button" value="Новая игра" id="btn01" onclick="newgame()"></p>
				 
            
        </section> 
<?php endif; ?>
</body>
<script src="scriptgame.js"></script>
</html>