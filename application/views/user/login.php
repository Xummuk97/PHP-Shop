<form id="form-login" method="post">
    <p>Логин</p>
    <p><input name="login" type="text" value="<?php echo $login; ?>"></p>

    <?php if (array_key_exists('login', $errors)) : ?>
        <p>Заполните поле <strong>Логин!</strong></p>
    <?php endif; ?>

    <p>Пароль</p>
    <p><input name="password" type="text" value="<?php echo $password; ?>"></p>

    <?php if (array_key_exists('password', $errors)) : ?>
        <p>Заполните поле <strong>Пароль!</strong></p>
    <?php endif; ?>

    <?php if (array_key_exists('incorrect_data', $errors)) : ?>
        <p>Вы ввели неверные данные!</p>
    <?php endif; ?>

    <?php require 'application\views\captcha.php'; ?>

    <?php if (array_key_exists('captcha', $errors)) : ?>
        <p>Неверная капча!</p>
    <?php endif; ?>

    <p><input type="submit" value="Вход"></p>
</form>

<script>
    Form_AJAX('/login', '#form-login');
</script>