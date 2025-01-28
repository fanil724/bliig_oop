<?php
session_start();
$user = false;


if (isset($_GET['login'])) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    if ($login == 'admin' && $pass == 'admin') {
        $_SESSION['login'] = 'admin';
    }
}

?>
<?php if ($user): ?>
    Привет <?= $user ?>,<a href="/?logout">Выход</a>
<?php else: ?>
    <form action="">
        <input type="text" name="login">
        <input type="password" name="pass">
        <input type="submit" name="Войти">
    </form>
<?php endif ?>