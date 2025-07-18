<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Inertia\Inertia;

class SiteController
{
    public function contato()
    {
        return Inertia::render('Contato');
    }
}