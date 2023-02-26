<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Products extends Component
{
    public function toggleFavoriteProductByUser(Product $product, User $user): void
    {
        $user->favoriteProducts()->toggle($product->id);
    }

    public function render()
    {
        return view('livewire.products', [
            'products' => Product::all(),
        ]);
    }
}
