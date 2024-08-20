<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateFormRequest;
use App\Http\Services\Author\AuthorService;


class AuthorController extends Controller
{
    protected $authorService;

    public function __construct(AuthorService $authorService){
        $this->authorService = $authorService;
    }

    public function create(){
        return view('admin.author.add', [
            'title' => 'Thêm tác giả mới',
//            'categories' => $this->productService->getCategories()
        ]);
    }
    public function store(CreateFormRequest $request)
    {
        $result = $this -> authorService->create($request);
        return redirect()->back();
    }
}
