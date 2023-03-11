<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Requests\AddMemberRequest;

class MemberController extends Controller
{
    //

    public function index()
    {
        //

    }

    public function addData(AddMemberRequest $request)
    {
        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return Member::all();
    }

  
}

