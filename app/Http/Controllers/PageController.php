<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $team = [
            ["name" => "Tom", "role" => "Programmer"],
            ["name" => "Jane", "role" => "Manager"],
            ["name" => "John", "role" => "CEO"]
        ];

        return view('page.about', ['team' => $team]);
    }
}
