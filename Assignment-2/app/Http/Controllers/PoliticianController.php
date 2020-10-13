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

        return view('display', compact('politicians', 'parties'));
    }

    public function process() {
        $parties = Party::all();
        $formData = request()->all();

        if ($formData['partyDrop'] == 0 ) {
            $politicians = Politician::orderBy('party_id')->get();
        }
        else {
            $party = Party::where('id', $formData['partyDrop'])->first();
            $parties_id = $party->id;
            $politicians = Politician::where('party_id', $parties_id)->orderBy('name')->get();
        }
        return view('display', compact('politicians', 'parties'));
    }

    public function display() {
        return view('display');
    }
}
