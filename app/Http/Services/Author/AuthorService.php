<?php

namespace App\Http\Services\Author;

use App\Models\Author;
use Illuminate\Support\Facades\Session;
class AuthorService
{
    public function create($request)
    {
        try {
            Author::create([
                'name' => (string) $request->input('name'),
                'bio' => (string) $request->input('bio'),
                'date_of_birth' => $request->input('date_of_birth'), // Đảm bảo input là định dạng ngày hợp lệ
                'nationality' => (string) $request->input('nationality'),
                'photo' => (string) $request->input('photo'),
                'email' => (string) $request->input('email'),
                'status' => (string) $request->input('status'),
            ]);

            Session::flash('success', 'Tạo Tác Giả Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }

        return true;
    }
}
