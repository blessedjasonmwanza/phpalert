<?php
include 'phpalert.php';

$alert = new PHPAlert();
/**
 * Available methods
 * $alert->error("");
 * $alert->warn("");
 * $alert->danger("");
 * $alert->question("");
 */
$alert->success("It works right");
?>