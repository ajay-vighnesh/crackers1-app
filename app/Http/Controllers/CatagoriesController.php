<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagories;
use App\Http\Requests\AddCatagoriesRequest;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class CatagoriesController extends Controller
{
    public function index()
    {
        //
        return Inertia::render('ViewCatagories', [
            'catagories' => Catagories::latest()->get(),
        ]);
       
    }
    
    public function create()
    {
        //
        return Inertia::render('ViewCatagories', [
            'catagories' => Catagories::latest()->get(),
        ]);
       
    }
    
    public function addCatagories(AddCatagoriesRequest $request)
    {
        Catagories::create([
            'name' => $request->name
        ]);

        return Catagories::all();
        // return redirect('/admin/catagories/viewall')->with('message','Catagories Added');
    }
}
