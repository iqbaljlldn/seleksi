<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10);

        return $books;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(([
            'title' => 'required|string|max:255',
            'author_name' => 'nullable|string',
            'year' => 'required|string|max_digits:4',
            'book_cover' => 'nullable|string',
            'synopsis' => 'nullable|string',
            'publisher_name' => 'nullable|string',
        ]));

        $book = Book::create([
            'title' => $validated['title'],
            'author_id' => $validated['author_id'],
            'year' => $validated['year'],
            'book_cover' => $validated['book_cover'],
            'synopsis' => $validated['synopsis'],
            'publisher_id' => $validated['publisher_id'],
        ]);

        return $book;
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return Book::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(([
            'title' => 'nullable|string|max:255',
            'author_name' => 'nullable|string',
            'year' => 'nullable|string|max_digits:4',
            'book_cover' => 'nullable|string',
            'synopsis' => 'nullable|string',
            'publisher_name' => 'nullable|string',
        ]));

        $book = Book::findOrFail($id);

        $book->update($validated);

        return $book;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Book::findOrFail($id)->delete();

            return true;
        } catch (\Exception $e) {
            return $e;
        }
    }
}
