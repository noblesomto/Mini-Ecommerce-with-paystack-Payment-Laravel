<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {   
        $post = DB::table('admins')
            ->select('*')
            ->get();
        $title = "Noble Shop";
        return view('frontend.index', compact('title', 'post'));
    }

    public function checkout()
    {   
        $cartItems = \Cart::getContent();
        $amount =  \Cart::getTotal() * 100;
        
        $order_id = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
      
        $title = "Check Out";
        return view('frontend.checkout', compact('title', 'amount', 'order_id'));
    }
}
