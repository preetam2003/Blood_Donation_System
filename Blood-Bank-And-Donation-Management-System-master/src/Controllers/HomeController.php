<?php

namespace src\Controllers;

class HomeController
{
    public function index()
    {
        $title = "Home - Blood Bank";
        ob_start();
        require __DIR__ . '/../../views/home.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../views/layout.php';
    }

    public function about()
    {
        $title = "About Us - Blood Bank";
        ob_start();
        require __DIR__ . '/../../views/about.php'; // Will create placeholder or real view
        $content = ob_get_clean();
        require __DIR__ . '/../../views/layout.php';
    }

    public function whyDonate()
    {
        $title = "Why Donate - Blood Bank";
        ob_start();
        require __DIR__ . '/../../views/why_donate.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../views/layout.php';
    }
}
