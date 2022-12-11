<div class="header-action-icon-2">
    <a class="mini-cart-icon" href="{{route('shop.cart')}}">
        <img alt="cart" src="{{asset('assets/imgs/theme/icons/icon-cart.svg')}}">
        @if (Cart::count()>0)
            <span class="pro-count blue">{{Cart::count()}}</span>
        @endif
    </a>
    <div class="cart-dropdown-wrap cart-dropdown-hm2">
        <ul>
            @foreach (Cart::content() as $item)
                <li>
                    <div class="shopping-cart-img">                                                                                 
                        <a href="{{route('product.details')}}"><img src="{{ asset('assets/imgs/products')}}/{{$item->model->image}}"></a>
                    </div>
                    <div class="shopping-cart-title">
                        <h4><a href="{{route('product.details')}}">{{ substr($item->model->name,0,20)}}...</a></h4>
                        <h4><span>{{$item->qty}} × </span>${{$item->model->regular_price}}</h4>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="shopping-cart-footer">
            <div class="shopping-cart-total">
                <h4>Suma: <span>${{Cart::instance('cart')->total()}}</span></h4>
            </div>
            <div class="shopping-cart-button">
                <a href="{{route('shop.cart')}}" class="outline">Koszyk</a>
            </div>
        </div>
    </div>
</div>