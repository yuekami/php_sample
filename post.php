<?php
header('Content-Type: text/html; charset=UTF-8');
require "DbConnecter.php";

$dbConnecter = new DbConnecter;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!strlen($_POST['name']) == 0 && !strlen($_POST['text']) == 0) {
        $dbConnecter->Insert($_POST['name'], $_POST['text']);
    } else {
        header("Location: ./index.php");
    }
}
