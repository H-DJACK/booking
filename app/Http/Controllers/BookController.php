<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Intervention\Image\Facades\Image;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', ["books" => $books]);
    }

    public function create()
    {
        $authors = Author::all();
        return view("book.create", ["authors" => $authors]);
    }

    public function store()
    {
        $data = request()->validate([
            'description' => 'required',
            'title' => 'required',
            'edition' => 'required',
            'subGenre' => 'required',
            'document' => ['required',  File::types('pdf')],
            'dateOfPublication' => ['required', 'date'],
            'image' => ['required', 'image'],
        ]);



        $authorId = Author::where('name', request()->input('author'))->get()->toArray()[0]['id'];

        $imagePath = request('image')->store('books_img', 'public');

        $documentPath = request('document')->store('documents', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit('300', '300');

        $image->save();

        Book::create(array_merge(
            $data,
            ['image' => $imagePath],
            ['document' => $documentPath]
        ));

        $book = Book::all()->last();
        $book->authors()->attach($authorId);


        return redirect('/authors');
    }

    public function show(\App\Models\Book $book)
    {
        return view('book.show', compact('book'));
    }
}
