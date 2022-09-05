<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class restaurant extends Model
{
    use HasFactory;

    /**
     * Get all of the menu's for the restaurant
     *
     * @return HasMany<menu>
     */
    public function menus(): HasMany
    {
        return $this->hasMany(menu::class);
    }
}
