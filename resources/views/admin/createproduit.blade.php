@extends('layout.master')


<style>


.container .from-control {

margin-top: 15%;
}

</style>
@section('content')
<br>
<br><br><br<br><br>
<br><br><br<br><br>
<br><br><br<br>
<div class="container">
    <h2>Ajouter un Produit  </h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.produit.store') }}" method="POST">
        @csrf
        
        <br>
        <div class="form-group" >
            <label for="name">description</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <div class="form-group">
            <label for="quantity">marque</label>
            <input type="text" class="form-control" id="marque" name="marque" required>
        </div>
        <div class="form-group">
            <label for="price">nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="price">prix</label>
            <input type="number" class="form-control" id="prix" name="prix" required>
        </div>
        <div class="form-group">
            <label for="price">prixAchatHt</label>
            <input type="number" class="form-control" id="prixAchatHt" name="prixAchatHt" required>
        </div>
        <div class="form-group">
            <label for="price">quantiteStock</label>
            <input type="number" class="form-control" id="quantiteStock" name="quantiteStock" required>
        </div>
        <div class="form-group">
            <label for="price">stockAlerte</label>
            <input type="number" class="form-control" id="stockAlerte" name="stockAlerte" required>
        </div>
        <div class="form-group">
            <label for="price">taille</label>
            <input type="number" class="form-control" id="taille" name="taille" required>
        </div>
        <div class="form-group">
            <label for="price">tva</label>
            <input type="number" class="form-control" id="tva" name="tva" required>
        
        
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
