<?php
namespace Kaa\Controller;

use Core\Controller;

class Index extends Controller\Template
{
    public function index()
    {
        $this->template = 'kaa/template';
        $this->template->content = 'ПРЕВЕД job002';
    }
}
