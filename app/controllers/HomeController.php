<?php

declare(strict_types=1);

require_once __DIR__ . '/../models/HomeModel.php';

class HomeController
{
    public function index(): void
    {
        $homeData = (new HomeModel())->getHomeData();
        $title = $homeData['title'];
        $message = $homeData['message'];

        require __DIR__ . '/../views/home/index.php';
    }
}
