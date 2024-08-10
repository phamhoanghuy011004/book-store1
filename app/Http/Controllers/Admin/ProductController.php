<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateFormRequest;
use App\Http\Services\Product\ProductService;


class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function create(CreateFormRequest $request)
    {
        // Đảm bảo rằng dữ liệu đã được xác thực
        return $this->productService->create($request);
    }
}
