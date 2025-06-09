<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

require_once "../includes/db.php";
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $conn->query("DELETE FROM rendezvous WHERE id = $id");
}
header("Location: dashboard.php");
exit;
