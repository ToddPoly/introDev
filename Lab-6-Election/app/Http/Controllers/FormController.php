<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function election() {
        return view('election');
    }
    public function processing() {
        return view('processing');
    }

    public function process() {
        $formData = request()->all();
        return view('processing', compact('formData'));
    }
}
