<?php

use Core\controller;

class Controller_Main extends Controller
{
    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php', 'footer_view.php');
    }
}
