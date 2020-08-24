<?php if (array_key_exists('user', $_SESSION) && $_SESSION['user'] != null) : ?>
    <p>Здравствуйте! Вы вошли в аккаунт</p>
    <a href="/logout">Выйти</a>
<?php else : ?>
    <a href="/login">Вход</a>
    <a href="/register">Регистрация</a>
<?php endif; ?>