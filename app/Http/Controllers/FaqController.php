<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
class FaqController extends Controller
{
    public function index()
    {
        // Lấy danh sách FAQ từ cơ sở dữ liệu
        $faqs = Faq::all();

        return view('faqs.index', compact('faqs'));
    }

    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        // Tạo câu hỏi mới
        Faq::create([
            'question' => $request->input('question'),
        ]);

        return redirect()->back()->with('success', 'Câu hỏi đã được gửi thành công.');
    }

    /**
     * Lưu câu trả lời cho một câu hỏi.
     */
    public function answer(Request $request, $id)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'answer' => 'required|string|max:5000',
        ]);

        // Tìm câu hỏi theo ID và cập nhật câu trả lời
        $faq = Faq::findOrFail($id);
        $faq->update([
            'answer' => $request->input('answer'),
        ]);

        return redirect()->back()->with('success', 'Câu trả lời đã được lưu.');
    }
}
