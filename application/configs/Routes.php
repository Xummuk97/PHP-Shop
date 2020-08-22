<?php

namespace application\configs;

class Routes
{
    public static function getRoutes()
    {
        return [
            'index' => [
                'controller' => 'index',
                'action' => 'index'
            ],
        ];
    }
}