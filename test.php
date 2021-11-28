<?php

include("vendor/autoload.php");
use Database\MySQL;
use Database\Table;

$table = new Table(new MySQL());
$result = $table->getAllCategories();

var_dump($result);