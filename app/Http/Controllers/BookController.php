<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        $books = Book::all();
        return view('admin.books', compact('books'));
    }

    // Menampilkan form untuk menambah buku
    public function create()
    {
        return view('books.create');
    }

    // Menyimpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'nullable',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    // Menampilkan detail buku
    public function show(Book $book)
    {
        return view('admin.show', compact('book'));
    }

    // Menampilkan form untuk mengedit buku
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
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
        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui.');
    }

    // Menghapus buku
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus.');
    }
}
