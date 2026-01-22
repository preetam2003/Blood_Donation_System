<?php

namespace src\Controllers;

use src\Models\Donor;

class DonorController
{

    public function create()
    {
        $title = "Become a Donor - Blood Bank";

        $donorModel = new Donor();
        $blood_groups = $donorModel->getAllBloodGroups();

        ob_start();
        require __DIR__ . '/../../views/donate.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../views/layout.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $donorModel = new Donor();

            // Basic validation and sanitization should be here

            $donorModel->save($_POST);

            // Redirect with success message
            echo "<script>alert('Donor Registered Successfully!'); window.location.href='/donate';</script>";
        }
    }
}
