<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    public function isFavoriteByUser(User $user): bool
    {
        return $this->usersByFavoriteProduct()->get()->pluck('id')->contains($user->id);
    }

    public function usersByFavoriteProduct() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorite_product_user');
    }
}
