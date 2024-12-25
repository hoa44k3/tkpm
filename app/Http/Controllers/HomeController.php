<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Blog;
use App\Models\Teacher;
use App\Models\Event;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Courses;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
{
    $classes = Classes::all();
    $teachers = Teacher::all(); 
    $events = Event::all();
    $blogs = Blog::where('status', 'approved')->withCount('comments')->get();  // Sử dụng withCount để đếm số lượng bình luận
    return view('site.home', compact('classes', 'teachers', 'blogs', 'events'));
}

    
    public function contact(){
        
        return view('site.contact');
    }
    public function about()
    {
       
        $faqs = Faq::all(); // Lấy danh sách câu hỏi từ database
        return view('site.about', compact('faqs'));
    }
    
    public function blog()
    {
        return view('site.blog'); 
    }
    public function blogdetail()
    {
        return view('site.blogdetail'); 
    }
    public function team(){
        return view('site.team');
    }
    public function teamdetail(){
        return view('site.teamdetail');
    }
    public function courses()
    {
        $courses = Courses::all(); // Lấy tất cả các khóa học
        return view('site.courses', compact('courses'));
    }
    public function coursesdetail($id){
        $course = Courses::findOrFail($id);
        return view('site.coursesdetail', compact('course'));
    }
    public function event(){
        $events = DB::table('events')->orderBy('event_date', 'asc')->get();
        return view('site.event', ['events' => $events]);
    }
    public function eventdetail($id)
    {
        $event = Event::findOrFail($id);
        return view('site.eventdetail', compact('event'));
    }
    public function classdetail($id)
    {
        $class = Classes::findOrFail($id);
        return view('site.classdetail', compact('class'));
    }
    public function storeContact(Request $request)
    {
        // Xác thực dữ liệu từ form
        $validated = $request->validate([
            'firstn' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Lưu dữ liệu vào bảng contacts
        Contact::create([
            'name' => $validated['firstn'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
        ]);

        // Có thể trả về thông báo hoặc chuyển hướng
        return redirect()->route('about')->with('success', 'Your message has been sent successfully!');
    }
}
