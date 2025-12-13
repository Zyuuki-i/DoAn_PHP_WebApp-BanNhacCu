<?php
namespace App\Controller;

use App\Model\NguoiDung;

class UserController
{
    public function index()
    {

    }


    private function view($view, $data = [])
    {
        extract($data);
        ob_start();
        include __DIR__ . '/../View/User/' . $view;
        return ob_get_clean();
    }

    private function render($template, $data = [])
    {
        extract($data);
        ob_start();
        include __DIR__ . '/../../templates/' . $template;
        return ob_get_clean();
    }
}
