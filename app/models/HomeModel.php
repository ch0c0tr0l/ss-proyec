<?php

declare(strict_types=1);

class HomeModel
{
    public function getHomeData(): array
    {
        return [
            'title' => 'Inicio',
            'message' => 'La estructura MVC está funcionando.',
        ];
    }
}
