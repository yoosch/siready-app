<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Irs;

class IrsController extends Controller
{
    public function all()
    {
        //get all semester and sum of sks group by semester
        $data = Irs::select('semester',DB::raw('sum(sks) as sks'))
                    ->groupBy('semester')
                    ->get();

                    
        return view('mhsIrs',compact('data'));
    }

    public function index(Request $request,$id)
    {
        $data = Irs::where('semester',$id)->get();

        if ($request->ajax()) {
            return response()->json($data);
        }
    }
}
