<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function index() {

        $trains = Train::all();

        return view('list_train', compact('trains'));
    }
}