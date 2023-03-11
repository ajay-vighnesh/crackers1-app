<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addres;
use App\Http\Requests\AddAddressRequest;
use Inertia\Inertia;

class AddresController extends Controller
{
    //
    public function index()
    {
        //
        return Inertia::render('ViewAddress', [
            'address' => Addres::latest()->get(),
        ]);

    }
    
    public function create()
    {
        //
        return Inertia::render('ViewAddress', [
            'address' => Addres::latest()->get(),
        ]);

    }
    
    public function addAddress(AddAddressRequest $request)
    {
        Addres::create([
            'name' => $request->name,
            'Address1' => $request->Address1,
            'Address2' => $request->Address2,

        ]);

        return Addres::all();
    }
}

