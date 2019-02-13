<form action="/esp_message_from_server.php" method="post">

    <button type="submit">ON</button><br>
    <button type="submit" formaction="/esp_message_from_server.php">Submit to another page</button>
</form>

<?php
var_dump($_REQUEST);
?>

<?php

header('Location: http://www.example.com/');
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 30.12.2018
 * Time: 18:31
 */