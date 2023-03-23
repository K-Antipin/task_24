<?php

use Core\controller;

class Controller_Portfolio extends Controller
{
    function action_portfolio()
    {
        $this->view->generate('portfolio_view.php', 'template_view.php', 'footer_view.php', Model_Portfolio::get_data());
    }
}
