<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function orderPizza() {
        return view('orderPizza');
    }

    public function orderDetails() {
        return view('orderDetails');
    }

    public function pizzaDetails() {
        $formData = request()->all();
        $cost = 0;

        return view('orderDetails', compact('formData', 'cost'));
    }

    // public function confirmOrCancel() {

    // }

}
