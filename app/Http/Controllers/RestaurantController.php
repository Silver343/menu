<?php

namespace App\Http\Controllers;

use App\Http\Resources\RestaurantResource;
use App\Models\restaurant;
use Inertia\Inertia;

class RestaurantController extends Controller
{
    public function show(restaurant $restaurant)
    {
        return Inertia::render('Restaurant/Show', [
            'restaurant' => RestaurantResource::make($restaurant->load('menus'))
        ]);
    }
}
