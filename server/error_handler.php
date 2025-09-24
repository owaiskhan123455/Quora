<?php
function getError($name)
{
    if (empty($_POST["$name"])) {
        $_SESSION["$name" . "-error"] = ucfirst($name) . " is required!";
    } elseif ($name == "email") {
        if (!filter_var($_POST["$name"], FILTER_VALIDATE_EMAIL)) {
            $_SESSION["$name" . "-error"] = "Your " . ucfirst($name) . " is not valid!";
        } else {
            unset($_SESSION["$name" . "-error"]);
            $_SESSION["$name"] = $_POST["$name"];
        }
    } elseif($name == "password"){
        if (strlen($_POST["$name"]) > 3) {
            unset($_SESSION["$name" . "-error"]);
            $_SESSION["$name"] = $_POST["$name"];
        } else {
            $_SESSION["$name" . "-error"] = "Your " . ucfirst($name) . " should atleast 4 characters long!";
        }
    } elseif($name == "confirm-password"){
        if (empty($_POST["password"])) {
            $_SESSION["$name" . "-error"] = "Please write your password first!";
        } else {
            unset($_SESSION["$name" . "-error"]);
            $_SESSION["$name"] = $_POST["$name"];
        }
    } else {
        unset($_SESSION["$name" . "-error"]);
        $_SESSION["$name"] = $_POST["$name"];
    }
}

function error($name){
    if(isset($_SESSION["$name-error"])){
        $error = $_SESSION["$name-error"];
        unset($_SESSION["$name-error"]);
        echo "<span class='error' id='$name-error'>$error</span>";
    }
}