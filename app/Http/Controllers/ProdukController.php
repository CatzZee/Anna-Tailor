<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ProdukDetail = Product::all();
        return view('produk.produk', compact('ProdukDetail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all()); 
        $validated = $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'required',
        ]);
        Product::create($validated);
        return redirect()->route('produk.page')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ProdukDetail = Product::FindOrFail($id);
        return view('produk.create', compact('ProdukDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required',
            'stock' => 'required|numeric',
            'category' => 'required',
        ]);
        Product::where('id', $id)->update($validated);
        return redirect()->route('produk.page')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ProdukDelete = Product::FindOrFail($id);
        $ProdukDelete->delete();
        return redirect()->route('produk.page')->with('success', 'Data Berhasil Dihapus');
    }
    public function getEditData($id)
    {
        // Ganti 'Produk' dengan nama Model Anda yang sesuai
        $product = \App\Models\Product::findOrFail($id);
        print_r($product);
        return response()->json($product);
    }
}
