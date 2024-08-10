<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Product
{
// Tên bảng tương ứng trong cơ sở dữ liệu
    protected $table = 'products';

    // Các trường có thể được gán giá trị hàng loạt (mass assignable)
    protected $fillable = [
        'name',
        'author',
        'description',
        'category',
        'content',
        'publish_at',
        'image',
        'amount',
        'price',
        'status'
    ];

    // Nếu cần, có thể thêm các thuộc tính khác như casting, relationships, hoặc các hàm bổ sung
    protected $casts = [
        'amount' => 'decimal:2',
        'price' => 'decimal:2',
        'publish_at' => 'integer',
        'status' => 'integer',
    ];

    // Ví dụ về một mối quan hệ: Một sản phẩm có thể thuộc về một danh mục
    public function category()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }

    // Ví dụ về một accessor: lấy URL của ảnh
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : asset('images/default-product.png');
    }

    // Ví dụ về một scope để tìm kiếm sản phẩm theo tên
    public function scopeSearchByName($query, $name)
    {
        return $query->where('name', 'LIKE', '%' . $name . '%');
    }

    // Ví dụ về một hàm bổ sung: tính tổng giá trị sản phẩm (giá * số lượng)
    public function totalValue()
    {
        return $this->amount * $this->price;
    }
}
