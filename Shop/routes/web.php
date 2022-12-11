<?php

use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminAddUserComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminEditUserComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminUserComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\Moderator\ModeratorAddProductComponent;
use App\Http\Livewire\Moderator\ModeratorDashboardComponent;
use App\Http\Livewire\Moderator\ModeratorEditProductComponent;
use App\Http\Livewire\Moderator\ModeratorProductComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;


Route::get('/',ShopComponent::class)->name('shop.index');

Route::get('/shop',ShopComponent::class)->name('shop');

Route::get('/product}',DetailsComponent::class)->name('product.details');

Route::get('/cart',CartComponent::class)->name('shop.cart');

Route::get('/checkout',CheckoutComponent::class)->name('shop.checkout');


//User

Route::middleware(['auth'])->group(function()
{
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//Moderator

Route::middleware(['auth'])->group(function()
{
    Route::get('/moderator/dashboard',ModeratorDashboardComponent::class)->name('moderator.dashboard');
    Route::get('/moderator/products',ModeratorProductComponent::class)->name('moderator.products');
    Route::get('/moderator/product/add',ModeratorAddProductComponent::class)->name('moderator.product.add');
    Route::get('/moderator/product/edit/{product_id}',ModeratorEditProductComponent::class)->name('moderator.product.edit');
});

//Admin

Route::middleware('auth','authadmin')->group(function ()
{
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit/{product_id}',AdminEditProductComponent::class)->name('admin.product.edit');
    Route::get('/admin/users',AdminUserComponent::class)->name('admin.users');
    Route::get('/admin/users/add',AdminAddUserComponent::class)->name('admin.user.add');
    Route::get('/admin/user/edit/{user_id}',AdminEditUserComponent::class)->name('admin.user.edit');
});

require __DIR__.'/auth.php';
