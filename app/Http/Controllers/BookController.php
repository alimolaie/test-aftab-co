<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Book::paginate(10);
        return view('admin.books.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'genre' => 'required|integer',
            'details' => 'required',
        ]);
        if ($request->hasFile('images')){
            $fileName = time() . rand(1, 99) . '.' . $request->images->getClientOriginalExtension();
        $request->file('images')->move(public_path('uploads/books'), $fileName);

    }
        Book::create([
            'name'=>$request->name,
            'genre'=>$request->genre,
            'details'=>$request->details,
            'isbn'=>$request->isbn,
            'images'=>$fileName,
        ]);
        toastr()->success('کتاب با موفقیت ثبت شد');
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookDetails=Book::find($id);
        return view('admin.books.show',compact('bookDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=Book::find($id);
        return view('admin.books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'genre' => 'required|integer',
            'details' => 'required',
        ]);
        $book=Book::find($id);
        $fileName=$book->images;
        if ($request->hasFile('images')){
            $fileName = time() . rand(1, 99) . '.' . $request->images->getClientOriginalExtension();
            $request->file('images')->move(public_path('uploads/books'), $fileName);

        }
       $book->update([
            'name'=>$request->name,
            'genre'=>$request->genre,
            'details'=>$request->details,
            'isbn'=>$request->isbn,
            'images'=>$fileName,
        ]);
        toastr()->success('کتاب با موفقیت ویرایش شد');
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('books')->where('id', $id)->delete();
        return back();
    }
}
