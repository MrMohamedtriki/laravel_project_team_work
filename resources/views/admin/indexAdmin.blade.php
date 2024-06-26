@extends('layout.master')
@section('content')

<br><br><br><br>
<h2>Basic Table</h2>
@if(session()->has('success'))
    <div class="alert alert-info">
        <b>{{ session()->get('success') }}</b>
    </div>
@endif





    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Profile Datatable</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end mb-2">
                    <a href="{{ asset('/admin/produit/create') }}" class="btn btn-primary">Ajouter Produit</a>
                </div>
                <div class="table-responsive">
                    <table id="example5" class="display" style="min-width: 845px">
                        <thead>
                            <tr role="row">
                                <th>Img</th>
                                <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 35px;">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 113.463px;">Nom du produit</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Department: activate to sort column descending" style="width: 137.413px;" aria-sort="ascending">Quantité</th>
                                <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 58.075px;">Prix</th>
                                <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Education: activate to sort column ascending" style="width: 105.887px;">Disponible</th>
                                <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 82.75px;">Description</th>
                                <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Joining Date: activate to sort column ascending" style="width: 101.287px;">Actions</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach($data as $dt)
                            <tr>
                                <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic1.jpg') }}" alt=""></td>
                                <td>{{ $dt->id }}</td>
                                <td>{{ $dt->name }}</td>
                                <td>{{ $dt->quantity }}</td>
                                <td>{{ $dt->price }}</td>
                                <td>{{ $dt->available }}</td>
                                <td>{{ $dt->description }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.produit.edit', $dt->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <form action="{{ route('produit.destroy', $dt->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>	
                                </td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    //jessem sabiya benti 
    </script>
    <script src="{{ asset('vendor/global/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/deznav-init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/demo.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}" type="text/javascript"></script>

@endsection
