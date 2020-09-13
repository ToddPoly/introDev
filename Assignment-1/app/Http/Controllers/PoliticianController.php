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

    public function process() {
        $politicians = Politician::all();
        $parties = Party::all();
        $formData = request()->id;

        $polQuery = Politician::where('party_id', '=', 'formData')->orderBy('name')->get();

        return view('display', compact('formData', 'politicians', 'parties', 'polQuery'));
    }

    public function display() {
        return view('display');
    }
}
