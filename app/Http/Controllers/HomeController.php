<?php

namespace App\Http\Controllers;
use App\Models\Menus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Welcome(){
        $menu=Menus::get();
        return view('/welcome',[
            'menu'=>$menu
        ]);

    }

    public function FoodItemPage($id){
        $menu=Menus::find($id);
        return view('/users/food_item_page');
    }
}
