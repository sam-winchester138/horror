<?php
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 3600,
    'path'     => '/',
    'secure'   => false,
    'httponly' => true,
    'samesite' => 'Lax',
]);

session_start();

function regenerate_session_id(): void {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}

$interval = 60 * 60;

if (!isset($_SESSION['last_regeneration'])
    || time() - $_SESSION['last_regeneration'] >= $interval) {
    regenerate_session_id();
}