<?php

require 'functions.php';
require 'router.php';
require 'Database.php';

$config = require 'config.php';

//connect to mysql

$db = new Database($config);
$notes = $db->query("select * from notes");