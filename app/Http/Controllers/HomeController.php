<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        Asset::newAsset($request);
        return back()->with('meassage','Product  created successfully.');
        //   return $request->all();

    }
}
