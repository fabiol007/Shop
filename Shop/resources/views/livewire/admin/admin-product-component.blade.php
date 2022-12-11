<div>
    <style>
        nav svg{
            height: 20px;;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow" style="color:white;">Strona Główna</a>
                    <span></span> Wszystkie Produkty
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Wszystkie Produkty
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.product.add')}}" class="btn btn-success float-end">Dodaj Nowy Produkt</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Lp</th>
                                            <th>Zdjęcie</th>
                                            <th>Nazwa</th>
                                            <th>Dostępność</th>
                                            <th>Cena</th>
                                            <th>Data</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = ($products->currentPage()-1)*$products->perPage();
                                        @endphp
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td><img src="{{ asset('assets/imgs/products')}}/{{$product->image}}" alt="{{$product->name}}" width="60" /></td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->stock_status}}</td>
                                                <td>{{$product->regular_price}}</td>
                                                <td>{{$product->created_at}}</td>
                                                <td>
                                                    <a href="{{route('admin.product.edit',['product_id'=>$product->id])}}" class="text-info">Edytuj</a>
                                                    <a href="#" onclick="deleteConfirmation({{$product->id}})" class="text-danger">Usuń</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$products->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3">Czy napewno chcesz usunąć ten produkt?</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Anuluj</button>
                        <button type="button" class="btn btn-danger" onclick="deleteProduct()">Usuń</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id)
        {   
            @this.set('product_id',id);
            $('#deleteConfirmation').show();
            
        }

        function deleteProduct()
        {
            @this.call('deleteProduct');
            $('#deleteConfirmation').hide();
        }
    </script>
@endpush
@stack('scripts');

