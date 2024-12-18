<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Classes;
class ClassController extends Controller
{
     // Hiển thị danh sách lớp học
     public function index()
     {
         $classes = Classes::all();  // Lấy tất cả lớp học
         return view('classes.index', compact('classes'));
     }
 
     // Hiển thị form tạo lớp học mới
     public function create()
     {
         return view('classes.create');
     }
 
     // Lưu lớp học mới
     public function store(Request $request)
     {
         $request->validate([
             'class_name' => 'required|string|max:255',
             'description' => 'required|string',
             'age_group' => 'required|string',
             'time' => 'required|string',
             'class_size' => 'required|integer',
             'fee' => 'required|numeric',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
 
         $class = new Classes;
         $class->class_name = $request->class_name;
         $class->description = $request->description;
         $class->age_group = $request->age_group;
         $class->time = $request->time;
         $class->class_size = $request->class_size;
         $class->fee = $request->fee;
 
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
         $class = Classes::findOrFail($id);
         return view('classes.edit', compact('class'));
     }
 
     // Cập nhật lớp học
     public function update(Request $request, $id)
     {
         $request->validate([
             'class_name' => 'required|string|max:255',
             'description' => 'required|string',
             'age_group' => 'required|string',
             'time' => 'required|string',
             'class_size' => 'required|integer',
             'fee' => 'required|numeric',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
 
         $class = Classes::findOrFail($id);
         $class->class_name = $request->class_name;
         $class->description = $request->description;
         $class->age_group = $request->age_group;
         $class->time = $request->time;
         $class->class_size = $request->class_size;
         $class->fee = $request->fee;
 
         // Cập nhật ảnh nếu có
         if ($request->hasFile('image')) {
             $class->image = $request->file('image')->store('images/classes', 'public');
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
}
