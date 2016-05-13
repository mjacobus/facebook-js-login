<?php

require_once "setup.php";

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
}

if (count($_POST) && isset($_POST['data'])) {
    $data = $_POST['data'];
    $_SESSION['data'] = $data;
}
