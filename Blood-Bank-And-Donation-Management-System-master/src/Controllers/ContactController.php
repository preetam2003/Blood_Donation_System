<?php

namespace src\Controllers;

use Database;

class ContactController
{

    public function index()
    {
        $title = "Contact Us - Blood Bank";
        ob_start();
        require __DIR__ . '/../../views/contact.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../views/layout.php';
    }

    public function store()
    {
        // Handle form submission logic here (to be implemented later if needed)
        // For now, it's just a view
    }
}
