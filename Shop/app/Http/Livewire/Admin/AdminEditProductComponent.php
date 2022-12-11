<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;

    public $product_id;
    public $name;
    public $description;
    public $regular_price;
    public $stock_status = 'Dostępny';
    public $quantity;
    public $image;
    public $newimage;

    public function mount($product_id)
    {
        $product = Product::find($product_id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->stock_status = $product->stock_status;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
    }



    public function updateProduct()
    {

        $this->validate([

            'name'=>'required|min:3|max:20',
            'description'=>'required|min:3|max:255',
            'regular_price'=>'required',
            'stock_status'=>'required',
            'quantity'=>'required|integer',
            'image'=>'required'
        ]);

        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->stock_status = $this->stock_status;
        $product->quantity = $this->quantity;
        if($this->newimage)
        {
            unlink('assets/imgs/products/'.$product->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;
        }
        $product->save();
        session()->flash('message','Produkt został zaaktualizowany!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-product-component');
    }
}
