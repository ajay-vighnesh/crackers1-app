<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\AddProductRequest;
use Inertia\Inertia;
// use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('ViewProducts', [
            'products' => Product::latest()->get(),
        ]);

    }
    
    public function create()
    {
        return Inertia::render('ViewProducts', [
            'products' => Product::latest()->get(),
        ]);

    }

    public function delete(Request $request){

        $products = product::find($request->id);

        $products->delete();

        return Redirect::to('/admin/products/viewall');

    //     $product =Product::where('id',$request->id)->first();

    // if ($post != null) {
    //     $post->delete();
    //     return redirect()->route('dashboard')->with(['message'=> 'Successfully deleted!!']);
    // }

    // return redirect()->route('dashboard')->with(['message'=> 'Wrong ID!!']);

    }

    public function show(Request $request)
    {
        // $name = $request->name;
        // $id = $request->id;
        // $description = $request->description;
        // $price = $request->price;
        // $image = $request->image;

        // dd(Product::find($request->id));
        return Inertia::render('EditProducts', [
            'product' => Product::find($request->id),

         ]);

        //  $products = Product::find($id);

        //  return Inertia::render('EditProducts', [
        //     'name' => $request->name,
        //     'id' => $request->id,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     'image' => $request->image,
        // ]);

    }
    
    public function update(Request $request)
    {
        $products = product::find($request->id);
        $products->name = $request->name;
        $products->catagories = $request->catagories;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->image = $request->image;
        $products->save();

        return Redirect::to('/admin/products/viewall');
        
    }

    
    public function addProduct(AddProductRequest $request)
    {

        $destination_path = 'public';
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $image->storeAs($destination_path,$image_name);
        

        Product::create([
            'name' => $request->name,
            'catagories' => $request->catagories,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image_name,
        ]);

        return Product::all();
    }
}
