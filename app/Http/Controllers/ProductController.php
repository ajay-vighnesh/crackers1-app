<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;
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


    }

    public function show(Request $request)
    {
        

        // dd(Product::find($request->id));
        return Inertia::render('EditProducts', [
            'product' => Product::find($request->id),
            // 'catagories' => Catagories::find($request->id),
 
         ]);

        

    }
    
    public function update(Request $request, Product $product)
    {

        $products = product::find($request->id);
        $products->name = $request->name;
        $products->categories = $request->categories;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->image = $request->image;
        $products->save();


        // product::where('id','=',$products)->update([
        //     'name'=>$request->name,
        //     'categories'=>$request->categories,
        //     'description'=>$request->description,
        //     'price'=>$request->price,
        //     'image'=>$request->image,
        // ]);

        

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
            'categories' => $request->categories,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image_name,
        ]);

        return Product::all();
    }
}
