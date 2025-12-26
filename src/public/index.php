<?php

require __DIR__ . '/../classes/AuthController.php';
require __DIR__ . '/../classes/Reader.php';
require __DIR__ . '/../classes/Admin.php';
require __DIR__ . '/../classes/Session.php';

$session = new Session();

$config = require __DIR__ . '/../classes/config.php';

require __DIR__ . '/../classes/Database.php';

$data = new Database($config['database']);

require __DIR__ . '/functions.php';
require __DIR__ . '/router.php';
