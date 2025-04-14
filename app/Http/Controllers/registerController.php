<?php

namespace App\Http\Controllers;

use App\Models\userData;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function postData(Request $data)
    {
        userData::create($data->all());
        // dd($data);

        // echo "adan";
        return redirect('/register')->with('success', 'Account created successfully');
    }
}
