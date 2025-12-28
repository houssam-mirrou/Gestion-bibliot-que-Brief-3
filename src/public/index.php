<?php

require __DIR__ . '/../controllers/AuthController.php';
require __DIR__ . '/../Models/Reader.php';
require __DIR__ . '/../Models/Admin.php';
require __DIR__ . '/../Models/Session.php';
require __DIR__ . '/../Models/Book.php';
require __DIR__ . '/../Models/Borrow.php';
require __DIR__ . '/../Utility/Database.php';
require __DIR__ . '/../Utility/Helpers.php';

$session = new Session();

$config = require __DIR__ . '/../Utility/config.php';


$data = new Database($config['database']);

require __DIR__ . '/functions.php';
require __DIR__ . '/router.php';
