<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home ()
    {
        return view ('welcome');
    }

    public function about ()
    {
        return view ('about');
    }

    public function contact ()
    {
        return view ('contact');
    }

    public function send (Request $request)
    {
        $title = $request->input("title");
        $message = $request->input("message");

        return view("page.dashboard", ['title' => $title, 'message' => $message]);
    }
}
