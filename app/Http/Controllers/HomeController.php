<?php

namespace App\Http\Controllers;

use App\Models\r;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Landing/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($r)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($r)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $r)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($r)
    {
        //
    }
}