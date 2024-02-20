<?php

$userid = $_POST['userid'];
$password = $_POST['password'];

if ($userid == "jkq") {
    echo "Valid UserID";
}
else {
    echo "Invalid Credentials";
}

echo $userid;
echo $password;

?>