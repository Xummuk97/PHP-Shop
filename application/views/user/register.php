<?php if (array_key_exists('register', $success)) : ?>
    <p>Вы успешно зарегистрировались!</p>
<?php endif; ?>

<form id="form-register" method="post">
    <p>Логин</p>
    <p><input name="login" type="text" value="<?php echo $login; ?>"></p>

    <?php if (array_key_exists('login', $errors)) : ?>
        <p>Заполните поле <strong>Логин!</strong></p>
    <?php endif; ?>

    <?php if (array_key_exists('has_user', $errors)) : ?>
        <p>Такой пользователь уже существует!</p>
    <?php endif; ?>

    <p>Пароль</p>
    <p><input name="password" type="text" value="<?php echo $password; ?>"></p>

    <?php if (array_key_exists('password', $errors)) : ?>
        <p>Заполните поле <strong>Пароль!</strong></p>
    <?php endif; ?>

    <p>Повторите пароль</p>
    <p><input name="repeat_password" type="text" value="<?php echo $repeat_password; ?>"></p>

    <?php if (array_key_exists('repeat_password', $errors)) : ?>
        <p>Заполните поле <strong>Повторите пароль!</strong></p>
    <?php endif; ?>

    <?php if (array_key_exists('no_same_passwords', $errors)) : ?>
        <p>Пароли не совпадают!</p>
    <?php endif; ?>

    <?php require 'application\views\captcha.php'; ?>

    <?php if (array_key_exists('captcha', $errors)) : ?>
        <p>Неверная капча!</p>
    <?php endif; ?>

    <p><input type="submit" value="Регистрация"></p>
</form>

<script>
    Form_AJAX('/register', '#form-register');
</script>