<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ProdukDetail = session('cart', []);
        foreach ($ProdukDetail as $key => $value) {
            $Produk[$key] = [
                'produk' => Product::find($key),
                'quantity' => $value['quantity']
            ];
            
        }
        // print_r($Produk[6]['produk']['name']);
        return view('cart.cart', compact('Produk'))->with('Success', 'Produk ditemukan di keranjang.');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

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
