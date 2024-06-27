<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\cr;
use App\Models\produit;

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
    $data = produit::all();
    return view('web.dashboard', compact('data'));
}
    public function index()
    {
        
        $data=produit::all();
        return view('admin.indexAdmin',['data'=>$data]);
        //return view('admin.indexAdmin');

        
        //$products = ProductModel::all();
        //return view('admin.produit', ['products' => $products]);
    }
    public function showProducts() {
        $products = produit::all();
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
            'description' => 'nullable|string',
            'marque' => 'required|string',
            'nom' => 'required|string',
            'prix' => 'required|numeric',
            'prixAchatHt' => 'required|numeric',
            'quantiteStock' => 'required|integer',
            'stockAlerte' => 'required|integer',
            'taille' => 'required|numeric',
            'tva' => 'required|numeric',
        ]);
    
        $product = new produit();
        $product->id = $request->input('id'); // Assuming you have 'id' in your form inputs
        $product->description = $request->input('description');
        $product->marque = $request->input('marque');
        $product->nom = $request->input('nom');
        $product->prix = $request->input('prix');
        $product->prixAchatHt = $request->input('prixAchatHt');
        $product->quantiteStock = $request->input('quantiteStock');
        $product->stockAlerte = $request->input('stockAlerte');
        $product->taille = $request->input('taille');
        $product->tva = $request->input('tva');
    
        $product->save();
    
        // Assuming you have a route named 'produit.create', you can redirect to it
        return redirect()->route('produit.create')->with('success', 'Produit ajouté avec succès.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        $products = produit::all();
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
    $product = produit::findOrFail($id);
    $user = Auth::guard('admin')->user(); // Assuming you're using a guard named 'admin'
    return view('admin.edit', compact('product', 'user'));
}



public function update(Request $request, $id)
{
    $request->validate([
        'description' => 'nullable|string',
        'marque' => 'required|string',
        'nom' => 'required|string',
        'prix' => 'required|numeric',
        'prixAchatHt' => 'required|numeric',
        'quantiteStock' => 'required|integer',
        'stockAlerte' => 'required|integer',
        'taille' => 'required|numeric',
        'tva' => 'required|numeric',
    ]);

    $product = produit::findOrFail($id);
    $product->update([
        'description' => $request->input('description'),
        'marque' => $request->input('marque'),
        'nom' => $request->input('nom'),
        'prix' => $request->input('prix'),
        'prixAchatHt' => $request->input('prixAchatHt'),
        'quantiteStock' => $request->input('quantiteStock'),
        'stockAlerte' => $request->input('stockAlerte'),
        'taille' => $request->input('taille'),
        'tva' => $request->input('tva'),
    ]);

    return redirect()->route('admin.produit')->with('success', 'Produit mis à jour avec succès.');
}



    // $request->validate([
    //     'description' => 'nullable|string',
    //     'marque' => 'required|string',
    //     'nom' => 'required|string',
    //     'prix' => 'required|numeric',
    //     'prixAchatHt' => 'required|numeric',
    //     'quantiteStock' => 'required|integer',
    //     'stockAlerte' => 'required|integer',
    //     'taille' => 'required|numeric',
    //     'tva' => 'required|numeric',
    // ]);

    // $product = produit::findOrFail($id);
    // $product->description = $request->input('description');
    // $product->marque = $request->input('marque');
    // $product->nom = $request->input('nom');
    // $product->prix = $request->input('prix');
    // $product->prixAchatHt = $request->input('prixAchatHt');
    // $product->quantiteStock = $request->input('quantiteStock');
    // $product->stockAlerte = $request->input('stockAlerte');
    // $product->taille = $request->input('taille');
    // $product->tva = $request->input('tva');
    
    // $product->save();
    // return redirect()->route('admin.produit')->with('success', 'Produit mis à jour avec succès.');


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $product = produit::findOrFail($id);
    $product->delete();

    return redirect()->route('admin.produit')->with('success', 'Product deleted successfully');
}

}
