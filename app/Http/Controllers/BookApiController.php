<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookApiController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }
    // Menyimpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'nullable',
        ]);

        $book = Book::create($request->all());
        return response()->json($book, 201); // Mengembalikan buku yang baru dibuat dengan status 201
    }

    // Menampilkan detail buku
    public function show(Book $book)
    {
        return response()->json($book);
    }

    // Memperbarui buku
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'nullable',
        ]);

        $book->update($request->all());
        return response()->json($book);
    }

    // Menghapus buku
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(null, 204); // Mengembalikan respons sukses tanpa konten
    }
}
