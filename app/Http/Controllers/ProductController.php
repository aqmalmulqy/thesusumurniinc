<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // $galleriesInstance = new Gallery();
        // $galleries = $galleriesInstance->adminArts($request->get('admin_id'));

        $products = Product::all();

        return view('product.index', compact('products'));
    } 

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'nama_product' => 'required',
            'harga' => 'required',
            'kategory' => 'required',
            'foto' => 'required',
        ]);
        
        $product = $request->all();
        $file = $request->file('foto');
        $ext = $file->extension();
        $dateTime = date('Ymd_his');
        $newName = 'prd_'.$dateTime.'.'.$ext;

        $newName = $file->storeAs("prd_files", $newName);

        // $product[''] = Auth::user()->id;
        $product['prd_url'] = $newName;
        product::create($product);

        return redirect('/admin/product')->with('success', 'Product anda berhasil ditambahkan!');
    }
}
