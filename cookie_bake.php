
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeremy's cookie bake</title>
</head>
<body>
<?php
    $username = 'BettyW';
    $firstname = 'Betty';
    $lastname = 'White';

    setcookie("username", $username, time() + 7200);

    setcookie("firstname", $firstname, time() + 7200);

    setcookie("lastname", $lastname, time() + 7200);

    setcookie("cookie[institution]","Clark", time() + 7200);

    setcookie("cookie[city]","Vancouver", time() + 7200);

    setcookie("cookie[state]","WA", time() + 7200);

?>
</body>
</html>
