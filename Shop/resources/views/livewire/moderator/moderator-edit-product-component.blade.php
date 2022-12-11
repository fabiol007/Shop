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
                    <a href="/" rel="nofollow" style="color:white;">Strona Głowna</a>
                    <span></span> Edytuj Produkt
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        Edytuj Produkt
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('moderator.products')}}" class="btn btn-success float-end">Wszytskie Produkty</a>
                                    </div>
                                </div>
                            </div>
                            <div class = "card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="updateProduct">

                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Nazwa</label>
                                        <input type="text" name="name" class="form-control" placeholder="Wprowadź nazwe produktu" wire:model="name"  />
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="description" class="form-label">Opis</label>
                                        <textarea class="form-control" name="description" placeholder="Wprowadź opis" wire:model="description"></textarea>
                                        @error('description')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="regular_price" class="form-label">Cena</label>
                                        <input type="number" name="regular_price" class="form-control" placeholder="Wprowadź cene" wire:model="regular_price" />
                                        @error('regular_price')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="regular_price" class="form-label" >Stan magazynowy</label>
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="Dostępny">Dostępny</option>
                                        <option value="Niedostępny">Niedostępny</option>
                                    </select>
                                        @error('stock_status')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="quantity" class="form-label">Ilość</label>
                                        <input type="number" name="quantity" class="form-control" placeholder="Wprowadź ilość produktów" wire:model="quantity" />
                                        @error('quantity')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="image" class="form-label">Zdjęcie</label>
                                        <input type="file" name="image" class="form-control" wire:model="newimage" />
                                        @if ($newimage)
                                            <img src="{{$newimage->temporaryUrl()}}" width="120" />
                                        @else
                                            <img src="{{asset('assets/imgs/products')}}/{{$image}}" width="120" />
                                        @endif
                                        @error('newimage')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary float-end">Zatwierdź</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
