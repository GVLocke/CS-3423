<?php

$userid = $_POST['uid'];
$password = $_POST['pwd'];

if ($userid == "jkq") {
    echo "Valid UserID";
}
else {
    echo "Invalid Credentials";
}

echo $userid;
echo $password;

?>