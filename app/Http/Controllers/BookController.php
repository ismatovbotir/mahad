<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use Auth;

class BookController extends Controller
{
    
    public function index()
    {
        $title='Kitoblar';
        return view('book.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title="Yangi Kitob";
        $categories=Category::all();
        //dd($categories);
        return view('book.create',compact('title','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        $validated=$request->validated();
        //dd($request->all());
        $book=Book::create(
            [
                'name'=>$request["name"],
                'origin_name'=>$request['originname'],
                'category_id'=>$request['category'],
                'user_id'=>Auth::user()->id,
                'gtin'=>$request['gtin'],
                'author'=>$request['author'],
                'publisher'=>$request['publisher'],
                'published'=>$request['published'],
                'cover'=>$request['cover'],
                'pages'=>$request['pages'],
                'description'=>$request['description']

            ]
        );
        //dd($book->category->name);

        $file=$request->file('photo');
        if($file!=null){
            $ext=$file->getClientOriginalExtension();
            $newFileName=$book->id.'.'.$ext;
            $path=$file->storeAs('books',$newFileName,'public');
            $book->img='storage/'.$path;
            $book->save();

        }
        //dd($book);
        return to_route('admin.book.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book=Book::with('category')->where('id',$id)->first();
        $title=$book->name;
        //$categories=Category::all();
        //dd($book);
        return view('book.show',compact('book','title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book=Book::where('id',$id)->first();
        $title=$book->name;
        $categories=Category::all();
        //dd($book);
        return view('book.edit',compact('book','categories','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookUpdateRequest $request, string $id)
    {
        $validated=$request->validated();
        
        $file=$request->file('photo');
        
       
        //dd($path);
        $book=Book::where('id',$id)->first();
        $book->name=$request["name"];
        $book->origin_name=$request['originname'];
        $book->category_id=$request['category'];
        $book->user_id=Auth::user()->id;
        $book->gtin=$request['gtin'];
        $book->author=$request['author'];
        $book->publisher=$request['publisher'];
        $book->published=$request['published'];
        $book->cover=$request['cover'];
        $book->pages=$request['pages'];
        $book->shelf=$request['shelf'];
        $book->description=$request['description'];
        if($file!=null){
            $ext=$file->getClientOriginalExtension();
            $newFileName=$id.'.'.$ext;
            $path=$file->storeAs('books',$newFileName,'public');
            $book->img='storage/'.$path;

        }
            
        $book->save();
        //dd($request->all());
        return to_route('admin.book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
