<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class MigrationController extends Controller
{
    public function migrate()
    {
        $migrate=Services::migrations();
        $migrate->regress(0);
        $migrate->latest();
        echo "Migrationları çalıştır.";
    }
}
