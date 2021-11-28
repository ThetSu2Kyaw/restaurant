<?php
session_start();
include("vendor/autoload.php");
use Database\MySQL;
use Database\Table;

$id = $_GET['id'];
$table = new Table(new MySQL());
$statement = $table->getAllMenus($id);
$_SESSION['menu'] = $statement;

header("location: menu.php");