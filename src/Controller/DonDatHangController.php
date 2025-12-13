<?php
namespace App\Controller;

use App\Model\Product;
use App\Model\Hinh;
use App\Model\DonDatHang;
use App\Model\NguoiDung;

class DonDatHangController
{
    public function index()
    {
        // $pdo = require __DIR__ . '/../../config/config.php';
        // $products = Product::getAll($pdo);
        // $hinhList = Hinh::getAll($pdo);

        // if($products != null) {
        //     $products = array_slice($products, 0, 6);
        // }

        // $content = $this->view('index.php', ['products' => $products, 'hinhList' => $hinhList]);

        // return $this->render('main_layout.php', ['content' => $content]);
    }

    private function view($view, $data = [])
    {
        extract($data);
        ob_start();
        include __DIR__ . '/../View/DonDatHang/' . $view;
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
