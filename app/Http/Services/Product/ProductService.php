<?php

namespace App\Http\Services\Product;


use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ProductService
{
//     Lấy danh sách các danh mục (categories)
    public function getCategories()
    {
        return Product::all();
    }

    // Tạo mới một sản phẩm
    public function create($request)
    {
        try {
             Product::create([
                'name' => (string)$request->input('name'),
                'author' => (string)$request->input('author'),
                'description' => (string)$request->input('description'),
                'category' => (string)$request->input('category'),
                'content' => (string)$request->input('content'),
                'publish_at' => (int)$request->input('publish_at'),
                'image' => (string)$request->input('image'),
                'amount' => (int)$request->input('amount'),
                'price' => (int)$request->input('price'),
                'status' => (int)$request->input('status'),
            ]);
            Session::flash('success', 'Tạo Danh Mục Thành Công');
        } catch (\Exception $exception) {
            Log::error('Error creating product: ' . $exception->getMessage());
            return false;
        }
        return true;
    }

    // Cập nhật sản phẩm hiện có
    public function update(Product $product, $request)
    {
        try {
            $product->update([
                'name' => $request->input('name'),
                'author' => $request->input('author'),
                'description' => $request->input('description'),
                'category' => $request->input('category'),
                'content' => $request->input('content'),
                'publish_at' => $request->input('publish_at'),
                'image' => $request->input('image'),
                'amount' => $request->input('amount'),
                'price' => $request->input('price'),
                'status' => $request->input('status'),
            ]);
            return true;
        } catch (\Exception $exception) {
            Log::error('Error updating product: ' . $exception->getMessage());
            return false;
        }
    }

    // Lọc sản phẩm dựa trên các bộ lọc
//    public function getFilteredProducts($filters)
//    {
//        $query = Product::query();
//
//        if (!empty($filters['id'])) {
//            $query->where('id', $filters['id']);
//        }
//
//        if (!empty($filters['name'])) {
//            $query->where('name', 'LIKE', '%' . $filters['name'] . '%');
//        }
//
//        if (!empty($filters['author'])) {
//            $query->where('author', 'LIKE', '%' . $filters['author'] . '%');
//        }
//
//        if (!empty($filters['category'])) {
//            $query->where('category', $filters['category']);
//        }
//
//        if (!empty($filters['start_date']) && !empty($filters['end_date'])) {
//            $query->whereBetween('created_at', [$filters['start_date'], $filters['end_date']]);
//        }
//
//        if (!empty($filters['status'])) {
//            $query->where('status', $filters['status']);
//        }
//
//        return $query->get();
//    }
}
