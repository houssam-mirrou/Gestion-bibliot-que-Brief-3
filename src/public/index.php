<?php

$config = require __DIR__ . '/../classes/config.php';

require __DIR__ . '/../classes/Database.php';

$data = new Database($config['database']);

require __DIR__ . '/functions.php';
require __DIR__ . '/router.php';
