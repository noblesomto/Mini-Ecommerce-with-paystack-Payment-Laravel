<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Image;

class AdminController extends Controller
{
    public function index()
    {   
        $title = "Dashboard";
        return view('backend.index', compact('title'));
    }

    public function new_product()
    {   
        $title = "New Product";
        return view('backend.new-product', compact('title'));
    }

    public function store(Request $request)
    {
        $post_id = rand(00000,99999);
         
        $validatedData = $request->validate([
            'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
           ]);
        $request->validate([
        'images' => 'required',
        ]);

        $imageName = time().'_'.$request->file('picture')->getClientOriginalName();
        $request->file('picture')->move('uploads', $imageName);

        
        $post = Admin::create([
            'title'=> $request->input('title'),
            'category'=> $request->input('category'),
            'price'=> $request->input('price'),
            'description'=> $request->input('description'),
            'post_id'=> $post_id,
            'picture'=> $imageName,
        ]);

        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $name = time().'_'.$image->getClientOriginalName();
                $path = $image->move('uploads/images', $name);

                Image::create([
                    'post_id' => $post_id,
                    'image' => $name
                  ]);
            }
         }

        return redirect('/admin/new-product')->with('status', 'Product successfuly published');
    }
}
