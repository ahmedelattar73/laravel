<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function form()
    {
        return view('layout.form');
    }


    public function view()
    {

        $data = request()->all();

        return view('layout.view', ['data' => $data]);
    }


}
