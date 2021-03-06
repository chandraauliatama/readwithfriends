<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;


class BookController extends Controller
{
    /**
     * Check if the user really has access to the data and routes
     *
     * @param  \App\Models\Book  $book
     **/
    private function checkTrueUser(Book $book)
    {
        if (! Gate::allows('book-controller', $book)) {
            abort(403);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookByStatus = Book::where('user_id', auth()->id())->orderBy('status', 'desc')->get()->groupBy('status');
        return view('bookpage.index', compact('bookByStatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Book::STATUS;

        return view('bookpage.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        auth()->user()->books()->create($request->validated());

        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $this->checkTrueUser($book);
        $statuses = Book::STATUS;

        return view('bookpage.edit', compact('statuses', 'book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, Book $book)
    {
        $this->checkTrueUser($book);
        $book->update($request->validated());
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
