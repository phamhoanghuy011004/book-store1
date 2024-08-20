<?php

namespace App\Http\Services\Event;

use App\Models\Event;
use Illuminate\Support\Facades\Session;

class EventService
{
    public function create($request)
    {
        try {
            Event::create([
                'name' => (string) $request->input('name'),
                'location' => (string) $request->input('location'),
                'description' => (string) $request->input('description'),
                'start_time' => $request->input('start_time'), // Đảm bảo input là định dạng thời gian hợp lệ
                'end_time' => $request->input('end_time'), // Đảm bảo input là định dạng thời gian hợp lệ
                'image' => (string) $request->input('image'),
                'status' => (string) $request->input('status'),
            ]);

            Session::flash('success', 'Tạo Danh Mục Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }

        return true;
    }
}
