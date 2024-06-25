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
            <label for="name">Nom du produit</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantité</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="is_available">Disponible</label>
            <select class="form-control" id="is_available" name="is_available" required>
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
