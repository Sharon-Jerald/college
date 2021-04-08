<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\bookmodel;

class bookcontroller extends Controller
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
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getTitle=request('title');
        $getAuthor=request('author');
        $getDescriptoion=request('description');
        $getDistributor=request('distributor');
        $getPrice=request('price');

        echo $getTitle;
        echo "<br>";
        echo $getAuthor;
        echo "<br>";
        echo $getDescriptoion;
        echo "<br>";
        echo $getDistributor;
        echo "<br>";
        echo $getPrice;
        echo "<br>";

        $bk=new bookmodel();
        $bk->title=$getTitle;
        $bk->author=$getAuthor;
        $bk->description=$getDescriptoion;
        $bk->distributor=$getDistributor;
        $bk->price=$getPrice;

        $bk->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
