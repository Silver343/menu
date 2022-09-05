<?php

use App\Models\menu;
use App\Models\restaurant;
use Inertia\Testing\AssertableInertia as Assert;
use function Pest\Laravel\get;

it('renders the menu page', function () {
    $restaurant = restaurant::factory()
        ->has(Menu::factory())
        ->create();

    get(route('restaurant.show', [$restaurant->name]))
        ->assertOK()
        ->assertInertia(fn (Assert $page) => $page
            ->component('Restaurant/Show')
            ->has('restaurant.data', fn (Assert $page) => $page
                ->where('id', $restaurant->id)
                ->where('name', $restaurant->name)
                ->has('menus', 1, fn (Assert $page) => $page
                    ->where('id', $restaurant->menus->first()->id)
                    ->where('name', $restaurant->menus->first()->name)
                )
            )
        );
});
