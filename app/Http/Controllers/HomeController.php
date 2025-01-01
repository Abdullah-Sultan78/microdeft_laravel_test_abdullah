<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Requisition;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index',['assets' => Asset::all()]);
    }

    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email'   => 'required',
            'asset_id' => 'required',
            'designation' => 'required'
        ]);
        Requisition::newRequisition($request);
        return back()->with('message','Requisition  created successfully.');
        //   return $request->all();

    }
}
