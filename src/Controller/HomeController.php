<?php
declare(strict_types=1);

namespace App\Controller;

use SimpleVC\Controller\Controller;

/**
 * Home controller.
 */
class HomeController extends Controller
{
    /**
     * @return void
     */
    public function index(): void
    {
        $this->set([
            'title' => 'Simple View Controller',
            'text' => 'Welcome to Simple View Controller!',
        ]);
    }
}
