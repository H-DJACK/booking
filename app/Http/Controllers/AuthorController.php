<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Event;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('author.index', ["authors" => $authors]);
    }

    public function store()
    {

        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'courant' => 'required',
            'country' => 'required',
            'bornDate' => 'required',
            'image' => ['required', 'image'],
        ]);


        $imagePath = request('image')->store('authors_img', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit('300', '300');

        $image->save();

        Author::create(array_merge(
            $data,
            ['image' => $imagePath]
        ));

        return redirect('/authors');
    }

    public function create()
    {
        return view("author.create");
    }

    public function show(\App\Models\Author $author)
    {
        return view('author.show', compact('author'));
    }
}
