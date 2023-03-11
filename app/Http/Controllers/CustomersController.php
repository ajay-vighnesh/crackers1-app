<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Http\Requests\AddCustomersRequest;
use Inertia\Inertia;

class CustomersController extends Controller
{
    //
    public function index()
    {
        //
        return Inertia::render('ViewCustomers', [
            'customers' => Customers::latest()->get(),
        ]);
    }
    
    public function create()
    {
        //
        return Inertia::render('ViewCustomers', [
            'customers' => Customers::latest()->get(),
        ]);
    }
    
    public function addCustomers(AddCustomersRequest $request)
    {
        Customers::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'mobile_Number' => $request->mobile_Number,
            'whatsapp_Number' => $request->whatsapp_Number,
        ]);

        return Customers::all();
    }
}