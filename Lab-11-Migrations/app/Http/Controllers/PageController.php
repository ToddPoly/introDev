<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index() {
        $people = Contact::all();
        return view('index', compact('people'));
        // return $people;
    }
}
