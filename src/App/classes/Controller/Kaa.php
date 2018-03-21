<?php
namespace App\Controller;

use Core\Controller;

class Kaa extends Controller\Controller
{
    public function index()
    {
        echo _view(
            'kaa/huyilighopa',
            ['h1' => 'Уважаимый!!!'],
        );
        // ->set('h1', 'Уважаимый!!!');

    }

    public function hello()
    {
        echo 'ПРЕВЕД, MEDVED! job1';
    }

    public function zay()
    {
        echo 'ZAY is World thr best of the best!!! job1';
    }
}
