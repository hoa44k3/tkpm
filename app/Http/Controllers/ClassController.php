<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Classes;
use App\Models\Teacher;
class ClassController extends Controller
{
     // Hiển thị danh sách lớp học
     public function index()
     {
         //$classes = Classes::all();  // Lấy tất cả lớp học
         $classes = Classes::with('teacher')->get();
         return view('classes.index', compact('classes'));
     }
 
     // Hiển thị form tạo lớp học mới
     public function create()
     {
        $teachers = Teacher::all(); 
         return view('classes.create');
     }
 
     // Lưu lớp học mới
    //  public function store(Request $request)
    //  {
    //      $request->validate([
    //          'class_name' => 'required|string|max:255',
    //          'description' => 'required|string',
    //          'age_group' => 'required|string',
    //          'time' => 'required|string',
    //          'class_size' => 'required|integer',
    //          'fee' => 'required|numeric',
    //          'teacher_name' => 'required|string|max:255',
    //          'teacher_id' => 'nullable|exists:teachers,id',
    //          'location' => 'required|string|max:255',
    //          'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //      ]);
 
    //      $class = new Classes;
    //      $class->class_name = $request->class_name;
    //      $class->description = $request->description;
    //      $class->age_group = $request->age_group;
    //      $class->time = $request->time;
    //      $class->class_size = $request->class_size;
    //      $class->fee = $request->fee;
    //      $class->teacher_name = $request->teacher_name;
    //      $class->location = $request->location;
    //      $class->teacher_id = $request->teacher_id;
        

    //      // Lưu ảnh nếu có
    //      if ($request->hasFile('image')) {
    //          $class->image = $request->file('image')->store('classes', 'public');
    //      }
 
    //      $class->save();
    //      return redirect()->route('classes.index')->with('success', 'Class created successfully');
    //  }
    public function store(Request $request)
{
    $request->validate([
        'class_name' => 'required|string|max:255',
        'description' => 'required|string',
        'age_group' => 'required|string',
        'time' => 'required|string',
        'class_size' => 'required|integer',
        'fee' => 'required|numeric',
        'teacher_id' => 'nullable|exists:teachers,id',
        'location' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $class = new Classes;
    $class->class_name = $request->class_name;
    $class->description = $request->description;
    $class->age_group = $request->age_group;
    $class->time = $request->time;
    $class->class_size = $request->class_size;
    $class->fee = $request->fee;
    $class->location = $request->location;
    $class->teacher_id = $request->teacher_id;

    // Lưu ảnh nếu có
    if ($request->hasFile('image')) {
        $class->image = $request->file('image')->store('classes', 'public');
    }

    $class->save();
    return redirect()->route('classes.index')->with('success', 'Class created successfully');
}
 
     // Hiển thị form chỉnh sửa lớp học
     public function edit($id)
     {
        
        $teachers = Teacher::all();
         $class = Classes::findOrFail($id);
         return view('classes.edit', compact('class','teachers'));
     }
 
     // Cập nhật lớp học
    //  public function update(Request $request, $id)
    //  {
    //      $request->validate([
    //          'class_name' => 'required|string|max:255',
    //          'description' => 'required|string',
    //          'age_group' => 'required|string',
    //          'time' => 'required|string',
    //          'class_size' => 'required|integer',
    //          'fee' => 'required|numeric',
    //          'teacher_name' => 'required|string|max:255',
    //          'location' => 'required|string|max:255',
    //          'teacher_id' => 'nullable|exists:teachers,id',
    //          'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //      ]);
 
    //      $class = Classes::findOrFail($id);
    //      $class->class_name = $request->class_name;
    //      $class->description = $request->description;
    //      $class->age_group = $request->age_group;
    //      $class->time = $request->time;
    //      $class->class_size = $request->class_size;
    //      $class->fee = $request->fee;
    //      //$class->teacher_name = $request->teacher_name;
    //      $class->location = $request->location;
    //      $class->teacher_id = $request->teacher_id;
    //      // Cập nhật ảnh nếu có
    //      if ($request->hasFile('image')) {
    //          $class->image = $request->file('image')->store('images/classes', 'public');
    //      }
    //      dd($request->all());

    //      $class->save();
    //      return redirect()->route('classes.index')->with('success', 'Class updated successfully');
    //  }
    public function update(Request $request, $id)
    {
        $request->validate([
            'class_name' => 'required|string|max:255',
            'description' => 'required|string',
            'age_group' => 'required|string',
            'time' => 'required|string',
            'class_size' => 'required|integer',
            'fee' => 'required|numeric',
            'location' => 'required|string|max:255',
            'teacher_id' => 'nullable|exists:teachers,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $class = Classes::findOrFail($id);
        $class->class_name = $request->class_name;
        $class->description = $request->description;
        $class->age_group = $request->age_group;
        $class->time = $request->time;
        $class->class_size = $request->class_size;
        $class->fee = $request->fee;
        $class->location = $request->location;
        $class->teacher_id = $request->teacher_id;
    
        // Cập nhật ảnh nếu có
        if ($request->hasFile('image')) {
            $class->image = $request->file('image')->store('classes', 'public');
        }
    
        $class->save();
        return redirect()->route('classes.index')->with('success', 'Class updated successfully');
    }
     // Xóa lớp học
     public function destroy($id)
     {
         $class = Classes::findOrFail($id);
         $class->delete();
         return redirect()->route('classes.index')->with('success', 'Class deleted successfully');
     }
     public function show($id)
{
    $class = Classes::findOrFail($id);
    return view('classes.show', compact('class'));
}

}
