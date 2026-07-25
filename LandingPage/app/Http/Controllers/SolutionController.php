<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class SolutionController extends Controller
{
    public function manufacturing(): View
    {
        return view('pages.solutions.sme-manufacturing', [
            'pageTitle' => 'Manufacturing Operating Framework for SME & FDI Factories | Hoàng Khang Incotech',
            'pageDescription' => 'A structured, modular manufacturing operating framework for SME and FDI factories: production, warehouse, quality, and executive visibility with scalable implementation.'
        ]);
    }
}
