<?php

namespace src\Controllers;

use src\Models\Donor;

class BloodController
{

    public function index()
    {
        $title = "Need Blood - Blood Bank";

        $donorModel = new Donor();
        $blood_groups = $donorModel->getAllBloodGroups();
        $donors = [];
        $searchBox = false;

        if (isset($_GET['search']) && !empty($_GET['blood'])) {
            $searchBox = true;
            $donors = $donorModel->search($_GET['blood']);
        }

        ob_start();
        require __DIR__ . '/../../views/need_blood.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../views/layout.php';
    }
}
