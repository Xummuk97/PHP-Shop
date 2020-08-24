<?php

namespace application\models;

use application\core\Model;

class User extends Model
{

    /**
     * Возвращает true - если пользователь в базе данных найден, иначе false.
     * 
     * @param string $login
     * @return bool
     */
    public function hasUser($login)
    {
        $params = [
            'login' => $login,
        ];

        $result = $this->db->column('SELECT login FROM users WHERE login = :login',
                                    $params);

        return $result;
    }

    public function getUser($login)
    {
        $params = [
            'login' => $login,
        ];

        $result = $this->db->row('SELECT * FROM users WHERE login = :login',
                                 $params);

        return $result[0];
    }

    public function insertUser($login, $hash_password)
    {
        $params = [
            'login'         => $login,
            'hash_password' => $hash_password,
        ];

        $this->db->query('INSERT INTO users (login, hash_password) VALUES(:login, :hash_password)',
                         $params);
    }

}
