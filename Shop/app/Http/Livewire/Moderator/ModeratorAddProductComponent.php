<?php

namespace App\Http\Livewire\Moderator;

use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class ModeratorAddProductComponent extends Component
{

    use WithFileUploads;

    public $name;
    public $description;
    public $regular_price;
    public $stock_status = 'Dostępny';
    public $quantity;
    public $image;



    public function addProduct()
    {

        $this->validate([

            'name'=>'required|min:3|max:20',
            'description'=>'required|min:3|max:150',
            'regular_price'=>'required',
            'stock_status'=>'required',
            'quantity'=>'required|integer',
            'image'=>'required'
        ]);

        $product = new Product();
        $product->name = $this->name;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->stock_status = $this->stock_status;
        $product->quantity = $this->quantity;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        $product->save();
        session()->flash('message','Produkt został dodany!');
    }

    public function render()
    {
        return view('livewire.moderator.moderator-add-product-component');
    }
}
