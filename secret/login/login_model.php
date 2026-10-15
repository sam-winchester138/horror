<?php
function check_account($conn, $username, $password) {
    $stmt = $conn->prepare("SELECT Password FROM users WHERE Username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 0) {
        return false;
    }
    $row = $result->fetch_assoc();
    return password_verify($password, $row['Password']);
}
?>