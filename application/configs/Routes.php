<?php

namespace application\configs;

class Routes
{

    public static function getRoutes()
    {
        return [
            ''              => [
                'controller' => 'index',
                'action'     => 'index'
            ],
            
            'login'    => [
                'controller' => 'user',
                'action'     => 'login'
            ],
            
            'register' => [
                'controller' => 'user',
                'action'     => 'register'
            ],
            
            'logout' => [
                'controller' => 'user',
                'action'     => 'logout'
            ],
        ];
    }

}
