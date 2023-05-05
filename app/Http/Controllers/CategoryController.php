<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\categoryCoffee;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategoryCoffee($id){

        $category_coffee = CategoryCoffee::where('category_id', $id)->get();
        $category_nama = CategoryCoffee::where('category_id', $id)->first();
        $all_coffee_category = Category::all();

        return view('coffeelist', [
            'all_coffee' => $all_coffee_category,
            'category_coffee' => $category_coffee,
            'category_nama' => $category_nama->category->nama
        ]);
    }
}
