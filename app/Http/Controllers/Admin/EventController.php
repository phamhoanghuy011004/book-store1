<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\CreateFormRequest;
use App\Http\Services\Event\EventService;
use App\Models\Event;


class EventController extends Controller
{
    protected $eventService;
    public function __construct(EventService $eventService){
        $this->eventService = $eventService;
    }
    public function create()
    {
        return view('admin.event.add', [
            'title' => 'Thêm sự kiện mới',
        ]);
    }
    public function store(CreateFormRequest $request)
    {
        $result = $this->eventService->create($request);
        return redirect()->back();
    }
    public function index()
    {
        $events = Event::paginate(3);
        return view('main.news',['events' => $events]);
    }
}
