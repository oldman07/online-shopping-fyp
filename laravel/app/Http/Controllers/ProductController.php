<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.shop');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'product_name' => 'required',
             'category' => 'required',
             'price' => 'required|numeric',
             'description' => 'required',
             'product_image' => 'nullable|image',
             'product_video' => 'nullable|mimes:mp4',
             'product_model' => 'required',
         ]);

         $product = new Product;
         $product->product_name = $request->input('product_name');
         $product->category = $request->input('category');
         $product->price = $request->input('price');
         $product->description = $request->input('description');

         if ($request->hasFile('product_image')) {
             $product->product_image = $request->file('product_image')->store('uploads/images', 'public');
         }

         if ($request->hasFile('product_video')) {
             $product->product_video = $request->file('product_video')->store('uploads/videos', 'public');
         }

         if ($request->hasFile('product_model')) {
             $file = $request->file('product_model');
             $extension = $file->getClientOriginalExtension();
             $allowedExtensions = ['gltf', 'glb', 'obj', 'fbx'];

             if (!in_array($extension, $allowedExtensions)) {
                 return back()->withErrors(['product_model' => 'Invalid file format. Allowed formats are gltf, glb, obj, and fbx.']);
             }

             // Proceed with the file upload
             $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
             $storedFilePath = $file->storeAs('uploads/models', $originalName . '.' . $extension, 'public');
             $product->product_model = $storedFilePath;
         } else {
             return back()->withErrors(['product_model' => 'No file provided.']);
         }

         $product->save();
         return view('dashboard');
     }

    //  public function store(Request $request)
    //  {
    //      $validatedData = $request->validate([
    //          'product_name' => 'required',
    //          'category' => 'required',
    //          'price' => 'required|numeric',
    //          'description' => 'required',
    //          'product_image' => 'nullable|image',
    //          'product_video' => 'nullable|mimes:mp4',
    //          'product_model' => 'required',
    //      ]);

    //      $product = new Product;
    //      $product->product_name = $request->input('product_name');
    //      $product->category = $request->input('category');
    //      $product->price = $request->input('price');
    //      $product->description = $request->input('description');

    //      if ($request->hasFile('product_image')) {
    //          $product->product_image = $request->file('product_image')->store('uploads/images', 'public');
    //      }

    //      if ($request->hasFile('product_video')) {
    //          $product->product_video = $request->file('product_video')->store('uploads/videos', 'public');
    //      }

    //      if ($request->hasFile('product_model')) {
    //          $file = $request->file('product_model');
    //          $extension = $file->getClientOriginalExtension();
    //          $allowedExtensions = ['gltf', 'glb', 'obj', 'fbx'];

    //          if (!in_array($extension, $allowedExtensions)) {
    //              return back()->withErrors(['product_model' => 'Invalid file format. Allowed formats are gltf, glb, obj, and fbx.']);
    //          }

    //          // Proceed with the file upload
    //          $storedFilePath = $file->storePublicly('uploads/models', 'public');
    //          $product->product_model = $storedFilePath;
    //      } else {
    //          return back()->withErrors(['product_model' => 'No file provided.']);
    //      }

    //      $product->save();
    //      return view('dashboard');
    //  }




    // public function store(Request $request)
    // {

    //     $product = new Product;
    //     $product-> product_name = $request['product_name'];
    //     $product-> category = $request['category'];
    //     $product->product_image = $request->file('product_image')->store('uploads', 'public');

    //     $product->save();
    //     return view('welcome');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $product = Product::find($id);
        $data = compact('product');
        return view('shop.individual')->with($data);
    }

    public function show_cart($id)
    {

        $product = Product::find($id);
        $data = compact('product');
        return view('shop.cart')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function view(Request $request)
    {
        // $pagination = Product::paginate(10);
        $search = $request['search'] ?? '';
        if ($search != '' ) {
            $product = Product::where('product_name','LIKE',"%$search%")->orWHERE('category','LIKE',"%$search%")->paginate(21);
        }
        else {
            $product = Product::paginate(21);
        }

        $data = compact('product','search');
        return view('shop.shop')->with($data);
    }

    public function home_view(Request $request)
    {
        $search = $request['search'] ?? '';
        if ($search != '' ) {
            $product = Product::where('product_name','LIKE',"%$search%")->orWHERE('category','LIKE',"%$search%")->get();
        }
        else {
            $product = Product::all();
        }

        $products = DB::table('products')
                ->orderBy('product_id', 'desc')
                ->take(3)
                ->get();
        $trending_products = DB::table('products')
                ->orderBy('product_id', 'asc')
                ->take(3)
                ->get();
                $data = compact('product','search','products','trending_products');
                return view('welcome')->with($data);
    }
    // public function showModel(Product $product)
    // {
    //     return view('show_model', ['model' => $product]);
    // }\
    public function showModel()
{
    return view('show_model');
}

}
