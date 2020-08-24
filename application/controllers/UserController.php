<?php

namespace application\controllers;

use application\core\Controller;

class UserController extends Controller
{

    public function loginAction()
    {
        $errors = [];

        $login    = $password = '';

        if (!empty($_POST)) {
            $login    = trim(htmlspecialchars($_POST['login']));
            $password = trim(htmlspecialchars($_POST['password']));

            if (empty($login)) {
                $errors['login'] = 1;
            }

            if (empty($password)) {
                $errors['password'] = 1;
            }

            if (count($errors) == 0) {
                if (!$this->model->hasUser($login)) {
                    $errors['incorrect_data'] = 1;
                }

                if (count($errors) == 0) {

                    $user = $this->model->getUser($login);
                    
                    if (password_verify($password, $user['hash_password'])) {
                        $_SESSION['user'] = $user;
                        $this->view->redirect('/');
                    } else {
                        $errors['incorrect_data'] = 1;
                    }
                }
            }
        }

        $vars = [
            'errors'   => $errors,
            'login'    => $login,
            'password' => $password,
        ];

        $this->view->render('Вход', $vars);
    }

    public function registerAction()
    {
        $errors  = [];
        $success = [];

        $login           = $password        = $repeat_password = '';

        if (!empty($_POST)) {
            $login           = trim(htmlspecialchars($_POST['login']));
            $password        = trim(htmlspecialchars($_POST['password']));
            $repeat_password = trim(htmlspecialchars($_POST['repeat_password']));

            if (empty($login)) {
                $errors['login'] = 1;
            }

            if (empty($password)) {
                $errors['password'] = 1;
            }

            if (empty($repeat_password)) {
                $errors['repeat_password'] = 1;
            }

            if (count($errors) == 0) {
                if ($password != $repeat_password) {
                    $errors['no_same_passwords'] = 1;
                }

                if ($this->model->hasUser($login)) {
                    $errors['has_user'] = 1;
                }

                if (count($errors) == 0) {
                    $hash_password = password_hash($password, PASSWORD_DEFAULT);

                    $this->model->insertUser($login, $hash_password);

                    $success['register'] = 1;
                }
            }
        }

        $vars = [
            'errors'          => $errors,
            'success'         => $success,
            'login'           => $login,
            'password'        => $password,
            'repeat_password' => $repeat_password,
        ];

        $this->view->render('Регистрация', $vars);
    }

    public function logoutAction() {
        $_SESSION['user'] = null;
        $this->view->redirect('/');
    }
    
}
