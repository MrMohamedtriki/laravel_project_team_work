@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>
        <form action="{{ route('admin.produit.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}">
            </div>
            <div class="form-group">
                <label for="marque">Marque</label>
                <input type="text" class="form-control" id="marque" name="marque" value="{{ $product->marque }}">
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $product->nom }}">
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix" value="{{ $product->prix }}">
            </div>
            <div class="form-group">
                <label for="quantiteStock">Quantité en Stock</label>
                <input type="number" class="form-control" id="quantiteStock" name="quantiteStock" value="{{ $product->quantiteStock }}">
            </div>
            <div class="form-group">
                <label for="stockAlerte">Alerte de Stock</label>
                <input type="number" class="form-control" id="stockAlerte" name="stockAlerte" value="{{ $product->stockAlerte }}">
            </div>
            <div class="form-group">
                <label for="tva">TVA</label>
                <input type="number" class="form-control" id="tva" name="tva" value="{{ $product->tva }}">
            </div>
           
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection
