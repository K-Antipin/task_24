<?php

namespace Core;

class View
{
    function generate($content_view, $template_view, $footer_view, $data = null)
    {
        // \var_dump(\get_defined_vars());
        include 'application/views/' . $template_view;
        include 'application/views/' . $content_view;
        include 'application/views/' . $footer_view;
    }
}
