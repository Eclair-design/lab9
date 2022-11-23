<?php
    if (!isset($_SERVER['PHP_AUTH_USER']))  {
        header('WWW-Authenticate: Basic realm="http://my.server.ru"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Пользователь нажал кнопку Cancel';
        exit();
    }
    else  {
        echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
        echo "<p>Вы ввели пароль {$_SERVER['PHP_AUTH_PW']}.</p>";
        file_put_contents("data/paswd.inc", "{$_SERVER['PHP_AUTH_USER']} {$_SERVER['PHP_AUTH_PW']} \n");
    }
?>