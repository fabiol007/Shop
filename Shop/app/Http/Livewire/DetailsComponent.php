<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;

 

    public function render()
    {
        $product = Product::where($this->slug)->first();
        return view('livewire.details-component',['product'=>$product]);
    }
}
