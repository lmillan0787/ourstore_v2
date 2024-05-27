<?php
namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getProducts()
    {
        return  Product::with('category')
            ->leftJoin('product_prices', 'products.id', '=', 'product_prices.product_id')
            ->leftJoin('taxes', 'product_prices.taxes_id', '=', 'taxes.id')
            ->select('products.*', 'product_prices.price', 'taxes.value as tax')
            ->orderBy('name_spanish', 'asc')->paginate(25);

    }

    public function getStateById($id)
    {
       return $this->product->where('id', $id)->first();
    }

    public function saveProduct($data)
    {
        return $this->product->create(
            [
                'code' => $data['code'],
                'name_spanish' => $data['name_spanish'],
                'name_english' => $data['name_english'],
                'description_spanish' => $data['description_spanish'],
                'description_english' => $data['description_english'],
                'barcode' => $data['barcode'],
                'category_id' => $data['category_id'],
                'created_by' => auth()->user()['id'],
                'created_at' => now()
            ]
        );
    }
}
