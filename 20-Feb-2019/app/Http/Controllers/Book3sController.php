<?php

namespace App\Http\Controllers;

use App\Book3s;
use Illuminate\Http\Request;

class Book3sController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $book= new Book3s(['nameee'=>"5"]);
	   $book->save();
	   return "ok";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book3s  $book3s
     * @return \Illuminate\Http\Response
     */
    public function show(Book3s $book3s)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book3s  $book3s
     * @return \Illuminate\Http\Response
     */
    public function edit(Book3s $book3s)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book3s  $book3s
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book3s $book3s)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book3s  $book3s
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book3s $book3s)
    {
        //
    }
}
