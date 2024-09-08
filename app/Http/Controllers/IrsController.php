<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Irs;

class IrsController extends Controller
{
    public function all()
    {
        //get all semester from irs table unique
        $data = Irs::select('semester')->distinct()->get();
        return view('irs',compact('data'));
    }

    public function index(Request $request,$id)
    {
        $data = Irs::where('semester',$id)->get();

        if ($request->ajax()) {
            return response()->json($data);
        }
    }
}
