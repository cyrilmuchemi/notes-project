<?php


$config = require 'config.php';

$db = new Database($config);

$notes = $db->query('select * from notes where user_id = 2')->fetchAll();

require "views/notes.view.php";