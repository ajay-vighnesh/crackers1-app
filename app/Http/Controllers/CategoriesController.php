<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Requests\AddCategoriesRequest;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class CategoriesController extends Controller
{
    public function index()
    {
        //
        return Inertia::render('ViewCategories', [
            'categories' => Categories::latest()->get(),
        ]);
       
    }
    
    public function create()
    {
        //
        return Inertia::render('ViewCategories', [
            'categories' => Categories::latest()->get(),
        ]);

       
    }
    
    public function addCategories(AddCategoriesRequest $request)
    {
        Categories::create([
            'name' => $request->name
        ]);

        return Categories::all();
        // return redirect('/admin/categories/viewall')->with('message','Categories Added');
    }
}
