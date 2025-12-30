<?php
declare(strict_types=1);

namespace App\Controller;

use SimpleVC\Controller\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->set([
            'title' => 'Simple View Controller',
            'text' => 'Welcome to Simple View Controller!',
        ]);
    }
}
