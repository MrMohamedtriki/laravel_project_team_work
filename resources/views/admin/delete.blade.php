<!-- resources/views/admin/produit/delete.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Produit</title>
    <!-- Include your CSS and other head elements here -->
</head>
<body>
    <div class="container">
        <h1>Delete Produit</h1>
        <p>Are you sure you want to delete this product?</p>

        <form action="" method="">
            {{-- {{ route('admin.produit.destroy', ['id' => $product->id]) }} --}}
            @csrf
            @method('DELETE')
            <button type="submit">Yes, delete it</button>
        </form>
        
        <a href="{{ route('admin.produit') }}">Cancel</a>
    </div>
</body>
</html>
