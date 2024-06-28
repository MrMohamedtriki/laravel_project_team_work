<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB; // Add this line for DB facade

use App\Models\Parametre;

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
        // Validate the request data
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
    
        // Generate the code for the product
        $code = $this->generate_code('produit');
    
        // Create a new product instance and assign request data to its properties
        $product = new produit();
        $product->code = $code;
        $product->description = $request->input('description');
        $product->marque = $request->input('marque');
        $product->nom = $request->input('nom');
        $product->prix = $request->input('prix');
        $product->prixAchatHt = $request->input('prixAchatHt');
        $product->quantiteStock = $request->input('quantiteStock');
        $product->stockAlerte = $request->input('stockAlerte');
        $product->taille = $request->input('taille');
        $product->tva = $request->input('tva');
    
        // Save the product to the database
        $product->save();
    
        // Redirect to the create product route with a success message
        return redirect()->route('admin.produit.create')->with('success', 'Produit ajouté avec succès.');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        $products = produit::all();
        return view('admin.produit', compact('products'));
        
    }


    public function edit($id)
    {
        $product = produit::findOrFail($id);
        return view('admin.edit', compact('product'));
    }
    
    public function produitupdate(Request $request, $id)
    {

        $product = produit::find($id);
       
    
        $product->description = $request->input('description');
        $product->marque = $request->input('marque');

        $product->nom = $request->input('nom');
        $product->prix = $request->input('prix');

        $product->quantiteStock = $request->input('quantiteStock');
        $product->stockAlerte = $request->input('stockAlerte');

        $product->tva = $request->input('tva');
        $product->save();
    
      
        return redirect()->route('admin.produit', $id)->with('success', 'Produit mis à jour avec succès.');
    }
    



                public function destroy($id)
            {
                $product = produit::findOrFail($id);
                $product->delete();

                return redirect()->route('admin.produit')->with('success', 'Product deleted successfully');
            }
            private function generate_code($tableName)
            {
                $parametre = Parametre::where('table', $tableName)->first();
                $code = $parametre->prefixe . $parametre->separateur . str_pad($parametre->compteur, $parametre->taille, '0', STR_PAD_LEFT);
                $parametre->compteur++;
                $parametre->save();
                return $code;
            }

}
