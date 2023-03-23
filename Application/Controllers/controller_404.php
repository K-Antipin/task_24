<?php

use Core\controller;

class Controller_404 extends Controller
{
    function action_404()
    {
        $this->view->generate('404_view.php', 'template_view.php', 'footer_view.php');
    }
}
