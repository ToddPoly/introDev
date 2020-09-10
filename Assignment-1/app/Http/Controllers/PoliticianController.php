<?php

namespace App\Http\Controllers;
use App\Politician;
use App\Party;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoliticianController extends Controller
{
    public function index()
    {
        $politicians = Politician::all();
        $parties = Party::all();

        return view('index', compact('politicians', 'parties'));
    }
}
