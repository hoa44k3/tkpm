<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    // Hiển thị form tạo sự kiện mới
    public function create()
    {
        return view('events.create');
    }

    // Lưu sự kiện mới
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->location = $request->location;

        if ($request->hasFile('image_url')) {
            $event->image_url = $request->file('image_url')->store('event_images', 'public');
        }

        $event->save();

        return redirect()->route('events.index')->with('success', 'Sự kiện đã được tạo thành công');
    }

    // Hiển thị form chỉnh sửa sự kiện
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    // Cập nhật sự kiện
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'event_date' => 'required|date',
        'start_time' => 'required|date_format:H:i',
        'end_time' => 'required|date_format:H:i',
        'location' => 'required|string|max:255',
        'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $event = Event::findOrFail($id);
    $event->title = $request->title;
    $event->description = $request->description;
    $event->event_date = $request->event_date;
    $event->start_time = $request->start_time;
    $event->end_time = $request->end_time;
    $event->location = $request->location;

    if ($request->hasFile('image_url')) {
        // Nếu có ảnh mới, lưu ảnh và cập nhật trường 'image_url'
        $event->image_url = $request->file('image_url')->store('event_images', 'public');
    }

    $event->save();

    return redirect()->route('events.index')->with('success', 'Sự kiện đã được cập nhật');
}


    // Xóa sự kiện
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Sự kiện đã được xóa');
    }
}
