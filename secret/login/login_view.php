<?php
function check_errors($errors) {
    if (isset($errors['empty_input'])) {
        echo "<p class='error'>{$errors['empty_input']}</p>";
        die();
    } elseif (isset($errors['wpwd'])) {
        echo "<p class='error'>{$errors['wpwd']}</p>";
    }
}