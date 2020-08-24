<!DOCTYPE html>
<html>
    <head>
        <title>Ошибка сайта - 404</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/public/css/materialize.min.css">
    </head>
    <body>

        <div class="container">
            <h1 class="red-text">Текст ошибки</h1>

            <?php echo '<blockquote class="card-panel hoverable">' . $error . '</blockquote>'; ?>

            <a href="/" class="waves-effect waves-light btn">Перейти на главную страницу</a>
        </div>

        <script type="text/javascript" src="/public/js/jquery.js"></script>
        <script type="text/javascript" src="/public/js/materialize.min.js"></script>
        <script type="text/javascript" src="/public/js/init.js"></script>
    </body>
</html>