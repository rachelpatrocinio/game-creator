<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //

    public function home(){
        $items = Item::all();
        return view('home', compact('items'));

    }
}
