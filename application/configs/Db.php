<?php

namespace application\configs;

class Db
{

    public static function getSettings()
    {
        return [
            'host'   => 'localhost',
            'dbname' => 'shop_db',
            'user'   => 'root',
            'pass'   => ''
        ];
    }

}
