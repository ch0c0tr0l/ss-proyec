<?php

declare(strict_types=1);

require_once __DIR__ . '/../app/controllers/HomeController.php';

$controller = new HomeController();
$controller->index();
