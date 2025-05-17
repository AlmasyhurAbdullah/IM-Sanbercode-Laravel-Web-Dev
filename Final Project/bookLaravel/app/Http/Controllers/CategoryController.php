<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create() 
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|min:5',
            'description' => 'required',
        ]);

        DB::table('category')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect('/category');
    }

    public function index()
    {
        $category = DB::table('category')->get();

        //dd($category);
 
        return view('category.show', ['category' => $category]);
    }

    public function show($id)
    {
        $category = DB::table('category')->find($id);

        return view('category.detail', ['category' => $category]);
    }

    public function edit($id)
    {
        $category = DB::table('category')->find($id);

        return view('category.edit', ['category' => $category]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'bail|required|min:5',
            'description' => 'required',
        ]); 

        DB::table('category')
            ->where('id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                    'updated_at' => Carbon::now(),
                ]
            );
        
        return redirect('/category');
    }

    public function destroy($id)
    {
        DB::table('category')->where('id', $id)->delete();

        return redirect('/category');
    }
}
