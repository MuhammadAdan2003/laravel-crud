<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{


    public function saveData(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        Information::create($request->all());



        return redirect('/')->with('success', 'Data saved successfully!');
        // $data = Information::all();
        // dd($data);
        // exit();
    }

    public function showData(Request $request)
    {
        $data = Information::all();
        return view('data', compact('data'));
    }

    public function deleteData($id)
    {
        $find = Information::find($id);
        $find->delete();
        return redirect('/records')->with("success", "Record has been deleted");
    }

    public function editData($id)
    {
        $editData = Information::find($id);
        // echo $editData;
        return view('edit', compact('editData'));
        // return redirect('edit');
    }

    public function updateData(Request $request)
    {
        $updation = Information::find($request['id']);
        $updation->update($request->all());

        // return redirect()->route('editEdit', $request['id']);

        return redirect('/records')->with('update', 'Record has been updated');
        // echo $updation;

    }
}
