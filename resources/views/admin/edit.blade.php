@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>
        <form action="{{ route('admin.produit.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $data->quantity }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $data->price }}">
            </div>
            <div class="form-group">
                <label for="is_available">Available</label>
                <select class="form-control" id="is_available" name="is_available">
                    <option value="1" {{ $data->is_available ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$data->is_available ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $data->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection
