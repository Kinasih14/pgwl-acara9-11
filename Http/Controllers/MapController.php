<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Petaku",
        ];

        //Check user sudah login atau belum
        if (auth()->check()) {
            return view('index', $data);
        } else {
            return view('index-public', $data);
        }

    }

    public function table()
    {
        $data = [
            "title" => "Table",
        ];

        return view('table', $data);
    }
}
