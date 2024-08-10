<?php

namespace App\Http\Services\Product;

use App\Models\Product;
use App\Models\Category; // Bổ sung import cho model Category
use Illuminate\Support\Facades\Log;

class ProductService
{
    // Lấy danh sách các danh mục (categories)
    public function getCategories()
    {
        try {
            // Kiểm tra nếu model Category tồn tại và lấy tất cả các danh mục
            return Category::all();
        } catch (\Exception $exception) {
            Log::error('Error fetching categories: ' . $exception->getMessage());
            return collect(); // Trả về một collection rỗng nếu có lỗi
        }
    }

    // Tạo mới một sản phẩm
    public function create($request)
    {
        try {
            return Product::create([
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
        } catch (\Exception $exception) {
            Log::error('Error creating product: ' . $exception->getMessage());
            return false;
        }
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
    public function getFilteredProducts($filters)
    {
        $query = Product::query();

        if (!empty($filters['id'])) {
            $query->where('id', $filters['id']);
        }

        if (!empty($filters['name'])) {
            $query->where('name', 'LIKE', '%' . $filters['name'] . '%');
        }

        if (!empty($filters['author'])) {
            $query->where('author', 'LIKE', '%' . $filters['author'] . '%');
        }

        if (!empty($filters['category'])) {
            $query->where('category', $filters['category']);
        }

        if (!empty($filters['start_date']) && !empty($filters['end_date'])) {
            $query->whereBetween('created_at', [$filters['start_date'], $filters['end_date']]);
        }

        if (!empty($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        return $query->get();
    }
}
