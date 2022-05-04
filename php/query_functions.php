<?php

// administrative functions

// insert admin info into db ie: phpmyadmin
function insert_admin($admin) {
    global $db;

    $errors = validate_admin($admin);

    $sql = "INSERT INTO admins ";
    $sql .= "(username, email, password) ";
    $sql .= "VALUES (". "'". $admin['name']."',";
    $sql .= "'". $admin['email']."',";
    $sql .= "'". $admin['password']."')";
    $result = mysqli_query($db, $sql);
};

// validate new admin info 
function validate_admin($admin, $options = []) {
    if($admin['name'] === "") {
        $errors[] = "Name cannot be blank.";
    }

    if($admin['email'] === "") {
        $errors[] = "Email cannot be blank.";
    }

    if($admin['password'] === "") {
        $errors[] = "Password cannot be blank.";
    }

    if($admin['confirm_password'] === "") {
        $errors[] = "Confirm password cannot be blank.";
    }
};


function find_by_email($email) {
    global $db;

    $sql = "SELECT * FROM admins ";
    $sql .= "WHERE email='".$email."'";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    $admin = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}

?>