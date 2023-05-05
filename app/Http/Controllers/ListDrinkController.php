<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\menu;
use App\Models\categoryCoffee;
use App\Models\User;
use Illuminate\Http\Request;

class ListDrinkController extends Controller
{
    public function showAllCoffee($id){

        $menu = Menu::all();
        $category_coffee = Category::all();

        return view('coffeelist',[
            'category_coffee' => $category_coffee,
            'menu' => $menu,
        ]);
    }
}
