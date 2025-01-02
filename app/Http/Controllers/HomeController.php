<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Requisition;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index',[
            'assets' => Asset::all(),
            'requisitions' => Requisition::paginate(3)
    ]);
    }

    public function details($id){
        return view('details',[
            // 'assets' => Asset::find($id),
            'requisitions' =>Requisition::where('asset_id',$id)->orderBy('id','desc')->get()

    ]);

    }

    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:requisitions,phone',
            'email'   => 'required|unique:requisitions,email',
            'asset_id' => 'required',
            'designation' => 'required'
        ]);
        Requisition::newRequisition($request);
        return back()->with('message','Requisition  created successfully.');
        //   return $request->all();

    }
}
