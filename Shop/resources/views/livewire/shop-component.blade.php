<div>
<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow" style="font-size: 1.2em;color:white;">Strona Główna</a>            
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="row product-grid-3">
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="">
                                                <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{$product->image}}" alt="{{$product->name}}">
                                                <img class="hover-img" src="{{ asset('assets/imgs/shop/product-') }}{{$product->id}}-2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <br>
                                        <h2><a href="product-details.html">{{$product->name}}</a></h2>
                                        <div class="product-price">
                                            <span>{{$product->regular_price}} </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>

                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            {{$products->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
