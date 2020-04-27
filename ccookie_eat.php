<?php
include "cookie_bake.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeremy's ccookie eat</title>
</head>
<body>
<?php
    // if (isset($_COOKIE[$username])) {
        echo "Username: " . $_COOKIE["username"] . "<br>";
        echo "Firstname: " . $_COOKIE["firstname"] . "<br>";
        echo "Lastname: " . $_COOKIE["lastname"] . "<br>";
    // }

    if (isset($_COOKIE["cookie"])){
        foreach ($_COOKIE["cookie"] as $key=>$val){
            echo $key.' is '.$val."<br>\n";
        }
}

?>

</body>
</html>
