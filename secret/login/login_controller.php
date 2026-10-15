<?php
function is_input_empty($username, $password): bool {
    return empty($username) || empty($password);
}
function check_acc($conn, $username, $password): bool {
    return check_account($conn, $username, $password);
}
?>