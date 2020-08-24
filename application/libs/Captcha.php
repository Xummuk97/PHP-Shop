<?php

namespace application\libs;

class Captcha
{

    private $data = [];

    private const QUESTIONS = [
        [
            'question' => '4 + 2',
            'answer'   => 6
        ],
        [
            'question' => '10 - 6',
            'answer'   => 4
        ],
        [
            'question' => 'Столица России',
            'answer'   => 'Москва'
        ],
    ];

    public function __construct()
    {
        $id               = random_int(0, count(self::QUESTIONS) - 1);
        $this->data       = self::QUESTIONS[$id];
        $this->data['id'] = $id;
    }

    public function getData()
    {
        return $this->data;
    }

    public static function check()
    {
        return self::QUESTIONS[trim(htmlspecialchars($_POST['captcha_id']))]['answer'] == trim(htmlspecialchars($_POST['answer']));
    }
    
}
