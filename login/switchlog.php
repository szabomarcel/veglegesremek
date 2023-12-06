<?php
if ($regisztracio==="register") {
    require_once './login/regisztracio.php';
} else {
    require_once './login/login.php';
}