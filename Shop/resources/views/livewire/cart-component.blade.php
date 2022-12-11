<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb" >
                    <a  href="index.html" rel="nofollow" style="font-size: 1.2em;color:white;">Strona Głowna</a>
                    
                    <span style="font-size: 1.2em;"></span> <a style="font-size: 1.2em;">Koszyk</a>
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            @if (Session::has('success_message'))
                            <div class="alert alert-success">
                                <strong>Success | {{Session::get('success_message')}}</strong>
                            </div>
                            @endif
                            @if(Cart::count() > 0)
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Zdjęcie</th>
                                        <th scope="col">Nazwa</th>
                                        <th scope="col">Cena</th>
                                        <th scope="col">Ilość</th>
                                        <th scope="col">Podsumowanie</th>
                                        <th scope="col">Usuń</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach (Cart::content() as $item)
                                    <tr>                                             
                                        <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/products')}}/{{$item->model->image}}"></td>
                                        <td class="product-des product-naimage">
                                            <h5 class="product-name"><a href="product-details.html">{{$item->model->name}}</a></h5>
                                        </td>
                                        <td class="price" data-title="Price"><span>${{$item->model->regular_price}} </span></td>
                                        <td class="text-center" data-title="Stock">
                                            <div class="detail-qty border radius  m-auto">
                                                <a href="#" class="qty-down" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">{{$item->qty}} </span>
                                                <a href="#" class="qty-up" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                        </td>
                                        <td class="text-right" data-title="Cart">
                                            <span>${{$item->subtotal}} </span>
                                        </td>
                                        <td class="action" data-title="Remove"><a href="#" class="text-muted" wire:click.prevent="destroy('{{$item->rowId}}')"><i class="fi-rs-trash"></i></a></td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="6" class="text-end">
                                            <a href="#" class="text-muted" wire:click.prevent="clearAll()"> <i class="fi-rs-cross-small"></i>Wyczyść koszyk</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @else
                            <p>Koszyk jest pusty</p>
                            @endif
                        </div>
                        <div class="cart-action text-end">
                            <a href="{{route('shop')}}" class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Kontynuj zakupy</a>
                        </div>
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        <div class="row mb-50">

                            <div class="col-lg-6 col-md-12">
                                <div class="border p-md-4 p-30 border-radius cart-totals">
                                    <div class="heading_s1 mb-3">
                                        <h4>Suma</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="cart_total_label">Suma częściowa koszyka</td>
                                                    <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">${{Cart::subtotal()}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">Podatek</td>
                                                    <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">${{Cart::tax()}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">Wysyłka</td>
                                                    <td class="cart_total_amount"> <i class="ti-gift mr-5"></i>Darmowa dostawa</td>
                                                </tr>
                                                <tr>
                                                    <td class="cart_total_label">Podsumowanie</td>
                                                    <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">${{Cart::total( )}}</span></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="checkout.html" class="btn "> <i class="fi-rs-box-alt mr-10"></i>Przejdź do kasy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
