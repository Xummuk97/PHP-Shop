<form id="form-login" method="post">
    <p>Логин</p>
    <p><input name="login" type="text"></p>

    <p>Пароль</p>
    <p><input name="password" type="text"></p>

    <p><input type="submit" value="Вход"></p>
</form>

<script>
    Form_AJAX('/login', '#form-login');
</script>