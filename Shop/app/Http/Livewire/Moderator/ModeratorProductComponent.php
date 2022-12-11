<?php

namespace App\Http\Livewire\Moderator;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ModeratorProductComponent extends Component
{
    use WithPagination;

    public $product_id;

    public function deleteProduct()
    {
        $product = Product::find($this->product_id);
        unlink('assets/imgs/products/'.$product->image);
        $product->delete();
        session()->flash('message','Produkt został usunięty');
    }

    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.moderator.moderator-product-component',['products'=>$products]);
    }
}
