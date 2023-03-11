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

        return Redirect::to('/');

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
            'products' => Product::latest()->get(),
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

    
    public function addProduct(AddProductRequest $request)
    {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,

            // $fileName = time().$request->file('image')->getClientOriginalExtension(),
            // $path = $request->file('image')->storeAs('images',$fileName,'public'),
            // $requestData["image"] = '/storage/'.$path,
           
            
        ]);

        $input = $request-> all();
        if($request->hasFile('image'))
        {
            $destination_path = 'public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $input['image'] = $image_name;
        }

        return Product::all();
    }
}
