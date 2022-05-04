<?php

function userSession($user) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['username'] = $user['username'];

    return true;
}

// logout function
function logout_admin() {
    unset($_SESSION['user_id']);
    unset($_SESSION['email']);
    unset($_SESSION['username']);
    
    return true;
}
?>