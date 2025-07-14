<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Product;
class AddToCartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => [
                'required', 
                'exists:products,id' 
            ],

            'quantity' => [
                'required', 
                'integer',  
                'min:1'     
            ],
        ];
    }

    /**
     * Konfigurasi instance validator setelah dibuat.
     * Ini tempat yang TEPAT untuk validasi stok.
     */
    public function after(): array
    {
        return [
            function (\Illuminate\Contracts\Validation\Validator $validator) {
                $product = Product::find($this->input('product_id'));

                if ($product && $product->stock < $this->input('quantity')) {
                    $validator->errors()->add(
                        'quantity',
                        "Stok produk {$product->name} tidak mencukupi. Sisa {$product->stock}."
                    );
                }
            }
        ];
    }
}
