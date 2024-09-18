<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{

    $pgi = 10;
    $data = products::paginate($pgi);
    // $category = products::select('brand')->distinct()->get();
    // // $categoryid = $category->brand;
    // $countcategoryid = $category->pluck('brand')->count();
    // $countcategory = [
    //     'countcategoryid'=>$countcategoryid,
    //     'categoryid'=>$categoryid
    // ];


    return view('dashboard')->with('data',$data);
}


    

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'product_name'=> request('product_name'),
            'brand'=> request('brand'),
            'price'=> request('price'),
            'category'=> request('category'),
            'description'=> request('description')
        ];

        products::create($data);

        return redirect()->to('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $products)
    {
        //
        $data = products::find($products->id);
        return view('edit')->with('data',$data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'product_name'=> request('product_name'),
            'brand'=> request('brand'),
            'price'=> request('price'),
            'category'=> request('category'),
            'description'=> request('description')
        ];

        products::where('id',$id)->update($data);
        return redirect()->to('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        products::where('id',$id)->delete();
        return redirect()->to('dashboard');
    }
}
