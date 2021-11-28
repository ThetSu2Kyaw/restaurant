<?php

include("vendor/autoload.php");
use Database\MySQL;
use Database\Table;

$id = $_GET['id'];

header("location: view_cart.php");