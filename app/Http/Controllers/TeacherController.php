<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Review;
class TeacherController extends Controller
{
    public function index()
    {
         // Lấy tất cả giáo viên và tính điểm trung bình từ bảng reviews
        $teachers = Teacher::withCount('reviews') // Sử dụng withCount để đếm số lượng reviews
        ->withAvg('reviews', 'rating') // Tính trung bình rating từ bảng reviews
        ->get();
            // $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Hiển thị form thêm giáo viên.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Lưu thông tin giáo viên mới.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'title' => 'required|string|max:255',
    //         'bio' => 'nullable|string',
    //         'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    //         'experience_years' => 'required|integer|min:0',
    //         'is_featured' => 'nullable|boolean', 
    //     ]);

    //     $photoPath = null;
    //     if ($request->hasFile('photo')) {
    //         $photoPath = $request->file('photo')->store('teachers', 'public');
    //     }

    //     Teacher::create([
    //         'name' => $request->name,
    //         'title' => $request->title,
    //         'bio' => $request->bio,
    //         'photo' => $photoPath,
    //         'experience_years' => $request->experience_years,
    //     ]);

    //     return redirect()->route('teachers.index')->with('success', 'Giáo viên đã được thêm thành công.');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'bio' => 'required|string',
            'photo' => 'nullable|image',
            'experience_years' => 'required|integer',
            'rating' => 'nullable|numeric',
            'is_featured' => 'nullable|boolean', // Validate cột is_featured
        ]);
    
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->title = $request->title;
        $teacher->bio = $request->bio;
        $teacher->experience_years = $request->experience_years;
        $teacher->rating = $request->rating ?? 0;
        $teacher->is_featured = $request->has('is_featured') ? true : false;
    
        if ($request->hasFile('photo')) {
            $teacher->photo = $request->file('photo')->store('teachers_photos', 'public');
        }
    
        $teacher->save();
    
        return redirect()->route('teachers.index')->with('success', 'Thêm giáo viên thành công.');
    }
    
    /**
     * Hiển thị form sửa thông tin giáo viên.
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Cập nhật thông tin giáo viên.
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'experience_years' => 'required|integer|min:0',
        ]);

        if ($request->hasFile('photo')) {
            if ($teacher->photo) {
                Storage::disk('public')->delete($teacher->photo);
            }
            $teacher->photo = $request->file('photo')->store('teachers', 'public');
        }

        $teacher->update([
            'name' => $request->name,
            'title' => $request->title,
            'bio' => $request->bio,
            'experience_years' => $request->experience_years,
        ]);

        return redirect()->route('teachers.index')->with('success', 'Giáo viên đã được cập nhật thành công.');
    }

    /**
     * Xóa giáo viên.
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);

        if ($teacher->photo) {
            Storage::disk('public')->delete($teacher->photo);
        }

        $teacher->delete();

        return redirect()->route('teachers.index')->with('success', 'Giáo viên đã được xóa thành công.');
    }
        public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }

}
