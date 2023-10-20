<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function displayPDF()
    {
        return view('menu_pdf', ['test' => 'This is a test']);
    }
}
