<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;

use Illuminate\Http\Request;
use App\Models\Category;

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
        return view('book.create',compact('title','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        $validated=$request->validate();
        dd($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
