<?php
namespace Kaa\Controller;

use Core\Controller;

class Index extends Controller\Template {

    public $template = 'kaa/template';

    public function index()
    {
        $this->template->navbar = $this->_view('kaa/navbar')
            ->set('class', 'index');
        $this->template->content = 'kaa/content';
    }

    public function about()
    {
        $this->template->navbar = $this->_view('kaa/navbar')
            ->set('class', 'about');
        $this->template->content = 'kaa/content';
    }
}
