<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ProdukDetail = Product::all();
        return view('kasir.kasir', compact('ProdukDetail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddToCartRequest $request)
    {
        $Validated = $request->validated();
        // print_r($Validated);
        $cart = session()->get('cart', []);
        $ProdukDatabase = Product::findOrfail($Validated['id']);
        $cart[$Validated['id']] = [
            'id' => $ProdukDatabase['id'],
            'name' => $ProdukDatabase['name'],
            'category' => $ProdukDatabase['category'],
            'description' => $ProdukDatabase['description'],
            'price' => $ProdukDatabase['price'],
            'stock' => $ProdukDatabase['stock'],
            'quantity' => $Validated['quantity'],
        ];
        session()->put('cart', $cart);
        return redirect()->route('kasir.page')->with('success', 'Produk Telah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ProdukDetail = Product::FindOrFail($id);
        return view('kasir.create', compact('ProdukDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
