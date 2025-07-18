<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PhpParser\Node\Expr\Cast\Unset_;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Produk = session('cart', []);
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
        // print_r($id);
        $cartsession = session('cart', []);
        // print_r($cartsession);
        foreach ($cartsession as $key => $value) {
            if ($value['id'] ==  $id) {
                // print_r($key);
                unset($cartsession[$key]);
                session()->put('cart', $cartsession);
                return redirect()->route('cart.page')->with('success', 'Produk dihapus dari keranjang.');
            }
        }
        return redirect()->route('cart.page')->with('error', 'Produk Tidak Berhasil Dihapus');
    }
}
