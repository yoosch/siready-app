<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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
=======

use App\Models\Irs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IrsController extends Controller
{

    public function all()    {
    
        $data = Irs::select('semester',DB::raw('sum(sks) as sks'))->groupBy('semester')->get();
        return view('irs',compact('data'));
    }
    
>>>>>>> nippot2

    public function index(Request $request,$id)
    {
        $data = Irs::where('semester',$id)->get();

        if ($request->ajax()) {
            return response()->json($data);
        }
    }
}
