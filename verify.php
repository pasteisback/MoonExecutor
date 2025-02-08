<?php
$valid_keys = file("keys.txt", FILE_IGNORE_NEW_LINES); // Load keys from a private file

if (isset($_GET['key'])) {
    $user_key = $_GET['key'];
    if (in_array($user_key, $valid_keys)) {
        echo "VALID";
    } else {
        echo "INVALID";
    }
} else {
    echo "NO_KEY_PROVIDED";
}
?>
