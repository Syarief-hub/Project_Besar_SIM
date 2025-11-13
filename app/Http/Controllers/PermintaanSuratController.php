<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermintaanSuratController extends Controller
{
    public function index()
    {
        return view('permintaan');
    }
}