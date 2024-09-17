<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
     // Hiển thị danh sách ghi chú
     public function index()
     {
         $notes = Note::get();
         return view('notes.index', compact('notes'));
     }

     // Hiển thị form tạo ghi chú mới
     public function create()
     {
         return view('notes.create');
     }

     // Lưu ghi chú mới vào cơ sở dữ liệu
     public function store(Request $request)
     {
         $request->validate([
             'title' => 'required|max:255',
             'content' => 'required',
         ]);

         Note::create([
             'title' => $request->title,
             'content' => $request->content,
             'type'    => "text",
         ]);

         return redirect()->route('notes.index')->with('success', 'Note created successfully!');
     }
}
