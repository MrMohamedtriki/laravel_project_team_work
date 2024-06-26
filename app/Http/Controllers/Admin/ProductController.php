<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\cr;
use App\Models\ProductModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
      public function index2()
    {
        $user = Auth::guard('admin')->user();
        return view('admin.dashboard', compact('user'));
    }
    /**
     * Display a listing of the resource.
     */
    public function indexUser()
{
    $data = ProductModel::all();
    return view('web.dashboard', compact('data'));
}
    public function index()
    {
        
        //$data=ProductModel::all();
        //return view('admin.indexAdmin',['data'=>$data]);
        return view('admin.indexAdmin');

        
        //$products = ProductModel::all();
        //return view('admin.produit', ['products' => $products]);
    }
    public function showProducts() {
        $products = ProductModel::all();
        return view('admin.produit', compact('products'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createproduit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'is_available' => 'required|boolean',
            'description' => 'nullable|string',
        ]);  
        
        $product = new ProductModel();
        $product->name = $request->input('name');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->is_available = $request->input('is_available');
        $product->description = $request->input('description');
        
        $product->save();
    
        // Assuming you have a route named 'admin.produit.create', you can redirect to it
        return redirect()->route('produit.create')->with('success', 'Produit ajouté avec succès.');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        $products = ProductModel::all();
        return view('admin.produit', compact('products'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
//     public function edit($id)
// {
//     $product = ProductModel::findOrFail($id);
//     return view('admin.edit', ['data' => $product]);
// }
public function edit($id)
{
    $product = ProductModel::findOrFail($id);
    $user = Auth::guard('admin')->user(); // Assuming you're using a guard named 'admin'
    return view('admin.edit', ['data' => $product, 'user' => $user]);
}


public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'quantity' => 'required|integer',
        'price' => 'required|numeric',
        'is_available' => 'required|boolean',
        'description' => 'nullable|string',
    ]);

    $product = ProductModel::findOrFail($id);
    $product->name = $request->input('name');
    $product->quantity = $request->input('quantity');
    $product->price = $request->input('price');
    $product->is_available = $request->input('is_available');
    $product->description = $request->input('description');
    $product->save();

    return redirect()->route('admin.produit')->with('success', 'Produit mis à jour avec succès.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $product = ProductModel::findOrFail($id);
    $product->delete();

    return redirect()->route('admin.produit')->with('success', 'Product deleted successfully');
}

}
