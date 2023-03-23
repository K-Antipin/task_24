<?php

use Core\controller;

class Controller_Contacts extends Controller
{
    function action_contacts()
    {
        $this->view->generate('contacts_view.php', 'template_view.php', 'footer_view.php');
    }
}
