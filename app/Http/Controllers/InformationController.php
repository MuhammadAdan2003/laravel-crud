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
        return view('edit', compact('editData'));
    }

    public function updateData(Request $request)
    {
        $updation = Information::find($request['id']);
        $updation->update($request->all());
        return redirect('/records')->with('update', 'Record has been updated');
    }
}
