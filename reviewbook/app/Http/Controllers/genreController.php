<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class genreController extends Controller
{
    public function index()
    {
        $genres = DB::table('genres')->get();
 
        return view('genre.index', ['genres' => $genres]);
    }

    public function show($id)
    {
        $genres = DB::table('genres')->find($id);

        return view('genre.detail', ['genres' => $genres]);
    }

    public function create()
    {
        return view('genre.create');
    }

    public function store(Request $request)
    {
        //Validation
        $validatedData = $request->validate([
            'name' => ['required', 'min:5'],
            'description' => ['required'],
        ]);

        //Insert Data
        DB::table('genres')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return redirect ('/genre');
    }

    public function edit($id)
    {
        $genres = DB::table('genres')->find($id);

        return view('genre.edit', ['genres' => $genres]);
    }

    public function update($id, Request $request)
    {
        //Validation
        $validatedData = $request->validate([
            'name' => ['required', 'min:5'],
            'description' => ['required'],
        ]);

        DB::table('genres')
        ->updateOrInsert(
            ['name' => $request->input('name')],
            ['description' => $request->input('description')]);
        
            return redirect ('/genre');
    }

    public function destroy($id)
    {
        $deleted = DB::table('genres')->where('id', '$id', 100)->delete();

        return redirect ('/genre');
    }
}